<?php
if($_POST){
	
	if(empty($_POST['nome']) || empty($_POST['email']) || empty($_POST['message'])){
		echo '<script>
			$(document).ready(function(){
				swal("Ops...","Preencha todos os campos obrigatórios!","warning");
			});
			</script>';
	}else{
		$nome 		= utf8_decode($_POST['nome']);
		$email 		= utf8_decode($_POST['email']);
		$subject 	= utf8_decode($_POST['subject']);
		$message 	= utf8_decode($_POST['message']);
		$assunto 	= 'EPB Clube Microsoft | Formulário de contacto';
		
		
		require_once('phpmailer/PHPMailer/class.phpmailer.php');

		$Email = new PHPMailer();
		$Email->SetLanguage("br");
		$Email->IsSMTP(); // Habilita o SMTP 
		$Email->SMTPAuth = true; //Ativa e-mail autenticado
		$Email->Host = 'iberweb33a.ibername.com'; //Servidor de envio # verificar qual o host correto com a hospedagem as vezes fica como smtp.
		$Email->Port = '587'; // Porta de envio
		$Email->SMTPSecure = 'tls';
		$Email->Username = 'ajaraujo@epbclubemicrosoft.pt'; //e-mail que será autenticado
		$Email->Password = '+o4}@W8^{X@#'; // senha do email
		// ativa o envio de e-mails em HTML, se false, desativa.
		$Email->IsHTML(true); 
		// email do remetente da mensagem
		$Email->From = $email;
		//$Email->SMTPDebug = 2; //mostra erros mais detalhados caso houver
		// nome do remetente do email
		$Email->FromName = ($nome);
		// Endereço de destino do emaail, ou seja, pra onde você quer que a mensagem do formulário vá?
		$Email->AddReplyTo($email, $nome);
		$Email->AddAddress("clubemicrosoft@epb.pt"); //  para quem será enviada a mensagem
		//$Email->AddCC('antonioaraujo@professores.epb.pt', 'Antonio Jose Araujo'); // Copia
		//$Email->AddBCC('email@hotmail.com.br', 'Nome da pessoa'); // Cópia Oculta
		// informando no email, o assunto da mensagem
		$Email->Subject = utf8_decode($assunto);
		// Define o texto da mensagem (aceita HTML)
		$Email->Body .= "<br />
						 <strong>Nome:</strong> $nome<br />	
						 <strong>Email:</strong> $email<br />
						 <strong>Assunto:</strong> $subject<br />
						 <strong>Mensagem:</strong> $message									
						 ";	
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
