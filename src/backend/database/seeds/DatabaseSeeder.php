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
        $this->call(CountriesSeeder::class);
        $this->call(CarMarkSeeder::class);
        $this->call(CarCharacteristicsSeeder::class);
        $this->call(SettingsSeeder::class);
        $this->call(DemoUserSeeder::class);
    }
}
