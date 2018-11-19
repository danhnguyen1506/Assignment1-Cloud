<?php
session_start();
// Read file into array
$lines = file('../data/lecturers.csv', FILE_IGNORE_NEW_LINES);

// Replace line with new values
$lines[$_POST['linenum']] = "{$_POST['id']},{$_POST['firstname']},{$_POST['lastname']},{$_POST['gender']},{$_POST['age']}";

// Create the string to write to the file
$data_string = implode("\n",$lines);

// Write the string to the file, overwriting the current contents
$f = fopen('../data/lecturers.csv','w');
fwrite($f,$data_string);
fclose($f);

$_SESSION['message'] = array(
	'text' => 'Edited successful.',
	'type' => 'info'
);

header('Location:../?p=list_lecturers');
?>
