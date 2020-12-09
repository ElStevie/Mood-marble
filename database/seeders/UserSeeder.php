<?php

namespace Database\Seeders;

use App\Models\Team;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $max_users = 30;
        User::factory()
            ->times($max_users)
            ->hasTeams(1, function (array $attributes, User $user) {
                return ['user_id' => $user->id];
            })
            ->create();
        $moods = ["terrible", "bad", "meh", "good", "excellent"];
        foreach (User::all() as $user) {
            $current_user = User::where('id', $user->id);
            $current_user->update(['current_team_id' => $user->id]);
            $current_day = Carbon::now()->subDays(6);
            for ($i = 0; $i < 7; ++$i) {
                DB::table('moods')->insert([
                    'user_id' => $user->id,
                    'mood' => $moods[random_int(0,4)],
                    'created_at' => $current_day,
                    'updated_at' => $current_day,
                ]);
                $current_day->addDay();
            }
        }
        DB::table('team_user')->truncate();
        $current_team = 0;
        for ($i = 6; $i <= $max_users; ++$i) {
            $current_team = $i % 5 == 1 ? $current_team + 1 : $current_team;
            DB::table('team_user')->insert([
                'team_id' => $current_team,
                'user_id' => $i,
                'role' => 'editor',
            ]);
        }
    }
}
