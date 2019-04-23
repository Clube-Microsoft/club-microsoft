<?php
	$hn = 'localhost';
	$db = 'admin_bot';
	$un = 'admin_botuser';
	$pw = 'Acab67#0';

		$conn = new mysqli($hn, $un, $pw, $db);
	if ($conn->connect_error)
	    die("Erro Fatal");

?>

