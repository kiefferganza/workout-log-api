<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExerciseCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('exercise_categories')->insert([
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
