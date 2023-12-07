<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Description;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(ProfilesTableSeeder::class);
        $this->call(FrameworksTableSeeder::class);
        $this->call(HobbiesTableSeeder::class);
        Description::firstOrCreate(['summary' => 'Mi nombre es Andrea Saldaña, soy estudiante de Ingeniería Civil en Computación e Informática de la UCN.']);
    }
}
