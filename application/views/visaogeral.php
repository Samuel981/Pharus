			<div class="container first-container my-5" id="containerinfo" style="overflow-y: hidden">		
		        <div class="my-5"><br><br>
		        	<h2 class="mt-4 mb-1 card text-lg-left text-center card-theme px-5 py-3 theme">Visão Geral</h2>
		        <div class="row px-3">
		        	<div col-xl-6 col-lg-12>
		        		<div class="d-block section" style="height: 100px" id="pontosvisaogeral">
			        		<div class="row pt-4 icones">
				        		<div class="col-xl-2 col-lg-4 col pt-3 theme">
				        			<a href="#" onclick="point('primeirospassos', 'point1', 'texto1')" class="point point1 imagematualdocirculo"><i class="fas fa-shoe-prints align-middle d-table-cell" style="font-size: 3em"></i>
				        			<br><br><br><i class="fas fa-circle align-middle d-table-cell pl-3 position-relative text-center" style="top: -28px; z-index: 1; width: 90px; padding-top: 0px!important;"></i></a>
				        		</div>
				        		<div class="col-xl-2 col-lg-4 col pt-3 theme">
				        			<a href="#" onclick="point('stop', 'point2', 'texto2')" class="point point2" style="margin-left: -3px"><i class="fas fa-tachometer-alt align-middle d-table-cell" style="font-size: 3em"></i>
				        			<br><br><br><i class="fas fa-circle align-middle d-table-cell pl-3 position-relative text-center" style="top: -28px; z-index: 1; width: 84px; padding-top: 0px!important;"></i></a>
				        		</div>
				        		<div class="col-xl-2 col-lg-4 col pt-3 theme">
				        			<a href="#" onclick="point('comvoce', 'point3', 'texto3')" class="point point3"><i class="fas fa-handshake align-middle d-table-cell" style="font-size: 3em"></i>
				        			<br><br><br><i class="fas fa-circle align-middle d-table-cell pl-3 position-relative text-center" style="top: -28px; z-index: 1; width: 90px; padding-top: 0px!important;"></i></a>
				        		</div>
			        		</div>
		        		</div>
		        		<br>
		        		<div class="dropdown-divider d-block position-relative" style="border-color: #ffc107 !important;"></div>

		        		<!-- //Esses dois circulos precisam se tornar responsivos -->
		        		<div class="col-xl-12" id="giroimagens">
		        			<div class="float-right">
				        		<div class="rounded-circle float-right card card-theme shadow" id="circulofixo" style="height: 600px; width: 600px; display: flex; border: 2px solid; top:-250px; margin-right: 0px">
				        			<img src="<?= base_url()?>assets/img/primeirospassos.png" class="position-relative float-right" id="imagemdocirculo" style="z-index: 1; height: 100%; width: 100%; animation-timing-function: linear;">
				        			<img src="<?= base_url()?>assets/img/primeirospassos.png" class="position-absolute float-right" id="imagemdocirculo2" style="z-index: 1; height: 100%; width: 100%; animation-timing-function: linear;">
				        			<img src="<?= base_url()?>assets/img/circulomovimento.png" class="position-relative float-right cimg" id="circulomovimento" style="top: -596px; height: 100%; width: 100%">
				        		</div>
				        	</div>
			        	</div>
		        		<!-- //Esses dois circulos precisam se tornar responsivos -->

		        		<br><br>
		        		<p class="theme mt-5 text-xl-left text-justify textogiro texto1 textodogirovisivel" style="font-size: 1.2em">O projeto Pharus ajuda a natureza a medida que reduz o consumo de energia e conseuqentemente sua produção e impactos ambientais. Aprenda funções básicas nessa página. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
		        		</p>
		        		<p class="theme mt-5 text-xl-left text-justify textogiro texto2" style="font-size: 1.2em">Reduza seu consumo através do sistema Pharus. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
		        		</p>
		        		<p class="theme mt-5 text-xl-left text-justify textogiro texto3" style="font-size: 1.2em">A economia só depende de você! Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.
		        		</p>
		        	</div>
		        </div> 
			</div>
		</div>

		<div class="container" style=" object-fit: contain; transform: translateY(-150px);">
		    <div class="row mb-5">
		    	<div class="col-12">
		    		<h2 class="mt-4 mb-3 card text-lg-left text-center card-theme px-5 py-3 theme" id="primeirospassos" style="width: 100% !important;">Primeiros passos</h2>
		    		<!-- <iframe src="<?= base_url()?>assets/videos/video1.mp4" frameborder="0" autoplay preload loop></iframe> -->
		    		<video width="100%" id="videoclip" autoplay muted preload loop><source id="mp4video" src="<?= base_url()?>assets/videos/video1.mp4" type=""></video>
		    	</div>	
		    </div>
		    <div class="row" id="opcoesdevideo">
		    	<div class="col text-center">
		    		<a href="#primeirospassos" onclick="video('video1', '1')">
						<img src="<?= base_url()?>assets/img/power-off.png" class="rounded-circle" width=130>
						<h4 class="py-3 theme">Metas</h4>
						<img src="<?= base_url()?>assets/img/circulomovimento.png" class="position-relative marcadorvideo marcadorvideo1" id="circulomovimento" style="height: 150px; width: 150px">
					<a>
		    	</div>
		    	<div class="col text-center">
		    		<a href="#primeirospassos" onclick="video('video2', '2')">
						<img src="<?= base_url()?>assets/img/power-off.png" class="rounded-circle" width=130>
						<h4 class="py-3 theme">Simulador</h4>
						<img src="<?= base_url()?>assets/img/circulomovimento.png" class="position-relative marcadorvideo marcadorvideo2 inativo" id="circulomovimento" style="height: 150px; width: 150px">
					<a>
		    	</div>
		    	<div class="col text-center">
		    		<a href="#primeirospassos" onclick="video('video3', '3')">
						<img src="<?= base_url()?>assets/img/power-off.png" class="rounded-circle" width=130>
						<h4 class="py-3 theme">Consumo</h4>
						<img src="<?= base_url()?>assets/img/circulomovimento.png" class="position-relative marcadorvideo marcadorvideo3 inativo" id="circulomovimento" style="height: 150px; width: 150px">
					<a>
		    	</div>
		    	<div class="col text-center">
		    		<a href="#primeirospassos" onclick="video('video4', '4')">
						<img src="<?= base_url()?>assets/img/power-off.png" class="rounded-circle" width=130>
						<h4 class="py-3 theme">Ideal de consumo</h4>
						<img src="<?= base_url()?>assets/img/circulomovimento.png" class="position-relative marcadorvideo marcadorvideo4 inativo" id="circulomovimento" style=" height: 150px; width: 150px">
					<a>
		    	</div>
		    </div>	
		</div>	
		<!--conteudo-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
	<!--Importação ajax-->
	<?php $consumoPorHora = $this->session->userdata('consumo');?>
	<script type="text/javascript">
		$(document).ready(function(){
			startpoint('<?php echo $this->session->userdata('itemimg'); ?>', '<?php echo $this->session->userdata('itempoint'); ?>', '<?php echo $this->session->userdata('itemtexto'); ?>')
		});
	</script>
	<script>
    var atual ="Home";
	</script>