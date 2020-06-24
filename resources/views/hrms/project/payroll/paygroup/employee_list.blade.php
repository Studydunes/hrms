@extends('hrms.layouts.base')

@section('content')

<div class="container margin-top empList" style="width:100%">
	<div class="payroll-table show-header">
			
		<h4>HR Management</h4>
		<div class="head-sep">|</div>
		<p >View Payroll Group</p>
	    <ul class="">
		
			<li class="edit_li">
				<a href=" {{route('payroll-edit',$payroll->id )}} " class="btn btn-primary btn-sm">Edit</a>
			</li>
			
			{{-- <li>
				<a href=" {{route('employee-list')}} " class="btn btn-info btn-sm">Employees</a>
			</li> --}}
		</ul>
		<div class="clearfix"></div>
		<hr />	
	</div>
	<div>
		
		<div class="form-group">
		    <label for="department_select" class="pull-left" style="width:20%">Department:</label>
			<select class="form-control pull-left" id="department_select" style="width:30%">
				<span class="crate"></span>
			    <option>All Department</option>
			    <option>Human Resource</option>
			    <option>IT</option>
			</select>
			<img align="absmiddle" alt="Loader" border="0" id="loader" src="{{asset('/img/loader_small.gif')}}" style="display: none;">
		</div>
	<div class="clearfix"></div>
	<br>	
	<br>
	<br>
	</div>	
	<div id="Emp-table">
			@include('hrms.payroll.paygroup.table_generator')
	</div>
	<div id="csrf">
		
	</div>
</div>

<script>
	$(document).ready(function(){
		$('#department_select').change(function() {
			var data;
			data = {
				department: $(this).val()
			}

			url = location.href;
			$.ajax({
				url: url,
				data: data,
				type: 'GET',
				dataType : 'html',
				beforeSend: function() {
					$('#loader').show();
				},
				success: function(response) {

					$('#Emp-table').html(response);
					
				},
				complete: function() {
					$('#loader').hide();
				}
			});
		});
	});

	//Adding hidden csrf field to the view
	$(document).ready(function() {
		$('#csrf').append('{{csrf_field()}}');
	});
	/*
	    Remove User viaxx 
	*/
	function remove_employee(emp_id) {
		
		var _token = $('#csrf input').val();

		var data = {
			"_token": _token,
			'id': emp_id
		};
		
		var url = 'emp-delete';
			
		$.ajax({
			url: url,
			data: data,
			type: 'POST',
			success: function(response) {
				if(response) {
					location.reload();
				}
			}
		});

	}
</script>

@endsection