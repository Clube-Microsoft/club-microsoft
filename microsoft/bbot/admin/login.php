<?php
session_start();
include('login_bd.php');

if(empty($_POST['nome']) || empty($_POST['pass'])) {
	header('Location: admin_entrar.php');
	exit();
}

$nome = mysqli_real_escape_string($conn, $_POST['nome']);
$pass = mysqli_real_escape_string($conn, $_POST['pass']);

$query = "select nome from admin where nome = '$nome' and pass = md5('$pass')";

$result = mysqli_query($conn, $query);

$row = mysqli_num_rows($result);

if($row == 1) {
	$_SESSION['nome'] = $nome;
	header('Location: index.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: admin_entrar.php');
	exit();
}