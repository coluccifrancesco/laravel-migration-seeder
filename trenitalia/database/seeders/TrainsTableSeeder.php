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
     */
    public function run(Faker $faker): void{

        for ($i=0; $i < 20; $i++) { 

            $trainTypes = ['IC', 'RV', 'R', 'FR', 'FB', 'FA', 'R'];
            $randomInt = random_int(0, count($trainTypes) - 1);

            $newTrain = new Train();
    
            $newTrain->manufacturer = $faker->word();
            $newTrain->train_type = $trainTypes[$randomInt];
            $newTrain->arriving_from = $faker->word();
            $newTrain->departure_time = $faker->time();
            $newTrain->going_to = $faker->word();
            $newTrain->arrival_time = $faker->time();
            $newTrain->train_identifier = $faker->randomNumber(5, true);
            $newTrain->number_of_carriages = $faker->numberBetween(4, 12);
            
            
            $newTrain->is_canceled = $faker->boolean(0.1);
            
            if ($newTrain->is_canceled === 1) {
                    $newTrain->has_delay = 0;
                    $newTrain->minutes_of_delay = 0;
            } else {
                
                $newTrain->has_delay = $faker->boolean(0.4);
                
                if ($newTrain->has_delay === 1) {
                    $newTrain->minutes_of_delay = $faker->numberBetween(5, 25);
                } else {
                    $newTrain->minutes_of_delay = 0;
                }
            }

            $newTrain->created_at = now();
            $newTrain->updated_at = now();
    
            $newTrain->save();
        }
    }
}
