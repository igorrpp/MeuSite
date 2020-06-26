<?php
session_start();
?>
<!DOCTYPE html >
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<html lang="pt-br">
<head>
    <!-- Link da bibliotecla bootstrap-->
    
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="scss/login.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" sizes=""  href="img/logo.png">
	
	<title>Cadastrar-Delicius</title>
	<style>
        .ml-2:hover{
            color: pink;
        }

        h5{
            color: brown;
            text-align: center;
        }
    h5:hover{color: pink;
    }
    
    body{
  		background-image:url("img/bg-masthead.jpg");
		  background-size: cover;
		  background-repeat: repeat;
		  background-position: right bottom;	  
}
    .notification{margin-top: 10px ;
    }

    p{
        color: red;
    }
    .sucess{
        color:green;
        text-align: center;
    }

    .erro{
        color: rgb(180, 163, 5);
        text-align: center;
    }
  </style>



</head>
<body>
    <div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="img/logo.png" class="brand_logo" alt="Logo">
					</div>
                </div>
				
              
				<div class="d-flex justify-content-center form_container">
					<form action="cadastrar.php" method="POST">
                   
                   
                    <?php
                    if (isset($_SESSION['status_cadastro'])):
                     ?>
                    <div class="notification ">
                      <p class="sucess"><i class="fas fa-check"></i>  Cadastro efetuado com sucesso!</p>
                    </div>
                    <?php
                    endif; 
                    unset($_SESSION['status_cadastro']);
                     ?>
                    <?php
                    if (isset($_SESSION['usuario_existe'])):
                    ?>
                    <div class="notification">
                        <p class="erro"><i class="fas fa-exclamation"></i> O usuário já é existente.<br>
                     
                    </div>
                    <?php 
                    endif;
                    unset($_SESSION['usuario_existe']);
                     ?>
                    <div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-id-badge"></i></span>
							</div>
                            
                            <input name="nome" class="form-control input_pass" type="text" placeholder="Seu nome">
                          
                        </div>
						<div class="input-group mb-3">
							
                              <!-- Login -->
                              
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
                           
              <!-- nova --><input name="usuario" type="text" class="form-control input_user" placeholder="Seu usuário" autofocus="">
                        </div>
                        
                        <!-- Senha -->
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
                            
                            <input name="senha" class="form-control input_pass" type="password" placeholder="Sua senha">
                          
                        </div>
						</div>
							<div class="d-flex justify-content-center mt-4 login_container">
                           
                     <button type="submit"  class="btn login_btn">Cadastrar</button>
            
                     <div class="d-flex justify-content-center links">
				   </div>
					</form>
				</div>
		
				<div class="mt-4">
					<div class="d-flex justify-content-center links">
						<a href="login_index.php" class="ml-2"><i class="fas fa-2x fa-long-arrow-alt-left"></i></a>
					</div>

				</div>
			</div>
		</div>
	</div>
</body>
</html>