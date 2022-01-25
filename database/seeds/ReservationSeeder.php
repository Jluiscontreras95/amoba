<?php

use Illuminate\Database\Seeder;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $json = database_path('data/reservations.json');
        $data = file_get_contents($json);

        foreach(json_decode($data)->reservations as $row){

          DB::table('reservations')->insert([


            'id' => $row->id,
            'user_plan_id' => $row->user_plan_id,
            'route_id' => $row->route_id,
            'track_id' => $row->track_id,
            'reservation_start' => $row->reservation_start,
            'reservation_end' => $row->reservation_end,
            'route_stop_origin_id' => $row->route_stop_origin_id,
            'route_stop_destination_id' => $row->route_stop_destination_id,
            'created_at' => $row->created_at,
            'updated_at'  => $row->updated_at,
            'deleted_at' => $row->deleted_at


          ]);


        }
    }
}
