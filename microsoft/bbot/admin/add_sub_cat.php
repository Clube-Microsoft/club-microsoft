<?php
	require_once 'login_bd.php';
	$conn = new mysqli($hn, $un, $pw, $db);
	if ($conn->connect_error)
		die("Erro Fatal");

    $IdCategoria = $_POST["phpidcat"];
    $link = $_POST["phplink"];


    $sql = "INSERT INTO subcategoria (IdCategoria, link) VALUES ('$IdCategoria', '$link')";
    if (mysqli_query($conn, $sql)) {
        echo 1;
    }else{
        echo 0;
    }


?>