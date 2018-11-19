<?php session_start();
// Validate that each piece of info was provided
if( $_POST['id'] != '' &&
	$_POST['firstname'] != '' &&
	$_POST['lastname'] != '' &&
	$_POST['gender'] != '' &&
	$_POST['age'] != '') {




    // 	(2) Write the new line info to the file
    $array = file('gs://s3635085-a1-cloudcomputing/lecturers.csv', FILE_IGNORE_NEW_LINES);
    $length = count($array);
    $array[$length] = "{$_POST['id']},{$_POST['firstname']},{$_POST['lastname']},{$_POST['gender']},{$_POST['age']}";
    $data = implode("\n",$array);
    $f = fopen('gs://s3635085-a1-cloudcomputing/lecturers.csv','w');
    fwrite($f,$data);
    fclose($f);

	
	$_SESSION['message'] = array(
			'text' => 'Added successful.',
			'type' => 'success'
	);
	
	//Redirect to list of lecturers
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