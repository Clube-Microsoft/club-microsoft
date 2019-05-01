<?php
require_once 'login_bd.php';
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error)
    die("Erro Fatal");

$cat = $_POST['phpcat'];

$valores = implode("', '", $cat);
//$valores = http_build_query($cat, "', '");


       $sql = "SELECT IdCategoria FROM categoria WHERE NomeCategoria IN ('$valores')";


$consulta = mysqli_query($conn, $sql);
if (!$consulta) {
    echo 0;
    exit;
}

if (mysqli_num_rows($consulta) == 1) {
    while ($dados = mysqli_fetch_assoc($consulta)) {
        $id_cat = $dados["IdCategoria"];
         
        $sql1      = "SELECT link FROM subcategoria WHERE IdCategoria IN ('$id_cat')";
        $consulta1 = mysqli_query($conn, $sql1);
        if (!$consulta1) {
            echo 0;
            exit;
        }

        while ($dados1 = mysqli_fetch_assoc($consulta1)) {
            echo "<script>
            $('[name=txt_link]').val('" . $dados1['link'] . "');            
            </script>";
        }

    }
} else {
    echo 0;
}
?>

