<?php
    require_once 'login_bd.php';
    $conn = new mysqli($hn, $un, $pw, $db);
    if ($conn->connect_error)
        die("Erro Fatal");

    $idcat = $_POST["phpidcat"];


    $sql = "SELECT * FROM categoria WHERE IdCategoria='$idcat'";
    $result = mysqli_query($conn, $sql);
    
    if ($result) {
        while ($row = mysqli_fetch_array($result)) {
            echo "<script>
            $('[name=txt_Categoria]').val('" . $row['NomeCategoria'] . "');            
            $('[name=txt_id_Categoria]').val('" . $row['IdCategoria'] . "');            
            </script>";
        }                    
        
    }else{
        echo 0;
    }


?>