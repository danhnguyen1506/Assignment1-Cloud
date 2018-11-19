<?php
session_start();
// Read file into array
$lines = file('../data/lecturers.csv', FILE_IGNORE_NEW_LINES);

unset($lines[$_GET['linenum']]);

$data_string = implode("\n",$lines);

$f = fopen('../data/lecturers.csv','w');
fwrite($f,$data_string);
fclose($f);

$_SESSION['message'] =  array(
	'text' => 'Deleted successful',
	'type' => 'error'
);

header('Location:../?p=list_lecturers');
?>