<?php
	require_once 'login_bd.php';
	$conn = new mysqli($hn, $un, $pw, $db);
	if ($conn->connect_error)
		die("Erro Fatal");

    $NomeCategoria = $_POST["phpcat"];


    $sql = "INSERT INTO categoria (NomeCategoria) VALUES ('$NomeCategoria')";
    if (mysqli_query($conn, $sql)) {
        echo 1;
    }else{
        echo 0;
    }


?>