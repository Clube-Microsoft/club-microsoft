<?php
	$hn = 'localhost';
	$db = 'epbclube_bbot';
	$un = 'epbclube_admin';
	$pw = 'C|M5!2018';

		$conn = new mysqli($hn, $un, $pw, $db);
	if ($conn->connect_error){
	    die("Erro Fatal");
	}
?>