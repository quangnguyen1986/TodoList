<h1>Add new work</h1>
<form method='post' action='/todolist/works/add'>
    <div class="form-group">
        <label for="work_name">Work name</label>
        <input type="text" class="form-control" id="title" placeholder="Enter work name" name="work_name" >
    </div>

    <div class="form-group">
        <label for="starting_date">Starting date</label>
        <input type="datetime-local" class="form-control" id="starting_date" placeholder="Enter starting date" name="starting_date" >
    </div>
	
	<div class="form-group">
        <label for="ending_date">Ending date</label>
        <input type="datetime-local" class="form-control" id="ending_date" placeholder="Enter ending date" name="ending_date" >
    </div>
	
	<div class="form-group">
        <label for="status">Status</label>
        <select class="form-control" id="status" placeholder="Enter Status" name="status">
		  <option value="planing">planing</option>
		  <option value="doing">doing</option>
		  <option value="completing">completing</option>
		</select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>