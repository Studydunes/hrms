<table class="table table-striped table-bordered">
	<tbody>
		<tr>
			<th>Employee Name</th>	
			<th>Department</th>	
			<th>Employee Code</th>
			<th> </th>
		</tr>
		@foreach($emp_data as $data)
			<tr>
				<td> {{ $data->name }} </td>
				<td> {{ $data->department }} </td>
				<td> {{ $data->code }} </td>
				<td>
					<ul>
						<li>
							<a class="btn btn-info btn-xs" href=" {{route('pay-show')}} ">Payroll</a>
						</li>
						<li>
							<a class="btn btn-primary btn-xs" onclick="remove_employee({{$data->id}})">Remove</a>	
						</li>
					</ul>
				</td>
			</tr>
		@endforeach
	</tbody>	
</table>