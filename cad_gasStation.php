<?php
include 'header.php';
?>
<!-- start: PAGE -->
<div class="main-content">
	<div class="container">
		<!-- start: PAGE HEADER -->
		<div class="row">
			<div class="col-sm-12">
				<!-- start: PAGE TITLE & BREADCRUMB -->
				<ol class="breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="#">
							Home
						</a>
					</li>
					<li class="active">
						RH
					</li>
					<li class="active">
						Abastecimento
					</li>
					<li class="active">
						Cadastro de abastecimentos
					</li>
				</ol>
				<div class="page-header">
					<h1>Cadastro de abastecimentos</h1>
				</div>
				<!-- end: PAGE TITLE & BREADCRUMB -->
			</div>
		</div>
		<!-- end: PAGE HEADER -->
		<!-- start: PAGE CONTENT -->
		<div class="row">
			<div class="col-sm-12">
				<div class="tabbable">
					<ul class="nav nav-tabs tab-padding tab-space-3 tab-blue" id="myTab4">
						
						<li class="active">
							<a data-toggle="tab" href="#panel_edit_account">
								Atualizar Dados
							</a>
						</li>
					</ul>
					<div class="tab-content">
						
						<!-- INFORMAÇOES DA CONTA  -->
						<div id="panel_edit_account" class="tab-pane in active">
							<form action="#" role="form" id="form">
								<div class="row">
									<div class="col-md-12">
										<h3>Informações de abastecimento</h3>
										<hr>
									</div>
									
									<!-- FORMULARIO -->
									<div class="container-fluid">
										<!--######### BLOCO 1 #########-->
										<div class="form-group col-md-12  bg_form">
											<p>Dados da empresa</p>
										</div>
										<div class="col-md-12">

											<div class="form-group col-md-3">
												<div class="input-group">
													<span class="input-group-addon">Litros abastecido</span>
													<input class="form-control" type="text" id="litro_abas">
												</div>
											</div>

											<div class="form-group col-md-3">
												<div class="input-group">
													<span class="input-group-addon">Valor do litro</span>
													<input class="form-control" type="text" id="">
												</div>
											</div>

											<div class="form-group col-md-3">
												<div class="input-group">
													<span class="input-group-addon">Tipo de Combustível</span>
													<select class="custom-select form-control" id="selectCustom">
														<option selected>Selecionar...</option>
														<option value="1">Gasolina comum</option>
														<option value="2">Gasolina aditivada</option>
														<option value="3">Gasolina premium</option>
														<option value="4">Gasolina formulada</option>
														<option value="5">Etanol</option>
														<option value="6">Etanol aditivado</option>
														<option value="7">GNV (Gás Natural Veicular)</option>
														<option value="8">Diesel</option>
													</select>
												</div>
											</div>
											
											<div class="form-group col-md-3">
												<div class="input-group">
													<span class="input-group-addon" for="numero_posto">Nota</span>
													<input class="form-control" type="file" id="numero_posto">
												</div>
												<span class="help-block"><i class="fa fa-info-circle"></i> anexe a nota fiscal gerada no abastecimento.</span>
											</div>
										</div>
										<!-- FIM BLOCO 1 -->

									</div><!-- fim container -->

									
								</div>
								<div class="row">
									<div class="col-md-12">
										<hr>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<a href="list_employ.php" class="btn btn-danger btn-block">
											<i class="fa fa-arrow-circle-left"></i> Voltar
										</a>
									</div>
									<div class="col-md-4"></div>
									<div class="col-md-4">
										<button class="btn btn-success btn-block" type="submit">
											Atualizar <i class="fa fa-arrow-circle-right"></i>
										</button>
									</div>
								</div>
							</form>
						</div>
						<!-- FIM INFORMAÇOES DA CONTA  -->
					</div>
				</div>
			</div>
		</div>
		<!-- end: PAGE CONTENT-->
	</div>
</div>
<!-- end: PAGE -->


<?php
include 'footer.php';
?>