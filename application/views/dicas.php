			<div class="container-fluid first-container dicas-container">
	        <div class="row">
	            <div class="col-xl col-12 colunas">
				    <div class="a mb-4 card shadow-sm">
				      	<p class="text-center w-75">
				      		<?php echo $dica1; ?>
				      	</p>
				    </div>
				    <div class="a mb-4 card shadow-sm">
				      	<p class="text-center w-75">
				      		<?php echo $dica2; ?>
				      	</p>
				  	</div>
				    <div class="a mb-4 card shadow-sm">
				      	<p class="text-center w-75">
				      		<?php echo $dica3; ?>
				      	</p>
				    </div>
			    </div>
			    <div class="col-xl col-12 colunas">
			    	<div class="a mb-4 card shadow-sm">
				      	<p class="text-center w-75">
				      		<?php echo $dica4; ?>
				      	</p>
			      	</div>
			      	<div class="b mb-4 card shadow-sm">
			      		<p>
			      			<?php echo $dica5; ?>
			      		</p>
			      	</div>
			    </div>
			    <div class="col-xl col-12 colunas">
			      	<div class="c card-theme theme card shadow-sm">
			      		<p>
			      			<?php echo $dica6; ?>
			      		</p>
			      	</div>
			      		<a href="dicas" id="recarregar" class="btn bg-warning">Novas dicas <i class="fas fa-redo"></i></a>
			    </div>
            </div>
            </div>
        </div>
        <!--conteudo-->
		</div>
</div>

	<script src='https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js'></script><!--Importação do Ajax...-->
	<script src="<?= base_url()?>assets/js/script.js"></script><!--Importação do JS do menu...-->

	<!--Abaixo seguem os scripts para o funcionamento do JS do BS...-->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 
	<!--Fim dos scripts do BS-->
	<script>
    var atual ="Dicas";
	</script>
</body>
</html>
<!--https://codepen.io/Philippe_Fercha/pen/yawbqB link do menu-->