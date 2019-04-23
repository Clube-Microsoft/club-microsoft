<?php
require_once 'login_bd.php';
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error)
    die("Erro Fatal");

$subcat = $_POST['phpsubcat'];
$valores = implode("', '", $subcat);

$sql      = "SELECT IdsSubCategoria FROM subcategoria WHERE NomeSubCategoria IN ('$valores')";
$consulta = mysqli_query($conn, $sql);
if (!$consulta) {
    echo 0;
    exit;
}

if (mysqli_num_rows($consulta) == 1) {
    while ($dados = mysqli_fetch_assoc($consulta)) {
        $id_cat = $dados["IdsSubCategoria"];       
        $sql1      = "SELECT NomeProduto FROM produtos WHERE IdsSubCategoria='$id_cat'";
        $consulta1 = mysqli_query($conn, $sql1);
        if (!$consulta1) {
            echo 0;
            exit;
        }
        
        echo"<p class='p_assistente'>Nós recomendamos este produto ";
        while ($dados1 = mysqli_fetch_assoc($consulta1)) {
            echo $dados1["NomeProduto"] . "<br>"; 
        }
        echo "</p><div style='clear: both'></div>";
    }
} else {
    echo 0;
}

?>

