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
	@yield('custom_css')
	<!-- 	 Favicon 	 	-->
	<link rel="icon" href="../img/favicon.png" type="image/png" />

	<!--[if lt IE 9]>
	<script src="../packages/todo-tpl/js/ie/respond.min.js" cache="false"></script>
	<script src="../packages/todo-tpl/js/ie/html5.js" cache="false"></script>
	<script src="../packages/todo-tpl/js/ie/fix.js" cache="false"></script>
	<![endif]-->
</head>
<body>

<section class="hbox stretch">
	<!-- .aside -->
	<aside class="bg-black lter aside nav-vertical" id="nav">
		<section class="vbox">

			<!-- 	TOP Header for XS	-->
			<header class="bg-black nav-bar">
				<!-- 	TOP (left) menu for XS 	-->
				<a class="btn btn-link visible-xs" data-toggle="class:show" data-target=".nav-primary" id="menu" title="Menu">
					<i class="fa fa-bars"></i>
				</a>

				<!-- 	Logo & Title 	-->
				<a href="../" class="nav-brand" data-toggle="fullscreen" title="Fullscreen Mode">
					<img src="../img/logo_60x60.png" alt="ScorEvents">
					<span id="site_title" class="visible-xs">{{ Config::get('constants.site_title') }}</span>
				</a>

				<!-- 	TOP (right) menu for XS 	-->
				<a class="btn btn-link visible-xs" data-toggle="collapse" data-target=".navbar-collapse" id="search" title="Search">
					<i class="fa fa-search"></i>
				</a>
			</header>

			<section>
				<!-- 	nav 	-->
				<nav class="nav-primary hidden-xs">
					<ul class="nav">

						<!-- 	User (only for XS displays) 	-->
						<li class="dropdown visible-xs">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<img src="../img/avatar_default.jpg" class="img-circle" id="user-avatar">
								<div id="user-full-name">{{ $user['first_name'].' '.$user['last_name'] }}</div>
								<b class="caret"></b>
							</a>

							<ul class="dropdown-menu animated">
								<li><a href="../account/profile">Profile</a></li>
								<li><a href="../account/settings">Settings</a></li>
								<li><a href="../auth/logout">Logout</a></li>
							</ul>
						</li>

						<!-- 	Dashboard 	-->
						<li {{ Request::is('account/dashboard') ? 'class="active"' : '' }}>
							<a href="../account/dashboard" title="Go to Dashboard">
								<i class="fa fa-list-alt"></i><span>Dashboard</span>
							</a>
						</li>

						<!-- 	Calendar 	-->
						<li {{ Request::is('account/calendar') ? 'class="active"' : '' }}>
							<a href="../account/calendar" title="Go to Calendar">
								<i class="fa fa-calendar"></i><span>Calendar</span>
							</a>
						</li>

						<!-- 	Friends 	-->
						<li {{ Request::is('account/friends') ? 'class="active"' : '' }}>
							<a href="../account/friends" title="Go to Friends">
								<i class="fa fa-group"></i><span>Friends</span>
							</a>
						</li>

						<!-- 	Map 	-->
						<li>
							<a href="../" title="Go to Map">
								<i class="fa fa-map-marker"></i><span>Map</span>
							</a>
						</li>

						<!-- 	Profile 	-->
						<li {{ Request::is('account/profile') ? 'class="active"' : '' }}>
							<a href="../account/profile" title="Go to Profile">
								<i class="fa fa-user"></i><span>Profile</span>
							</a>
						</li>

						<!-- 	Settings 	-->
						<li {{ Request::is('account/settings') ? 'class="active"' : '' }}>
							<a href="../account/settings" title="Go to Settings">
								<i class="fa fa-cogs"></i><span>Settings</span>
							</a>
						</li>

					</ul>
				</nav><!-- 	/nav 	-->

			</section>

		</section><!-- 	/.vbox 	-->
	</aside><!-- 	/aside 	-->

	<!-- 	#content 	-->
	<section id="content">
		<section class="vbox">
			<header class="header bg-black navbar navbar-inverse">
				<div class="collapse navbar-collapse pull-in">
					<ul class="nav navbar-nav m-l-n">
						<li><a href="../">Home</a></li>
						<li><a href="../">About</a></li>
						<li><a href="../">Contact Us</a></li>
					</ul>

					<!-- 	Search form 	-->
					<form class="navbar-form navbar-left m-t-sm" id="searchbar" role="search">
						<div class="form-group">
							<div class="input-group input-s-lg">
								<input type="text" class="form-control input-sm no-border bg-dark dk" placeholder="Search ..." />
								<span class="input-group-btn">
									<button type="submit" class="btn btn-sm btn-primary btn-icon"><i class="fa fa-search"></i></button>
								</span>
							</div>
						</div>
					</form>

					<!-- 	User name (hidden from XS screens) 	-->
					<ul class="nav navbar-nav navbar-right hidden-xs">					
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<img src="../img/avatar_default.jpg" class="img-circle" id="user-avatar">
								<div id="user-full-name">
									{{ $user['first_name'].' '.$user['last_name'] }}
								</div>
								<b class="caret"></b>
							</a>

							<ul class="dropdown-menu animated aside-md">
								<li><a href="../account/profile">Profile</a></li>
								<li><a href="../account/settings">Settings</a></li>
								<li><a href="../auth/logout">Logout</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</header>

			<section class="scrollable">
				<section class="hbox stretch">
					<section id="content">
						<section class="vbox">
							<header class="header bg-white" id="page-header"><p>{{ $page_title }}</p></header>
							<section class="scrollable">
								<section class="hbox stretch">
									@yield('content')
								</section>
							</section>
						</section>
					</section>
				</section>
			</section>
			
		</section>

		<a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a>
	</section><!-- 	/#content 	-->

</section><!-- 	/.hbox.stretch 	-->

<!-- 	jQuery (1.10.2) 	-->
<script src="../packages/todo-tpl/js/jquery.min.js"></script>
<!-- 	Bootstrap (3.1.1) 	-->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<!-- 	App 	-->
<script src="../packages/todo-tpl/js/app.js"></script>
<script src="../packages/todo-tpl/js/app.plugin.js"></script>
<script src="../packages/todo-tpl/js/app.data.js"></script>
<script src="../packages/todo-tpl/js/slimscroll/jquery.slimscroll.min.js" cache="false"></script>

@yield('custom_js')

</body>
</html>