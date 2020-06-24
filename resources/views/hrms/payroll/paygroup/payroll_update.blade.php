@extends('hrms.layouts.base')

@section('content')

<div class="container" style="width:100%;margin-top:20px">	
	<form action=" {{route('payroll-update')}} " id= "{{ $payroll->id }}"" method="post">
		{{csrf_field()}}
		<input type="hidden" name="id" value=" {{$payroll->id}} ">
		<div class="form-group">	
			<label for="name">Payroll Group Name:</label>
			<input type="text" name="name" value=" {{$payroll->name}} " class="form-control">
		</div>
		<div class="form-group">	
			<label for="frequency">Payment Frequency:</label>
			<input type="text" name="frequency" value=" {{$payroll->frequency}} " class="form-control" disabled="disabled">
		</div>
		<div class="form-group">	
			<label for="code">Payroll Code:</label>
			<input type="text" name="code" value=" {{$payroll->code}} " class="form-control">
		</div>
		<div class="form-group">	
			<label for="name">Payslip Generation Day:</label>
			<input type="text" name="pay_gen_date" value=" {{explode(' ', $payroll->pay_gen_date)[1]}} " class="form-control" disabled="disabled">
		</div>
		<div class="form-group">	
			<label for="name">Salary Ammount:</label>
			<input type="text" name="value" value=" {{$payroll->value}} " class="form-control">
		</div>
		<button type="submit" class="btn btn-primary">Update</button>	
	</form>

</div>	
@endsection