<?php
    require_once 'login_bd.php';
    $conn = new mysqli($hn, $un, $pw, $db);
    if ($conn->connect_error)
        die("Erro Fatal");

    $idadmin = $_POST["phpidadmin"];


    $sql = "SELECT * FROM admin WHERE Id_admin='$idadmin'";
    $result = mysqli_query($conn, $sql);
    
    if ($result) {
        while ($row = mysqli_fetch_array($result)) {
            echo "<script>
            $('[name=txt_admin_nome]').val('" . $row['nome'] . "');            
            $('[name=txt_id_admin]').val('" . $row['Id_admin'] . "');            
            </script>";
        }                    
        
    }else{
        echo 0;
    }


?>