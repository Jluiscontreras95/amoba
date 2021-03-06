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
        // $this->call(UsersTableSeeder::class);
        $this->call(RouteSeeder::class);
        $this->call(CalendarSeeder::class);
        $this->call(ReservationSeeder::class);
        $this->call(RouteDataSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(UserPlanSeeder::class);
        $this->call(UserSeeder::class);
    }
}
