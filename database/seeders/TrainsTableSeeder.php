<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i <= 10; $i++){
            $new_train = new Train();
            $new_train->company = $faker->randomElement(['Trenitalia', 'Italo']);
            $new_train->departure_station = $faker->city();
            $new_train->arrival_station = $faker->city();
            $new_train->departure_time = $faker->dateTimeBetween('+0 days', '+2 years');
            $new_train->arrival_time = $faker->dateTimeBetween($new_train->departure_time, '+2 years');
            $new_train->train_code = $faker->numberBetween(1, 15);
            $new_train->carriages_num = $faker->numberBetween(1, 126);
            $new_train->in_time = $faker->numberBetween(0, 1);
            $new_train->is_cancelled = $faker->numberBetween(0, 1);
            $new_train->save();
        }
    }
}
