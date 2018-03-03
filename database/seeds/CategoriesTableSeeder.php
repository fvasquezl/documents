<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' =>'Categoria 1'
        ]);
        Category::create([
            'name' =>'Categoria 2'
        ]);
        Category::create([
            'name' =>'Categoria 3'
        ]);
        Category::create([
            'name' =>'Categoria 4'
        ]);
        Category::create([
            'name' =>'Categoria 5'
        ]);
    }
}
