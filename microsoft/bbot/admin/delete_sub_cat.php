<?php
	require_once 'login_bd.php';
	$conn = new mysqli($hn, $un, $pw, $db);
	if ($conn->connect_error)
		die("Erro Fatal");

    $idsubcat = $_POST["phpidsubcat"];


    $sql = "DELETE FROM subcategoria WHERE IdsSubCategoria='$idsubcat'";
    if (mysqli_query($conn, $sql)) {
        echo 1;
    }else{
        echo 0;
    }


?>