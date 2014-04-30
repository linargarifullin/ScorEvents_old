@extends('account/account_layout')

@section('custom_css')
  <link rel="stylesheet" href="../packages/todo-tpl/js/calendar/bootstrap_calendar.css" type="text/css" />
  <link rel="stylesheet" href="../packages/todo-tpl/js/datepicker/datepicker.css" type="text/css" />
  <link rel="stylesheet" href="../packages/todo-tpl/js/slider/slider.css" type="text/css" />
  <link rel="stylesheet" href="../css/calendar.css" type="text/css" />
@stop

@section('content')

<aside class="aside-lg bg-light lter b-r">
	<section class="vbox">
		<section class="scrollable">

		<div class="wrapper b-t">

			<!--  New Event button  -->
			<div class="text-center clearfix">
			<a class="btn btn-success m-b-lg"><i class="fa fa-plus"></i>&nbsp;&nbsp;New Event</a>
			</div>

			<!--  Calendar  -->
			<div id="calendar" class="m-t-lg">
				<div class="calendar" id="cal_1t7p">

				<!--  Calendar header   -->
				<table class="table header">
					<tbody><tr></tr></tbody>
					<td><i class="fa fa-arrow-left"></i></td>
					<td colspan="5" class="year span6"><div class="visualmonthyear">April 2014</div></td>
					<td><i class="fa fa-arrow-right"></i></td>
				</table>

				<!--  Calendar body   -->
				<table class="daysmonth table table">
				 <tbody>
				   <!--  Days of the week  -->
				   <tr class="week_days">
				     <td class="first">S</td>
				     <td>M</td>
				     <td>T</td>
				     <td>W</td>
				     <td>T</td>
				     <td>F</td>
				     <td class="last">S</td>
				   </tr>
				   <!--  Dates   -->
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

			<!--  Events for the day  -->
			<div class="list-group bg-white" id="event-list">
				@if (! empty($events->get(0)))
					@foreach ($events->all() as $event)
						<a href="{{ '?id='.$event['event_id'] }}" class="list-group-item" id="display-event">
							<!--  event time  -->
							<span class="badge bg-danger" id="event-time">
								{{ date('g:i A', strtotime($event['start_time'])) }}
							</span>
							<!--  event title   -->
							<span class="text-ellipsis" id="event-title">
								{{ $event['title'] }}
							</span>
						</a>
					@endforeach
				@else
					<div class="text-center">No events</div>
				@endif
			</div>
		</div>
		</section>
	</section>
</aside>


<aside class="bg-white b-t" id="main-aside">
	<section class="vbox">

		<!-- 	CREATE EVENT 	-->
		<header class="panel-heading pos-rlt font-bold {{ $errors->any() ? '' : 'hidden' }}" id="create-event" style="font-size: 16px;">
			<span class="arrow left"></span>New Event
		</header>

		<!-- 	EVENT INFO 	-->
		<header class="header bg-light bg-gradient {{ isset($_GET['id']) ? '' : 'hidden' }}" id="display-event">
			<ul class="nav nav-tabs nav-white">
				<li class="active"><a href="#activity" data-toggle="tab">Event</a></li>
				<li class=""><a href="#events" data-toggle="tab">Guests</a></li>
			</ul>
		</header>

		<section class="scrollable">

			<section class="panel {{ $errors->any() ? '' : 'hidden' }}" id="create-event">
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
						@endif
					</div>
				</div>

				<div class="panel-body">

					{{ Form::open(['class' => 'form-horizontal', 'url' => '../account/calendar', 'autocomplete' => 'on']) }}

						<!-- 	Title 	-->
						<div class="form-group">
							<label class="col-sm-2 control-label">Title *</label>
							<div class="col-sm-8">
								<input type="text" name="title" class="form-control m-b" tabindex="1" autofocus />
							</div>
						</div>

						<!-- 	Description 	-->
						<div class="form-group">
							<label class="col-sm-2 control-label">Description</label>
							<div class="col-sm-8">
								<textarea class="form-control m-b" tabindex="2" name="description" style="max-width:100% !important;height:75px;max-height:75px;"></textarea>
							</div>
						</div>

						<div class="line line-dashed line-lg pull-in"></div>

						<!-- 	Starts 	-->
						<div class="form-group">
							<label class="col-sm-2 control-label">Starts *</label>
							<div class="col-sm-10">
								<!-- 	Date 	-->
								<input class="datepicker-input form-control inline" size="16" type="text" value="2014-04-30" data-date-format="yyyy-mm-dd" name="start_date" tabindex="3" />

								<!-- 	Time 	-->
								<span>&nbsp;&nbsp;-&nbsp;&nbsp;
									<!-- 	hour 	-->
									<select class="hour form-control inline" name="start_hour" tabindex="4" style="width: auto;">
										<option value="12">12</option>
										@for ($i = 1; $i < 12; $i++)
											<option value="{{ $i }}">{{ ($i < 10 ? '0' : '').$i }}</option>
										@endfor
									</select>&nbsp;&nbsp;:&nbsp;

									<!-- 	minute 	-->
									<select class="minute form-control inline" name="start_minute" tabindex="5" style="width: auto;">
										<option value="00">00</option>
										@for ($i = 5; $i < 60; $i += 5)
											<option value="{{ ($i < 10 ? '0' : '').$i }}">{{ ($i < 10 ? '0' : '').$i }}</option>
										@endfor
									</select>&nbsp;&nbsp;

									<!-- 	AM/PM 	-->
									<select class="ampm form-control inline" name="start_ampm" tabindex="6" style="width: auto;">
										<option value="PM">PM</option>
										<option value="AM">AM</option>
									</select>
								</span>
							</div>
						</div>

						<!-- 	Ends 	-->
						<div class="form-group">
							<label class="col-sm-2 control-label">Ends *</label>
							<div class="col-sm-10">
								<!-- 	Date 	-->
								<input class="datepicker-input form-control inline" size="16" type="text" value="2014-04-30" data-date-format="yyyy-mm-dd" name="end_date" tabindex="7" />

								<!-- 	Time 	-->
								<span>&nbsp;&nbsp;-&nbsp;&nbsp;
									<!-- 	hour 	-->
									<select class="hour form-control inline" name="end_hour" tabindex="8" style="width: auto;">
										<option value="12">12</option>
										@for ($i = 1; $i < 12; $i++)
											<option value="{{ $i }}">{{ ($i < 10 ? '0' : '').$i }}</option>
										@endfor
									</select>&nbsp;&nbsp;:&nbsp;

									<!-- 	minute 	-->
									<select class="minute form-control inline" name="end_minute" tabindex="9" style="width: auto;">
										<option value="00">00</option>
										@for ($i = 5; $i < 60; $i += 5)
											<option value="{{ ($i < 10 ? '0' : '').$i }}">{{ ($i < 10 ? '0' : '').$i }}</option>
										@endfor
									</select>&nbsp;&nbsp;

									<!-- 	AM/PM 	-->
									<select class="ampm form-control inline" name="end_ampm" tabindex="10" style="width: auto;">
										<option value="PM">PM</option>
										<option value="AM">AM</option>
									</select>
								</span>
							</div>
						</div>

						<div class="line line-dashed line-lg pull-in"></div>

						<!-- 	Address 	-->
						<div class="form-group">
							<label class="col-sm-2 control-label">Address *</label>
							<div class="col-sm-8">
								<input type="text" name="address" class="form-control m-b" tabindex="11" />
							</div>
						</div>

						<!-- 	City 	-->
						<div class="form-group">
							<label class="col-sm-2 control-label">City *</label>
							<div class="col-sm-8">
								<input type="text" name="city" class="form-control m-b" tabindex="12" />
							</div>
						</div>

						<!-- 	State 	-->
						<div class="form-group">
							<label class="col-sm-2 control-label">State *</label>
							<div class="col-sm-10">
									<select class="form-control m-b" name="state" style="width:180px" tabindex="13">
										<option value="">select</option>
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
						</div>

						<!-- 	Zip 	-->
						<div class="form-group">
							<label class="col-sm-2 control-label">Zip *</label>
							<div class="col-sm-10">
								<input type="text" class="form-control m-b" name="zip" tabindex="14" style="width: 70px;" />
							</div>
						</div>

						<div class="line line-dashed line-lg pull-in"></div>

						<!-- 	Age Limits 	-->
						<div class="form-group">
							<label class="col-sm-2 control-label">Age Limit</label>
							<div class="col-sm-10">
								<select class="form-control m-b inline" name="min_age" tabindex="15" style="width: auto;">
									<option value="">Min</option>
									@for ($i = 1; $i < 100; $i++)
										<option value="{{ $i }}">{{ $i }}</option>
									@endfor
								</select>
								&nbsp;&nbsp;-&nbsp;&nbsp;
								<select class="form-control m-b inline" name="max_age" tabindex="16" style="width: auto;">
									<option value="">Max</option>
									@for ($i = 1; $i < 100; $i++)
										<option value="{{ $i }}">{{ $i }}</option>
									@endfor
								</select>
							</div>
						</div>

						<!-- 	Status 	-->
						<div class="form-group">
							<label class="col-sm-2 control-label">Status *</label>
							<div class="col-sm-10">
								<select class="form-control m-b" name="status" tabindex="17" style="width: auto;">
									@foreach ($statuses as $status)
										<option value="{{ $status->status_id }}">{{ $status->title }}</option>
									@endforeach
								</select>
							</div>
						</div>

						<div class="line line-dashed line-lg pull-in"></div>

						<!-- 	Submit changes 	-->
						<div class="form-group">
							<div class="col-sm-12 col-sm-offset-2">
								<a href="#" class="btn btn-white">Cancel</a>
								<button type="submit" class="btn btn-primary m-l-lg">Create</button>
							</div>
						</div>
					{{ Form::close() }}
				</div>
			</section>



			<div class="tab-content {{ isset($_GET['id']) ? '' : 'hidden' }}" id="display-event">
				<div class="tab-pane active" id="activity">

					<div class="wrapper m-t-md">
							<small class="text-uc text-xs text-muted">Title</small>
							<p class="m-l-lg">{{ empty($event_info) ? '' : $event_info['title'] }}</p>

							<small class="text-uc text-xs text-muted">Description</small>
							<p class="m-l-lg">{{ empty($event_info['description']) ? 'None' : $event_info['description'] }}</p>

							<small class="text-uc text-xs text-muted">Starts</small>
							<p class="m-l-lg">{{ empty($event_info) ? '' : date('g:i A D, M d Y', strtotime($event_info['start_time'])) }}</p>

							<small class="text-uc text-xs text-muted">Ends</small>
							<p class="m-l-lg">{{ empty($event_info) ? '' : date('g:i A D, M d Y', strtotime($event_info['end_time'])) }}</p>
					</div>

					<div class="wrapper">
						<section class="panel m-t-md">
							<form>
								<textarea class="form-control no-border" rows="3" placeholder="Leave a comment..."></textarea>
							</form>

							<footer class="panel-footer bg-light lter">
								<button class="btn btn-info pull-right btn-sm">POST</button>
					
								<ul class="nav nav-pills nav-sm">
									<li><a href="#"><i class="fa fa-camera"></i></a></li>
									<li><a href="#"><i class="fa fa-video-camera"></i></a></li>
								</ul>
							</footer>
						</section>
					</div>

					<ul class="list-group no-radius m-b-none m-t-n-xxs list-group-lg no-border">
						<li class="list-group-item">
							<a href="#" class="thumb-sm pull-left m-r-sm">
								<img src="../img/avatar_default.jpg" class="img-circle" id="user_avatar">
							</a>
							<a href="#" class="clear">
								<small class="pull-right">3 minuts ago</small>
								<strong class="block">Drew Wllon</strong>
								<small>Wellcome and play this web application template ... </small>
							</a>
						</li>
					
						<li class="list-group-item">
							<a href="#" class="thumb-sm pull-left m-r-sm">
								<img src="../img/avatar_default.jpg" class="img-circle" id="user_avatar">
							</a>
							<a href="#" class="clear">
								<small class="pull-right">1 hour ago</small>
								<strong class="block">Jonathan George</strong>
								<small>Morbi nec nunc condimentum...</small>
							</a>
						</li>
					
						<li class="list-group-item">
							<a href="#" class="thumb-sm pull-left m-r-sm">
								<img src="../img/avatar_default.jpg" class="img-circle" id="user_avatar">
							</a>
							<a href="#" class="clear">
								<small class="pull-right">1 day ago</small>
								<strong class="block">Jack Dorsty</strong>
								<small>Morbi nec nunc condimentum...</small>
							</a>
						</li>
					
						<li class="list-group-item">
							<a href="#" class="thumb-sm pull-left m-r-sm">
								<img src="../img/avatar_default.jpg" class="img-circle" id="user_avatar">
							</a>
							<a href="#" class="clear">
								<small class="pull-right">3 days ago</small>
								<strong class="block">Morgen Kntooh</strong>
								<small>Mobile first web app for startup...</small>
							</a>
						</li>
					
						<li class="list-group-item">
							<a href="#" class="thumb-sm pull-left m-r-sm">
								<img src="../img/avatar_default.jpg" class="img-circle" id="user_avatar">
							</a>
							<a href="#" class="clear">
								<small class="pull-right">2 hours ago</small>
								<strong class="block">Josh Long</strong>
								<small>Vestibulum ullamcorper sodales nisi nec...</small>
							</a>
						</li>
					
						<li class="list-group-item">
							<a href="#" class="thumb-sm pull-left m-r-sm">
								<img src="../img/avatar_default.jpg" class="img-circle" id="user_avatar">
							</a>
							<a href="#" class="clear">
								<small class="pull-right">1 day ago</small>
								<strong class="block">Jack Dorsty</strong>
								<small>Morbi nec nunc condimentum...</small>
							</a>
						</li>
					
						<li class="list-group-item">
							<a href="#" class="thumb-sm pull-left m-r-sm">
								<img src="../img/avatar_default.jpg" class="img-circle" id="user_avatar">
							</a>
							<a href="#" class="clear">
								<small class="pull-right">3 days ago</small>
								<strong class="block">Morgen Kntooh</strong>
								<small>Mobile first web app for startup...</small>
							</a>
						</li>
					</ul>
				</div>
	
				<div class="tab-pane" id="events">
					<div class="text-center wrapper">
						<i class="fa fa-spinner fa fa-spin fa fa-large"></i>
					</div>
				</div>
		
				<div class="tab-pane" id="interaction">
					<div class="text-center wrapper">
						<i class="fa fa-spinner fa fa-spin fa fa-large"></i>
					</div>
				</div>
			</div>
		</section>
	</section>
</aside>


@stop


@section('custom_js')
  <!--  datepicker  -->
  <script src="../packages/todo-tpl/js/datepicker/bootstrap-datepicker.js"></script>
  <!--  slider  -->
  <script src="../packages/todo-tpl/js/slider/bootstrap-slider.js"></script>
  <!--  calendar  -->
  <script src="../packages/todo-tpl/js/calendar/bootstrap_calendar.js" cache="false"></script>
  <script src="../packages/todo-tpl/js/libs/jquery.pjax.js" cache="false"></script>

  <!--  New Event button handling   -->
  <script type="text/javascript">
    $("a.btn").click(function(){
      $("header#display-event").addClass("hidden");
      $("div#display-event").addClass("hidden");
      $("header#create-event").toggleClass("hidden");
      $("section#create-event").toggleClass("hidden");
    });
  </script>

@stop