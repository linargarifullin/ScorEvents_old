<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html" charset="UTF-8">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<link rel="stylesheet" href="{{ secure_url('/') }}/packages/todo-tpl/css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="{{ secure_url('/') }}/packages/todo-tpl/css/font-awesome.min.css" type="text/css" />
	<link rel="stylesheet" href="{{ secure_url('/') }}/packages/todo-tpl/css/app.css" type="text/css" />
	<link rel="stylesheet" href="{{ secure_url('/') }}/css/auth.css" type="text/css" />

	<style>

/* ScorEvents sign */
a.nav-brand {
	margin-top: 60px;
	font-size: 40px;
	color: gray;
}
	/* ScorEvents logo */
	a.nav-brand img {
		max-height: 60px;
		max-width: 60px;
	}

/* col-xs (extra small) */
@media (max-width: 767px) {
	a.nav-brand {
		margin-top: 20px;
		margin-bottom: 5px;
		font-size: 225%;
	}
		a.nav-brand img {
			max-height: 45px;
			max-width: 45px;
		}

	h2 {
		font-size: 180%;
		margin-top: 5px;
	}

	input[type=text],
	input[type=password],
	input[type=email] {
		font-size: 120%;
	}
}

/* col-sm (small) */
@media (min-width: 768px) {
	a.nav-brand {
		margin-top: 40px;
	}
	input[type=text],
	input[type=password],
	input[type=email] {
		font-size: 130%;
	}
}

/* col-md (medium) */
@media (min-width: 992px) {
	input[type=text],
	input[type=password],
	input[type=email] {
		font-size: 140%;
	}
}

/* col-lg (large) */
@media (min-width: 1200px) {
	input[type=text],
	input[type=password],
	input[type=email] {
		font-size: 150%;
	}
}

h2 {
	color: #575757;
}

a.important_link {
	color: #0072C6;
	font-weight: bold;
}

a#footer {
	border-bottom: 1px dotted gray;
}

.colorgraph {
	height: 1px;
	border-top: 0;
	background: gray;
}

input[type="checkbox"] {
	margin-right: 5px;
	width: 15px;
	height: 15px;
}

label {
	color: #575757;
	font-size: 14px;
	font-weight: normal;
}

.alert {
	margin: 0 auto;
	max-width: 90%;
	font-size: 12px;
}

footer {
	margin-top: 20px;
	padding: 10px 20px;
}
</style>
	<!--[if lt IE 9]>
	<script src="../packages/todo-tpl/js/ie/respond.min.js" cache="false"></script>
	<script src="../packages/todo-tpl/js/ie/html5.js" cache="false"></script>
	<script src="../packages/todo-tpl/js/ie/fix.js" cache="false"></script>
	<![endif]-->
</head>

<body>

	<div class="container">
		<!-- 	Website logo & title 	-->
		<a class="nav-brand m-b-sm" href="../" style="max-height: 60px; max-width: 60px; margin-top: 60px;">
			<img src="{{ secure_url('/') }}/img/logo.png" alt="ScorEvents">
			{{ Config::get('constants.site_title') }}
		</a>

		<div class="row">
			<div class="col-xs-12 col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2">
				<h2>Hello {{ $first_name }} {{ $last_name }}!</h2>

				<p>
					Welcome to ScorEvents! To complete your registration, please proceed to the following <a href="{{ secure_url('auth/activate') }}/{{ $id }}/{{ $activation_key }}">activation link</a> or enter it directly into your browser:
				</p>

				<br>

				<p>
					{{ secure_url('auth/activate') }}/{{ $id }}/{{ $activation_key }}
				</p>
			</div>
		</div>
	</div><!-- /.container -->


	<!-- footer -->
	<footer id="footer" style="margin-top: 20px; padding: 10px 20px;">
		<div class="text-center padder clearfix">
			<p>
				<small>
					<a href="{{ secure_url('/') }}" id="footer">ScorEvents.com</a> &copy;2014
				</small>
			</p>
		</div>
	</footer><!-- 	./footer 	-->

</body>
</html>