<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */




    public function run()
    {
        //
        $file = database_path('data/users.json');
        $json = file_get_contents($file);

        foreach(json_decode($json)->users as $row){

            DB::table('users')->insert([

              'id' => $row->id,
          		'first_name' => $row->first_name,
          		'last_name' => $row->last_name,
          		'phone_number' => $row->phone_number,
          		'picture' => $row->picture,
          		'email' => $row->email,
          		'password' => $row->password,
          		'remember_token' => $row->remember_token,
          		'last_online' => $row->last_online,
          		'verification_code' => $row->verification_code,
          		'new_email' => $row->new_email,
          		'status' => $row->status,
          		'first' => $row->first,
          		'last_accept_date' => $row->last_accept_date,
          		'created' => $row->created,
          		'modified' => $row->modified,
          		'company_contact' => $row->company_contact,
          		'credits' => $row->credits,
          		'first_trip' => $row->first_trip,
          		'incomplete_profile' =>$row->incomplete_profile,
          		'phone_verify' => $row->phone_verify,
          		'token_auto_login' => $row->token_auto_login,
          		'user_vertical' => $row->user_vertical,
          		'language_id' => $row->language_id,
          		'no_registered' => $row->no_registered,
          		'deleted_at' => $row->deleted_at

            ]);
        };
    }
}
