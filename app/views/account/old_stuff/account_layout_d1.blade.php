<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html" charset="UTF-8">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<title>Welcome to {{ Config::get('constants.site_title') }} | {{ $page_title }}</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" />
	<link rel="stylesheet" href="../packages/todo-tpl/css/animate.css" type="text/css" />
	<link rel="stylesheet" href="../packages/todo-tpl/css/font-awesome.min.css" type="text/css" />
	<link rel="stylesheet" href="../packages/todo-tpl/css/font.css" type="text/css" cache="false" />
	<link rel="stylesheet" href="../packages/todo-tpl/css/plugin.css" type="text/css" />
	<link rel="stylesheet" href="../packages/todo-tpl/css/app.css" type="text/css" />
	<link rel="stylesheet" href="../css/account.css" type="text/css" />
	<link rel="icon" href="../img/favicon.png"  type="image/png" />
	<!--[if lt IE 9]>
	<script src="../packages/todo-tpl/js/ie/respond.min.js" cache="false"></script>
	<script src="../packages/todo-tpl/js/ie/html5.js" cache="false"></script>
	<script src="../packages/todo-tpl/js/ie/fix.js" cache="false"></script>
	<![endif]-->
</head>

<body>

<section class="hbox stretch">
	
	<!-- 	Entire left side 	-->
	<aside class="bg-success dker aside-sm nav-vertical" id="nav">
		<section class="vbox">
			<!-- 	Header 	-->
			<header class="bg-black nav-bar">
				<!--		Left menu for XS screens 	-->
				<a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen" data-target="#nav">
					<i class="fa fa-bars"></i>
				</a>
				<!-- 	Website title 	-->
				<a href="#" class="nav-brand" data-toggle="fullscreen">
					{{ Config::get('constants.site_title') }}
				</a>
			</header>

			<!-- 	Left menu for not XS screen 	-->
			<section>
				<nav class="nav-primary hidden-xs">
					<ul class="nav">
						<li><a href="../"><i class="fa fa-clock-o"></i><span>Dashboard</span></a></li>
						<li><a href="../"><i class="fa fa-calendar"></i><span>Events</span></a></li>
						<li><a href="../"><i class="fa fa-group"></i><span>Friends</span></a></li>
						<li><a href="../"><i class="fa fa-map-marker"></i><span>Map</span></a></li>
						<li><a href="../"><i class="fa fa-user"></i><span>Profile</span></a></li>
						<li><a href="../"><i class="fa fa-cogs"></i><span>Settings</span></a></li>
					</ul>
				</nav>
			</section>

			<!-- 	Footer 	-->
			<footer class="footer bg-gradient hidden-xs">
				<a href="#nav" data-toggle="class:nav-vertical" class="btn btn-sm btn-link m-l-n-sm">
					<i class="fa fa-bars"></i>
				</a>
			</footer>

		</section>
	</aside><!-- 	./Left side 	-->

	<!-- 	Content 	-->
	<section id="content">
		<section class="vbox">
			<header class="header bg-black navbar navbar-inverse">
				<div class="collapse navbar-collapse pull-in">
					<!-- 	Top navbar links 	-->
					<ul class="nav navbar-nav m-l-n">
						<li class="active"><a href="../">Dashboard</a></li>
					</ul>

					<!-- 	Search bar 	-->
					<form class="navbar-form navbar-left m-t-sm" role="search">
						<div class="form-group">
							<div class="input-group input-s">
								<input type="text" class="form-control input-sm no-border bg-dark" placeholder="Search ..." />
								<span class="input-group-btn">
									<button type="submit" class="btn btn-sm btn-success btn-icon"><i class="fa fa-search"></i></button>
								</span>
							</div>
						</div>
					</form><!-- 	./Search bar 	-->

				</div>
			</header>
		</section>
	</section><!-- 	./Content 	-->

</section>

<!-- 	jQuery (1.10.2) 	-->
<script src="../packages/todo-tpl/js/jquery.min.js"></script>
<!-- 	Bootstrap (3.1.1) 	-->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<!-- 	App 	-->
<script src="../packages/todo-tpl/js/app.js"></script>
<script src="../packages/todo-tpl/js/app.plugin.js"></script>
<script src="../packages/todo-tpl/js/app.data.js"></script>
<script src="../packages/todo-tpl/js/slimscroll/jquery.slimscroll.min.js" cache="false"></script>

</body>
</html>