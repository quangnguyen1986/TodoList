<style type="text/css">
	p, body, td { font-family: Tahoma, Arial, Helvetica, sans-serif; font-size: 10pt; }
	body { padding: 0px; margin: 0px; background-color: #ffffff; }
	a { color: #1155a3; }
	.space { margin: 10px 0px 10px 0px; }
	.header { background: #003267; background: linear-gradient(to right, #011329 0%,#00639e 44%,#011329 100%); padding:20px 10px; color: white; box-shadow: 0px 0px 10px 5px rgba(0,0,0,0.75); }
	.header a { color: white; }
	.header h1 a { text-decoration: none; }
	.header h1 { padding: 0px; margin: 0px; }
	.main { padding: 10px; margin-top: 10px; }
</style>

<style>
	.toolbar {
	  margin: 10px 0px;
	}

	.toolbar > .toolbar-item:not(:last-child) {
	  border-right: 1px solid #ccc;
	}

	.toolbar-item {
	  padding: 0px 10px;
	}

	.toolbar-item a {
	  text-decoration: none;
	  color: black;
	  display: inline-block;
	  margin-right: 5px;
	  font-size: 14px;
	}
	.selected-button {
	  border-bottom: 2px solid orange;
	}
</style>

<!-- DayPilot library -->
<script src="/todolist/webroot/js/daypilot/daypilot-all.min.js"></script>

<!-- jQuery -->
<script src="/todolist/webroot/js/jquery-1.9.1.min.js"></script>

<h1>Works</h1>
<div >
    <div style="float:left; width: 220px;">
	<div id="nav"></div>
	</div>
	<div style="margin-left: 220px;">
		<div class="toolbar buttons">
			<span class="toolbar-item"><a id="buttonDay" href="#">Day</a></span>
			<span class="toolbar-item"><a id="buttonWeek" href="#">Week</a></span>
			<span class="toolbar-item"><a id="buttonMonth" href="#">Month</a></span>
		</div>
		<div id="dpDay"></div>
		<div id="dpWeek"></div>
		<div id="dpMonth"></div>
	</div>
</div>
<!-- view calendar script -->
<script type="text/javascript">
	var day = new DayPilot.Calendar("dpDay");
	day.viewType = "Day";
	addEventHandlers(day);
	day.init();

	var week = new DayPilot.Calendar("dpWeek");
	week.viewType = "Week";
	addEventHandlers(week);
	week.init();

	var month = new DayPilot.Month("dpMonth");
	addEventHandlers(month);
	month.init();
  
	function addEventHandlers(dp) {
		<?php foreach ($works as $work) { 
			$starting_date = date("Y-m-d", strtotime($work['starting_date']))."T" .date("H:i:s", strtotime($work['starting_date']));
			$ending_date = date("Y-m-d", strtotime($work['ending_date']))."T" .date("H:i:s", strtotime($work['ending_date']));
		?>
		var e = new DayPilot.Event({
			start: '<?php echo $starting_date; ?>',
			end: '<?php echo $ending_date; ?>',
			id: '<?php echo $work['work_id']; ?>',
			text: '<?php echo $work['work_name']. " - status: ".$work['status']; ?>'
		});
		dp.events.add(e);
		<?php } ?> 
	}	
	
	var switcher = new DayPilot.Switcher({
	triggers: [
		{id: "buttonDay", view: day },
		{id: "buttonWeek", view: week},
		{id: "buttonMonth", view: month}
	],
	navigator: nav,
		selectedClass: "selected-button",
		onChanged: function(args) {
		alert(1);
		console.log("onChanged fired");
	}
	});
	switcher.select("buttonDay");
</script>