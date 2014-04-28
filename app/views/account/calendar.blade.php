@extends('account/account_layout')

@section('custom_css')
<link rel="stylesheet" href="../packages/todo-tpl/js/calendar/bootstrap_calendar.css" type="text/css" cache="false">
<link rel="stylesheet" href="../packages/todo-tpl/js/datepicker/datepicker.css" type="text/css" />
<link rel="stylesheet" href="../packages/todo-tpl/js/select2/select2.css" type="text/css" />
@stop

@section('content')

<!-- 	aside (left) 	-->
<aside class="aside bg-white-only aside-lg b-r">
		<header class="header text-center"><p class="h4 font-bold">{{ $page_title }}</p></header>

		<section class="wrapper">

			<!-- 	New Event button 	-->
			<div class="text-center clearfix"><a class="btn btn-success m-b-lg"><i class="fa fa-plus"></i> New Event</a></div>

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
</aside><!-- 	./aside (left) 	-->

<!-- 	aside (right) 	-->
<aside class="" id="right-side">
	<section class="vbox">
		<section class="scrollable">
			<section class="panel hidden" style="border-left: none; border-bottom: none; height: auto; margin-bottom: 0px;">

				<!-- 	Header 	-->
				<header class="panel-heading pos-rlt" style="font-size: 18px;">
					<span class="arrow left"></span>New Event
				</header>

				<div class="panel-body">
					<form class="form-horizontal" method="get">
						<!-- 	Title 	-->
						<div class="form-group">
							<label class="col-sm-2 control-label">Title</label>
							<div class="col-sm-8">
								<input type="text" class="form-control">
							</div>
						</div>

						<!-- 	Description 	-->
						<div class="form-group">
							<label class="col-sm-2 control-label">Description</label>
							<div class="col-sm-8">
								<div id="editor" class="form-control" style="overflow:hidden;height:150px;max-height:150px">
								</div>
							</div>
						</div>

						<!-- 	Start Date 	-->
						<div class="form-group">
							<label class="col-sm-2 control-label">Start Date</label>
							<div class="col-sm-10">
								<input class="input-sm input-s datepicker-input form-control" size="16" type="text" value="28-04-2014" data-date-format="dd-mm-yyyy">
							</div>
						</div>

						<!-- 	End Date 	-->
						<div class="form-group">
							<label class="col-sm-2 control-label">End Date</label>
							<div class="col-sm-10">
								<input class="input-sm input-s datepicker-input form-control" size="16" type="text" value="28-04-2014" data-date-format="dd-mm-yyyy">
							</div>
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
							</div>
							<input type="hidden" id="select2-tags" style="width:260px" value="brown"/>
						</div>

						<!-- 	Zip 	-->
						<div class="form-group">
							<label class="col-sm-2 control-label">Zip</label>
							<div class="col-sm-10"><input type="text" class="form-control" style="width: 70px;"></div>
						</div>

						<div class="line line-dashed line-lg pull-in"></div>

						<!-- 	Age Limits 	-->
						<div class="form-group">
							<label class="col-sm-2 control-label">Age Limits</label>
							<div class="col-sm-1">
								<div class="m-b m-t-sm">
									<select id="select2-option">
										<option value="none">none</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10">10</option>
										<option value="11">11</option>
										<option value="12">12</option>
										<option value="13">13</option>
										<option value="14">14</option>
										<option value="15">15</option>
										<option value="16">16</option>
										<option value="17">17</option>
										<option value="18">18</option>
										<option value="19">19</option>
										<option value="20">20</option>
										<option value="21">21</option>
										<option value="22">22</option>
										<option value="23">23</option>
										<option value="24">24</option>
										<option value="25">25</option>
										<option value="26">26</option>
										<option value="27">27</option>
										<option value="28">28</option>
										<option value="29">29</option>
										<option value="30">30</option>
										<option value="31">31</option>
										<option value="32">32</option>
										<option value="33">33</option>
										<option value="34">34</option>
										<option value="35">35</option>
										<option value="36">36</option>
										<option value="37">37</option>
										<option value="38">38</option>
										<option value="39">39</option>
										<option value="30">30</option>
										<option value="31">31</option>
										<option value="32">32</option>
										<option value="33">33</option>
										<option value="34">34</option>
										<option value="35">35</option>
										<option value="36">36</option>
										<option value="37">37</option>
										<option value="38">38</option>
										<option value="39">39</option>
										<option value="40">40</option>
										<option value="41">41</option>
										<option value="42">42</option>
										<option value="43">43</option>
										<option value="44">44</option>
										<option value="45">45</option>
										<option value="46">46</option>
										<option value="47">47</option>
										<option value="48">48</option>
										<option value="49">49</option>
										<option value="50">50</option>
										<option value="51">51</option>
										<option value="52">52</option>
										<option value="53">53</option>
										<option value="54">54</option>
										<option value="55">55</option>
										<option value="56">56</option>
										<option value="57">57</option>
										<option value="58">58</option>
										<option value="59">59</option>
										<option value="60">60</option>
										<option value="61">61</option>
										<option value="62">62</option>
										<option value="63">63</option>
										<option value="64">64</option>
										<option value="65">65</option>
										<option value="66">66</option>
										<option value="67">67</option>
										<option value="68">68</option>
										<option value="69">69</option>
										<option value="70">70</option>
										<option value="71">71</option>
										<option value="72">72</option>
										<option value="73">73</option>
										<option value="74">74</option>
										<option value="75">75</option>
										<option value="76">76</option>
										<option value="77">77</option>
										<option value="78">78</option>
										<option value="79">79</option>
										<option value="80">80</option>
										<option value="81">81</option>
										<option value="82">82</option>
										<option value="83">83</option>
										<option value="84">84</option>
										<option value="85">85</option>
										<option value="86">86</option>
										<option value="87">87</option>
										<option value="88">88</option>
										<option value="89">89</option>
										<option value="90">90</option>
									</select>
								</div>
							</div>
							<label class="col-sm-1 control-lavel m-t-sm m-l-lg"> through </label>
							<div class="col-sm-1 m-l-lg">
								<div class="m-b m-t-sm">
									<select id="select2-option">
										<option value="none">none</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10">10</option>
										<option value="11">11</option>
										<option value="12">12</option>
										<option value="13">13</option>
										<option value="14">14</option>
										<option value="15">15</option>
										<option value="16">16</option>
										<option value="17">17</option>
										<option value="18">18</option>
										<option value="19">19</option>
										<option value="20">20</option>
										<option value="21">21</option>
										<option value="22">22</option>
										<option value="23">23</option>
										<option value="24">24</option>
										<option value="25">25</option>
										<option value="26">26</option>
										<option value="27">27</option>
										<option value="28">28</option>
										<option value="29">29</option>
										<option value="30">30</option>
										<option value="31">31</option>
										<option value="32">32</option>
										<option value="33">33</option>
										<option value="34">34</option>
										<option value="35">35</option>
										<option value="36">36</option>
										<option value="37">37</option>
										<option value="38">38</option>
										<option value="39">39</option>
										<option value="30">30</option>
										<option value="31">31</option>
										<option value="32">32</option>
										<option value="33">33</option>
										<option value="34">34</option>
										<option value="35">35</option>
										<option value="36">36</option>
										<option value="37">37</option>
										<option value="38">38</option>
										<option value="39">39</option>
										<option value="40">40</option>
										<option value="41">41</option>
										<option value="42">42</option>
										<option value="43">43</option>
										<option value="44">44</option>
										<option value="45">45</option>
										<option value="46">46</option>
										<option value="47">47</option>
										<option value="48">48</option>
										<option value="49">49</option>
										<option value="50">50</option>
										<option value="51">51</option>
										<option value="52">52</option>
										<option value="53">53</option>
										<option value="54">54</option>
										<option value="55">55</option>
										<option value="56">56</option>
										<option value="57">57</option>
										<option value="58">58</option>
										<option value="59">59</option>
										<option value="60">60</option>
										<option value="61">61</option>
										<option value="62">62</option>
										<option value="63">63</option>
										<option value="64">64</option>
										<option value="65">65</option>
										<option value="66">66</option>
										<option value="67">67</option>
										<option value="68">68</option>
										<option value="69">69</option>
										<option value="70">70</option>
										<option value="71">71</option>
										<option value="72">72</option>
										<option value="73">73</option>
										<option value="74">74</option>
										<option value="75">75</option>
										<option value="76">76</option>
										<option value="77">77</option>
										<option value="78">78</option>
										<option value="79">79</option>
										<option value="80">80</option>
										<option value="81">81</option>
										<option value="82">82</option>
										<option value="83">83</option>
										<option value="84">84</option>
										<option value="85">85</option>
										<option value="86">86</option>
										<option value="87">87</option>
										<option value="88">88</option>
										<option value="89">89</option>
										<option value="90">90</option>
									</select>
								</div>
							</div>
						</div>

						<div class="line line-dashed line-lg pull-in"></div>

						<!-- 	Status 	-->
						<div class="form-group">
							<label class="col-sm-2 control-label">Status</label>
							<div class="col-sm-6">
								<div class="m-b m-t-sm">
									<select id="select2-option">
										<option value="1">Private</option>
										<option value="">Public</option>
									</select>
								</div>
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
					</form>
				</div>
			</section>
		</section>
	</section>
</aside><!-- 	./aside (right) 	-->

@stop

@section('custom_js')
<!-- Calendar -->
<script src="../packages/todo-tpl/js/calendar/bootstrap_calendar.js" cache="false"></script>
<script src="../packages/todo-tpl/js/calendar/demo.js" cache="false"></script>
<script src="../packages/todo-tpl/js/libs/jquery.pjax.js" cache="false"></script>
<!-- 	Datepicker 	-->
<script src="../packages/todo-tpl/js/datepicker/bootstrap-datepicker.js"></script>
<!-- 	Select2 	-->
<script src="../packages/todo-tpl/js/select2/select2.min.js" cache="false"></script>

<script type="text/javascript">
$("a.btn").click(function(){
	$("aside#right-side").toggleClass("bg-white");
	$("section.panel").toggleClass("hidden");
});
</script>
@stop