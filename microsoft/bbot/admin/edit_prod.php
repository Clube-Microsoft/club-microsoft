<?php
	require_once 'login_bd.php';
	$conn = new mysqli($hn, $un, $pw, $db);
	if ($conn->connect_error)
		die("Erro Fatal");

    $IdProduto = $_POST["phpidprod"];
    $NomeProduto = $_POST["phpproduto"];
    $IdCategoria = $_POST["phpidcat"];
    $IdsSubCategoria = $_POST["phpidsubcat"];


    $sql = "UPDATE produtos SET NomeProduto='$NomeProduto',IdCategoria='$IdCategoria',IdsSubCategoria='$IdsSubCategoria' WHERE IdProduto='$IdProduto'";
    if (mysqli_query($conn, $sql)) {
        echo 1;
    }else{
        echo 0;
    }


?>