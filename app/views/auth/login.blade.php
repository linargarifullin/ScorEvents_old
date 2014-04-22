@extends('auth/auth_layout')

@section('content')

{{ Form::open(['class' => 'panel-body', 'url' => '../auth/login', 'autocomplete' => 'on']) }}

	<h2>Please Sign In</h2>

	<hr class="colorgraph" />

	<!-- 	Email or Username 	-->
	<div class="form-group">
		<input type="text" name="email_or_username" class="form-control input-lg" placeholder="Email or Username" tabindex="1" />
	</div>

	<!-- 	Password 	-->
	<div class="form-group">
		<input type="password" name="password" class="form-control input-lg" placeholder="Password" tabindex="2" />
	</div>

	<div class="row">
		<!-- 	Remember me 	-->
		<div class="col-xs-8 col-sm-6 col-md-6">
			<label>
				<input type="checkbox" name="remember_me" /> Keep me signed in
			</label>
		</div>

		<!-- 	Forgot password 	-->
		<div class="col-xs-4 col-sm-6 col-md-6">
			<a href="#" data-toggle="modal" data-target="#f_and_p_m" class="important_link pull-right" style="font-size: 14px;">Forgot password?</a>
		</div>
	</div>
	
	<hr class="colorgraph" />

	<!-- 	Sign In (button) 	-->
	<input type="submit" value="Sign In" class="btn btn-primary btn-block btn-lg" tabindex="3">

	<br>

	<!-- 	Register (link) 	-->
	<label>Don't have an account? <a href="../auth/registration" class="important_link">Sign up now</a>.</label>

{{ Form::close() }}

<!-- 	Forgot Password (modal) 	-->
<div class="modal fade" id="f_and_p_m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title" id="myModalLabel">Password Recovery</h4>
			</div>
			<div class="modal-body">
				<p>Password recovery here</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

@stop