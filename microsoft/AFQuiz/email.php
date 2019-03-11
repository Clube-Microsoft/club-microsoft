<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Formulário PHP">
	<meta name="keywords" content="HTML, CSS, PHP">
	<meta name="author" content="Rui Pereira">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="shortcut icon" type="image/x-icon" href="logo.png">
	<script src="jsx/sweetalert.js"></script>
	<title>Obrigado pela colaboração!</title>
</head>
<body>
<?php
	
	/*$curso=$_POST['curso'];
	$perg=$_POST['perg'];
	$op1=$_POST['op1'];
	$op2=$_POST['op2'];
	$op3=$_POST['op3'];
	$op4=$_POST['op4'];
	$opc=$_POST['opc'];*/
	
if($_POST){
	
	if(empty($_POST['nome']) || empty($_POST['email']) || empty($_POST['curso'])){
		echo '<script>
			$(document).ready(function(){
				swal("Ops...","Preencha todos os campos obrigatórios!","warning");
			});
			</script>';
	}else{
		$nome		= utf8_decode($_POST['nome']);
		$email		= utf8_decode($_POST['email']);
		$message 	= utf8_decode($_POST['email']);
		$assunto 	= 'Formulário AFQuiz';
		$emailcontact = 'suporte@epbclubemicrosoft.pt';
		$nomecontact = 'Suporte Clube Microsoft';
		
		
		require_once('../phpmailer/PHPMailer/class.phpmailer.php');

		$Email = new PHPMailer();
		$Email->SetLanguage("pt");
		$Email->IsSMTP(); // Habilita o SMTP 
		$Email->SMTPAuth = true; //Ativa e-mail autenticado
		$Email->Host = 'iberweb33a.ibername.com'; //Servidor de envio # verificar qual o host correto com a hospedagem as vezes fica como smtp.
		$Email->Port = '465'; // Porta de envio
		$Email->SMTPSecure = 'ssl';
		$Email->Username = 'suporte@epbclubemicrosoft.pt'; //e-mail que será autenticado
		$Email->Password = 'Suporte.1234'; // senha do email
		// ativa o envio de e-mails em HTML, se false, desativa.
		$Email->IsHTML(true); 
		// email do remetente da mensagem
		$Email->From = $emailcontact;
		//$Email->From = $email;
		//$Email->SMTPDebug = 2; //mostra erros mais detalhados caso houver
		// nome do remetente do email
		$Email->FromName = ($nomecontact);
		// Endereço de destino do emaail, ou seja, pra onde você quer que a mensagem do formulário vá?
		$Email->AddReplyTo($emailcontact, $nomecontact);
		$Email->AddAddress("gpsi163421@alunos.epb.pt"); //  para quem será enviada a mensagem
		$Email->AddCC('gpsi163445@alunos.epb.pt', 'Rui Pereira'); // Copia
		//$Email->AddBCC('email@hotmail.com.br', 'Nome da pessoa'); // Cópia Oculta
		// informando no email, o assunto da mensagem
		$Email->Subject = utf8_decode($assunto);
		// Define o texto da mensagem (aceita HTML)
		$Email->Body .= "<br />
						 <strong>Nome:</strong> $nome<br />	
						 <strong>Email:</strong> $email<br />									
						 ";	
		// verifica se está tudo ok com oa parametros acima, se nao, avisa do erro. Se sim, envia.
		if(!$Email->Send()){				
					ECHO <<<_DEU
		<div class="Inicio">
	<img class="logo" src="logo.png">
</div>
<div class="form-style-5">
	<h1>Sugestão Não Enviada</h1>
	<form method="post" action="index.php">
		<input type="submit" name="submit" value="Fazer sugestão">
	</form>
</div>

</body>
</html>

_DEU;

		}else{
		ECHO <<<_DEU
		<div class="Inicio">
	<img class="logo" src="logo.png">
</div>
<div class="form-style-5">
	<h1> Agradeço a tua colaboração!</h1>
	<form method="post" action="index.php">
		<input type="submit" name="submit" value="Fazer outra sugestão">
	</form>
</div>

</body>
</html>

_DEU;
		}		
	}
}

?>
