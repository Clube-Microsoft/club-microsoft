<!DOCTYPE html>
<html lang="PT-pt">
<head>
<meta charset="UTF-8">
<meta name="description" content="Formulário PHP">
<meta name="keywords" content="HTML, CSS, PHP">
<meta name="author" content="Rui Pereira">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="shortcut icon" type="image/x-icon" href="logo.png">
<title>AFQuiz | Formulário PHP</title>
</head>
<body>
<?php
//Define todas as variáveis iniciais
$nomeErr = $emailErr = "";
$nome = $email = $curso = $perg = $op1 = $op2 = $op3 = $op4 = $opc = "";

//Verifica se o botão do formulário é pressionado
if ($_SERVER["REQUEST_METHOD"] 	== "POST") {
	
	//Verifica se o campo "nome" está vazio
	if (empty($_POST["nome"])) {
		$nomeErr = "Preencha o nome";
	} else {
		//Lê o que foi escrito no campo "nome"
		$nome = test_input($_POST["nome"]);
		//Verifica se o nome não contém números ou caracteres especiais
		if (!preg_match("/^\p{L}([- ']\p{L}|\p{L})*$/u", $nome)) {
			$nomeErr = "Só são permitidas letras e espaços em branco";
		} else {
			$nome = test_input($_POST["nome"]);
			//Define a cookie "nome" com o que está escrito no campo "nome"
			setcookie("nome", $nome, time() + (86400 * 30), "/");
		}
	}

	//Verifica se o campo "email" está vazio
	if (empty($_POST["email"])) {
		$emailErr = "Preencha o email";
	} else {
		//Lê o que foi escrito no campo "email"
		$email = test_input($_POST["email"]);
		//Verifica se o email está bem formatado
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$emailErr = "Formato de email inválido";
		} else {
			$email = test_input($_POST["email"]);
			//Define a cookie "email" com o que está escrito no campo "email"
			setcookie("email", $email, time() + (86400 * 30), "/");
		}
	}

	//Verifica se o campo "curso" está vazio
	if (empty($_POST["curso"])) {
		$curso = "";
	} else {
		//Lê o que foi escrito no campo "curso"
		$curso = test_input($_POST["curso"]);
		//Define a cookie "curso" com o que está escrito no campo "curso"
		setcookie("curso", $curso, time() + (86400 * 30), "/");
	}
	
	//Verifica se o campo "perg" está vazio
	if (empty($_POST["perg"])) {
		$perg = "";
	} else {
		//Lê o que foi escrito no campo "perg"
		$perg = test_input($_POST["perg"]);
		//Define a cookie "perg" com o que está escrito no campo "curso"
		setcookie("perg", $perg, time() + (86400 * 30), "/");
	}
	
	//Verifica se o campo "op1" está vazio
	if (empty($_POST["op1"])) {
		$op1 = "";
	} else {
		//Lê o que foi escrito no campo "op1"
		$op1 = test_input($_POST["op1"]);
		//Define a cookie "op1" com o que está escrito no campo "op1"
		setcookie("op1", $op1, time() + (86400 * 30), "/");
	}
	//Verifica se o campo "op2" está vazio
	if (empty($_POST["op2"])) {
		$op2 = "";
	} else {
		//Lê o que foi escrito no campo "op2"
		$op2 = test_input($_POST["op2"]);
		//Define a cookie "op1" com o que está escrito no campo "op2"
		setcookie("op2", $op2, time() + (86400 * 30), "/");
	}
	//Verifica se o campo "op3" está vazio
	if (empty($_POST["op3"])) {
		$op3 = "";
	} else {
		//Lê o que foi escrito no campo "op3"
		$op1 = test_input($_POST["op3"]);
		//Define a cookie "op1" com o que está escrito no campo "op3"
		setcookie("op3", $op3, time() + (86400 * 30), "/");
	}
	//Verifica se o campo "op4" está vazio
	if (empty($_POST["op4"])) {
		$op4 = "";
	} else {
		//Lê o que foi escrito no campo "op4"
		$op4 = test_input($_POST["op4"]);
		//Define a cookie "op1" com o que está escrito no campo "op4"
		setcookie("op4", $op4, time() + (86400 * 30), "/");
	}
	//Verifica se o campo "opc" está vazio
	if (empty($_POST["opc"])) {
		$opc = "";
	} else {
		//Lê o que foi escrito no campo "opc"
		$opc = test_input($_POST["opc"]);
		//Define a cookie "opc" com o que está escrito no campo "opc"
		setcookie("opc", $opc, time() + (86400 * 30), "/");
	}
	
	
	//Verifica se nenhum erro foi ativado
	if ($nomeErr == "" && 
	$emailErr == "") {
		//Redireciona para a páina login
		header("location: email.php");
		exit();
	}
	
}

//Função para leitura dos dados introduzidos pelo utilizador
function test_input($dados) {
	
	$dados = trim($dados);
	$dados = stripslashes($dados);
	$dados = htmlspecialchars($dados);
	return $dados;
	
}	

?>
<div class="Inicio">
	<img class="logo" src="logo.png">
</div>
<div class="form-style-5">
<!-- Início do formulário -->
<form method="post" action="email.php" enctype="multipart/form-data">
	<p style='padding: 15px;'>Olá, o meu nome é André Ferreira e no âmbito da minha prova de aptidão profissional estou a recolher questionários com perguntas <strong>básicas</strong> sobre os cursos da EPB - Escola Profissional de Braga.<br/>
	<em><strong>(Dispenso que submetam formulários desnecessários)</strong></em></p>
	<br/>
	<legend>
		<span class="number">
			1
		</span> 
		Informação Pessoal
	</legend>
	<!-- Inputs -->
	<label>Nome: <span class="error">* <?php echo $nomeErr;?></span></label>
	<input placeholder="Introduz o teu nome..." type="text" name="nome" required>
	<br/><br/>
	<label>Email: <span class="error">* <?php echo $emailErr;?></span></label>
	<input placeholder="Introduz o teu email escolar (Ex.: gpsi163421@alunos.epb.pt)" type="text" name="email" required>
	<br/><br/>
	<legend>
		<span class="number">
			2
		</span> 
		Sugestão
	</legend>
	<label>Curso: <span class="error">* </span></label>
	<select name="curso">
	<optgroup name="optgroup" label="Curso" value="Curso" >
	  <option>GPSI</option>
	  <option>AS</option>
	  <option>SEC</option>
	  <option>COM</option>
	  <option>MIMECAUT</option>
	  <option>ELE</option>
	  <option>DG</option>
	  <option>FC</option>
	  <option>CTB</option>
	  <option>CCI</option>
	</optgroup>
	</select> 
	<br/><br/>
	<label>Pergunta: <span class="error">* </span></label><p> A pergunta tem que ser relacionada ao curso escolhido </p>
	<input placeholder="(Ex.: Qual das seguintes opções não é uma linguagem?)" type="text" name="perg" required>
	<br/><br/>
	<label>Respostas: <span class="error">* </span></label>
	<input placeholder="(ex.: HTML)" type="text" name="op1" required>
	<input placeholder="(ex.: PHP)" type="text" name="op2" required>
	<input placeholder="(ex.: Notepad++)" type="text" name="op3" required>
	<input placeholder="(ex.: Java)" type="text" name="op4" required>
	<br><br>
	<label>Resposta correta: <span class="error">* </span></label>
	<input placeholder="(ex.: Notepad++)" type="text" name="opc" required>
	<br/><br/>
	<span class="error">* campo obrigatório</span>
	</fieldset>
	<input type="submit" name="submit" id="submit" value="Enviar"><br/>
	
</form>

</div>
</body>
</html>