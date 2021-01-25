<?php

use Illuminate\Database\Seeder;
use App\Poster;
use Faker\Generator as Faker;
class PostersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 20; $i++) {
            $new_poster_object = new Poster();
            $new_poster_object->name = $faker->name();
            $new_poster_object->price = rand(1,100);
            $new_poster_object->save();
         }
    }
}
