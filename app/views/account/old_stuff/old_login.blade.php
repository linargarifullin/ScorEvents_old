@extends('//layouts/default')


@section('custom_styles')
<link href="../css/account_signin.css" rel="stylesheet">
@stop


@section('page_content')

{{ Form::open(['class' => 'form-signin', 'url' => 'account/login', 'autocomplete' => 'on']) }}
<fieldset>
	<!-- 	Header 	-->
	<div class="form-group">
		<h2 class="form-signin-heading">Account Sign In</h2>
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
		<input type="username_or_email" class="form-control" placeholder="Username or Email Address" name="username_or_email" required autofocus/>
		<input type="password" class="form-control" placeholder="Password" name="password" required/>
	</div>

	<!-- 	Remember Me 	-->
	<div class="form-group">
		<label class="checkbox">
			<input type="checkbox" value="remember-me">Remember me
		</label>
	</div>

	<!-- 	Submit 	-->
	<div class="form-group">
		<button type="submit" class="btn btn-lg btn-primary btn-block">Sign In</button>
	</div>
</fieldset>
{{ Form::close() }}

@stop