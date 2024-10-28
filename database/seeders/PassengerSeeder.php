<?php

namespace Database\Seeders;

use App\Models\Passenger;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;


/*$table->id();
            $table->string("first_name",150)->nullable(false);
            $table->string("last_name",150)->nullable(false);
            $table->date("date_of_birth")->nullable(false);
            $table->boolean("member_card")->default(false);
            $table->timestamps();
        });*/
class PassengerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * 
     */
    public function run(Faker $faker): void
    {
           for ($i=0; $i < 50 ; $i++) { 
            $newPassenger = new Passenger();
            $newPassenger->first_name = $faker->firstName();
            $newPassenger->last_name = $faker->lastName();
            $newPassenger->date_of_birth = $faker->dateTimeBetween("-99 years","-16 years");
            $newPassenger->member_card = $faker->boolean();
            $newPassenger->save();
           }
        }
    }

