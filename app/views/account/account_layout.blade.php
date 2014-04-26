<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html" charset="UTF-8">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	
	<title>Welcome to {{ Config::get('constants.site_title') }} | {{ $page_title }}</title>

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
	<link rel="stylesheet" href="../css/account.css" type="text/css" />

	<!-- 	 Favicon 	 	-->
	<link rel="icon" href="../img/favicon.png"  type="image/png" />

	<!--[if lt IE 9]>
	<script src="../packages/todo-tpl/js/ie/respond.min.js" cache="false"></script>
	<script src="../packages/todo-tpl/js/ie/html5.js" cache="false"></script>
	<script src="../packages/todo-tpl/js/ie/fix.js" cache="false"></script>
	<![endif]-->
</head>
<body>

	<section class="vbox">
		<!-- 	Top (header) menu 	-->
		<header class="header bg-dark navbar pull-in">

			<!-- 	Top LEFT or for extra small screens 	-->
			<div class="navbar-header nav-bar aside">
				<!-- 	Top LEFT menu 	-->
				<a class="btn btn-link visible-xs" data-toggle="class:show" data-target=".nav-primary">
					<i class="fa fa-bars"></i>
				</a>

				<!-- 	Logo & Title 	-->
				<a href="../account" class="nav-brand">
					<img src="../img/logo_60x60.png" alt="ScorEvents">
					{{ Config::get('constants.site_title') }}
				</a>

				<!-- 	Top RIGHT menu 	-->
				<a class="btn btn-link visible-xs" data-toggle="collapse" data-target=".navbar-collapse">
					<i class="fa fa-list"></i>
				</a>
			</div><!-- ./ Top LEFT or XS screen -->

			<!-- 	Top MIDDLE & RIGHT 	-->
			<div class="collapse navbar-collapse">

				<!-- 	Top MIDDLE 	-->
				<form class="navbar-form navbar-left" role="search">
					<div class="form-group"><div class="input-group" style="max-width: 325px;">
						<input type="text" class="form-control no-border dk text-white" placeholder="Search ...">

						<span class="input-group-btn">
							<button type="submit" class="btn btn-sm btn-primary btn-icon">
								<i class="fa fa-search"></i>
							</button>
						</span>
					</div></div>
				</form>
				
				<!-- 	Top RIGHT 	-->
				<ul class="nav navbar-nav navbar-right">					
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="fa fa-user"></i>
							<div id="user-full-name">
								{{ $user['first_name'].' '.$user['last_name'] }}
							</div>
							<b class="caret"></b>
						</a>

						<ul class="dropdown-menu animated fadeInLeft aside-md">
							<li><a href="#">Profile</a></li>
							<li><a href="../auth/logout">Logout</a></li>
						</ul>
					</li>
				</ul>
			</div><!-- 	./ Top MIDDLE & RIGHT 	-->
		</header><!-- 	./Top (eader) menu 	-->
		

		<!-- 	Middle part 	-->
		<section>
			<section class="hbox stretch">
				<!-- 	Middle part: left menu 	-->
				<aside class="aside bg-dark dk nav-vertical" id="nav">
					<section class="vbox">
						<section class="scrollable">
							<div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="5px">
								<nav class="nav-primary hidden-xs" data-ride="collapse">
									<ul class="nav">
										<!-- 	User (only for XS displays) 	-->
										<li class="dropdown visible-xs">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">
												<i class="fa fa-user"></i>
												<div id="user-full-name">
													{{ $user['first_name'].' '.$user['last_name'] }}
												</div>
												<b class="caret"></b>
											</a>

											<ul class="dropdown-menu animated fadeInLeft aside-md">
												<li><a href="#">Profile</a></li>
												<li><a href="../auth/logout">Logout</a></li>
											</ul>
										</li>
										<!-- 	Dashboard 	-->
										<li>
											<a href="../account/dashboard">
												<i class="fa fa-list-alt"></i><span>Dashboard</span>
											</a>
										</li>

										<!-- 	Events 	-->
										<li>
											<a href="../account/dashboard">
												<i class="fa fa-calendar"></i><span>Events</span>
											</a>
										</li>

										<!-- 	Friends 	-->
										<li>
											<a href="../account/dashboard">
												<i class="fa fa-group"></i><span>Friends</span>
											</a>
										</li>

										<!-- 	Map 	-->
										<li>
											<a href="../account/dashboard">
												<i class="fa fa-map-marker"></i><span>Map</span>
											</a>
										</li>

										<!-- 	Profile 	-->
										<li>
											<a href="../account/dashboard">
												<i class="fa fa-user"></i><span>Profile</span>
											</a>
										</li>

										<!-- 	Settings 	-->
										<li>
											<a href="../account/dashboard">
												<i class="fa fa-cogs"></i><span>Settings</span>
											</a>
										</li>
									</ul>
								</nav>
							</div>
						</section>

						<!-- 	Left menu footer (shrink & fullscreen) 	-->
						<footer class="footer bg-gradient hidden-xs">
							<a href="#" data-toggle="fullscreen" class="btn btn-sm btn-link m-l-n-sm">
								<i class="fa fa-expand pull-left"></i>
							</a>

							<a href="#nav" data-toggle="class:nav-vertical" class="btn btn-sm btn-link m-l-n-sm">
								<i class="fa fa-toggle-left pull-left"></i>
							</a>
						</footer>
					</section>
				</aside><!-- 	/ Middle part: left side 	-->
				
				<!-- 	Middle part: content (center) 	-->

				<section>
					<div class="wrapper">
						<p class="h4">This dashboard layout start with a vbox.</p>
						<p>You can use the .hbox and .vbox to build the complicated layouts.</p>
					</div>
				</section>
			</section>
		</section>

		<!-- 	Footer 	-->
		<footer class="footer bg-dark">
			<p><small>An <a href="../" id="footer">Active Foresight</a> &copy;2014 application</small></p>
		</footer><!-- 	./footer 	-->
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