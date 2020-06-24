<?php

namespace App;
use App\Models\Employee;

use Illuminate\Database\Eloquent\Model;

class Payroll extends Model


{
	
	protected $fillable =[
		'name','code',
		'value','frequency',
		'pay_gen_date',
		'created_at',
		'updated_at'
	];

    public function employee_payroll() {

    	return $this->hasMany(Employee::class);
    }
}
