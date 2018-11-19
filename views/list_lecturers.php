<h2>List of Lecturers</h2>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Id</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Gender</th>
				<th>Age</th>
				<th>Edit / Delete</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			// Read all lines of the CSV file into an array
			$lines = file('data/lecturers.csv',FILE_IGNORE_NEW_LINES);
			// Counter variable for line number
			$i = 0;
			//Iterate over the array of lines
			foreach($lines as $line) {
				$parts = explode(',',$line);
				$Id = $parts[0];
				$FirstName = $parts[1];
				$LastName = $parts[2];
				$Gender = $parts[3];
				$Age = $parts[4];
				echo '<tr>';
				echo 	"<td>$Id</td>";
				echo 	"<td>$FirstName</td>";
				echo 	"<td>$LastName</td>";
				echo 	"<td>$Gender</td>";
				echo 	"<td>$Age</td>";
				echo 	"<td><a class=\"btn btn-warning\" href=\"./?p=form_edit_lecturer&lecturer=$i\"><i class=\"icon-edit icon-white\"></i></a> <a class=\"btn btn-danger\" href=\"actions/delete_lecturer.php?linenum=$i\"><i class=\"icon-trash icon-white\"></i></a></td>";
				echo '</tr>';			
				$i++;
			}
			?>
		</tbody>
	</table>