		<!--conteudo-->
        <div id="page-content-wrapper">
            <div class="container first-container usuario">
	        <div class="row align-items-center">
	     		<div class="col-xl-4 col-md-12">
	     			<div class="mx-auto col-12 h-75 my-3 rounded-top overflow-hidden content">
	     				<img src="<?= base_url()?>assets/img/#.png" width=240>
	     			</div>
	     			<h2 class="my-3 text-center"><span class="text-capitalize"><?php echo $this->session->userdata('usuario'); ?></span></h2>
	     		</div>
	     		<div class="col-xl-6 col-md-12 mx-auto">
	     		<div class="container h-100 usuario">
				<div class="d-flex justify-content-center h-100" >
					<div class="user_card user_card_user my-3 h-100">
						<div class="d-flex justify-content-center">
							<div class="brand_logo_container">
								<h1 class="title_log">Dados <span class="text-lowercase">do</span> usuário</h1><!--Nossa Logo-->
							</div>
						</div>
						<div class="d-flex justify-content-center form_container">
							<form method="post" action="cadastro/editarDados">
								Nome Completo:
								<div class="input-group mb-2">
									<input type="text" name="nome" value="<?php echo $nome ?>" class="form-control dados_user" value="" placeholder="" disabled>
								</div>
								Usuário:
								<div class="input-group mb-2">
									<input type="text" name="usuario" value="<?php echo $this->session->userdata('usuario'); ?>" class="form-control dados_user" value="" placeholder="" disabled>
								</div>
								Email:
								<div class="input-group mb-2">
									<input type="text" name="email" value="<?php echo $email ?>" class="form-control dados_user" value="" placeholder="" disabled>
								</div>
								Conta Contrato:
								<div class="input-group mb-2">
									<input type="text" name="conta_contrato" value="<?php echo $contaContrato ?>" class="form-control dados_user" value="" placeholder="" disabled>
								</div>
								Cep/Bairro:
								<div class="input-group mb-2">
									<input type="text" name="senha_atual" class="form-control dados_user" value="" placeholder="" disabled>
								</div>
						</div>
							<div class="d-flex justify-content-center mt-3 login_container my-3">
							<button type="submit" name="editar" id="Salvar_dados" class="btn login_btn btn-success position-absolute my-4">Salvar alterações</button>
							</div>
							<div class="d-flex justify-content-center mt-3 login_container my-3">
							<button type="" name="editar" id="Atualizar_dados" class="btn login_btn btn-success position-absolute my-4">Atualizar dados</button>
						</form>
					</div>
				</div>
			</div>
            </div>
            </div>
            </div>
        </div>
        <!--conteudo-->
		</div>
</div>
	
	<script src='https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js'></script><!--Importação do Ajax...-->
	<script  src="<?= base_url()?>assets/js/script.js"></script><!--Importação do JS do menu...-->
	<script src='http://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js'></script><!--Importação do gráfico-->

	<!--Abaixo seguem os scripts para o funcionamento do JS do BS...-->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 
	<!--Fim dos scripts do BS-->
	<script>
    var atual ="Usuario";
	</script>
</body>
</html>
<!--https://codepen.io/hudsonsilvaoliveira/pen/doZNep?editors=1010 gráfico de colunas-->