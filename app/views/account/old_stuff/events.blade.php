@extends('layouts/account')

@section('custom_styles')
<style type="text/css">
	textarea {
		max-width: 500px;
	}
	thead tr td {
		font-weight: bold;
	}
</style>
@stop


@section('page_content')
<!-- Nav tabs -->
<ul class="nav nav-tabs" id="myTab">
	<li class="active"><a href="#myevents" data-toggle="tab">My Events</a></li>
	<li><a href="#accepted" data-toggle="tab">Accepted</a></li>
	<li><a href="#invited" data-toggle="tab">Invited (4)</a></li>
	<li><a href="#newevent" data-toggle="tab">Create Event</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content" id="myTabContent">
	<!-- My Events Pane -->
	<div class="tab-pane fade in active" id="myevents">
		<br>
		<table class="table table-striped">
			<thead>
				<tr>
					<td>Name/Title</td>
					<td>Age Restrictios</td>
					<td>Starts</td>
					<td>Ends</td>
					<td>Status</td>
					<td>Actions</td>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Group Meeting #3</td>
					<td>None</td>
					<td>9:50 am <br> Feb 19, 2014</td>
					<td>10:30 am <br> Feb 19, 2014</td>
					<td>Upcoming</td>
					<td><a href="#">View</a><br><a href="#">Edit</a></td>
				</tr>
				<tr>
					<td>Pizza Party</td>
					<td>None</td>
					<td>12:30 am <br> Feb 19, 2014</td>
					<td>1:30 am <br> Feb 19, 2014</td>
					<td>Upcoming</td>
					<td><a href="#">View</a><br><a href="#">Edit</a></td>
				</tr>
				<tr>
					<td>Group Meeting #2</td>
					<td>None</td>
					<td>9:50 am <br> Feb 17, 2014</td>
					<td>10:30 am <br> Feb 17, 2014</td>
					<td>Ended</td>
					<td><a href="#">View</a><br><a href="#">Edit</a></td>
				</tr>
			</tbody>
		</table>
	</div><!-- /#myevents -->

	<!-- Accepted Pane -->
	<div class="tab-pane fade in active" id="accepted">
		<br>

	</div><!-- /#accepted -->

	<!-- Invited Pane -->
	<div class="tab-pane fade in active" id="invited">
		<br>

	</div><!-- /#invited -->

	<!-- New Event Pane -->
	<div class="tab-pane fade" id="newevent">
		<br/>

		<form role="form" style="max-width: 50%;">
			<div class="form-group">
				<label for="name">Name/Title *</label>
				<input type="text" class="form-control" id="name" placeholder="Event Name/Title">
			</div>

			<div class="form-group">
				<label for="description">Event Description</label>
				<textarea class="form-control" rows="3" id="description"></textarea>
			</div>

			<div class="form-group">
				<label for="age-restriction">Age Restrictions</label>
				<br>
				<select class="form-control" style="max-width: 80px; display: inline;">
					<option>From</option>
					<option>1</option>
				</select>
				<select class="form-control" style="max-width: 80px; display: inline;">
					<option>To</option>
					<option>1</option>
				</select>
			</div>

			<div class="form-group" style="width: 200%; display: inline-block;">
				<label for="description">Event Begins *</label>
				<br>
				Date:&nbsp&nbsp&nbsp
				<input type="text" id="datepicker">
				&nbsp&nbsp&nbspTime:&nbsp&nbsp&nbsp
				<select class="form-control" style="max-width: 80px; display: inline;">
					<option>9 am</option>
					<option>12 am</option>
				</select>
				<select class="form-control" style="max-width: 60px; display: inline;">
					<option>00</option>
					<option>01</option>
				</select>
			</div>

			<div class="form-group" style="width: 200%; display: inline-block;">
				<label for="description">Event Ends *</label>
				<br>
				Date:&nbsp&nbsp&nbsp
				<input type="text" id="datepicker">
				&nbsp&nbsp&nbspTime:&nbsp&nbsp&nbsp
				<select class="form-control" style="max-width: 80px; display: inline;">
					<option>9 am</option>
					<option>12 am</option>
				</select>
				<select class="form-control" style="max-width: 60px; display: inline;">
					<option>00</option>
					<option>01</option>
				</select>
			</div>
			
			<hr>

			<div class="form-group">
				<button type="submit" class="btn btn-lg btn-default">Cancel</button>
				<button type="submit" class="btn btn-lg btn-primary">Create Event</button>
			</div>
		</form>
	</div><!-- /#newevent -->
</div>
@stop