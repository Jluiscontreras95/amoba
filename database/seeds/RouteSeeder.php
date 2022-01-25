<?php

use Illuminate\Database\Seeder;


class RouteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $file = database_path('data/routes.json');
        $json = file_get_contents($file);

        foreach(json_decode($json)->routes as $row){

          DB::table('routes')->insert([
            'id' => $row->id,
        		'external_id' => $row->external_id,
        		'invitation_code' => $row->invitation_code,
        		'title' => $row->title,
        		'start_timestamp' => $row->start_timestamp,
        		'end_timestamp' => $row->end_timestamp


          ]);
        }


    }
}
