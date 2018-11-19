<h2>Add a lecturer</h2>
<!-- There are two ways to sumbit data from forms to the web server:
	- Get: use when submitting somthing that won't change the server state
	- Post: use when submitting something that will change something on the 
			  server (such as a data file) -->
<form class="form-horizontal" action="actions/form_add_lecturer.php" method="post">
	<div class="control-group">
		<label class="control-label" for="id">Id</label>
		<div class="controls">
			<?php echo input('id','required')?>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="firstname">First Name</label>
		<div class="controls">
			<?php echo input('firstname','required')?>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="lastname">Last Name</label>
		<div class="controls">
			<?php echo input('lastname','required')?>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="gender">Gender</label>
		<div class="controls">
			<?php echo input('gender','required')?>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="age">Age</label>
		<div class="controls">
			<?php echo input('age','required')?>
		</div>
	</div>
	<div class="form-actions">
  		<button type="submit" class="btn btn-success"><i class="icon-plus-sign icon-white"></i> Add Lecturer</button>
  		<button type="button" class="btn">Cancel</button>
	</div>
</form>