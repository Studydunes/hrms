<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
          protected $fillable = [
        'name','phone','address','city','postal_code',
        'notes','fax','state', 'country'
       
    ];
}
