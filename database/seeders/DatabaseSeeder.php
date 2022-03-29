<?php

namespace Database\Seeders;

use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Patient::create([
            'name'=> 'Shiina Mashiro',
            'slug'=> 'shiina-mashiro',
            'age' => 18,
            'sex' => 'Female'
        ]);

        Patient::create([
            'name'=> 'Yuu Otosaka',
            'slug'=> 'yuu-otosaka',
            'age' => 21,
            'sex' => 'Male'
        ]);

        Patient::create([
            'name'=> 'Shikamaru Nara',
            'slug'=> 'shikamaru-nara',
            'age' => 17,
            'sex' => 'Male'
        ]);

        Doctor::create([
            'name' => 'Nanami Kento',
            'slug' => 'nanami-kento'
        ]);

        Doctor::create([
            'name' => 'Kurapika Kurta',
            'slug' => 'kurapika-kurta'
        ]);

        Post::factory(5)->create();
    }
}
