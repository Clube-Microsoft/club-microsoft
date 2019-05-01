<?php
	require_once 'login_bd.php';
	$conn = new mysqli($hn, $un, $pw, $db);
	if ($conn->connect_error){
        die("Erro Fatal");
    }
    
    $admin = $_POST["phpadmin"];
    $pass = $_POST["phpapass"];

    $sql = "SELECT * FROM `admin` WHERE nome='$admin'";
    $consulta = mysqli_query($conn, $sql);

    if ($consulta -> num_rows >= 1) {
        echo 0;
    }else{
        $sql1 = "INSERT INTO admin (nome, pass) VALUES ('$admin', md5('$pass'))";
        if (mysqli_query($conn, $sql1)) {
            echo 1;
        }else{
            echo 0;
        }
    }

    


?>