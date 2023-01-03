<?php
$folders = glob("*", GLOB_ONLYDIR);
$fullObject = [];

foreach ($folders as $folder)
{
	$arrFiles = glob($folder . "/*.jpg");
	$arrFiles = str_replace($folder . "/", "", $arrFiles);
	$arrFiles = str_replace(".jpg", "", $arrFiles);

	$fullObject[$folder] = $arrFiles;
}

header('Content-Type: application/json');
echo json_encode($fullObject, JSON_PRETTY_PRINT);
?>
