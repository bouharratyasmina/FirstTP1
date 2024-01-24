<?php

namespace Database\Seeders;
use App\Models\stagiaire;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StagiaireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        stagiaire::factory(10)->create();
    }
}
