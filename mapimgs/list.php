<?php
$folders = glob("*", GLOB_ONLYDIR);
$latest_ctime = 0;
$fullObject = [];

foreach ($folders as $folder)
{
	$arrFiles = glob($folder . "/*.jpg");

	foreach ($arrFiles as $file)
	{
		if (filectime($file) > $latest_ctime)
			$latest_ctime = filectime($file);
	}

	$arrFiles = str_replace($folder . "/", "", $arrFiles);
	$arrFiles = str_replace(".jpg", "", $arrFiles);

	$fullObject[$folder] = $arrFiles;
}

$fullObject["lastUpdated"] = $latest_ctime;
header("Content-Type: application/json");
echo json_encode($fullObject, JSON_PRETTY_PRINT);
?>
