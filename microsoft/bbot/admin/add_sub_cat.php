<?php
	require_once 'login_bd.php';
	$conn = new mysqli($hn, $un, $pw, $db);
	if ($conn->connect_error)
		die("Erro Fatal");

    $NomeSubCategoria = $_POST["phpsubcat"];
    $IdCategoria = $_POST["phpidcat"];


    $sql = "INSERT INTO subcategoria (NomeSubCategoria, IdCategoria) VALUES ('$NomeSubCategoria', '$IdCategoria')";
    if (mysqli_query($conn, $sql)) {
        echo 1;
    }else{
        echo 0;
    }


?>