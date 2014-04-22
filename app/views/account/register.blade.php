@extends('//layouts/default')


@section('custom_styles')
<link href="../css/account_register.css" rel="stylesheet">
@stop


@section('page_content')

{{ Form::open(['class' => 'form-register', 'url' => 'account/register', 'autocomplete' => 'on']) }}
<fieldset>
	<!-- 	Header 	-->
	<div class="form-group">
		<h2 class="form-register-heading">Account Registration</h2>
	</div>

	<!-- 	Error Messages 	-->
	@if ($errors->any())
	<div class="form-group">
		<div class="alert alert-danger">
			<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
			</ul>
		</div>
	</div>
	@endif

	<!-- 	Input Fields 	-->
	<div class="form-group">
		<input type="username" name="username" class="form-control" placeholder="Username" required autofocus/>
		<input type="email" name="email" class="form-control" placeholder="Email Address" required/>
		<input type="password" name="password" class="form-control" placeholder="Password" required/>
		<input type="password" name="password_repeat" class="form-control" placeholder="Verify Password" required/>
	</div>

	<!-- 	Terms & Conditions 	-->
	<div class="form-group">
		<label class="checkbox">
			<input type="checkbox" value="remember-me">I agree to <a href="#">Terms and Conditions</a>.
		</label>
	</div>

	<!-- 	Submit 	-->
	<div class="form-group">
		<button type="submit" class="btn btn-lg btn-primary btn-block">Register</button>
	</div>
</fieldset>
{{ Form::close() }}

@stop