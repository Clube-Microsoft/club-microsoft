<?php
    $to = 'clube.microsoft.epb@gmail.com';
    $name = $_POST["name"];
    $email= $_POST["email"];
    $subject= $_POST["subject"];
    $text= $_POST["message"];
    
    $headers = $name . " | " . $subject . "\r\n"; // Subject

    $message ='Nome: '.$name.'
Email: '.$email.'
Mensagem: '.$text.'';

    if (@mail($to, $headers, $message))
    {
        echo 'A mensagem foi enviada.';
    } else {
        echo 'Erro.';
    }

?>
