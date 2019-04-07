<?php
	require_once 'conexao.php';
	

    $idpost = $_POST['phpidpost'];


    $sql = "DELETE FROM blog_post WHERE Id_Post=$idpost";
    if (mysqli_query($conn, $sql)) {
        $sql1 = "DELETE FROM hastags WHERE Id_Post=$idpost";
        if (mysqli_query($conn, $sql1)) {
                     
            echo'
        <script>
            $(document).ready(function(){
                swal("O Post foi Apagado com Sucesso.")
            });
        </script>';

        }else{
            echo'
            <script>
                $(document).ready(function(){
                    swal("O Post NÃO foi Apagado com Sucesso");
                });
            </script>';

             

        }       
    }else{
            echo'
        <script>
            $(document).ready(function(){
                swal("O Post NÃO foi Apagado com Sucesso");
            });
        </script>';

        }  


?>