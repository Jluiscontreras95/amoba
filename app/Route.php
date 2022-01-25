<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\Hasfactory;
use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    //

    protected $fillable = [
      'id',
      'external_id',
      'invitation_code',
      'title',
      'start_timestamp',
      'end_timestamp',

    ];

}
