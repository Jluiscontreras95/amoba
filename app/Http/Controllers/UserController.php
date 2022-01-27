<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use App\User;
use App\Reservation;
use App\Route;
use App\UserPlan;
use App\RouteData;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //return User::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $user = new User();

        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->phone_number = $request->phone_number;
        $user->picture = $request->picture;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->remember_token = $request->remember_token;
        $user->last_online = $request->last_online;
        //$user->verification_code = $request->verification_code;
      //  $user->new_email = $request->new_email;
        $user->status = $request->status;
        $user->first = $request->first;
        $user->last_accept_date = $request->last_accept_date;
      //  $user->created = $request->created;
      //  $user->modified = $request->modified;
        $user->company_contact = $request->company_contact;
        $user->credits = $request->credits;
        $user->first_trip = $request->first_trip;
      //  $user->incomplete_profile = $request->incomplete_profile;
        $user->phone_verify = $request->phone_number;
        $user->token_auto_login = $request->token_auto_login;
        $user->user_vertical = $request->user_vertical;
        $user->language_id = $request->language_id;
      //  $user->no_registered = $request->no_registered;
        $user->deleted_at = $request->deleted_at;

        $user->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return User::FindOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $user = new User();

        $user->

        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->phone_number = $request->phone_number;
        $user->picture = $request->picture;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->remember_token = $request->remember_token;
        $user->last_online = $request->last_online;
        $user->verification_code = $request->verification_code;
        $user->new_email = $request->new_email;
        $user->status = $request->status;
        $user->first = $request->first;
        $user->last_accept_date = $request->last_accept_date;
        $user->created = $request->created;
        $user->modified = $request->modified;
        $user->company_contact = $request->company_contact;
        $user->credits = $request->credits;
        $user->first_trip = $request->first_trip;
        $user->incomplete_profile = $request->incomplete_profile;
        $user->phone_verify = $request->phone_number;
        $user->token_auto_login = $request->token_auto_login;
        $user->user_vertical = $request->user_vertical;
        $user->language_id = $request->language_id;
        $user->no_registered = $request->no_registered;
        $user->deleted_at = $request->deleted_at;

        $user->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getReservate(Request $request, $id)
    {
        //

      $reservation = User::join('user_plans','users.id','=','user_plans.user_id')
                          ->join('reservations','user_plans.id','=','reservations.user_plan_id')
                          ->join('routes','reservations.route_id', '=', 'routes.id')
                          ->join('route_datas','route_datas.route_id', '=', 'routes.id')
                          ->select('users.first_name','reservations.reservation_start','reservations.reservation_end')
                          ->where('users.id', '=', $id)
                          ->groupBy('reservations.id')
                          ->get();

      return $reservation;
    }



}
