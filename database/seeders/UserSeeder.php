<?php

namespace Database\Seeders;

use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Laravel\Jetstream\Features;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create an admin user, if we're in a local environment
        if (App::environment('local')) {
            $user = User::create([
                'name' => 'Admin',
                'email' => 'admin@localhost',
                'email_verified_at' => now(),
                'password' => Hash::make('pa55word'),
                'remember_token' => Str::random(10)
            ]);

            // If teams are enabled, create a personal team for the admin user.
            if (Features::hasTeamFeatures()) {
                $user->ownedTeams()->save(Team::forceCreate([
                    'user_id' => $user->id,
                    'name' => explode(' ', $user->name, 2)[0]."'s Team",
                    'personal_team' => true,
                ]));
            }
        }
    }
}
