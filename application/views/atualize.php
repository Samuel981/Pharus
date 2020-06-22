			<div class="container first-container atualize">
				<div class="card py-5 px-5 mt-4 mb-0 shadow card-theme">
					<div class="row align-items-center">
						<div class="col-xl col-md-12 mx-auto px-0">
							<h2 class="theme px-5">Atualize para conta Pro</h2>
							<p class="my-3 text-justify theme px-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
						</div>
						<div class="vertical-line"></div>
						<div class="col-xl col-md-12 mx-auto px-0">
							<div class="container h-100 usuario">
								<div class="mb-2 rounded-lg px-3 py-5">
									<div class="">
										<div class="d-flex justify-content-center">
											<div class="brand_logo_container">
												<h1 class="title_log theme">Preencha para atualizar</h1><!--Nossa Logo-->
											</div>
										</div>
										<div class="d-flex justify-content-center form_container theme">
											<form method="post" action="">
												<span>Nome Completo:</span>
												<div class="input-group mb-2">
													<input type="text" name="nome" class="form-control dados_user border-0 text-capitalize" placeholder="">
												</div>
												<span>Usuário:</span>
												<div class="input-group mb-2">
													<input type="text" name="usuario" class="form-control dados_user border-0 text-capitalize" placeholder="">
												</div>
												<?php 
												if (isset($_GET['error'])){
													if ($_GET['error']==1) {
														?>
														<div class='alert alert-danger' role='alert'>O nome de usuário<wbr>já existe!</div>
															<?php
														}
													}
													?>
												<span>Email:</span>
												<div class="input-group mb-2">
													<input type="text" name="email" class="form-control dados_user border-0" placeholder="">
												</div>
												<span>Preço por kWh:</span>
												<div class="input-group mb-2">
													<input type="text" name="tarifa_kwh" id="tarifa" class="form-control input_pass maskMoney dados_user border-0">
												</div>
										</div>
												<div class="d-flex justify-content-center mt-3 login_container my-3">
													<button type="" name="editar" id="atualizar" class="btn btn-warning position-absolute my-4 mb-5" disabled>Atualizar conta</button>
												</form>
											</div>
									</div>
								</div>
							</div>
							<!--conteudo-->
						</div>
					</div>
				</div>

				<!--Segundo container-->

				<div class="card py-5 px-5 my-4 mt-0 shadow card-theme">
					<div class="row align-items-center">
						<div class="col-xl col-md-12 mx-auto px-0">	
							<ul class="col-xl col-md-12 mx-auto px-5 theme">
								<li>Vantagens</li>
								<li>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </li>
								<li>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </li>
								<li>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </li>
								<li>Excepteur sint occaecat cupidatat non proident.</li>
							</ul>
						</div>
						<div class="vertical-line"></div>
						<div class="col-xl col-md-12 mx-auto px-0">
							<ul class="col-xl col-md-12 mx-auto px-5 theme">
								<li>Desvantagens</li>
								<li>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </li>
								<li>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </li>
								<li>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </li>
								<li>Excepteur sint occaecat cupidatat non proident.</li>
							</ul>
							<!--conteudo-->
						</div>
					</div>
				</div>
			</div>
		<script>
			var atual ="Atualize";
		</script>