<?php

namespace App\Http\Controllers;

use App\Models\Mood;
use Carbon\Carbon;
use Cron\AbstractField;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $moods = Auth::user()->moods;
        $todays_mood = Auth::user()->moods()
            ->where("created_at", "like",Carbon::today()->toDateString() . "%")->get()->toArray();
        if (empty($todays_mood)) {
            return view('moods.index', compact('moods'))
                ->with('message', "Don't forget to update your mood!")
                ->with('type', "alert-warning");
        } else {
            return view('moods.index', compact('moods', 'todays_mood'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('moods.mood-form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mood = new Mood();
        $mood->user_id = Auth::id();
        $mood->mood = $request->mood;
        //$mood->created_at = $mood->updated_at = Carbon::now();

        $mood->save();
        return redirect()->route("moods.index")->with([
            "message" => "Mood saved successfully!",
            "type" => "alert-success",
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mood  $mood
     * @return \Illuminate\Http\Response
     */
    public function show(Mood $mood)
    {
        $today = Carbon::today()->toDateString();
        return view('moods.show', compact('mood', 'today'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mood  $mood
     * @return \Illuminate\Http\Response
     */
    public function edit(Mood $mood)
    {
        return view('moods.mood-form', compact('mood'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mood  $mood
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mood $mood)
    {
        if ($mood->created_at->toDateString() == Carbon::today()->toDateString()) {
            Mood::where('id', $mood->id)->update($request->except("_token", "_method"));
        }

        return redirect()->route("moods.index")->with([
            "message" => "Mood updated successfully!",
            "type" => "alert-success",
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mood  $mood
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mood $mood)
    {
        // Not needed B)
    }
}
