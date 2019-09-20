<!DOCTYPE html>
<html lang="pt-br">  
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pharus | Login</title> <!--Título da Aba-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> <!--Importação do CSS do BS-->
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/stylelogin.css"> <!--Importação das folhas de estilo css-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous"> <!--Importação dos ícones utilizados-->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet"> <!--Importação da fonte Open Sans-->
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> <!--Importação de sweetalert-->
	<link rel="shortcut icon" href="<?= base_url()?>assets/img/icon.ico"/> <!--Icone-->
</head>
<!--Coded with love by Mutiullah Samim-->
<body>
		<!--Refazer isso de modo organizado e modular-->
		<?php  
			if (!isset($_GET["error"])){}else{
				$erro=$_GET["error"];
				if ($erro==1){
		?>
			<script>
	    		swal("Ops!", 'Nome de usuário ou senha incorreto.', "error");
	    	</script>
    	<?php 
    			}elseif($erro==2){
    	?>
			<script>
	    		swal("Ops!", 'Faça login para acessar essa página!', "error");
	    	</script>
    	<?php 	
    			}
    		}	
    	?>
    <div class="container h-100">
		<div class="d-flex justify-content-center h-100" >
			<div class="user_card bg-light">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="<?= base_url()?>assets/img/logo.png" width=240 class="logo_grande" alt="Logo"><!--Nossa Logo-->
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
					<form method="post" action="login/autenticar"><!--Mandar para a página de checagem-->
						<!--Envia para o controller Login.php na função autenticar-->
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="usuario" class="form-control input_user text-capitalize" value="" placeholder="Nome de usuário" autofocus>
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="senha" class="form-control input_pass" value="" placeholder="Senha">
						</div>
						<div class="form-group">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="customControlInline">
								<label class="custom-control-label" for="customControlInline">Lembre-se de mim</label>
							</div>
						</div>
				</div>
					<div class="d-flex justify-content-center mt-3 login_container">
						<button type="submit" name="button" class="btn btn-warning login_btn">Entrar</button>
					</div>
				</form>
				<div class="mt-4">
					<div class="d-flex justify-content-center links">
						Ainda não tem cadastro? <a href="cadastro" class="ml-2">Faça agora!</a>
					</div>
					<div class="d-flex justify-content-center links">
						<a href="recuperarsenha">Esqueceu sua senha?</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--Abaixo seguem os scripts para o funcionamento do JS do BS...-->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 
	<!--Fim dos scripts do BS-->
</body>
</html>