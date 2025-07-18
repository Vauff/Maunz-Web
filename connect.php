<?php
	if (!isset($_GET['ip']))
		die("You need to specify the \"ip\" query parameter");

	$input = $_GET['ip'];

	if (strpos($input, ':') !== false)
		list($host, $port) = explode(':', $input, 2);
	else
		die("Invalid address format");

	if (filter_var($host, FILTER_VALIDATE_IP))
	{
		$ip = $host;
	}
	else
	{
		$ip = gethostbyname($host);

		if ($ip === $host)
			die("Unable to resolve domain name");
	}

	$connect = "steam://connect/" . $ip . ":" . $port;
	header('Location: ' . $connect);
	exit();
?>
