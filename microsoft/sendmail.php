<?php
// Adiciona o arquivo class.phpmailer.php - você deve especificar corretamente o caminho da pasta com o este arquivo.
require_once("envio/PHPMailerAutoload.php");
// Inicia a classe PHPMailer
$mail = new PHPMailer();
 
// DEFINIÇÃO DOS DADOS DE AUTENTICAÇÃO - Você deve auterar conforme o seu domínio!
$mail->IsSMTP(); // Define que a mensagem será SMTP
$mail->Host = "iberweb33a.ibername.com"; // Seu endereço de host SMTP
$mail->SMTPAuth = true; // Define que será utilizada a autenticação -  Mantenha o valor "true"
$mail->Port = 587; // Porta de comunicação SMTP - Mantenha o valor "587"
$mail->SMTPSecure = false; // Define se é utilizado SSL/TLS - Mantenha o valor "false"
$mail->SMTPAutoTLS = false; // Define se, por padrão, será utilizado TLS - Mantenha o valor "false"
$mail->Username = 'ajaraujo@epbclubemicrosoft.pt'; // Conta de email existente e ativa em seu domínio
$mail->Password = '+o4}@W8^{X@#'; // Senha da sua conta de email
 
// DADOS DO REMETENTE
$mail->Sender = "ajaraujo@epbclubemicrosoft.pt"; // Conta de email existente e ativa em seu domínio
$mail->From = "ajaraujo@epbclubemicrosoft.pt"; // Sua conta de email que será remetente da mensagem
$mail->FromName = "EPB Clube Microsoft | Formulário de Contacto"; // Nome da conta de email
 
// DADOS DO DESTINATÁRIO
$mail->AddAddress('ajaraujo@epbclubemicrosoft.pt', 'EPB Clube Microsoft'); // Define qual conta de email receberá a mensagem
//$mail->AddAddress('recebe2@dominio.com.br'); // Define qual conta de email receberá a mensagem
//$mail->AddCC('copia@dominio.net'); // Define qual conta de email receberá uma cópia
//$mail->AddBCC('copiaoculta@dominio.info'); // Define qual conta de email receberá uma cópia oculta
 
// Definição de HTML/codificação
$mail->IsHTML(true); // Define que o e-mail será enviado como HTML
$mail->CharSet = 'utf-8'; // Charset da mensagem (opcional)
 
// DEFINIÇÃO DA MENSAGEM
$mail->Subject  = "Formulário de Contato"; // Assunto da mensagem
$mail->Body .= "<br />
						 <strong>Nome:</strong> $nome<br />									
						 <strong>E-mail:</strong> $email<br />
						 <strong>Telefone:</strong> $telefone<br />
						 <strong>Mensagem:</strong> $mensagem									
						 ";	
		// verifica se está tudo ok com oa parametros acima, se nao, avisa do erro. Se sim, envia.
		if(!$mail->Send()){				
			 echo'
			<script>
				$(document).ready(function(){
					swal("Ops '.utf8_encode($nome).'...","Houve um erro ao enviar a mensagem, tente novamente!", "error");
				});
			</script>';

		}else{
			 echo'
		<script>
			$(document).ready(function(){
				swal("Sucesso '.utf8_encode($nome).'...", "Sua mensagem foi enviada. \n Obrigado pelo contato!", "success")
			});
		</script>';
}
