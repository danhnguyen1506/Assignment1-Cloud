<?php session_start() ?>

<pre><?php print_r($_POST) ?></pre>

<?php
// Validate that each piece of info was provided
if( $_POST['id'] != '' &&
	$_POST['firstname'] != '' &&
	$_POST['lastname'] != '' &&
	$_POST['gender'] != '' &&
	$_POST['age'] != '') {
	
	// Add this band to the CSV file
	// 	(1) Open the file for writing
	$f = fopen('../data/lecturers.csv','a');
	// 	(2) Write the new band's info to the file
	fwrite($f,"\n{$_POST['id']},{$_POST['firstname']},{$_POST['lastname']},{$_POST['gender']},{$_POST['age']}");
	// 	(3) Close the file
	fclose($f);
	
	$_SESSION['message'] = array(
			'text' => 'Your band has been added.',
			'type' => 'success'
	);
	
	//Redirect to list of bands
	header('Location:../?p=list_lecturers');
} else {
	// Store submitted data into session data
	$_SESSION['POST'] = $_POST;
	
	// Store error message in session data
	$_SESSION['message'] = array(
			'text' => 'Please enter all required information... or else.',
			'type' => 'error'
	);
	
	// Redirect to the form
	header('Location:../?p=add_lecturer');
}