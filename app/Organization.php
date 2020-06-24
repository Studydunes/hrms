<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
     protected $fillable = [
        'name', 'email', 'phone','address_sheet1','city','postal_code',
        'note','tax_id','registration_number','fax','address_sheet2','state',
        'country','number_of_employees'
    ];
}
