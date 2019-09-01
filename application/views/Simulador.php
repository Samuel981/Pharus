<?php 
	
	function simulador(){
		$h_geladeira = 24; //horas que a geladeira fica ligada
		rand(4,6);
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Simulador de consumo</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> <!--Importação do CSS do BS-->
	<link rel="shortcut icon" href="<?= base_url()?>assets/img/icon.png"/> <!--Icone-->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet"> <!--Importação da fonte Open Sans-->
	<link rel="shortcut icon" href="<?= base_url()?>assets/img/icon.ico"/> <!--Icone-->
	<style type="text/css">
		html, body{
			background-color: #9aada3;
		}
		.inputs{
			float: right;
		}
		input, select{
			width: 70px;
			height: 30px;
			background-color: #eee;
			border: none;
			border-radius: 5px;
			padding-left: 10px;
			margin: 32px 0px 0px 15px;
		}
		select{
			width: 100px;
			padding-left: 0px;
		}
		h1{
			font-family: 'Open Sans', sans-serif !important;
			color: #222;
			margin: auto;
			text-align: center;
			margin-top: 50px;
			display: block;
			text-transform: uppercase;
			font-weight: 700;
		}
		h2{
			font-family: 'Open Sans', sans-serif !important;
			color: #222;
			margin: 25px 0px 0px 50px;
			display: inline-block;
		}
		.col-lg-6{
			margin-bottom: 20px
		}
		button{
			background-color: #364046 !important;
			color: white !important;
			margin: auto;
			margin-top: 50px;
			margin-bottom: 50px;
			max-height: 40px;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>Simulador de Consumo <br>de um domicílio</h1>
		<div class="row">
				<!-- 
				• Criar array com nomes de aparelhos;
				• Criado laço foreach;
				• echo dentro do foreach com label (pegando do array), e inputs de potência e tempo 
				For (i=1; i++; i>=lenght){
					PotênciaHoras[] => "potencia[i]*horas[i]";
				}
				sum(PotênciaHoras);
				-->
				<div class="col-lg-6">
					<form method="post" action="Raiz/Consumir">
					<?php $aparelhos = array(
						'Geladeira' => 'Geladeira',
						'Computador' => 'Computador',
						'Televisão' => 'Televisão',
						'Microondas' => 'Microondas',
						'Freezer' => 'Freezer'
					); 
					foreach ($aparelhos as $aparelho) {
						$i=1;
						echo "<h2>".$aparelho.":</h2>
							<div class='inputs'>
								<input type='number' min='0' max='24' name='horas[]' placeholder='Horas'>
							<select name='potencia[]'>
								<option value='1'>Potência1</option>
								<option value='1'>Potência2</option>
								<option value='1'>Potência3</option>
								<option value='1'>Potência4</option>
								<option value='1'>Potência5</option>
							</select></div>";
						$i++;
					}
					?>
					<button type="submit" name="button" class="btn login_btn">Consumir</button>
					</form>
				</div>

				<div class="col-lg-6">
					<form method="post" action="#">
					<h2>Geladeira:</h2>
					<div class="inputs">
						<input type="number" min="0" max="24" name="consumo[]" placeholder="Horas">
					<select>
						<option>Potência</option>
						<option>Potência</option>
					</select>
					</div>
					<br>
					<h2>Fogão:</h2>
					<div class="inputs">
						<input type="number" min="0" max="24" name="consumo[]" placeholder="Horas">
					<select>
						<option>Potência</option>
						<option>Potência</option>
					</select>
					</div>
					<br>
					<h2>Microondas:</h2>
					<div class="inputs">
						<input type="number" min="0" max="24" name="consumo[]" placeholder="Horas">
					<select>
						<option>Potência</option>
						<option>Potência</option>
					</select>
					</div>
					<br>
					<h2>Freezer:</h2>
					<div class="inputs">
						<input type="number" min="0" max="24" name="consumo[]" placeholder="Horas">
					<select>
						<option>Potência</option>
						<option>Potência</option>
					</select>
					</div>
					<br>
					<h2>Geladeira:</h2>
					<div class="inputs">
						<input type="number" min="0" max="24" name="consumo[]" placeholder="Horas">
					<select>
						<option>Potência</option>
						<option>Potência</option>
					</select>
					</div>
				</div>
				<button type="submit" name="button" class="btn login_btn">Consumir</button>
			</form>
		</div>
	</div>
	<?php 
		//$geladeira = $_POST['geladeira'];//*potencia da geladeira;

	?>
</body>
</html>