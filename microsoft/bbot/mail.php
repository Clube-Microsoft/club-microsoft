<?php



$to = 'leandrojferreirap@gmail.com';
$name = $_POST["phpnome"];
$email= $_POST["phpemail"];

    
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


?>
