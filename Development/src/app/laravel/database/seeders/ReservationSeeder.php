<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <=100; $i++){
            $reservation = new \App\Models\Reservation([
                'user_id' => rand(1,10),
                'isbn' => rand(700,900),
                'document_id' => rand(100,200)
            ]);
            $reservation->save();
        }
    }
}
