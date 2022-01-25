<?php

namespace App;

use Illuminate\Database\Eloquent\Factory\Hasfactory;
use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    //


        protected $fillable = [
        
          'id',
          'calendar_id',
          'name',
          'updated_at',
          'created_at',


        ];
}
