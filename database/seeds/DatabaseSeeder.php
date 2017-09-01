<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ModulesSeeder::class);
        $this->call(DefaultRolesAndUsersSeeder::class);
        $this->call(VaccinesSeeder::class);
        $this->call(NumberSeriesSeeder::class);
    }

}
