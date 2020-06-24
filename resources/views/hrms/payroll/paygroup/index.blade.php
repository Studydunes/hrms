@extends('hrms.layouts.base')

@section('content')
<div class="container payroll-table">
	<h4>Payroll Group</h4>
	<p>Create payroll groups to group employees who have a common payroll structure such as payment frequency, payroll categories and LOP calculation method.</p>	
	<table class="table table-striped table-bordered">
		<tbody>
			<tr>
				<th> Payroll Group Name </th>
				<th> Assigned Employee </th>
				<th> Payroll Categories </th>
				<th> Salary Preferences </th>
				<th> </th>
			</tr>
			<tr>
				<td> {{$payroll->name}} </td>
				<td> {{$employees_with_payroll}} </td>
				<td> {{$payroll->code}} </td>
				<td> {{$payroll->frequency}} </td>
				
				<td>
					<div class="dropdown">
						<button type="button" class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown">
							Action <span class="caret"></span>		
						</button>
						<ul class="dropdown-menu">
							<li><a href=" {{route('pay-show')}} ">View</a></li>	
							<li><a href=" {{route('employee-list')}} ">Employee</a></li>
						</ul>
					</div>
				</td>
			</tr>	
		</tbody>
	</table>
</div>	

@endsection