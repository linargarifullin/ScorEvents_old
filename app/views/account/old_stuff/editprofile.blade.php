@extends('layouts/account')

@section('custom_styles')
<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
<style type="text/css">
	#datepicker {
		display: inline;
	}
</style>
@stop


@section('page_content')
<!-- Nav tabs -->
<ul class="nav nav-tabs" id="myTab">
	<li class="active"><a href="#general" data-toggle="tab">General</a></li>
	<li><a href="#account" data-toggle="tab">Account</a></li>
	<li><a href="#password" data-toggle="tab">Password</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content" id="myTabContent">
	<!-- General Pane -->
	<div class="tab-pane fade in active" id="general">

		<br/>

		<form role="form" style="max-width: 50%;">
			<div class="form-group">
				<label for="exampleInputPassword1">First Name</label>
				<input type="text" class="form-control" id="exampleInputPassword1" placeholder="First Name">
			</div>

			<div class="form-group">
				<label for="exampleInputPassword1">Middle Name</label>
				<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Middle Name">
			</div>

			<div class="form-group">
				<label for="exampleInputPassword1">Last Name</label>
				<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Last Name">
			</div>

			<div class="form-group">
				<label for="exampleInputPassword1">Phone Number</label>
				<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Phone Number">
			</div>

			<div class="form-group">
				<label for="exampleInputPassword1">Sex&nbsp&nbsp&nbsp</label>
				<select class="form-control" style="max-width: 80px; display: inline;">
					<option></option>
					<option>Male</option>
					<option>Female</option>
				</select>
			</div>

			<div class="form-group">
				<label for="exampleInputPassword1">DOB&nbsp&nbsp&nbsp</label>
				<input type="text" id="datepicker">
			</div>

			<div class="form-group">
				<label for="exampleInputPassword1">Location</label>
				<button type="button" class="btn btn-link">Choose</button>
			</div>

			<hr>

			<div class="form-group">
				<label for="currentpassword">For changes to take effect *</label>
				<input type="password" class="form-control" id="currentpassword" placeholder="Current Password">
			</div>

			<br>

			<div class="form-group">
				<button type="submit" class="btn btn-lg btn-default">Cancel</button>
				<button type="submit" class="btn btn-lg btn-primary">Save Changes</button>
			</div>
		</form>
	</div><!-- /.general -->

	<!-- Account Pane -->
	<div class="tab-pane fade" id="account">
		<br/>
		<form role="form" style="max-width: 50%;">
			<div class="form-group">
				<label for="username">Username</label>
				<input type="text" class="form-control" id="username" placeholder="Username">
			</div>

			<div class="form-group">
				<label for="email">Email address</label>
				<input type="email" class="form-control" id="email" placeholder="Email">
			</div>
			
			<hr>

			<div class="form-group">
				<label for="currentpassword">For changes to take effect *</label>
				<input type="password" class="form-control" id="currentpassword" placeholder="Current Password">
			</div>

			<br>

			<div class="form-group">
				<button type="submit" class="btn btn-lg btn-default">Cancel</button>
				<button type="submit" class="btn btn-lg btn-primary">Save Changes</button>
			</div>
		</form>
	</div><!-- /.account -->

	<!-- Password Pane -->
	<div class="tab-pane fade" id="password">
		<br/>
		<form role="form" style="max-width: 50%;">
			<div class="form-group">
				<label for="newpassword">New Password</label>
				<input type="password" class="form-control" id="newpassword" placeholder="New Password">
			</div>
			<div class="form-group">
				<label for="newpassword">Verify New Password</label>
				<input type="password" class="form-control" id="newpassword" placeholder="Verify New Password">
			</div>
			<hr>
			<div class="form-group">
				<label for="currentpassword">For changes to take effect *</label>
				<input type="password" class="form-control" id="currentpassword" placeholder="Current Password">
			</div>
			<br>
			<div class="form-group">
				<button type="submit" class="btn btn-lg btn-default">Cancel</button>
				<button type="submit" class="btn btn-lg btn-primary">Save Changes</button>
			</div>
		</form>
	</div><!-- /.account -->
</div>
@stop

@section('custom_scripts')
  <script src="//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script>
	$(function() {
		$("#datepicker").datepicker();
	});

</script>
@stop