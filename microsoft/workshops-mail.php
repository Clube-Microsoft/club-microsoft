<?php
if($_POST){
	
	if(empty($_POST['nome']) || empty($_POST['email']) || empty($_POST['tema'])){
		echo '<script>
			$(document).ready(function(){
				swal("Ops...","Preencha todos os campos obrigatórios!","warning");
			});
			</script>';
	}else{
		$nome 		= utf8_decode($_POST['nome']);
		$email 		= utf8_decode($_POST['email']);
		$tema	 	= utf8_decode($_POST['tema']);
		$desc 		= utf8_decode($_POST['desc']);
		$duracao	= utf8_decode($_POST['duracao']);
		$participantes	= utf8_decode($_POST['participantes']);
		$obs 		= utf8_decode($_POST['obs']);
		$assunto 	= 'EPB Clube Microsoft | Worksops';
		$emailcontact = 'suporte@epbclubemicrosoft.pt';
		$nomecontact = 'Suporte Clube Microsoft';

		require_once('phpmailer/PHPMailer/class.phpmailer.php');

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
		//$Email->FromName = ($nome);
		// Endereço de destino do emaail, ou seja, pra onde você quer que a mensagem do formulário vá?
		$Email->AddReplyTo($emailcontact, $nomecontact);
		//$Email->AddReplyTo($email, $nome);
		$Email->AddAddress("clubemicrosoft@epb.pt"); //  para quem será enviada a mensagem
		//$Email->AddCC('antonioaraujo@professores.epb.pt', 'Antonio Jose Araujo'); // Copia
		//$Email->AddBCC('email@hotmail.com.br', 'Nome da pessoa'); // Cópia Oculta
		// informando no email, o assunto da mensagem
		$Email->Subject = utf8_decode($assunto);
		// Define o texto da mensagem (aceita HTML)

		$messagem = "<br />
		<strong>Nome:</strong> $nome<br />	
		<strong>Email:</strong> $email<br />
		<strong>Tema:</strong> $tema<br />
		<strong>Descrição:</strong> $desc<br />	
		<strong>Duração:</strong> $duracao<br />	
		<strong>Número de participantes:</strong> $participantes<br />	
		<strong>Observeções:</strong> $obs								
		";

		$Email->Body = utf8_decode($messagem);

		
		// verifica se está tudo ok com oa parametros acima, se nao, avisa do erro. Se sim, envia.
		if(!$Email->Send()){				
			 echo'
			<script>
				$(document).ready(function(){
					swal("Atenção! '.utf8_encode($nome).'...","Ocorreu um erro ao enviar a mensagem, tente novamente!", "error");
				});
			</script>';

		}else{
			 echo'
		<script>
			$(document).ready(function(){
				swal("Olá '.utf8_encode($nome).'!", "A sua mensagem foi enviada. \n Obrigado pelo contacto!", "success")
			});
		</script>';

		}		
	}
}
