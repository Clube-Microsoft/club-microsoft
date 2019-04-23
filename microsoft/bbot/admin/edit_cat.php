<?php
	require_once 'login_bd.php';
	$conn = new mysqli($hn, $un, $pw, $db);
	if ($conn->connect_error)
		die("Erro Fatal");

    $IdCategoria = $_POST["phpidcat"];
    $NomeCategoria = $_POST["phpcat"];



    $sql = "UPDATE categoria SET NomeCategoria='$NomeCategoria' WHERE IdCategoria='$IdCategoria'";
    if (mysqli_query($conn, $sql)) {
        echo 1;
    }else{
        echo 0;
    }


?>