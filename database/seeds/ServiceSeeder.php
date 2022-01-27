<?php

use Illuminate\Database\Seeder;
use Symfony\Component\Console\Helper\Table;


class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $json = database_path('data/services.json');
        $data = file_get_contents($json);

        foreach(json_decode($data)->services as $row){

dd(json_decode($row->status_info, true));


          DB::table('services')->insert([

          'id' => $row->id,
          'external_id' => $row->external_id,
          'external_budget_id' => $row->external_budget_id,
          'external_route_id' => $row->external_route_id,
          'track_id' => $row->track_id,
          'name' => $row->name,
          'notes' => $row->notes,
          'timestamp' => $row->timestamp,
          'arrival_address' => $row->arrival_address,
          'arrival_timestamp' => $row->arrival_timestamp,
          'departure_address' => $row->arrival_address,
          'departure_timestamp' => $row->departure_timestamp,
          'capacity' => $row->capacity,
          'confirmed_pax_count' => $row->confirmed_pax_count,
          'reported_departure_timestamp' => $row->reported_departure_timestamp,
          'reported_departure_kms' => $row->reported_departure_kms,
          'reported_arrival_timestamp' => $row->reported_arrival_timestamp,
          'reported_arrival_kms' => $row->reported_arrival_kms,
          'reported_vehicle_plate_number' => $row->reported_vehicle_plate_number,
          'status' => $row->status,
          'status_info' => $row->status_info,
          'reprocess_status' => $row->reprocess_status,
          'return' => $row->return,
          'created' => $row->created,
          'modified' => $row->modified,
          'synchronized_downstream' => $row->synchronized_downstream,
          'synchronized_upstream' => $row->synchronized_upstream,
          'province_id' => $row->province_id,
          'sale_tickets_drivers' => $row->sale_tickets_drivers,
          'notes_drivers' => $row->notes_drivers,
          'itinerary_drivers' => $row->itinerary_drivers,
          'cost_if_externalized' => $row->cost_if_externalized


        ]);


        }
    }
}
