<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<link rel="stylesheet" href="../packages/todo-tpl/css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="../packages/todo-tpl/css/font-awesome.min.css" type="text/css" />
	<link rel="stylesheet" href="../packages/todo-tpl/css/app.css" type="text/css" />
	<link rel="stylesheet" href="../css/auth.css" type="text/css" />

	<!--[if lt IE 9]>
	<script src="../packages/todo-tpl/js/ie/respond.min.js" cache="false"></script>
	<script src="../packages/todo-tpl/js/ie/html5.js" cache="false"></script>
	<script src="../packages/todo-tpl/js/ie/fix.js" cache="false"></script>
	<![endif]-->
</head>

<body>

	<div class="container">
		<!-- 	Website logo & title 	-->
		<a class="nav-brand m-b-sm" href="../">
			<img src="../img/logo.png" alt="ScorEvents">
			{{ Config::get('constants.site_title') }}
		</a>

		<div class="row">
			<div class="col-xs-12 col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2">
				<h2>Hello {{ $first_name }} {{ $last_name }}!</h2>

				<p>
					Welcome to ScorEvents! To complete your registration, please proceed to the following <a href="../auth/activate/{{ $id }}/{{ $activation_key }}">activation link</a> or enter it directly into your browser:

					https://scorevents.com/auth/activate/{{ $id }}/{{ $activation_key }}
				</p>
			</div>
		</div>
	</div><!-- /.container -->


	<!-- footer -->
	<footer id="footer">
		<div class="text-center padder clearfix">
			<p>
				<small>
					An <a href="../" id="footer">Active Foresight</a> &copy;2014 application
				</small>
			</p>
		</div>
	</footer><!-- 	./footer 	-->

</body>
</html>