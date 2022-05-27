<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <= 150; $i++) {
            $stock = new \App\Models\Stock([
                'document_id' => rand(191,290)
            ]);
            $stock->save();
        }
    }
}
