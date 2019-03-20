<?php
	$hn = '188.93.230.40';
	$db = 'epbclube_microsoft';
	$un = 'epbclube_admin';
	$pw = 'C|M5!2018';

		$conn = new mysqli($hn, $un, $pw, $db);
	if ($conn->connect_error)
	    die("Erro Fatal");

?>

