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
						Caminhões
					</li>
					<li class="active">
						Cadastro do Caminhão
					</li>
				</ol>
				<div class="page-header">
					<h1>Cadastro do Caminhão</h1>
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
										<h3>Informações do Caminhão</h3>
										<hr>
									</div>
									<div class="form-group col-md-12">
										<div class="col-md-4"></div>
										<div class="col-md-4">
											<!-- FIM AVATAR -->
											<div class="form-group avatarImg">
												<div class="fileupload-new thumbnail" style="width: 150px; height: 150px;"><img src="https://source.unsplash.com/150x150/?truck" alt="">
												</div>
												<div class="fileupload fileupload-new" data-provides="fileupload">
													<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 150px; max-height: 150px; line-height: 20px;"></div>
													<div class="user-edit-image-buttons">
														<span class="btn btn-light-grey btn-file"><span class="fileupload-new"><i class="fa fa-picture"></i> Selecionar Foto do caminhao</span><span class="fileupload-exists"><i class="fa fa-picture"></i> Mudar</span>
															<input type="file">
														</span>
														<a href="#" class="btn fileupload-exists btn-light-grey" data-dismiss="fileupload">
															<i class="fa fa-times"></i> Remover
														</a>
													</div>
												</div>
											</div>
											<!-- FIM AVATAR -->
										</div>
										<div class="col-md-4"></div>
									</div>
									<!-- FORMULARIO -->
									<div class="container-fluid">
										<!--######### BLOCO 1 #########-->
										<div class="form-group col-md-12  bg_form">
											<p>Dados do Caminhão</p>
										</div>
										<div class="col-md-12">
											<div class="form-group col-md-4">
												<div class="input-group">
													<span class="input-group-addon">Placa do Caminhão</span>
													<input class="form-control" type="text" id="contratante">
												</div>
											</div>
											
											<div class="form-group col-md-3">
												<div class="input-group">
													<span class="input-group-addon">Modelo</span>
													<input class="form-control" type="text">
												</div>
											</div>

											<div class="form-group col-md-5">
												<div class="input-group">
													<span class="input-group-addon" for="Cidade">Chassi</span>
													<input class="form-control" type="text" id="Cidade">
												</div>
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