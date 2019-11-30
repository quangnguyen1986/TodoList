<h1>Works</h1>
<div class="row col-md-12 centered">
    <table class="table table-striped custab">
        <thead>
        <a href="/todolist/works/add/" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new work</a>&nbsp;&nbsp;
        <a href="/todolist/works/viewcalendar/" class="btn btn-primary btn-xs pull-right"><b></b> View works on Calendar</a>
        
		<tr>
            <th>Work id</th>
            <th>Work Name</th>
            <th>Starting Date</th>
			<th>End Date</th>
			<th>Status</th>
            <th class="text-center">Action</th>
        </tr>
        </thead>
        <?php
        foreach ($works as $work)
        {
            echo '<tr>';
            echo "<td>" . $work['work_id'] . "</td>";
            echo "<td>" . $work['work_name'] .  "</td>";
            echo "<td>" . $work['starting_date'] . "</td>";
			echo "<td>" . $work['ending_date'] . "</td>";
			echo "<td>" . $work['status'] . "</td>";
            echo "<td class='text-center'><a class='btn btn-info btn-xs' href='/todolist/works/edit/" . $work["work_id"] . "' ><span class='glyphicon glyphicon-edit'></span> Edit</a> <a href='/todolist/works/delete/" . $work["work_id"] . "' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span> Del</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>