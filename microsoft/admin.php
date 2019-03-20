 <!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>  
    <?php  require_once "links.php"; ?>

  <!-- Site Title -->
  <title>Clube Microsoft</title>

</head>

<body>

  <?php  require_once "menu.php"; ?>

<?php session_start();
include('conexao.php');

if(!$_SESSION['admin']) {
	header('Location: iniciar.php');
	exit();
}
?>

	<div class="container-fluid">
        <div class="ro  w main-top-w3l py-2">

            <div class="col-lg-8 header-right mt-lg-0 mt-2">
                <!-- header lists -->
                <?php
                if (!isset($_SESSION['admin'])) {
                    ?>
                    <ul>
                        <li class="text-center border-right text-white">
                            <a href="iniciar.php" data-toggle="modal" data-target="#exampleModal" class="text-white">
                                <i class="fas fa-sign-in-alt mr-2"></i> Log In </a>
                        </li>
                        <li class="text-center text-white">
                            <a href="registar.php" data-toggle="modal" data-target="#exampleModal2" class="text-white">
                                <i class="fas fa-sign-out-alt mr-2"></i>Register </a>
                        </li>
                    </ul>
                    <?php
                } else {
                    ?>
                      <ul>
                      <li class="text-center text-white">
                        <a data-toggle="modal" data-target="" class="text-white">
                        <?php echo $_SESSION['admin']; ?>
                      </a>
                      </li>
                        <li class="text-center text-white">
                          <a href="logout.php" data-toggle="modal" data-target="#exampleModal2" class="text-white">
                            <i class="fas fa-sign-out-alt mr-2"></i>Sair </a>
                        </li>
                        </ul>
                    <?php
                }?>
					<!-- //header lists -->
				</div>
			</div>
		</div>
	</div>

	<div id="Categorias">
                     <?php 
                        $sql      = "SELECT * FROM categoria";
                        $consulta = mysqli_query($conexao, $sql);
                        
                        if ($consulta->num_rows > 0) {
                        while($row = $consulta->fetch_assoc()) {
                             echo " <table><tr>
                                       <td>" . $row["NomeCategoria"] . "</td></tr></table>";?>
                    	 <div style="clear: both;"></div>
                     <?php
                        }
                        } else {
                        echo "Sem Dados";
                        }
                        
                        ?>
              
                        <?php
                    if(isset($_SESSION['cat_nao_enviada'])):
                    ?>
                    <div class="notification is-danger">
                      <p>ERRO: Não enviada!</p>
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['cat_nao_enviada']);
                    ?>
                     <form action="categoria_add.php" id="categoria" method="post">
                        <p>
                        Adicionar Categorias
                        </p>
                   
                           <input type="text" name="txt_Categoria" id="txt_Categoria" placeholder="Categoria">

                       
               
                           <button type="submit" id="btn_cat" name="btn_cat">
                           Enviar
                           </button>
                     </form>       
	</div>
		<div style="clear: both;"></div>
<br>

		<div id="SCategorias">
                     <?php 
                        $sql      = "SELECT scategoria.IdSCategoria, scategoria.NomeSCategoria, categoria.NomeCategoria
                        FROM (scategoria
                        INNER JOIN categoria ON scategoria.IdCategoria = categoria.IdCategoria)";
                        $consulta = mysqli_query($conexao, $sql);
                        
                        if ($consulta->num_rows > 0) {
                        while($row = $consulta->fetch_assoc()) {
                             echo " <table><tr>
                                       <td>" . $row["NomeCategoria"] . "</td>
                                       <td>" . $row["NomeSCategoria"] . "</td></tr></table>";
                        }
                        } else {
                        echo "Sem Dados";
                        }
                        
                        ?>
              
                        <?php
                    if(isset($_SESSION['scat_nao_enviada'])):
                    ?>
                    <div class="notification is-danger">
                      <p>ERRO: Não enviada!</p>
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['scat_nao_enviada']);
                    ?>
                     <form action="scategoria_add.php" id="scategoria" method="post">
                        <p>
                        Adicionar Sub Categorias
                        </p>

                         <?php 
                           $sql = "SELECT * FROM categoria";
                           $result = mysqli_query($conexao, $sql);
                           
                           echo "<select id='NomeCategoria' name='NomeCategoria'>";
                           while ($row = mysqli_fetch_array($result)) {
                               echo "<option value='" . $row['IdCategoria'] . "'>" . $row['NomeCategoria'] . "</option>";
                           }
                           echo "</select>";
                           ?> 
                   
                           <input type="text" name="txt_sCategoria" id="txt_sCategoria" placeholder="Sub Categoria">

                       
               
                           <button type="submit" id="btn_scat" name="btn_scat">
                           Enviar
                           </button>
                     </form>       
	</div>
		<div style="clear: both;"></div>
<br>
	<style>
		table{
			width: 30%;
		}

		td{
			width: 20%;
			border: solid thin;
		}
	</style>

	<div id="Produtos">
                     <?php 
                        $sql      = "SELECT produtos.IdProduto, produtos.NomeProduto, produtos.Preco, produtos.Descricao, scategoria.NomeSCategoria, categoria.NomeCategoria 
	                        FROM ((produtos
	                        INNER JOIN categoria ON produtos.IdCategoria = categoria.IdCategoria)
	                        INNER JOIN scategoria ON produtos.IdSCategoria = scategoria.IdSCategoria)";
                        $consulta = mysqli_query($conexao, $sql);
                        
                        if ($consulta->num_rows > 0) {
                        while($row = $consulta->fetch_assoc()) {
                             echo " <table><tr>
                                       <td>" . $row["NomeCategoria"] . "</td>
                                       <td>" . $row["NomeSCategoria"] . "</td>
                                       <td>" . $row["NomeProduto"] . "</td>
                                       <td>" . $row["Descricao"] . "</td>
                                       <td>" . $row["Preco"] . "€</td>
                                       </tr></table>";
                        }
                        } else {
                        echo "Sem Dados";
                        }
                        
                        ?>
              
                        <?php
                    if(isset($_SESSION['produto_nao_enviado'])):
                    ?>
                      <p>ERRO: Não enviada!</p>
                    <?php
                    endif;
                    unset($_SESSION['produto_nao_enviado']);
                    ?>
                     <form enctype="multipart/form-data" action="produto_add.php" id="produto" method="post">
                        <p>
                        Adicionar Produtos
                        </p>

                         <?php 
                           $sql = "SELECT * FROM categoria";
                           $result = mysqli_query($conexao, $sql);
                           
                           echo "<select id='NomeCategoria' name='NomeCategoria'>";
                           while ($row = mysqli_fetch_array($result)) {
                               echo "<option value='" . $row['IdCategoria'] . "'>" . $row['NomeCategoria'] . "</option>";
                           }
                           echo "</select>";
							?>  <?php 
                           $sql = "SELECT * FROM scategoria";
                           $result = mysqli_query($conexao, $sql);
                           
                           echo "<select id='NomeSCategoria' name='NomeSCategoria'>";
                           while ($row = mysqli_fetch_array($result)) {
                               echo "<option value='" . $row['IdSCategoria'] . "'>" . $row['NomeSCategoria'] . "</option>";
                           }
                           echo "</select>";
                           ?> 
                   
                           <input type="text" name="txt_NProduto" id="txt_NProduto" placeholder="Nome Produto">
                           <input type="text" name="txt_DProduto" id="txt_DProduto" placeholder="Descrição Produto">
                           <input type="text" name="txt_PProduto" id="txt_PProduto" placeholder="Proço Produto">
                           <input type="file" name="arquivo" multiple="multiple" />
                       
               
                           <button type="submit" id="btn_produto" name="btn_produto">
                           Enviar
                           </button>
                     </form>       
	</div>

</body>
</html>

