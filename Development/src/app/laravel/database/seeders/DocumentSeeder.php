<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DocumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <= 100; $i++) {
            $document = new \App\Models\Document([
                'isbn' => $i,
                'title' => 'Title:' . $i,
                'category_id' => rand(0,9),
                'author' => 'Author:' . rand(0,9),
                'publisher' => 'Publisher:' . rand(0,9),
                'published' => rand(2000,2022) . '-' . rand(1,12) . '-' . rand(1,29)
            ]);
            $document->save();
        };
    }
}
