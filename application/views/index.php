			<?php 
				if (isset($_SESSION['conferirMeta'])) {
			?>
				<div class='alert alert-danger bg-warning border-0 float-left py-3' id="alerta-dica-chart" role='alert' style="width: 100%!important">Hoje é dia primeiro! E você <span style="font-weight:bold;"><?php echo $this->session->userdata('conferirMeta'); ?></span> sua meta! <a href="metas" class="text-dark">Clique aqui para mais detalhes.</a></div>
			<?php
				}
			?>
			<div class="container first-container">
				<div class="row align-items-center">
					<div class="col-xl-6 col-lg-12">
						<div class="box">
							<?php 
							if (isset($gasto)) {
								if ($gasto<=100) {
									?>
									<div class="chart anime theme" data-percent="<?php echo $gasto; ?>" data-scale-color="#ffb400"><span class="texto_grafico"><p><?php echo number_format($gasto, 1); ?>%</p><div id="tempo"><p>do limite em<br><span id="horas"><?php date_default_timezone_set('America/Fortaleza'); echo date('H'); ?></span> horas</p></span></div></div><!--Consumo do usuário, consumo do usuário também é passado como parâmetro para o % em data-percent (Acima)-->
									<?php
								} else {
									?>
									<div class="chart anime theme" data-percent="<?php echo ($gasto-100); ?>" data-scale-color="#ffb400"><span class="texto_grafico"><p><?php echo number_format(($gasto-100), 1); ?>%</p><div id="tempo"><p>excedido em <br><span id="horas"><?php date_default_timezone_set('America/Fortaleza'); echo date('H'); ?></span> horas</p></span></div></div><!--Consumo do usuário, consumo do usuário também é passado como parâmetro para o % em data-percent (Acima)-->
									<?php
								}
								if (!isset($_SESSION['premium'])){//CONFERIRI SE O USUÁRIO É PREMIUM
								?>
									<a href="" data-toggle="modal" data-target="#addvalores" class="position-relative text-warning anime" style="font-size: 1.8em; top: -105px; left: 200px"><h1><i class='fas fa-plus-circle'></i></a>
										<!-- Modal -->
										<div class="modal fade" id="addvalores" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
										  <div class="modal-dialog modal-dialog-centered" role="document">
										    <div class="modal-content">
										      <div class="modal-header">
										        <h5 class="modal-title font-weight-bold" id="TituloModalCentralizado">Inserir leitura.
												</h5>
										        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
										          <span aria-hidden="true">&times;</span>
										        </button>
										      </div>
										      <div class="modal-body">
										      	<p class="text-justify font-weight-normal" style="font-size: 0.6em">Você não possui monitoramento de consumo, mas pode inserir manualmente no campo abaixo o valor de leitura do seu medidor:</p>
										        <div class="container usuario">
								                    <div class="row align-items-center">
									                    <div class="col mx-auto">
									                    	<form method="post" action="Raiz/leitura">
									                       		<input type="number" min="0" max="10000" class="modal_input_time mx-auto" name="leitura" style="font-size: 0.5em">
									                    </div>
								                	</div>
								                </div>
										      </div>
										      <div class="modal-footer">
										        <a href="atualize" class="text-primary btn font-weight-bold">Seja premium</a>
										        <button type="submit" class="btn btn-warning font-weight-bold" value="salvar" name="btn">Inserir valor</button>
										        </form>
										      </div>
										    </div>
										  </div>
										</div>
								<?php
								}
							}else{
								?>
								<div class="card py-5 px-0 shadow card-theme theme mx-auto mb-5 d-table anime" id="card-home">
									<img src="<?= base_url()?>assets/img/calendario.png" class="py-3 mx-auto d-table-cell align-middle" width=80%>
								</div><!--Usuário ainda n definiu uma meta para ele, logo não temos gráfico-->
							<?php
							}
							?>

						</div>
					</div>
					<?php
						if (isset($gasto)) {
					?>
					<div class="col-xl-6 col-lg-12 text">
					<h1 class="mx-auto text-center animeRight theme card card-theme mb-5 py-2 shadow-sm" id="titulo_index">Dados Gerais</h1>
					<p class="mx-auto animeRight theme">Aqui você pode visualizar rapidamente os dados gerais de seu consumo de energia de maneira mais ampla e dinâmica, vendo o quanto foi gasto de sua meta em porcentagem até o presente momento. Você deve consumir no máximo até chegar ao limite de 100%, passar disso significa que você extrapolou sua meta.</p>
					</div>
					<?php
						}else{
					?>
					<div class="col-xl-6 col-lg-12 text">
					<h1 class="mx-auto text-center animeRight theme card card-theme mb-5 py-2 shadow-sm" id="titulo_index">Novo aqui?</h1>
					<p class="mx-auto animeRight theme">Seja bem vindo ao Pharus, <span class="text-capitalize"><?php echo $this->session->userdata('usuario');?></span>! Aqui você poderá gerenciar melhor o seu consumo de energia a partir de metas feitas por você mesmo e dicas que o ajudará a saber como consumir energia de modo consciente, além disso você poderá ver seu desenvolvimento em tempo real. Comece clicando no botão abaixo!</p>
					<a href="metas" class="btn btn-warning mx-auto py-3 position-relative d-block text-center animeRight" id="primeirobutton">Vamos definir uma meta para você!</a>
					</div>
					<?php
						}
					?>
				</div>
			</div>
			<div class="container-fluid">
				<!-- Three columns -->
				<div class="row align-items-center py-5 mt-2 barra-horizontal">
					<div class="col-lg-4 my-2 text-center anime">
						<div class="rounded-circle mx-auto d-table">
							<i class="fas fa-seedling align-middle d-table-cell"></i>
						</div>
						<h4 class="py-3 text-white">Lorem Ipsum</h4>
					</div><!-- /.col-lg-4 -->
					<div class="col-lg-4 my-2 text-center anime">
						<div class="rounded-circle mx-auto d-table">
							<i class="fas fa-plug align-middle d-table-cell"></i>
						</div>
						<h4 class="py-3 text-white">Maneire seu Consumo</h4>
					</div><!-- /.col-lg-4 -->
					<div class="col-lg-4 my-2 text-center anime">
						<div class="rounded-circle mx-auto d-table">
							<i class="fas fa-power-off align-middle d-table-cell"></i>
						</div>
						<h4 class="py-3 text-white">Lorem Ipsum</h4>
					</div><!-- /.col-lg-4 -->
				</div><!-- /.row -->
			</div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-6 col-lg-12 colunas-home d-table line">
						<div class="d-table-cell align-middle">
						<h2 class="text-center anime theme">Heading</h2><br>
						<p class="anime theme">O consumo de energia tende a subir cada vez mais, tendo em vista que nos tornamos cada vez mais dependentes de aparelhos eletrônicos e que a energia tende a se tornar mais cara pela dificuldade de suprir a grande demanda e épocas de secas.</p>
						</div>
					</div>
					<div class="col-xl-6 col-lg-12 colunas-home d-table">
						<div class="d-table-cell align-middle theme">
						<h2 class="text-center animeRight theme">Heading</h2><br>
						<p class="animeRight">O consumo de energia tende a subir cada vez mais, tendo em vista que nos tornamos cada vez mais dependentes de aparelhos eletrônicos e que a energia tende a se tornar mais cara pela dificuldade de suprir a grande demanda e épocas de secas.</p>
						</div>
					</div>
				</div>
				<div class="row align-items-center">
					<div class="col-xl-6 col-lg-12 last-container py-5 px-5 d-table">
						<div class="align-middle d-table-cell">	
							<h2 class="anime text-white">Heading</h2>
							<p class="mx-auto anime text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Pellentesque nec nam aliquam sem et tortor consequat id. </p>
						</div>
					</div>
					<div class="col-xl-6 col-lg-12 last-container py-5 text-center d-table">
						<img src="<?= base_url()?>assets/img/lampada.png" class="py-3 animeRight" height=100% >
					</div>
				</div>
			</div>
		</div>
		<!--conteudo-->

	<!--Demais scripts-->
	<script src='https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js'></script><!--Importação do Ajax...-->
	<script>
		$(function() {
			$('.chart').easyPieChart({});});
		var titulo;
		<?php 
		if ($gasto<=100) {echo "var corbarra = '#FFC107'";
	} else {echo "var corbarra = '#a32f2f'";}
	?>	
	</script>
	<script>
	    localStorage.setItem('Usuario', "<?php echo $this->session->userdata('usuario'); ?>");
   		var atual ="Home";
	</script>
