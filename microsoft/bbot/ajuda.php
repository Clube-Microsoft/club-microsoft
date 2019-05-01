<?php
require_once 'login_bd.php';
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error)
    die("Erro Fatal");


$to = 'leandrojferreirap@gmail.com';
$nome=$_POST['phpnome'];
$email=$_POST['phpemail'];
$cat=$_POST['phpcategoria'];
$escolha=$_POST['phpescolha'];


	$sql = "INSERT INTO utilizadores (Nome, Email, Categoria, Ajuda)
	VALUES ('$nome','$email','$cat',$escolha)";

	if ($conn->query($sql) === TRUE) {
	    echo "Obrigado";
	} else {
	    echo "Error";
	}

	$conn->close();

	if($escolha == 1){
		echo "feito";
	}

?>
