<?php 
$lines = file('data/lecturers.csv',FILE_IGNORE_NEW_LINES);

// Get the lecturer association with the 'lecturer' parameter in the query string
$lecturer = explode(',',$lines[$_GET['lecturer']]);
?>

<h2>Edit Lecturer</h2>
<form class="form-horizontal" action="actions/edit_lecturer.php" method="post">
	<input type="hidden" name="linenum" value="<?php echo $_GET['lecturer'] ?>" />
	<div class="control-group">
		<label class="control-label" for="id">Id</label>
		<div class="controls">
			<?php echo input('id','required',$lecturer[0]) ?>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="firstname">First Name</label>
		<div class="controls">
			<?php echo input('firstname','required',$lecturer[1]) ?>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="lastname">Last Name</label>
		<div class="controls">
			<?php echo input('lastname','required',$lecturer[2]) ?>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="gender">Gender</label>
		<div class="controls">
			<?php echo input('gender','required',$lecturer[3])?>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="age">Age</label>
		<div class="controls">
			<?php echo input('age','required',$lecturer[4])?>
		</div>
	</div>
	<div class="form-actions">
		<button type="submit" class="btn btn-warning"><i class="icon-edit icon-white"></i> Edit Lecturer</button>
		<button type="button" class="btn">Cancel</button>
	</div>
</form>