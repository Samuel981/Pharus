			<?php 
				if (isset($_SESSION['conferirMeta'])) {
			?>
				<div class='alert alert-danger bg-warning border-0 float-left py-3' id="alerta-dica-chart" role='alert' style="width: 100%!important">Hoje é dia primeiro! E você <span style="font-weight:bold;"><?php echo $this->session->userdata('conferirMeta'); ?></span> sua meta! <a href="metas" class="text-dark">Clique aqui para mais detalhes.</a></div>
			<?php
				}
			?>
			<div class="container first-container home">
				<div class="row align-items-center">
					<div class="col-xl-6 col-lg-12">
						<div class="box">
							<?php 
							if (isset($gasto)) {
								if ($gasto<=100) {
									?>
									<div class="chart anime theme" data-percent="<?php echo $gasto; ?>" data-scale-color="#ffb400"><p id="vcgastou">Você gastou</p><div id="porcentagem"><p id="numeroporcentagem"><?php echo number_format($gasto, 1); ?>%</p><span id="horas">do limite em <?php date_default_timezone_set('America/Fortaleza'); echo date('H'); ?>h</span></div></div><!--Consumo do usuário, consumo do usuário também é passado como parâmetro para o % em data-percent (Acima)-->
								<?php
								} else {
									?>
									<div class="chart anime theme" data-percent="<?php echo ($gasto-100); ?>" data-scale-color="#ffb400"><p id="vcgastou">Você excedeu</p><div id="porcentagem"><p id="numeroporcentagem"><?php echo number_format(($gasto-100), 1); ?>%</p><span id="horas">do limite em <?php date_default_timezone_set('America/Fortaleza'); echo date('H'); ?>h</span></div></div><!--Consumo do usuário, consumo do usuário também é passado como parâmetro para o % em data-percent (Acima)-->
									<?php
								}
								if (!isset($_SESSION['premium'])){//CONFERIRI SE O USUÁRIO É PREMIUM
								?>
									<!-- <a href="" id="addButton" data-toggle="modal" data-target="#addvalores" class="position-relative text-warning animeTop"><h1><i class='fas fa-plus-circle'></i></a> -->
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
									                    	<form method="post" action="Raiz/leituras">
									                       		<input type="number" min="0" max="10000" class="modal_input_time mx-auto" name="leitura" style="font-size: 0.5em" required>
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
								<div class="py-5 px-0 mx-auto mb-5 d-table anime" id="card-home">
									<img src="<?= base_url()?>assets/img/calendario.png" class="py-3 mx-auto d-table-cell align-middle" alt="ilustração de um calendário" width=80%>
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
					<p class="mx-auto animeRight theme">Seja bem vindo ao Pharus, <span class="text-capitalize"><?php echo $this->session->userdata('usuario')."!";?></span> Aqui você poderá gerenciar melhor o seu consumo de energia a partir de metas feitas por você mesmo e dicas que o ajudaram a saber como consumir energia de modo consciente, além disso você poderá ver seu desenvolvimento em tempo real. Comece clicando no botão abaixo!</p>
					<a href="metas" class="btn btn-warning mx-auto py-3 position-relative d-block text-center animeRight" id="primeirobutton">Vamos definir uma meta para você!</a>
					</div>
					<?php
						}
					?>
				</div>
				<?php
					if (isset($gasto)) {
				?>
			</div>
			<div class="container-fluid">
				<!-- Three columns -->
				<div class="row align-items-center py-5 mt-2 barra-horizontal card card-theme">
					<div class="container">
						<div class="row">
							<div class="col-lg-4 my-2 text-center animeTop">
								<a href="Raiz/abrirItem/1">
									<img src="<?= base_url()?>assets/img/tachometer.png" alt="Marcador de ponteiro semelhante a um velocimetro" class="rounded-circle" width=200>
									<h4 class="py-3 theme">Maneire seu Consumo</h4>
								<a>
							</div><!-- /.col-lg-4 -->
							<div class="col-lg-4 my-2 text-center animeTop">
								<a href="visaogeral#tutoriais">
									<img src="<?= base_url()?>assets/img/play.png" alt="Símbolo de play, formato triangular apontado para a direita" class="rounded-circle" width=200>
									<h4 class="py-3 theme">Tutoriais</h4>
									<a>
							</div><!-- /.col-lg-4 -->
							<div class="col-lg-4 my-2 text-center animeTop">
								<a href="visaogeral#guiarapido">
									<img src="<?= base_url()?>assets/img/book.png" alt="Livro aberto" class="rounded-circle" width=200>
									<h4 class="py-3 theme">Guia rápido</h4>
								<a>
							</div><!-- /.col-lg-4 -->
						</div>
					</div>
				</div><!-- /.row -->
			</div>
			<div class="container">
				<div class="row my-4">
					<div class="col-xl-6 col-lg-12 colunas-home d-table">
						<a href="dicas" style="color: #212529">
						<div class="card shadow card-theme card-colunas-home anime">
							<div class="d-table-cell align-middle">
							<h2 class="text-md-left text-center ml-0 theme">Domicílio</h2><br>
							<p class="theme mb-5">O consumo de energia elétrica nas residências aumentou 3,1% no ano de 2019 e tende a aumentar cada vez mais, devido a nossa dependência de aparelhos eletrônicos, aumentando assim consideravelmente o valor da nossa conta de energia.</p>
							</div>
						</div>
						</a>
					</div>
					<div class="col-xl-6 col-lg-12 colunas-home d-table">
						<a href="dicas" style="color: #212529">
						<div class="card shadow card-theme card-colunas-home animeRight">
							<div class="d-table-cell align-middle theme">
							<h2 class="text-md-left text-center ml-0 theme">Empresa</h2><br>
							<p class="mb-5">O consumo das empresas também aumentou, em média 4,0% em 2019, tendo o Nordeste registrado um aumento de 6,8%, o maior das regiões do Brasil, se tornando um problema no bolso de muitos empresários.</p>
							</div>
						</div>
						</a>
					</div>
				</div>
			</div>
			<div class="container-fluid">
				<!-- Three columns -->
				<div class="row align-items-center card card-theme">
					<div class="container">
						<div class="row">
							<div class="col-xl-6 col-lg-12 last-container py-5 d-table" style="padding-left: 40px;padding-right: 40px;">
								<div class="align-middle d-table-cell">	
									<h2 class="anime theme text-xl-left text-center">Inove-se</h2>
									<p class="mx-auto anime theme text-justify last-p">Fazendo a sua parte é o primeiro passo para mudar o mundo em que vivemos, ao maneirar no consumo de energia você contribui para um meio ambiente mais saudável. Opte sempre pelo uso de aparelhos eletrônicos mais econômicos e nunca esqueça algo ligado quando não estiver usando, pequenos atos fazem uma grande diferença a longo prazo.</p>
								</div>
							</div>
							<div class="col-xl-6 col-lg-12 last-container py-5 text-center">
								<img src="<?= base_url()?>assets/img/lampada.png" class="py-3 animeRight" height=100% alt="ilustração de uma lâmpada incandescente">
							</div>
						</div>
					</div>
				</div><!-- /.row -->
			<?php
				}
			?>
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
	<?php 
		if ($foto=="true") {
		?>
		<script>
			localStorage.setItem('fotoStorage', "true");
			console.log(localStorage.getItem('fotoStorage'))
		</script>
	<?php
	}else{
	?>
		<script>
			localStorage.setItem('fotoStorage', "false");
		</script>
	<?php }?>
	<script>
	    localStorage.setItem('Usuario', "<?php echo $contaContrato; ?>");
   		var atual ="Home";
	</script>
