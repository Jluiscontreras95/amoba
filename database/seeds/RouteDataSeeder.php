<?php

use Illuminate\Database\Seeder;

class RouteDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $json = database_path('data/route_data.json');
        $data = file_get_contents($json);

        foreach (json_decode($data)->data as $row) {
          
          DB::table('route_datas')->insert([

            'id' => $row->id,
            'route_id' => $row->route_id,
            'calendar_id' => $row->calendar_id,
            'vinculation_route' => $row->vinculation_route,
            'route_circular' => $row->route_circular,
            'date_init' => $row->date_init,
            'date_finish' => $row->date_finish,
            'mon' => $row->mon,
            'tue' => $row->tue,
            'wed' => $row->wed,
            'thu' => $row->thu,
            'fri' => $row->fri,
            'sat' => $row->sat,
            'sun' => $row->sun,
            'updated_at' => $row->updated_at,
            'created_at' => $row->created_at,


          ]);

        }
    }
}
