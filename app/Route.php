<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\Hasfactory;
use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    //

        public function data(){

          return $this->hasMany(RouteData::class);

        }

}
