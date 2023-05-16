<?php
if ($_GET["ip"])
	header("Location: steam://connect/" . $_GET["ip"]);
else
	header("Location: https://github.com/Vauff");
?>
