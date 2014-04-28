@extends('account/account_layout')

@section('custom_css')
<link rel="stylesheet" href="../packages/todo-tpl/js/calendar/bootstrap_calendar.css" type="text/css" cache="false">
@stop

@section('content')

<!-- 	aside (left) 	-->
<aside class="aside aside-lg b-r">
	<section class="vbox">
		
		<header class="header text-center"><p class="h4">{{ $page_title }}</p></header>

		<section class="wrapper">

			<div class="text-center clearfix">
				<a class="btn btn-success m-b-lg"><i class="fa fa-plus"></i> Create Event</a>
			</div>

			<div id="calendar" class="m-t-lg">
				<div class="calendar" id="cal_1t7p">

					<!-- 	Calendar header 	-->
					<table class="table header">
						<tbody>
							<tr>
								<td><i class="fa fa-arrow-left"></i></td>

								<td colspan="5" class="year span6"><div class="visualmonthyear">April 2014</div></td>

								<td><i class="fa fa-arrow-right"></i></td>
							</tr>
						</tbody>
					</table>

					<!-- 	Calendar 	-->
					<table class="daysmonth table table">
						<tbody>
							<tr class="week_days">
								<td class="first">S</td>
								<td>M</td>
								<td>T</td>
								<td>W</td>
								<td>T</td>
								<td>F</td>
								<td class="last">S</td>
							</tr>
							<tr>
								<td class="invalid first"></td>
								<td class="invalid"></td>
								<td id="cal_1t7p_1_4_2014"><a>1</a></td>
								<td id="cal_1t7p_2_4_2014"><a>2</a></td>
								<td id="cal_1t7p_3_4_2014"><a>3</a></td>
								<td id="cal_1t7p_4_4_2014"><a>4</a></td>
								<td id="cal_1t7p_5_4_2014" class="last"><a>5</a></td>
							</tr>
							<tr>
								<td id="cal_1t7p_6_4_2014" class="first"><a>6</a></td>
								<td id="cal_1t7p_7_4_2014"><a>7</a></td>
								<td id="cal_1t7p_8_4_2014"><a>8</a></td>
								<td id="cal_1t7p_9_4_2014"><a>9</a></td>
								<td id="cal_1t7p_10_4_2014"><a>10</a></td>
								<td id="cal_1t7p_11_4_2014"><a>11</a></td>
								<td id="cal_1t7p_12_4_2014" class="last"><a>12</a></td>
							</tr>
							<tr>
								<td id="cal_1t7p_13_4_2014" class="first"><a>13</a></td>
								<td id="cal_1t7p_14_4_2014"><a>14</a></td>
								<td id="cal_1t7p_15_4_2014"><a>15</a></td>
								<td id="cal_1t7p_16_4_2014"><a>16</a></td>
								<td id="cal_1t7p_17_4_2014"><a>17</a></td>
								<td id="cal_1t7p_18_4_2014"><a>18</a></td>
								<td id="cal_1t7p_19_4_2014" class="last"><a>19</a></td>
							</tr>
							<tr>
								<td id="cal_1t7p_20_4_2014" class="first"><a>20</a></td>
								<td id="cal_1t7p_21_4_2014"><a>21</a></td>
								<td id="cal_1t7p_22_4_2014"><a>22</a></td>
								<td id="cal_1t7p_23_4_2014"><a>23</a></td>
								<td id="cal_1t7p_24_4_2014"><a>24</a></td>
								<td id="cal_1t7p_25_4_2014"><a>25</a></td>
								<td id="cal_1t7p_26_4_2014" class="last"><a>26</a></td>
							</tr>
							<tr>
								<td id="cal_1t7p_27_4_2014" class="first"><a>27</a></td>
								<td id="cal_1t7p_28_4_2014"><a>28</a></td>
								<td id="cal_1t7p_29_4_2014"><a>29</a></td>
								<td id="cal_1t7p_30_4_2014"><a>30</a></td>
								<td class="invalid"></td>
								<td class="invalid"></td>
								<td class="invalid last"></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>

			<!-- 	Events for the day 	-->
			<div class="list-group bg-white">
				<a href="#" class="list-group-item text-ellipsis">
					<span class="badge bg-danger">7:30</span>Meet a friend
				</a>
				
				<a href="#" class="list-group-item text-ellipsis">
					<span class="badge bg-success">9:30</span>Have a kick off meeting with .inc company
				</a>
				
				<a href="#" class="list-group-item text-ellipsis">
					<span class="badge bg-light">19:30</span>Milestone release
				</a>
			</div>

		</section><!-- 	./wrapper 	-->
	</section><!-- 	./vbox 	-->
</aside><!-- 	./aside (left) 	-->

<!-- 	aside (right) 	-->
<aside style="background-color: #f3f5f9;">
	<section id="right-side" class="vbox hidden" style="background-color: white;">
		<section class="panel" style="border-left: none;">
			<!-- 	Header 	-->
			<header class="panel-heading font-bold text-center" style="font-size: 18px;">
				<span class="arrow left"></span>
				Create Event
			</header>

			<div class="panel-body">
				<form class="form-horizontal" method="get">
					<!-- 	Title 	-->
					<div class="form-group">
						<label class="col-sm-2 control-label">Title</label>
						<div class="col-sm-8"><input type="text"  class="form-control"></div>
					</div>

					<div class="line line-dashed line-lg pull-in"></div>

					<!-- 	Address 	-->
					<div class="form-group">
						<label class="col-sm-2 control-label">Address</label>
						<div class="col-sm-8"><input type="text"  class="form-control"></div>
					</div>

					<!-- 	City 	-->
					<div class="form-group">
						<label class="col-sm-2 control-label">City</label>
						<div class="col-sm-8"><input type="text"  class="form-control"></div>
					</div>

					<!-- 	State 	-->
					<div class="form-group">
						<label class="col-sm-2 control-label">State</label>
							<div class="col-sm-10">
								<div class="m-b m-t-sm">
									<select id="select2-option" style="width:260px">
										<optgroup label="Alaskan/Hawaiian Time Zone">
											<option value="AK">Alaska</option>
											<option value="HI">Hawaii</option>
										</optgroup>
										<optgroup label="Pacific Time Zone">
											<option value="CA">California</option>
											<option value="NV">Nevada</option>
											<option value="OR">Oregon</option>
											<option value="WA">Washington</option>
										</optgroup>
										<optgroup label="Mountain Time Zone">
											<option value="AZ">Arizona</option>
											<option value="CO">Colorado</option>
											<option value="ID">Idaho</option>
											<option value="MT">Montana</option>
											<option value="NE">Nebraska</option>
											<option value="NM">New Mexico</option>
											<option value="ND">North Dakota</option>
											<option value="UT">Utah</option>
											<option value="WY">Wyoming</option>
										</optgroup>
										<optgroup label="Central Time Zone">
											<option value="AL">Alabama</option>
											<option value="AR">Arkansas</option>
											<option value="IL">Illinois</option>
											<option value="IA">Iowa</option>
											<option value="KS">Kansas</option>
											<option value="KY">Kentucky</option>
											<option value="LA">Louisiana</option>
											<option value="MN">Minnesota</option>
											<option value="MS">Mississippi</option>
											<option value="MO">Missouri</option>
											<option value="OK">Oklahoma</option>
											<option value="SD">South Dakota</option>
											<option value="TX">Texas</option>
											<option value="TN">Tennessee</option>
											<option value="WI">Wisconsin</option>
										</optgroup>
										<optgroup label="Eastern Time Zone">
											<option value="CT">Connecticut</option>
											<option value="DE">Delaware</option>
											<option value="FL">Florida</option>
											<option value="GA">Georgia</option>
											<option value="IN">Indiana</option>
											<option value="ME">Maine</option>
											<option value="MD">Maryland</option>
											<option value="MA">Massachusetts</option>
											<option value="MI">Michigan</option>
											<option value="NH">New Hampshire</option>
											<option value="NJ">New Jersey</option>
											<option value="NY">New York</option>
											<option value="NC">North Carolina</option>
											<option value="OH">Ohio</option>
											<option value="PA">Pennsylvania</option>
											<option value="RI">Rhode Island</option>
											<option value="SC">South Carolina</option>
											<option value="VT">Vermont</option>
											<option value="VA">Virginia</option>
											<option value="WV">West Virginia</option>
										</optgroup>
									</select>
								</div>
							<div>
						<input type="hidden" id="select2-tags" style="width:260px" value="brown"/>
					</div>

					<div class="line line-dashed line-lg pull-in"></div>

					<!-- 	Submit changes 	-->
					<div class="form-group">
						<div class="col-sm-12 col-sm-offset-2">
							<button type="submit" class="btn btn-white">Cancel</button>
							<button type="submit" class="btn btn-primary m-l-lg">Create Event</button>
						</div>
					</div>
				</form>
			</div>
		</section>

	</section>
</aside><!-- 	./aside (right) 	-->

@stop

@section('custom_js')
		<!-- Calendar -->
		<script src="../packages/todo-tpl/js/calendar/bootstrap_calendar.js" cache="false"></script>
		<script src="../packages/todo-tpl/js/calendar/demo.js" cache="false"></script>
		<script src="../packages/todo-tpl/js/libs/jquery.pjax.js" cache="false"></script>

		<script type="text/javascript">
		$("a.btn").click(function(){
			$("section#right-side").toggleClass("hidden");
		});
		</script>
@stop