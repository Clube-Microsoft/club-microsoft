
      <link rel="stylesheet" type="text/css" href="Content/Style_Bot.css">
      <link rel="stylesheet" type="text/css" href="Content/bootstrap.css">


      <?php
         require_once 'login_bd.php';
         ?>
      <div id="div_icon_chat" class="div_icon_chat">
         <img src="Imagens/Icons/chat.png" style="height: 8vh;" />
      </div>
      <div id="div_chat" class="div_chat">
         <div class="div_nome_chat">
            <img src="Imagens/Logo/pequeno.png" style="height: 4vh; max-height: 25px; margin-top: -13px; margin-left: 20px;" />
            <h3 style="display: inline; line-height: 44px; margin-left: 6px;">Bryan</h3>
            <img id="img_cancel" src="Imagens/Icons/cancel1.png" class="img_cancel" />
         </div>
         <div id="div_msgs" class="div_conversa">
            <p class='p_assistente'>Olá, sou o Bryan o assistente Virtual da B-bot.</p>
            <p class='p_assistente'>Qual o seu nome?</p>
            <div style='clear: both'></div>
         </div>
         <div class="div_escrever_mensagem_chat" id="div_msg">
            <form action="/" id="enviar_nome">
               <input type="text" id="txt_msg_nome" name="txt_msg_nome" Class="txt_mensagens_chat" autocomplete="off" />
               <span class="floating-label">Escreva seu Nome</span>
               <input type="image" name="img_btn_nome" src="Imagens/Icons/send_button.png" Class="icons_enviar" />
            </form>
            <form action="/" id="enviar_email" style="display: none;">
               <input type="email" id="txt_msg_email" name="txt_msg_email" Class="txt_mensagens_chat" autocomplete="off" />
               <span class="floating-label">Escreva seu Email</span>
               <input type="image" name="img_btn_email" src="Imagens/Icons/send_button.png" Class="icons_enviar" />
            </form>
            <form action="/" id="enviar_cat" style="display: none;"> 
               <input type="text" id="txt_msg_cat" name="txt_msg_cat" Class="txt_mensagens_chat" autocomplete="off" />
               <span class="floating-label">Escreva Categoria</span>
               <input type="image" name="img_btn_cat" src="Imagens/Icons/send_button.png" Class="icons_enviar" />
            </form>
            <form action="/" id="enviar_sub_cat" style="display: none;"> 
               <input type="text" id="txt_msg_sub_cat" name="txt_msg_sub_cat" Class="txt_mensagens_chat" autocomplete="off" />
               <span class="floating-label">Escreva Sub Categoria</span>
               <input type="image" name="img_btn_sub_cat" src="Imagens/Icons/send_button.png" Class="icons_enviar" />
            </form>
            <form action="/" id="button_sim" style="display: none;">
               <input type="submit" name="txt_sim" value="Sim" Class="btn_enviar_mail_chat" />
            </form>
            <form action="/" id="button_nao" style="display: none;">
               <input type="submit" name="txt_nao" value="Não" Class="btn_enviar_mail_chat" />
            </form>
         </div>
         <p style="position: fixed; bottom: 1.5vh; right: 2.7%">Powered by <a href="https://www.bbot.pt/" target="_blank">B-Bot</a></p>
      </div>
      <script type="text/javascript" src="http://code.jquery.com/jquery-1.4.3.min.js" ></script>
      <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
      <link rel="stylesheet" href="Content/Style_footer.css" />
      <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>


      <script>

         $("#div_icon_chat").click(function () {
             $("#div_icon_chat").css("visibility", "hidden");
             $("#div_icon_chat").css("opacity", "0");
             $("#div_chat").css("visibility", "visible");
             $("#div_chat").css("opacity", "1");
             $("#div_chat").css("display", "block");
         });

         $("#img_cancel").click(function () {
             $("#div_icon_chat").css("visibility", "visible");
             $("#div_icon_chat").css("opacity", "1");
             $("#div_chat").css("visibility", "hidden");
             $("#div_chat").css("opacity", "0");
             $("#div_chat").css("display", "none");
         });

     
         $("#enviar_nome").submit(function (event) {
            event.preventDefault();

            const nome = $("#txt_msg_nome").val();


            if ($("#txt_msg_nome").val() == "") {
               alert("Insira Um Nome!");
            } else {
               $("#enviar_nome").css("display", "none");
               $("#enviar_email").css("display", "block");

               $("#div_msgs").append("<p class='p_cliente'>" + nome + "</p><div style='clear: both'></div>");

               $("#div_msgs").delay(800).queue(function (next) {
                  $(this).append("<p class='p_assistente'>" + nome + ", podes dizer-nos o teu e-mail para que eu possa registar o atendimento.</p>");
                  next();
               });

               $("#div_msgs").delay(1000).queue(function (next) {
                  $(this).append("<p class='p_assistente'>Não te preocupes, não envio spam! <img src='Imagens/Emojis/linguadefora.png' style='width:32px' /></p><div style='clear: both'></div>");
                  next();
               });
               $(".div_conversa").stop().animate({
                  scrollTop: $(".div_conversa")[0].scrollHeight
               }, 1000);
            }
         });


      $("#enviar_email").submit(function (event) {
         event.preventDefault();

         const nome = $("#txt_msg_nome").val();
         const email = $("#txt_msg_email").val();
         $("#email_cliente").text(email);

         if ($("#txt_msg_email").val() == "") {
            alert("Insere um e-mail!")
         } else {

            $("#enviar_email").css("display", "none");
            $("#enviar_cat").css("display", "block");

            $("#div_msgs").append("<p class='p_cliente'>" + email + "</p><div style='clear: both'></div>");

            $("#div_msgs").delay(800).queue(function (next) {
               $(this).append("<p class='p_assistente'>O que precisas de saber, " + nome + "?</p><div style='clear: both'></div>");
               next();
            });

            $("#div_msgs").delay(1200).queue(function (next) {
                  $(this).append("<p class='p_assistente'><?php
                     $sql = 'SELECT * FROM categoria'; $consulta = mysqli_query($conn, $sql);

                     if ($consulta -> num_rows > 0) {
                        while ($row = $consulta -> fetch_assoc()) {
                           echo $row['NomeCategoria'].
                           '<br>';
                        }
                     } else {
                        echo 'Sem Dados';
                     }

                     ?></p><div style='clear: both'></div > ");
                     next();
                  });


               $(".div_conversa").stop().animate({
                  scrollTop: $(".div_conversa")[0].scrollHeight
               }, 1000);
            }

         });


         $("#enviar_cat").submit(function (event) {
            event.preventDefault();

            const cat1 = $("#txt_msg_cat").val();
            const cat = cat1.split(' ');

            if ($("#txt_msg_cat").val() == "") {
               alert("Insere uma categoria!")
            } else {

               $.post('cat.php', {
                  phpcat: cat
               }, function (data) {

                  if (data == 0) {

                     $("#div_msgs").append("<p class='p_cliente'>" + cat1 + "</p><div style='clear: both'></div>");

                     $("#div_msgs").delay(800).queue(function (next) {
                        $(this).append("<p class='p_assistente'>Não consigo Responder a isso diga o que quer de novo.</p><div style='clear: both'></div>");
                        next();
                     });

                     $("#txt_msg_cat").val('');

                     $(".div_conversa").stop().animate({
                        scrollTop: $(".div_conversa")[0].scrollHeight
                     }, 1000);
                  } else {

                     $("#enviar_cat").css("display", "none");
                     $("#enviar_sub_cat").css("display", "block");

                     $("#div_msgs").append("<p class='p_cliente'>" + cat1 + "</p><div style='clear: both'></div>");

                     $("#div_msgs").delay(800).queue(function (next) {
                        $(this).append("<p class='p_assistente'>Diga o que pertende saber?</p><div style='clear: both'></div>");
                        next();
                     });

                     $("#div_msgs").delay(1500).queue(function (next) {
                        $(this).append(data);
                        next();
                     });

                     $(".div_conversa").stop().animate({
                        scrollTop: $(".div_conversa")[0].scrollHeight
                     }, 1000);
                  }
               });
            }
         });

         $("#enviar_sub_cat").submit(function (event) {
            event.preventDefault();

            const sub_cat1 = $("#txt_msg_sub_cat").val();
            const sub_cat = sub_cat1.split(' ');


            if ($("#txt_msg_sub_cat").val() == "") {
               alert("Insere uma categoria!")
            } else {

               $.post('resultado.php', {
                  phpsubcat: sub_cat
               }, function (data) {

                  if (data == 0) {

                     $("#div_msgs").append("<p class='p_cliente'>" + sub_cat1 + "</p><div style='clear: both'></div>");

                     $("#div_msgs").delay(800).queue(function (next) {
                        $(this).append("<p class='p_assistente'>Não consigo Responder a isso diga o que quer de novo.</p><div style='clear: both'></div>");
                        next();
                     });


                     $("#txt_msg_sub_cat").val('');
                     updateScroll();

                  } else {

                     $("#enviar_sub_cat").css("display", "none");
                     $("#button_sim").css("display", "block");
                     $("#button_nao").css("display", "block");
                     $("#div_msg").css("border", "none");

                     $("#div_msgs").append("<p class='p_cliente'>" + sub_cat1 + "</p><div style='clear: both'></div>");


                     $("#div_msgs").delay(800).queue(function (next) {
                        $(this).append(data);
                        next();
                     });

                     $("#div_msgs").delay(1500).queue(function (next) {
                        $(this).append("<p class='p_assistente'>Precisa de mais ajuda?<br />Ao clicar em 'Sim' concordará que os dados facultados, serão utilizados para o Contacto!</p><div style='clear: both'></div>");
                        next();
                     });

                     $(".div_conversa").stop().animate({
                        scrollTop: $(".div_conversa")[0].scrollHeight
                     }, 1000);
                  }

               });
            }
         });

         $("#button_nao").submit(function (event) {
            event.preventDefault();

            $("#button_sim").css("display", "none");
            $("#button_nao").css("display", "none");

            const nome = $('#txt_msg_nome').val();
            const email = $('#txt_msg_email').val();
            const categoria = $('#txt_msg_cat').val();
            const sub_categoria = $('#txt_msg_sub_cat').val();
            const nao_false = 0;
            console.log(nao_false);
            $.post('ajuda.php', {
               phpnome: nome,
               phpemail: email,
               phpcategoria: categoria,
               phpsub_categoria: sub_categoria,
               phpescolha: nao_false
            }, function (data) {});

            $("#div_msgs").append("<p class='p_cliente'>Não</p><div style='clear: both'></div>");

            $("#div_msgs").delay(800).queue(function (next) {
               $(this).append("<p class='p_assistente'>Obrigado por nos contactar!</p><div style='clear: both'></div>");
               next();
            });
            $(".div_conversa").stop().animate({
               scrollTop: $(".div_conversa")[0].scrollHeight
            }, 1000);

         });

         $("#button_sim").submit(function (event) {

            event.preventDefault();

            $("#button_sim").css("display", "none");
            $("#button_nao").css("display", "none");


            const nome = $('#txt_msg_nome').val();
            const email = $('#txt_msg_email').val();
            const categoria = $('#txt_msg_cat').val();
            const sub_categoria = $('#txt_msg_sub_cat').val();
            const sim_true = 1;
            console.log(sim_true);
            $.post('ajuda.php', {
               phpnome: nome,
               phpemail: email,
               phpcategoria: categoria,
               phpsub_categoria: sub_categoria,
               phpescolha: sim_true
            }, function (data) {});

            $("#div_msgs").append("<p class='p_cliente'>Sim</p><div style='clear: both'></div>");

            $("#div_msgs").delay(800).queue(function (next) {
               $(this).append("<p class='p_assistente'>Obrigado por nos contactar entraremos em contacto pelo e-mail!</p><div style='clear: both'></div>");
               next();
            });

            $(".div_conversa").stop().animate({
               scrollTop: $(".div_conversa")[0].scrollHeight
            }, 1000);

         });
      </script>
