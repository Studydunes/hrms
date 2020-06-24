@extends('hrms.layouts.base')

@section('content')
<div class="container" style="width:100%">	
	<div class="payroll-table show-header">
			
		<h4>HR Management</h4>
		<div class="head-sep">|</div>
		<p >View Payroll Group</p>
	    <ul class="">
			<li class="edit_li">
				<a href=" {{ route('payroll-edit',$payroll->id) }} " class="btn btn-primary btn-sm">Edit</a>
			</li>
			<li>
				<a href=" {{route('employee-list')}} " class="btn btn-info btn-sm">Employees</a>
			</li>
		</ul>
		<div class="clearfix"></div>
		<hr />	
	</div>
	<div>
		<h4>Payroll Group Details</h4>
	</div>
	<div class="field_one">
		<p class="pull-left">Payroll Group Name :</p>
		<p class="pull-left"> {{$payroll->name}} </p>
	<div class="clearfix"></div>
	<hr>
	</div>
	<div class="">
		<h6 style="font-size: 17px">Salary Prefrences</h6>
	</div>
	<div class="field_two">
		<p class="pull-left">Employee Salary Type :</p>
		<p class="pull-left"> {{ explode(' ',$payroll->frequency )[0] }} </p>
		<p class="clearfix"></p>
		<p class="pull-left">Payment Frequency</p>
		<p class="pull-left"> {{ explode(' ',$payroll->frequency )[1] }} </p>
		<p class="clearfix"></p>
		<p class="pull-left">Payslip Generatin Date:</p>
		<p class="pull-left"> {{ $payroll->pay_gen_date }} </p>
		<p class="clearfix"></p>
		<hr>		
	</div>
	<div class="">
		<h6  style="font-size: 17px">Payroll Categories</h6>
		<p>Earnings</p>	
	</div>
	<div class="">
		<table class="table table-striped table-bordered">
			<tbody>
				<tr>
					<th>Payroll category name (Code)</th>	
					<th>Value</th>	
				</tr>
				<tr>
					<td> {{ explode(' ', $payroll->name)[0].' ('. $payroll->code .')' }} </td>
					<td> {{ $payroll->value }} </td>
				</tr>
			</tbody>
		</table>
	</div>
</div>	
@endsection