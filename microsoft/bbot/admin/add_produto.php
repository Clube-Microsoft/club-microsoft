<?php
	require_once 'login_bd.php';
	$conn = new mysqli($hn, $un, $pw, $db);
	if ($conn->connect_error)
		die("Erro Fatal");

    $NomeProduto = $_POST["phpproduto"];
    $IdCategoria = $_POST["phpidcat"];
    $IdsSubCategoria = $_POST["phpidsubcat"];


    $sql = "INSERT INTO produtos (NomeProduto, IdCategoria, IdsSubCategoria) VALUES ('$NomeProduto', '$IdCategoria','$IdsSubCategoria')";
    if (mysqli_query($conn, $sql)) {
        echo 1;
    }else{
        echo 0;
    }


?>