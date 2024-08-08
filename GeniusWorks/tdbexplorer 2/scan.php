<?php

include_once("scripts/folderHelper.php");

$dir = "Archivos";
// Run the recursive function 

$response = scan($dir, 0);


// This function scans the files folder recursively, and builds a large array

function scan($dir, $isRecursion){

	$files = array();

	// Is there actually such a folder/file?

	if(file_exists($dir)){
	
		foreach(scandir($dir) as $f) {
		
			if(!$f || $f[0] == '.') {
				continue; // Ignore hidden files
			}		
			
			if(is_dir($dir . '/' . $f)) {

				// The path is a folder

				// Get icon to display based on folder name
				foreach(getFolderDetails() as $folder) {
					if ($f == $folder["nombre"]) {
						$icon = $folder["icono"];
						break;
					}					
				}

				if ($isRecursion == 0) {
					foreach(getFolderPermissions($_GET['userid']) as $per) {
						if ($f == $per["nombre"]) {
							$files[] = array(
								"name" => $f,
								"icon" => $icon,
								"type" => "folder",
								"path" => $dir . '/' . $f,
								"items" => scan($dir . '/' . $f, 1) // Recursively get the contents of the folder
							);
						}
					}	
				}
				else {
					$files[] = array(
						"name" => $f,
						"icon" => $icon,
						"type" => "folder",
						"path" => $dir . '/' . $f,
						"items" => scan($dir . '/' . $f, 1) // Recursively get the contents of the folder
					);
				}

							
			}
			
			else {

				// It is a file

				$files[] = array(
					"name" => $f,
					"type" => "file",
					"path" => $dir . '/' . $f,
					"size" => filesize($dir . '/' . $f) // Gets the size of this file
				);
			}
		}
	
	}

	return $files;
}



// Output the directory listing as JSON

header('Content-type: application/json');

echo json_encode(array(
	"name" => "Archivos",
	"type" => "folder",
	"path" => $dir,
	"items" => $response
));
