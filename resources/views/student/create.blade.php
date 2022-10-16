@extends('layout.layoutapp')
@section('content')
<div class="container">
	<div class="row ">
		<div class="col-12 text-center pt-5">
			<div class="text-left"><a href="/student" class="btn btn-outline-primary">Student List</a></div>

			<form id="add-frm" method="POST" action="" class="border p-3 mt-2 d-flex flex-column justify-content-center align-items-center">
				<div class="control-group col-6 text-left">
					<label for="title">Full Name</label>
					<div>
						<input type="text" id="fullname" class="form-control mb-4" name="fullname"
							placeholder="Enter Full Name" required>
					</div>
				</div>
				<div class="control-group col-6 text-left mt-2">
					<label for="body">Birthday</label>
					<div>
						<input type="date" id="birthday" class="form-control mb-4" name="birthday"
							placeholder="Enter Birthday" rows="" required>
					</div>
				</div>
				<div class="control-group col-6 text-left mt-2">
					<label for="body">Address</label>
					<div>
						<input type="text" id="address" class="form-control mb-4" name="address"
							placeholder="Enter Address" required>
					</div>
				</div>

				@csrf

				<div class="control-group col-6 text-left mt-2"><button class="btn btn-primary">Add New</button></div>
			</form>
		</div>
	</div>
</div>
@endsection