<?php
	require_once 'login_bd.php';
	$conn = new mysqli($hn, $un, $pw, $db);
	if ($conn->connect_error)
		die("Erro Fatal");

    $cat = $_POST["phpidcat"];


    $sql = "SELECT * FROM subcategoria WHERE IdCategoria=$cat";
    $result = mysqli_query($conn, $sql);

        if ($result) {

            echo "<option value='0'>--->Sub Categoria<---</option>";
            while ($row = mysqli_fetch_array($result)) {
                echo "<option value='" . $row['IdsSubCategoria'] . "'>" . $row['NomeSubCategoria'] . "</option>";
            }
             echo "<script>
            $('#div_NomeSubCategoriaSelect').css('display','block');
            </script>";
            
        }else{
            echo 0;
        }


?>