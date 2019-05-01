<?php
	require_once 'login_bd.php';
	$conn = new mysqli($hn, $un, $pw, $db);
	if ($conn->connect_error)
		die("Erro Fatal");

    $IdCategoria = $_POST["phpidcat"];
    $NomeSubCategoria = $_POST["phpsubcat"];
    $IdsSubCategoria = $_POST["phpidsubcat"];



    $sql = "UPDATE categoria SET NomeSubCategoria='$NomeSubCategoria', IdCategoria='$IdCategoria' WHERE IdsSubCategoria='$IdsSubCategoria'";
    if (mysqli_query($conn, $sql)) {
        echo 1;
    }else{
        echo 0;
    }


?>