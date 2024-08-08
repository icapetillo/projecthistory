<?php

if(isset($_FILES['file']['name']))
{	
	$filename = basename($_FILES['file']['name']); //get file name
    $dir = getcwd().'/'; //get current directory
	$path = explode(",", $_POST['cLoc']); //get path to store file
	$fullpath="";
	
	foreach ($path as $folder) {
		$fullpath .= "/".$folder;
	}

	$finalpath = $dir.$fullpath."/".$filename;
	if (move_uploaded_file($_FILES['file']['tmp_name'], $finalpath))
		header('location: ' . $_SERVER["HTTP_REFERER"]);
	else
		echo 'An error has occurred.';
}

?>