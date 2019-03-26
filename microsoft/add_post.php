<?php
ob_start();
include('conexao.php');


$Titulo        = $_POST["txt_Titulo_Post"];
$Texto_Pequeno = $_POST["txt_Texto_Pequeno_Post"];
$Texto_Grande  = $_POST["txt_Texto_Grande_Post"];
$Data          = $_POST['Data_Post'];

$number = count($_POST["hastag"]);




// verifica se foi enviado um arquivo
if (isset($_FILES['arquivo_Post']['name']) && $_FILES['arquivo_Post']['error'] == 0) {
    echo 'Você enviou o arquivo: <strong>' . $_FILES['arquivo_Post']['name'] . '</strong><br />';
    echo 'Este arquivo é do tipo: <strong > ' . $_FILES['arquivo_Post']['type'] . ' </strong ><br />';
    echo 'Temporáriamente foi salvo em: <strong>' . $_FILES['arquivo_Post']['tmp_name'] . '</strong><br />';
    echo 'Seu tamanho é: <strong>' . $_FILES['arquivo_Post']['size'] . '</strong> Bytes<br /><br />';
    
    $arquivo_tmp = $_FILES['arquivo_Post']['tmp_name'];
    $nome        = $_FILES['arquivo_Post']['name'];
    
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
        $destino = 'img/blog/ ' . $novoNome;
        
        // tenta mover o arquivo para o destino
        if (move_uploaded_file($arquivo_tmp, $destino)) {
            $sql = "INSERT INTO blog_post (Titulo, Texto_Pequeno, Texto_Grande, Data, Img_Post) VALUES ('$Titulo', '$Texto_Pequeno', '$Texto_Grande', '$Data', '$novoNome')";
            if (mysqli_query($conn, $sql)) {
                
                $sql2      = "SELECT * FROM blog_post where Titulo = '$Titulo'";
                $consulta1 = mysqli_query($conn, $sql2);
                
                if ($consulta1->num_rows > 0) {
                    while ($row1 = $consulta1->fetch_assoc()) {
                        
                        $Id_Post = $row1['Id_Post'];
                        if ($number > 0) {
                            for ($i = 0; $i < $number; $i++) {
                                if (trim($_POST["hastag"][$i] != '')) {
                                    $sql1 = "INSERT INTO hastags(Hastag, Id_Post) VALUES('" . mysqli_real_escape_string($conn, $_POST["hastag"][$i]) . "', '$Id_Post')";
                                    mysqli_query($conn, $sql1);
                                    header("Location: admin.php");
                                }
                            }
                        } else {
                            echo "Please Enter Name";
                        }
                        
                    }
                } else {
                    echo "Sem Dados";
                }
                
            } else {
                echo "Please Enter Name";
            }
        } else {
            $_SESSION['produto_nao_enviado'] = true;
            header('Location: admin.php');
            exit();
        }
        
    } else
        echo 'Erro ao salvar o arquivo. Aparentemente você não tem permissão de escrita.<br />';
} else
    echo 'Você poderá enviar apenas arquivos "*.jpg;*.jpeg;*.gif;*.png"<br />';

?>