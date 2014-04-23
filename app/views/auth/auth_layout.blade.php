<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html" charset="UTF-8">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	
	<title>TEST:Welcome to {{ Config::get('constants.site_title') }} | {{ $page_title }}</title>

	<!-- 	Bootstrap (3.1.1) 	-->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" />

	<!-- 	"todo" CSS 		-->
	<link rel="stylesheet" href="../packages/todo-tpl/css/animate.css" type="text/css" />
	<link rel="stylesheet" href="../packages/todo-tpl/css/font-awesome.min.css" type="text/css" />
	<link rel="stylesheet" href="../packages/todo-tpl/css/font.css" type="text/css" cache="false" />
	<link rel="stylesheet" href="../packages/todo-tpl/css/plugin.css" type="text/css" />
	<link rel="stylesheet" href="../packages/todo-tpl/css/app.css" type="text/css" />

	<!-- 	Native CSS 		-->
	<link rel="stylesheet" href="../css/main.css" type="text/css" />
	<link rel="stylesheet" href="../css/auth.css" type="text/css" />

	<!-- 	 Favicon 	 	-->
	<link rel="icon" href="../img/favicon.png"  type="image/png" />

	<!--[if lt IE 9]>
	<script src="../packages/todo-tpl/js/ie/respond.min.js" cache="false"></script>
	<script src="../packages/todo-tpl/js/ie/html5.js" cache="false"></script>
	<script src="../packages/todo-tpl/js/ie/fix.js" cache="false"></script>
	<![endif]-->
</head>
<body>

	<div class="container">
		<!-- 	Website logo & title 	-->
		<a class="nav-brand m-b-sm" href="{{ secure_url('/') }}">
			<img src="../img/logo_60x60.png" alt="ScorEvents">
			{{ Config::get('constants.site_title') }}
		</a>

		<div class="row">
			<div class="col-xs-12 col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2">

				<!-- 	Error Messages (form) 	-->
				@if ($errors->any())
					<div class="form-group m-t-lg">
						<div class="alert alert-danger">
							<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
							</ul>
						</div>
					</div>

				<!-- 	Success Messages (session)	-->
				@elseif (Session::has('error_msg'))
					<div class="form-group m-t-lg">
						<div class="alert alert-danger">
							{{ Session::get('error_msg') }}
						</div>
					</div>

				<!-- 	Success Messages 	-->
				@elseif (Session::has('success_msg'))
					<div class="form-group m-t-lg">
						<div class="alert alert-success">
							{{ Session::get('success_msg') }}
						</div>
					</div>
				@endif

				<!-- 	Page Content 	-->
				@yield('content')

			</div>
		</div>
	</div><!-- /.container -->


	<!-- footer -->
	<footer id="footer">
		<div class="text-center padder clearfix">
			<p>
				<small>
					An <a href="{{ secure_url('/') }}" id="footer">Active Foresight</a> &copy;2014 application
				</small>
			</p>
		</div>
	</footer><!-- 	./footer 	-->

	<!-- 	jQuery (1.10.2) 	-->
	<script src="../packages/todo-tpl/js/jquery.min.js"></script>
	<!-- 	Bootstrap (3.1.1) 	-->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

</body>
</html>