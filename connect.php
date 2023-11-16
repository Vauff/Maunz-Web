<?php
if ($_GET["ip"])
	header("Location: steam://connect/" . $_GET["ip"]);
else
	echo "<h2>You need to specify the \"ip\" query parameter!</h2>"
?>
