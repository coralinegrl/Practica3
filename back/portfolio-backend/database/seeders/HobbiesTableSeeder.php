<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Profile;
use App\Models\Hobby;

class HobbiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $profileId = Profile::first()->id;
        Hobby::create([
            'name' => 'Escuchar música',
            'description' => 'Me gusta escuchar música de todo tipo, como el rock y el pop.',
            'profile_id' => $profileId,
        ]);
        Hobby::create([
            'name' => 'Jugar videojuegos',
            'description' => 'Me gusta jugar valorant y league of legends.',
            'profile_id' => $profileId,
        ]);
        Hobby::create([
            'name' => 'Dormir',
            'description' => 'Me gusta leer dormir hasta tarde.',
            'profile_id' => $profileId,
        ]);
        Hobby::create([
            'name' => 'Hacer yoga',
            'description' => 'Me gusta hacer yoga todos los domingos.',
            'profile_id' => $profileId,
        ]);
    }
}
