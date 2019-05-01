<?php
	require_once 'login_bd.php';
	$conn = new mysqli($hn, $un, $pw, $db);
	if ($conn->connect_error)
		die("Erro Fatal");

    $idadmin = $_POST["phpidadmin"];


    $sql = "DELETE FROM admin WHERE Id_admin='$idadmin'";
    if (mysqli_query($conn, $sql)) {
        echo 1;
    }else{
        echo 0;
    }


?>