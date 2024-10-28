<?php


namespace Database\Seeders;
use App\Models\Ticket;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i=0; $i < 50 ; $i++) { 
          $newTicket=  new Ticket();
          $newTicket->price = $faker->randomFloat(2,5,99.99) ;
          $newTicket->seat_number = $faker->regexify('[A-Z][0-9]{2}') ;
          $newTicket->departure_time = $faker->dateTimeBetween('now','+1 month') ;
          $newTicket->arrival_time = $faker->dateTimeBetween('+1month','+2 month') ;
         
          $newTicket->save();
        
          
        }
    }
}
