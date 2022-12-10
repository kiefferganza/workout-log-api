<?php

namespace Database\Seeders;

use App\Models\ExerciseCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExerciseCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ExerciseCategory::createMany([
            [
                'name' => 'Abs'
            ],
            [
                'name' => 'Back'
            ],
            [
                'name' => 'Biceps'
            ],
            [
                'name' => 'Cardio'
            ],
            [
                'name' => 'Chest'
            ],
            [
                'name' => 'Legs'
            ],
            [
                'name' => 'Shoulders'
            ],
            [
                'name' => 'Triceps'
            ],
        ]);
    }
}
