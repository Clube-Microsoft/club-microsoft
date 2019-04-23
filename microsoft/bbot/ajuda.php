<?php
require_once 'login_bd.php';
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error)
    die("Erro Fatal");


$to = 'leandrojferreirap@gmail.com';
$nome=$_POST['phpnome'];
$email=$_POST['phpemail'];
$cat=$_POST['phpcategoria'];
$subcat=$_POST['phpsub_categoria'];
$escolha=$_POST['phpescolha'];


	$sql = "INSERT INTO utilizadores (Nome, Email, Categoria, SubCategoria, Ajuda)
	VALUES ('$nome','$email','$cat','$subcat',$escolha)";

	if ($conn->query($sql) === TRUE) {
	    echo "Obrigado";
	} else {
	    echo "Error";
	}

	$conn->close();

	if($escolha == 1){
		 $headers = $name . " | Ajuda " . $email . "\r\n"; // Subject

    $message ='Nome: '.$name.'
	Email: '.$email.'
	Ajudar!';

    if (@mail($to, $headers, $message))
    {
        echo 'A mensagem foi enviada.';
    } else {
        echo 'Erro.';
    }
	}

?>
