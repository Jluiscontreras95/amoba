<?php

use Illuminate\Database\Seeder;

class CalendarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $file = database_path('data/calendar.json');
        $json = file_get_contents($file);

        foreach(json_decode($json)->calendar as $row){

          DB::table('calendar')->insert([

            'id' => $row->id,
            'calendar_id' => $row->calendar_id,
            'name' => $row->name,
            'updated_at' => $row->updated_at,
            'created_at' => $row->created_at

          ]);
        }




    }
}
