<?php
    require_once 'login_bd.php';
    $conn = new mysqli($hn, $un, $pw, $db);
    if ($conn->connect_error)
        die("Erro Fatal");

    $idsubcat = $_POST["phpidsubcat"];


    $sql = "SELECT * FROM subcategoria WHERE IdsSubCategoria='$idsubcat'";
    $result = mysqli_query($conn, $sql);
    
    if ($result) {
        while ($row = mysqli_fetch_array($result)) {
            echo "<script>
            $('[name=txt_sub_Categoria]').val('" . $row['NomeSubCategoria'] . "');            
            $('[name=txt_sub_idsubCategoria]').val('" . $row['IdsSubCategoria'] . "');            
            $('[name=NomeCategoria]').val('" . $row['IdCategoria'] . "');            
            </script>";
        }                    
        
    }else{
        echo 0;
    }


?>