<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        $classes= array(CategorySeeder::class, UserSeeder::class, PostSeeder::class);

        foreach($classes as $class){
            $this->call($class);
        }
      /*   $this->call(  
            CategorySeeder::class,
            UserSeeder::class,
            PostSeeder::class
        ); */
    }
}
