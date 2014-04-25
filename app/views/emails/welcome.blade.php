<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html" charset="UTF-8">
	<style>
		/* ScorEvents sign */
		a.nav-brand {
			margin-top: 60px;
			font-size: 40px;
			color: gray;
			text-decoration: none;
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

		a.important_link {
			color: #0072C6;
			font-weight: bold;
		}

		a#footer {
			color: #0072C6;
			font-weight: bold;
			text-decoration: none;
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
</head>

<body>

	<div class="container">
		<!-- 	Website title 	-->
		<a class="nav-brand m-b-sm" href="{{ secure_url('/') }}">
			{{ Config::get('constants.site_title') }}
		</a>

		<div class="row">
			<div class="col-xs-12 col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2">
				<h3>Hello {{ $first_name }} {{ $last_name }}!</h3>

				<p>
					Welcome to ScorEvents! To complete your registration, please proceed to the following <a class="important_link" href="{{ secure_url('auth/activate') }}/{{ $id }}/{{ $activation_key }}">activation link</a> or enter it directly into your browser:
				</p>

				<p>{{ secure_url('auth/activate') }}/{{ $id }}/{{ $activation_key }}</p>
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