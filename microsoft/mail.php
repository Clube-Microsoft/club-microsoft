<?php
    $to = 'clube.microsoft.epb@gmail.com';
    $name = $_POST["name"];
    $email= $_POST["email"];
	$subject= $_POST["subject"];
    $text= $_POST["message"];
    


    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= $name . "|" . $subject . "\r\n"; // Subject
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $message =
	'<table style="width:100%">
        <tr><td>Nome: '.$name.'</td></tr>
        <tr><td>Email: '.$email.'</td></tr>
        <tr><td>Mensagem: '.$text.'</td></tr>
    </table>';

    if (@mail($to, $email, $message, $headers))
    {
        echo 'A mensagem foi enviada.';
    } else {
        echo 'Erro.';
    }

?>
