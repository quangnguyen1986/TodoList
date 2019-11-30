<h1>Edit work</h1>

<form method='post' action='/todolist/works/edit/<?php echo $work["work_id"] ?>'>
    <div class="form-group">
        <label for="work_name">Work name</label>
        <input type="text" class="form-control" id="work_name" placeholder="Enter work name" name="work_name" value ="<?php if (isset($work["work_name"])) echo $work["work_name"];?>">
    </div>

    <div class="form-group">
        <label for="starting_date">Starting date</label>
        <input type="text" class="form-control" id="starting_date" placeholder="Enter starting date" name="starting_date" value ="<?php if (isset($work["starting_date"])) echo $work["starting_date"];?>">
    </div>
	
	<div class="form-group">
        <label for="ending_date">Ending date</label>
        <input type="text" class="form-control" id="ending_date" placeholder="Enter ending date" name="ending_date" value ="<?php if (isset($work["ending_date"])) echo $work["ending_date"];?>">
    </div>
	
	<div class="form-group">
        <label for="status">Status</label>
        <input type="text" class="form-control" id="status" placeholder="Enter Status" name="status" value ="<?php if (isset($work["status"])) echo $work["status"];?>">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>