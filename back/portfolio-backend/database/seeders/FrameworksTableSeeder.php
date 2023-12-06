<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Profile;
use App\Models\Framework;



class FrameworksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $profileId = Profile::first()->id;
        Framework::create([
            'name' => 'HTML',
            'level' => 'Básico.',
            'year' => 2023,
            'profile_id' => $profileId,
        ]);
        Framework::create([
            'name' => 'CSS',
            'level' => 'Básico.',
            'year' => 2023,
            'profile_id' => $profileId,
        ]);
        Framework::create([
            'name' => 'Vue',
            'level' => 'Intermedio.',
            'year' => 2023,
            'profile_id' => $profileId,
        ]);
    }
}
