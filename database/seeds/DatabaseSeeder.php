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
        //$this->call(CategorySeederTable::class);
        //$this->call(BookSeeder::class);
        //$this->call(BookCategorySeeder::class);
        //$this->call(DeviceSeeder::class);
        $this->call(UserSeeder::class);
    }
}
