<?php

use Illuminate\Database\Seeder;

class IngredientsTableSeeder extends Seeder
{
    public function run()
    {
     DB::table('ingredients')->insert([
         [
            'name' => 'Quick Oats',
            'description' => '100% whole grain oats (quick cooking)',
            'category' => 'oats',
            'price_per_gram' => 0.007,
         ],
         /* y más */
     ]);    
    }
}
