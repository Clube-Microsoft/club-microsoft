<?php
ob_start();
include('conexao.php');


$Titulo        = $_POST["txt_Titulo_Curso"];
$Texto_Pequeno = $_POST["txt_Texto_Pequeno_Curso"];


$sql = "SELECT * FROM cursos WHERE nome_curso='$Titulo'";
$consulta = mysqli_query($conn, $sql);
                
if ($consulta->num_rows >= 1) {
    echo "O Post já Existe";
}else{
        // verifica se foi enviado um arquivo
    if (isset($_FILES['arquivo_Curso']['name']) && $_FILES['arquivo_Curso']['error'] == 0) {
        echo 'Você enviou o arquivo: <strong>' . $_FILES['arquivo_Curso']['name'] . '</strong><br />';
        echo 'Este arquivo é do tipo: <strong > ' . $_FILES['arquivo_Curso']['type'] . ' </strong ><br />';
        echo 'Temporáriamente foi salvo em: <strong>' . $_FILES['arquivo_Curso']['tmp_name'] . '</strong><br />';
        echo 'Seu tamanho é: <strong>' . $_FILES['arquivo_Curso']['size'] . '</strong> Bytes<br /><br />';
        
        $arquivo_tmp = $_FILES['arquivo_Curso']['tmp_name'];
        $nome        = $_FILES['arquivo_Curso']['name'];
        
        // Pega a extensão
        $extensao = pathinfo($nome, PATHINFO_EXTENSION);
        
        // Converte a extensão para minúsculo
        $extensao = strtolower($extensao);
        
        // Somente imagens, .jpg;.jpeg;.gif;.png
        // Aqui eu enfileiro as extensões permitidas e separo por ';'
        // Isso serve apenas para eu poder pesquisar dentro desta String
        if (strstr('.jpg;.jpeg;.gif;.png', $extensao)) {
            // Cria um nome único para esta imagem
            // Evita que duplique as imagens no servidor.
            // Evita nomes com acentos, espaços e caracteres não alfanuméricos
            $novoNome = uniqid(time()) . '.' . $extensao;
            
            // Concatena a pasta com o nome
            $destino = '../img/courses/ ' . $novoNome;
            
            // tenta mover o arquivo para o destino
            if (move_uploaded_file($arquivo_tmp, $destino)) {
                
                $sql1 = "INSERT INTO cursos (nome_curso, texto_curso, icon_curso) VALUES ('$Titulo', '$Texto_Pequeno', '$novoNome')";
                mysqli_query($conn, $sql1);
                header('Location: courses.php');
                exit();

               
            } else {
                $_SESSION['produto_nao_enviado'] = true;
                header('Location: admin.php');
                exit();
            }
            
        } else
            echo 'Erro ao salvar o arquivo. Aparentemente você não tem permissão de escrita.<br />';
    } else
        echo 'Você poderá enviar apenas arquivos "*.jpg;*.jpeg;*.gif;*.png"<br />';
}
?>