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
        $today = Carbon::today()->toDateString();
        $todays_mood = Mood::all()->where("created_at", "like", $today . "%")->toArray();
        if (empty($todays_mood)) {
            return view('moods.index', compact('moods'));
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
        $mood->created_at = $mood->updated_at = Carbon::now();


        $mood->save();
        return redirect()->route("moods.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mood  $mood
     * @return \Illuminate\Http\Response
     */
    public function show(Mood $mood)
    {
        $today = Carbon::today();
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
        $attributes = array_merge(
            $request->except("_token", "_method"),
            ['updated_at' => Carbon::now()]
        );
        Mood::where('id', $mood->id)->update($attributes);

        return redirect()->route("moods.index");
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
