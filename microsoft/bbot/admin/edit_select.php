<?php
    require_once 'login_bd.php';
    $conn = new mysqli($hn, $un, $pw, $db);
    if ($conn->connect_error)
        die("Erro Fatal");

    $idprod = $_POST["phpidprod"];


    $sql = "SELECT * FROM produtos WHERE IdProduto='$idprod'";
    $result = mysqli_query($conn, $sql);
    
    if ($result) {
        while ($row = mysqli_fetch_array($result)) {
            echo "<script>
            $('[name=NomeCategoria2]').val('" . $row['IdCategoria'] . "');            
            $('#NomeSubCategoria1').css('display','block');
            $('#div_NomeSubCategoriaSelect1').css('display','block');
            $('#div_NomeCategoriaSelect').css('display','none');
            $('#div_NomeCategoriaSelect1').css('display','block');
            $('#div_NomeSubCategoriaSelect').css('display','none');
            $('#NomeCategoria1').css('display','none');
            $('[name=NomeSubCategoria1]').val('" . $row['IdsSubCategoria'] . "');
            $('[name=txt_produtos]').val('" . $row['NomeProduto'] . "');
            $('#txt_id_produto').val('" . $row['IdProduto'] . "');
            </script>";

            $IdCategoria = $row['IdCategoria'];
        }

          $sql1 = "SELECT * FROM subcategoria WHERE IdCategoria = '$IdCategoria' ";
          $result1 = mysqli_query($conn, $sql1);
           if ($result1) {
          echo "<select class='input100' id='NomeSubCategoria1' name='NomeSubCategoria1'>";
          echo "<option value='0'>--->SubCategoria<---</option>";
          while ($row1 = mysqli_fetch_array($result1)) {
              echo "<option value='" . $row1['IdsSubCategoria'] . "'>" . $row1['NomeSubCategoria'] . "</option>";
          }
          echo "</select><span class='focus-input100'></span>
            <span class='symbol-input100'>
            <i class='fa fa-tags' aria-hidden='true'></i>
            </span>";
          }
                    
        
    }else{
        echo 0;
    }


?>