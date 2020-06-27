<?php

use App\Post;
use Carbon\Carbon;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{

    public function run()
    {
        $faker = Faker::create('fa_IR');
        for ($i = 1; $i <= 100; $i++) {
            Post::create([
                'title' => $faker->sentence(),
                'description' => $faker->sentence(35),
                'image_url' => $faker->imageUrl(),
                'created_at' => $faker->date('Y-m-d', Carbon::now()),
            ]);
        }

    }
}
