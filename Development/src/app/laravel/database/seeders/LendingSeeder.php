<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LendingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <=100; $i++){
            $lendings = new \App\Models\Lending([
                'user_id' => rand(100,500),
                'document_id' => rand(600,800),
                'return_date' => '2022/06/01',
            ]);
            $lendings->save();
        }
    }
}
