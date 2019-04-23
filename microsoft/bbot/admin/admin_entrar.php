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
    ?>
   	<div class="limiter">
		<div class="container-login100" style="height: 100vh;">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt style="width: 50%;">
					<img src="../imagens/logo/new_logo.png" alt="Bbot Software" style="width: 100%;">
				</div>

				<form class="login100-form validate-form" action="login.php" method="POST">
					<span class="login100-form-title">
						Admin Entrar
					</span>
					<?php
                    if(isset($_SESSION['nao_autenticado'])):
                    ?>
                    <div class="notification is-danger">
                      <p>ERRO: Admin inválido.</p>
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['nao_autenticado']);
                    ?>
					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="nome" placeholder="Nome" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="password" name="pass" placeholder="Password" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Entrar
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
      <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

   </body>
</html>