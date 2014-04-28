@extends('account/account_layout')

@section('custom_css')
<link rel="stylesheet" href="../packages/todo-tpl/js/calendar/bootstrap_calendar.css" type="text/css" cache="false">
@stop

@section('content')

<aside class="aside aside-lg b-r">
	<section class="vbox">
		
		<header class="header text-center"><p class="h4">{{ $page_title }}</p></header>

		<section class="wrapper">

			<div class="text-center clearfix">
				<a href="#" class="btn btn-success m-b-lg"><i class="fa fa-plus"></i> Create Event</a>
			</div>

			<div id="calendar" class="m-t-lg">
				<div class="calendar" id="cal_1t7p">

					<!-- 	Calendar header 	-->
					<table class="table header">
						<tbody><tr></tr></tbody>

						<td><i class="fa fa-arrow-left"></i></td>

						<td colspan="5" class="year span6"><div class="visualmonthyear">April 2014</div></td>

						<td><i class="fa fa-arrow-right"></i></td>

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
</aside>

<aside></aside>

@stop

@section('custom_js')

		<!-- Calendar -->
		<script src="../packages/todo-tpl/js/calendar/bootstrap_calendar.js" cache="false"></script>
		<script src="../packages/todo-tpl/js/calendar/demo.js" cache="false"></script>
		<script src="../packages/todo-tpl/js/libs/jquery.pjax.js" cache="false"></script>

@stop