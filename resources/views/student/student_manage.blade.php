@extends('layout.layoutapp')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-12 text-center pt-5">
			<div class="text-left"><a href="student/create" class="btn btn-outline-primary">Add new
				student</a></div>

			<table class="table mt-3  text-left">
				<thead>
					<tr>
						<th scope="col">Full Name</th>
						<th scope="col" class="pr-5">Birthday</th>
						<th scope="col">Address</th>
					</tr>
				</thead>
				<tbody>
					@forelse($students as $student)
					<tr>
						<td>{!! $student->fullname !!}</td>
						<td class="pr-5 text-right">{!! $student->birthday !!}</td>
						<td>{!! $student->address !!}</td>
						<td><a href="student/{!! $student->id !!}/student_edit"
							class="btn btn-outline-primary">Edit</a>
					</tr>
					@empty
					<tr>
						<td colspan="3">No students found</td>
					</tr>
					@endforelse
				</tbody>
			</table>
		</div>
	</div>
</div>


@endsection