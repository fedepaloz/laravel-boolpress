<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['label' => 'HTML', 'color' => 'danger'],
            ['label' => 'CSS', 'color' => 'info'],
            ['label' => 'JS', 'color' => 'warning'],
            ['label' => 'Bootstrap', 'color' => 'primary'],
            ['label' => 'PHP', 'color' => 'success'],
            ['label' => 'Laravel', 'color' => 'dark'],

        ];


        foreach ($categories as $category) {
            $new_category =  new Category();
            $new_category->label = $category['label'];
            $new_category->color = $category['color'];
            $new_category->save();
        }
    }
}
