<?php 
   require_once 'login_bd.php';
   $conn = new mysqli($hn, $un, $pw, $db);
   if ($conn->connect_error)
    die("Erro Fatal");
   ?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="icon" href="../imagens/Logo/pequeno.png" type="image/png">
      <link rel="stylesheet" type="text/css" href="../Content/Style_Bot.css">
      <link rel="stylesheet" type="text/css" href="../Content/bootstrap.css">
      <link rel="stylesheet" type="text/css" href="../Content/Style_admin.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
      <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="../Content/main.css">
      <title>B-bot Admin</title>
   </head>
   <body>
      <?php 
         session_start();
         if(!$_SESSION['nome']) {
         header('Location: admin_entrar.php');
         exit();
         }
         ?>
      <div class="topnav" id="myTopnav">
         <a id="btn_nada" onclick="btn_nada()">Estatística</a>
         <a id="btn_cat" onclick="btn_cat()">Add Categoria</a>
         <a id="btn_sub_cat" onclick="btn_sub_cat()">Add sub Categoria</a>
         <a id="btn_produto" onclick="btn_produto()">Add Produto</a>
         <a id="logout" href="logout.php">Sair</a>
         <a href="javascript:void(0);" class="icon" onclick="myFunction()">
         <i class="fa fa-bars"></i>
         </a>
      </div>
      <script>
         function myFunction() {
           var x = document.getElementById("myTopnav");
           if (x.className === "topnav") {
             x.className += " responsive";
           } else {
             x.className = "topnav";
           }
         }
      </script>
      <div id="Estatisticas">
         <div class="limiter">
            <div class="container-login100">
               <div class="wrap-login100">
                  <span class="login100-form-title">
                  Estatística<br>
                  </span>
                  <div class="return_table js-tilt" id="Mostrar_Estatisticas" data-tilt style="width: 100%; text-align: center;">
                     <?php 
                        $sql      = "SELECT DISTINCT extract(MONTH from DATA)  Mes, extract(YEAR from DATA)  Ano, COUNT(CASE WHEN Ajuda = 1 then 0 end) Sim,COUNT(CASE WHEN Ajuda = 0 then 1 end) Nao, COUNT(Data) AS Id
                        FROM utilizadores
                        WHERE Data
                        group by  extract(MONTH from DATA)
                        ORDER BY utilizadores.Data ASC";


                        $consulta = mysqli_query($conn, $sql);
                         
                        if ($consulta -> num_rows > 0) {
							?>
							 <table class="estatisticas">
								<tr>
								   <th>Ano</th>
								   <th>Mês</th>
								   <th class="utilizadores">Utilizadores</th>
								   <th class="utilizadores">Sim</th>
								   <th class="utilizadores">Não</th>
								</tr>
								<?php while($row = $consulta->fetch_assoc()) { ?>
								<tr>
								   <td><?php echo $row["Ano"] ?></td>
								   <td><?php echo $row["Mes"] ?></td>
								   <td class="utilizadores"><?php echo $row["Id"] ?></td>
								   <td class="utilizadores"><?php echo $row["Sim"] ?></td>
								   <td class="utilizadores"><?php echo $row["Nao"] ?></td>
								</tr>
								<div style="clear: both;"></div>
								<?php
								   }
							   echo "</table>";
                           } else {
                           echo "Sem Dados";
                           }
                           
                           ?>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div id="Add_Cat" class="Seccoes">
      <div class="limiter">
      <div class="container-login100">
      <div class="wrap-login100">
      <div class="return_table js-tilt" id="Mostrar_Categorias" data-tilt>
      <?php 
         $sql      = "SELECT * FROM categoria";
         $consulta = mysqli_query($conn, $sql);
         
         if ($consulta->num_rows > 0) {
         while($row = $consulta->fetch_assoc()) {
              echo "<div style='width: 75%; float: left;''><p>" . $row["NomeCategoria"] . "</p></div>";?>
      <div style="width: 25%; float: right;">
      <input type="image" name="img_btn_edit_cat"<?php echo " id='".$row["IdCategoria"]."'" ?> src="../Imagens/Icons/edit.png" Class="icons_admin_trash" />
      <input type="image" name="img_btn_trash_cat" <?php echo "id='".$row["IdCategoria"]."'" ?> src="../Imagens/Icons/trash.png" Class="icons_admin_edit" />
      </div>
      <div style="clear: both;"></div>
      <?php
         }
         } else {
         echo "Erro";
         }
         
         ?>
      </div>
      <div  class="login100-form validate-form">
      <form action="/" id="enviar_cat">
      <span class="login100-form-title">
      Adicionar Categorias
      </span>
      <div class="wrap-input100 validate-input">
      <input class="input100" type="text" name="txt_Categoria" id="txt_Categoria" placeholder="Categoria">
      <input type="text" name="txt_id_Categoria" id="txt_id_Categoria" style="display: none;">
      <span class="focus-input100"></span>
      <span class="symbol-input100">
      <i class="fa fa-tag" aria-hidden="true"></i>
      </span>
      </div>
      <p id="resultado"></p>
      <div class="container-login100-form-btn">
      <button type="submit" id="btn_form_cat" name="btn_form_cat" class="login100-form-btn">
      Enviar
      </button>
      </form>
      </div>
      <form action="/" id="enviar_cat_edit">
      <button type="submit" id="btn_form_cat_editar" name="btn_form_cat_editar" class="login100-form-btn" style="display: none;">
      Editar
      </button>
      </form>
      </div>
      </div>
      </div>
      </div>
      </div>
      <div id="Add_sub_Cat" class="Seccoes">
      <div class="limiter">
      <div class="container-login100">
      <div class="wrap-login100">
      <div class="return_table js-tilt" id="Mostrar_sub_Categorias" data-tilt>
      <?php 
         $sql      = "SELECT subcategoria.IdsSubCategoria, subcategoria.NomeSubCategoria, categoria.NomeCategoria
         FROM (subcategoria
         INNER JOIN categoria ON subcategoria.IdCategoria = categoria.IdCategoria)";
         $consulta = mysqli_query($conn, $sql);
         
         
         
         if ($consulta->num_rows > 0) {
         while($row = $consulta->fetch_assoc()) {
              echo " <table class='table_sub_cat'><tr>
                        <td class='cat'>" . $row["NomeCategoria"] . "</td>
                        <td>" . $row["NomeSubCategoria"] . "</td>";?>
      <td>
      <input type="image" name="img_btn_edit_sub_cat" <?php echo "id='".$row["IdsSubCategoria"]."'" ?> src="../Imagens/Icons/edit.png" Class="icons_admin_trash" />
      <input type="image" name="img_btn_trash_sub_cat" <?php echo "id='".$row["IdsSubCategoria"]."'" ?> src="../Imagens/Icons/trash.png" Class="icons_admin_edit" />
      </td>
      </tr></table>
      <?php
         }
         } else {
         echo "Erro";
         }
         
         ?>
      </div>
      <form action="/" id="enviar_sub_cat" class="login100-form validate-form">
      <span class="login100-form-title">
      Adicionar Sub Categorias
      </span>
      <div class="wrap-input100 validate-input">
      <?php 
         $sql1 = "SELECT * FROM categoria";
         $result = mysqli_query($conn, $sql1);
         
         echo "<select id='NomeCategoria' name='NomeCategoria' class='input100'>
		 <option value='0'>--->Categoria<---</option>";
         while ($row = mysqli_fetch_array($result)) {
             echo "<option value='" . $row['IdCategoria'] . "'>" . $row['NomeCategoria'] . "</option>";
         }
         echo "</select>";
         ?>            <span class="focus-input100"></span>
      <span class="symbol-input100">
      <i class="fa fa-tag" aria-hidden="true"></i>
      </span>
      </div>
      <div class="wrap-input100 validate-input">
      <input class="input100" type="text" name="txt_sub_Categoria" id="txt_sub_Categoria" placeholder="Sub Categoria">
      <input type="text" name="txt_sub_idsubCategoria" id="txt_sub_idsubCategoria" style="display: none;">
      <span class="focus-input100"></span>
      <span class="symbol-input100">
      <i class="fa fa-tags" aria-hidden="true"></i>
      </span>
      </div>
      <p id="resultado1"></p>
      <div class="container-login100-form-btn">
      <button type="submit" id="btn_form_sub_cat" name="btn_form_sub_cat" class="login100-form-btn">
      Enviar
      </button>
      </form>
      <form action="/" id="enviar_sub_cat_edit" style="width: 100%;">
      <button type="submit" id="btn_form_sub_cat_editar" name="btn_form_sub_cat_editar" class="login100-form-btn" style="display: none;">
      Editar
      </button>                     
      </form>
      </div>
      </div>
      </div>
      </div>
      </div>
      </div>
      <div id="Add_produto" class="Seccoes">
         <div class="limiter">
            <div class="container-login100">
               <div class="wrap-login100">
                  <div class="return_table js-tilt" id="Mostrar_produto" data-tilt>
                     <table class="table_produtos">
                        <?php
                           $sql = "SELECT produtos.IdProduto, produtos.NomeProduto, categoria.NomeCategoria, subcategoria.NomeSubCategoria
                           FROM ((produtos
                           INNER JOIN categoria ON produtos.IdCategoria = categoria.IdCategoria)
                           INNER JOIN subcategoria ON produtos.IdsSubCategoria = subcategoria.IdsSubCategoria)";
                           
                           $consulta = mysqli_query($conn, $sql);
                           
                           if ($consulta->num_rows > 0) {
                           while($row = $consulta->fetch_assoc()) {
                           ?>
                        <tr>
                           <td><?php echo $row["NomeCategoria"] ?></td>
                           <td><?php echo $row["NomeSubCategoria"] ?></td>
                        </tr>
                        <tr style="border-bottom: solid thin;">
                           <td><?php echo $row["NomeProduto"] ?></td>
                           <td>
                              <input type="image" name="img_btn_edit_prod" <?php echo "id='".$row["IdProduto"]."'" ?> src="../Imagens/Icons/edit.png" Class="icons_admin_trash" />
                              <input type="image" name="img_btn_trash_prod" <?php echo "id='".$row["IdProduto"]."'" ?> src="../Imagens/Icons/trash.png" Class="icons_admin_edit" />
                           </td>
                        </tr>
                        <?php
                           }
                           } else {
                           echo "Erro";
                           }
                           ?>
                     </table>
                  </div>
                  <div class="login100-form validate-form">
                     <form action="/" id="enviar_produto">
                        <span class="login100-form-title">
                        Adicionar Produtos
                        </span>              
                        <div class="wrap-input100 validate-input"  id='div_NomeCategoriaSelect'>
                           <?php 
                              $sql1 = "SELECT * FROM categoria";
                              $result = mysqli_query($conn, $sql1);
                              
                              echo "<select id='NomeCategoria1' name='NomeCategoria1' class='input100' onchange='NomeCategoriaSelect(NomeCategoria1)'><option value='0'>--->Categoria<---</option>";
                              while ($row = mysqli_fetch_array($result)) {
                                  echo "<option value='" . $row['IdCategoria'] . "'>" . $row['NomeCategoria'] . "</option>";
                              }
                              echo "</select>";
                              ?>            <span class="focus-input100"></span>
                           <span class="symbol-input100">
                           <i class="fa fa-tag" aria-hidden="true"></i>
                           </span>
                        </div>
                        <?php 
                           $sql2 = "SELECT * FROM categoria";
                           $result2 = mysqli_query($conn, $sql2);
                           
                           echo "<div id='div_NomeCategoriaSelect1' class='wrap-input100 validate-input' style='display:none;'>
                           <select id='NomeCategoria2' class='input100' name='NomeCategoria2' onchange='NomeCategoria2Select(NomeCategoria2)'>";
                           echo "<option value='0'>--->Categoria<---</option>";
                           while ($row2 = mysqli_fetch_array($result2)) {
                              echo "<option value='" . $row2['IdCategoria'] . "'>" . $row2['NomeCategoria'] . "</option>";
                           }?>
                        </select>               
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                        <i class="fa fa-tag" aria-hidden="true"></i>
                        </span>
                  </div>
                  <div id='div_NomeSubCategoriaSelect' class='wrap-input100 validate-input' style="display: none;">
                  <select id='NomeSubCategoria' class='input100' name='NomeSubCategoria'>
                  </select>               
                  <span class="focus-input100"></span>
                  <span class="symbol-input100">
                  <i class="fa fa-tags" aria-hidden="true"></i>
                  </span>
                  </div>
                  <div id='div_NomeSubCategoriaSelect1' class="wrap-input100 validate-input">
                  </div>
                  <div class="wrap-input100 validate-input">
                  <input class="input100" type="text" name="txt_produtos" id="txt_produtos" placeholder="Produto">
                  <input type="text" name="txt_id_produto" id="txt_id_produto" style="display: none;">
                  <span class="focus-input100"></span>
                  <span class="symbol-input100">
                  <i class="fa fa-tags" aria-hidden="true"></i>
                  </span>
                  </div>
                  <p id="resultado2"></p>
                  <div class="container-login100-form-btn">
                  <button type="submit" id="btn_form_produtos" name="btn_form_produtos" class="login100-form-btn">
                  Enviar
                  </button>
                  </div> </form>
                  <form action="/" id="enviar_produto_edit">
                     <button type="submit" id="btn_form_produtos_editar" name="btn_form_produtos_editar" class="login100-form-btn" style="display: none; ">
                     Editar
                     </button>
                  </form>
               </div>
            </div>
         </div>
      </div>
      </div>
      <script>
         function btn_nada() {
           $("#Estatisticas").css("display", "block");
           $("#Add_Cat").css("display", "none");
           $("#Add_sub_Cat").css("display", "none");
           $("#Add_produto").css("display", "none");
          }
         
          function btn_cat() {
           $("#Estatisticas").css("display", "none");
           $("#Add_Cat").css("display", "block");
           $("#Add_sub_Cat").css("display", "none");
           $("#Add_produto").css("display", "none");
          }
          
          function btn_sub_cat() {
           $("#Add_sub_Cat").css("display", "block");
           $("#Estatisticas").css("display", "none");
           $("#Add_Cat").css("display", "none");
           $("#Add_produto").css("display", "none");
          }
          
          function btn_produto() {
           $("#Add_produto").css("display", "block");
           $("#Estatisticas").css("display", "none");
           $("#Add_sub_Cat").css("display", "none");
           $("#Add_Cat").css("display", "none");
          
          }
          
          $("#enviar_cat").submit(function (event) {
           event.preventDefault();
           $("#btn_form_cat").prop('disabled', true);
           const cat = $("#txt_Categoria").val();
           if (cat == "") {
             alert("Insere uma categoria!")
           } else {
             $.post('add_cat.php', {
               phpcat: cat
             }, function (data) {
          
               if (data == 0) {
          
                 $("#resultado").text(cat + " Categoria Não Enviada!").delay(1500).queue(function (next) {
                   $(this).css("display", "block");
                   next();
                 });
          
               } else {
          
                 $("#resultado").delay(1500).queue(function (next) {
                   $(this).css("display", "block").html(cat + " Categoria Enviada!");
                   next();
                 });
                         setTimeout(location.reload.bind(location), 3000);
               }
             });
           }
          });
          
          $("#enviar_sub_cat").submit(function (event) {
           event.preventDefault();
           $("#btn_form_sub_cat").prop('disabled', true);
           const subcategoria = $('#txt_sub_Categoria').val();
           const IdCategoria = $('#NomeCategoria').val();
           if (subcategoria == "") {
             alert("Insere uma sub categoria!")
           } else {
             $.post('add_sub_cat.php', {
               phpsubcat: subcategoria,
               phpidcat: IdCategoria
             }, function (data) {
          
               if (data == 0) {
          
                 $("#resultado1").text(subcategoria + " SubCategoria Não Enviada!").delay(1500).queue(function (next) {
                   $(this).css("display", "block");
                   next();
                 });
          
               } else {
          
                 $("#resultado1").delay(1500).queue(function (next) {
                   $(this).css("display", "block").html(subcategoria + " SubCategoria Enviada!");
                   next();
                 });
                         setTimeout(location.reload.bind(location), 3000);
               }
             });
           }
          });
          
          $("#enviar_produto").submit(function (event) {
           event.preventDefault();
         
           const produto = $('#txt_produtos').val();
           const IdCategoria = $('#NomeCategoria1').val();
           const IdsSubCategoria = $('#NomeSubCategoria').val();
           if (produto == "") {
             alert("Insere um produto!")
           }if(IdCategoria == "0"){
             alert("Insere uma categoria!")
           }if(IdsSubCategoria == null){
             alert("Insere uma sub categoria!")
           }else {
             $("#btn_form_produtos").prop('disabled', true);
             $.post('add_produto.php', {
               phpproduto: produto,
                   phpidcat: IdCategoria,
                   phpidsubcat: IdsSubCategoria
             }, function (data) {
          
               if (data == 0) {
          
                 $("#resultado2").text(produto + " Produto Não Enviado!").delay(1500).queue(function (next) {
                   $(this).css("display", "block");
                   next();
                 });
          
               } else {
          
                 $("#resultado2").delay(1500).queue(function (next) {
                   $(this).css("display", "block").html(produto + " Produto Enviado!");
                   next();
                 });
                         setTimeout(location.reload.bind(location), 3000);
               }
             });
           }
          });
          
          
          function NomeCategoriaSelect(NomeCategoria1) {
           const IdCategoria = $('#NomeCategoria1').val();
          
           $.post('select.php', {
             phpidcat: IdCategoria
           }, function (data) {
          
             if (data == 0) {
          
               $("#NomeSubCategoria").css("display", "none");
          
          
             } else {
               $("#NomeSubCategoria").html(data).css("display", "block");
             }
           });
          }
          
          
          $('[name=img_btn_trash_prod]').click(function(event){
              event.preventDefault();
             const idprod = event.target.id;
             
             $.post('delete_prod.php', {
              phpidprod: idprod
            }, function (data) {
          
              if (data == 0) {
          
                $("#resultado2").text("Produto Não Apagado!").delay(1500).queue(function (next) {
                   $(this).css("display", "block");
                   next();
                 });
                setTimeout(location.reload.bind(location), 3000);
          
              } else {
                $("#resultado2").text("Produto Apgado!").delay(1500).queue(function (next) {
                   $(this).css("display", "block");
                   next();
                 });
                setTimeout(location.reload.bind(location), 3000);
              }
            });
         
           });
         
          $('[name=img_btn_edit_prod]').click(function(event){
              event.preventDefault();
             const idprod = event.target.id;
         
             console.log(idprod);
         
             $.post('edit_select.php', {
              phpidprod: idprod
            }, function (data) {
          
              if (data == 0) {
         
                
          
              } else {               
               $("#div_NomeSubCategoriaSelect1").html(data); 
                $("#btn_form_produtos").css("display", "none");
                 $("#btn_form_produtos_editar").css("display", "block");
              }
            });
         
           });  
         
            $("#enviar_produto_edit").submit(function (event) {
           event.preventDefault();
         
           const produto = $('#txt_produtos').val();
           const IdCategoria = $('#NomeCategoria2').val();
           const IdsSubCategoria = $('#NomeSubCategoria1').val();
           const IdProduto = $('#txt_id_produto').val();
           if (produto == "") {
             alert("Insere um produto!")
           }if(IdCategoria == "0"){
             alert("Insere uma categoria!")
           }if(IdsSubCategoria == null){
             alert("Insere uma sub categoria!")
           }else {
             $("#btn_form_produtos_editar").prop('disabled', true);
             $.post('edit_prod.php', {
               phpidprod : IdProduto,
               phpproduto: produto,
                   phpidcat: IdCategoria,
                   phpidsubcat: IdsSubCategoria
             }, function (data) {
          
               if (data == 0) {
          
                 $("#resultado2").text(produto + " Produto Não Editado!").delay(1500).queue(function (next) {
                   $(this).css("display", "block");
                   next();
                 });
                setTimeout(location.reload.bind(location), 3000);
               } else {
          
                 $("#resultado2").delay(1500).queue(function (next) {
                   $(this).css("display", "block").html(produto + " Produto Editado!");
                   next();
                 });
                setTimeout(location.reload.bind(location), 3000);
         
               }
             });
           }
          });   
         
         function NomeCategoria2Select(NomeCategoria2) {
           const IdCategoria = $('#NomeCategoria2').val();
          
           $.post('select.php', {
             phpidcat: IdCategoria
           }, function (data) {
          
             if (data == 0) {
          
               $("#NomeSubCategoria1").css("display", "none");
          
          
             } else {
               $("#NomeSubCategoria1").html(data).css("display", "block");
             }
           });
          }
             
          $('[name=img_btn_edit_cat]').click(function(event){
              event.preventDefault();
             const idcat = event.target.id;
         
             console.log(idcat);
         
             $.post('edit_select_cat.php', {
              phpidcat: idcat
            }, function (data) {
          
              if (data == 0) {
         
                
          
              } else {               
               $("#div_NomeSubCategoriaSelect1").html(data); 
                $("#btn_form_cat").css("display", "none");
                 $("#btn_form_cat_editar").css("display", "block");
              }
            });
         
           });   
         
          $('[name=img_btn_trash_cat]').click(function(event){
              event.preventDefault();
             const idcat = event.target.id;
         
             $.post('delete_cat.php', {
              phpidcat : idcat
            }, function (data) {
          
              if (data == 0) {
          
                $("#resultado").text("Produto Não Apagado!").delay(1500).queue(function (next) {
                   $(this).css("display", "block");
                   next();
                 });
                setTimeout(location.reload.bind(location), 3000);
          
              } else {
                $("#resultado").text("Produto Apgado!").delay(1500).queue(function (next) {
                   $(this).css("display", "block");
                   next();
                 });
                setTimeout(location.reload.bind(location), 3000);
              }
            });
         
           });
         
         
            $("#enviar_cat_edit").submit(function (event) {
           event.preventDefault();
         
            const cat = $("#txt_Categoria").val();
            const idcat = $("#txt_id_Categoria").val();
           if (cat == "") {
             alert("Insere uma categoria!")
           } else {
             $("#btn_form_cat_editar").prop('disabled', true);
             $.post('edit_cat.php', {
               phpidcat : idcat,
               phpcat : cat
                
             }, function (data) {
          
               if (data == 0) {
          
                 $("#resultado").text(cat + " Produto Não Editado!").delay(1500).queue(function (next) {
                   $(this).css("display", "block");
                   next();
                 });
                setTimeout(location.reload.bind(location), 3000);
               } else {
          
                 $("#resultado").delay(1500).queue(function (next) {
                   $(this).css("display", "block").html(cat + " Produto Editado!");
                   next();
                 });
                setTimeout(location.reload.bind(location), 3000);
         
               }
             });
           }
          });         
         
            $('[name=img_btn_edit_sub_cat]').click(function(event){
              event.preventDefault();
             const idsubcat = event.target.id;
         
             $.post('edit_select_sub_cat.php', {
              phpidsubcat: idsubcat
            }, function (data) {
          
              if (data == 0) {
         
                setTimeout(location.reload.bind(location), 1000);
         
              } else {               
               $("#div_NomeSubCategoriaSelect1").html(data); 
                $("#btn_form_sub_cat").css("display", "none");
                 $("#btn_form_sub_cat_editar").css("display", "block");
              }
            });
         
           });   
         
          $('[name=img_btn_trash_sub_cat]').click(function(event){
              event.preventDefault();
             const idsubcat = event.target.id;
         
             $.post('delete_sub_cat.php', {
              phpidsubcat : idsubcat
            }, function (data) {
          
              if (data == 0) {
          
                $("#resultado1").text("Produto Não Apagado!").delay(1500).queue(function (next) {
                   $(this).css("display", "block");
                   next();
                 });
                setTimeout(location.reload.bind(location), 3000);
          
              } else {
                $("#resultado1").text("Produto Apgado!").delay(1500).queue(function (next) {
                   $(this).css("display", "block");
                   next();
                 });
                setTimeout(location.reload.bind(location), 3000);
              }
            });
         
           });
         
         
            $("#enviar_sub_cat_edit").submit(function (event) {
           event.preventDefault();
            const idcat = $("#NomeCategoria1").val();
            const subcat = $("#txt_sub_Categoria").val();
            const idsubcat = $("#txt_sub_idsubCategoria").val();
           if (subcat == "") {
             alert("Insere uma sub categoria!")
           } else {
             $("#btn_form_sub_cat_editar").prop('disabled', true);
             $.post('edit_sub_cat.php', {
               phpidsubcat : idsubcat,
               phpsubcat : subcat,
               phpidcat : idcat
                
             }, function (data) {
          
               if (data == 0) {
          
                 $("#resultado1").text(subcat + " Produto Não Editado!").delay(1500).queue(function (next) {
                   $(this).css("display", "block");
                   next();
                 });
                setTimeout(location.reload.bind(location), 3000);
               } else {
          
                 $("#resultado1").delay(1500).queue(function (next) {
                   $(this).css("display", "block").html(subcat + " Produto Editado!");
                   next();
                 });
                setTimeout(location.reload.bind(location), 3000);
         
               }
             });
           }
          });         
      </script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
      <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
      <div id="script"></div>
   </body>
</html>