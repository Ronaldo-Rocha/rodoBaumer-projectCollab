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
						Funcionários
					</li>
					<li class="active">
						Cadastro de Funcionário
					</li>
				</ol>
				<div class="page-header">
					<h1>Cadastro de Funcionário</h1>
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
						<li>
							<a data-toggle="tab" href="#panel_overview">
								Perfil
							</a>
						</li>
						<li class="active">
							<a data-toggle="tab" href="#panel_edit_account">
								Atualizar Dados
							</a>
						</li>
						<li>
							<a data-toggle="tab" href="#panel_projects">
								Permissões
							</a>
						</li>
					</ul>
					<div class="tab-content">
						<!-- VISÃO GERAL -->
						<div id="panel_overview" class="tab-pane">
							<div class="row">
								<div class="col-sm-5 col-md-4">
									<div class="user-left">
										<div class="center">
											<h4>Peter Clark</h4>
											<div class="fileupload fileupload-new" data-provides="fileupload">
												<div class="user-image">
													<div class="fileupload-new thumbnail"><img src="assets/images/avatar-1-xl.jpg" alt="">
													</div>
													<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
													<div class="user-image-buttons">
														<span class="btn btn-teal btn-file btn-sm"><span class="fileupload-new"><i class="fa fa-pencil"></i></span><span class="fileupload-exists"><i class="fa fa-pencil"></i></span>
															<input type="file">
														</span>
														<a href="#" class="btn fileupload-exists btn-bricky btn-sm" data-dismiss="fileupload">
															<i class="fa fa-times"></i>
														</a>
													</div>
												</div>
											</div>
											<hr>
											<p>
												<a class="btn btn-twitter btn-sm btn-squared">
													<i class="fa fa-twitter"></i>
												</a>
												<a class="btn btn-linkedin btn-sm btn-squared">
													<i class="fa fa-linkedin"></i>
												</a>
												<a class="btn btn-google-plus btn-sm btn-squared">
													<i class="fa fa-google-plus"></i>
												</a>
												<a class="btn btn-github btn-sm btn-squared">
													<i class="fa fa-github"></i>
												</a>
											</p>
											<hr>
										</div>
										<table class="table table-condensed table-hover">
											<thead>
												<tr>
													<th colspan="3">Informações</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Nome:</td>
													<td>
														<a href="#">
															Peter Clark
														</a>
													</td>
													<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
												</tr>
												<tr>
													<td>Cargo:</td>
													<td>
														<a href="">
															Motorista
														</a>
													</td>
													<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
												</tr>
												<tr>
													<td>Telefone:</td>
													<td>(11) 99999-9999</td>
													<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<div class="col-sm-7 col-md-8">
									CONTEUDO
								</div>
							</div>
						</div>
						<!-- FIM VISÃO GERAL -->

						<!-- INFORMAÇOES DA CONTA  -->
						<div id="panel_edit_account" class="tab-pane in active">
							<form action="#" role="form" id="form">
								<div class="row">
									<div class="col-md-12">
										<h3>Informações do Funcionário</h3>
										<hr>
									</div>
									<div class="form-group col-md-12">
										<div class="col-md-4"></div>
										<div class="col-md-4">
											<!-- FIM AVATAR -->
											<div class="form-group avatarImg">
												<div class="fileupload-new thumbnail" style="width: 150px; height: 150px;"><img src="assets/images/avatar-1-xl.jpg" alt="">
												</div>
												<div class="fileupload fileupload-new" data-provides="fileupload">
													<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 150px; max-height: 150px; line-height: 20px;"></div>
													<div class="user-edit-image-buttons">
														<span class="btn btn-light-grey btn-file"><span class="fileupload-new"><i class="fa fa-picture"></i> Selecionar Foto</span><span class="fileupload-exists"><i class="fa fa-picture"></i> Mudar</span>
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
										<!-- BLOCO 1 -->
										<div class="form-group col-md-12  bgform">
											<p>Dados da empresa</p>
										</div>
										<div class="col-md-12">
											<div class="form-group col-md-3">
												<div class="input-group">
													<span class="input-group-addon">Contratante</span>
													<input class="form-control" type="text" id="contratante">
												</div>
											</div>
											
											<div class="form-group col-md-3">
												<div class="input-group">
													<span class="input-group-addon" for="CNPJ">CNPJ</span>
													<input class="form-control" type="text" id="CNPJ">
												</div>
											</div>

											<div class="form-group col-md-3">
												<div class="input-group">
													<span class="input-group-addon" for="Cidade">Cidade</span>
													<input class="form-control" type="text" id="Cidade">
												</div>
											</div>

											<div class="form-group col-md-3">
												<label class="radio-inline">
												<input type="radio" value="" name="optionsRadios" class="grey" >
													Matriz
												</label>
												<label class="radio-inline">
													<input type="radio" value="" name="optionsRadios" class="grey" >
													Filial
												</label>
											</div>
										</div>
										<!-- FIM BLOCO 1 -->

										<!-- BLOCO 2 -->
										<div class="form-group col-md-12  bgform">
											<p>Dados do(a) Contratado(a)</p>
										</div>

										<div class="col-md-12">
											<div class="form-group col-md-6">
												<div class="input-group">
													<span class="input-group-addon">Nome Completo</span>
													<input class="form-control" type="text" id="Nome">
												</div>
											</div>
											<div class="form-group col-md-6">
												<div class="input-group">
													<span class="input-group-addon">Nome Social</span>
													<input class="form-control" type="text" id="NomeSocial">
												</div>
											</div>

											<div class="form-group col-md-3">
												<div class="input-group">
													<span class="input-group-addon">CEP</span>
													<input class="form-control" name="CEP" type="text" placeholder="sómente numeros">
												</div>
											</div>

											<div class="form-group col-md-2">
      											<button type="button" class="btn btn-success form-control " onclick="pesquisacep()">Pesquisar</button>
    										</div>
										</div><!-- fim-col-12 -->

										<div class="col-md-12">
											<div class="form-group col-md-5">
												<div class="input-group">
													<span class="input-group-addon">Rua</span>
													<input id="rua" name="rua" class="form-control" placeholder="" required="" readonly="readonly" type="text">
												</div>
											</div>
											<div class="form-group col-md-2">
												<div class="input-group">
													<span class="input-group-addon">Nº</span>
													<input id="numero" name="numero" class="form-control" placeholder="" required=""  type="text">
												</div>
											</div>

											<div class="form-group col-md-5">
												<div class="input-group">
													<span class="input-group-addon">Bairro</span>
													<input id="bairro" name="bairro" class="form-control" placeholder="" required="" readonly="readonly" type="text">
												</div>
											</div>
										</div><!-- fim-col-12 -->

										<div class="col-md-12">
											<div class="form-group col-md-5">
												<div class=" input-group">
													<span class="input-group-addon">Cidade</span>
													<input id="cidade" name="cidade" class="form-control" placeholder="" required=""  readonly="readonly" type="text">
												</div>
											</div>

											<div class="form-group col-md-2">
												<div class="input-group">
													<span class="input-group-addon">Estado</span>
													<input id="estado" name="estado" class="form-control" placeholder="" required=""  readonly="readonly" type="text">
												</div>
											</div>

											<div class="form-group col-md-5">
												<div class="input-group">
													<span class="input-group-addon">Complemento</span>
													<input id="Complemento" name="Complemento" class="form-control" required=""   type="text" placeholder="ex: bloco 1 casa 3">
												</div>
											</div>
										</div><!-- fim-col-12 -->

										<div class="col-md-12">
											<div class="form-group col-md-2">
												<div class="input-group">
													<span class="input-group-addon">Telefone</span>
													<input type="text" class="form-control">
												</div>
											</div>

											
											<div class="form-group col-md-2">
												<div class="input-group">
													<span class="input-group-addon">Celular</span>
													<input type="text" class="form-control">
												</div>
											</div>

											<div class="form-group col-md-4">
												<div class="input-group">
													<span class="input-group-addon">Email</span>
													<input type="text" class="form-control">
												</div>
											</div>

											<div class="form-group col-md-4">
												<div class="input-group">
													<span class="input-group-addon">Estado Civil</span>
													<select class="custom-select form-control" id="selectCustom">
														<option selected>Selecionar...</option>
														<option value="1">Solteiro(a)</option>
														<option value="2">Casado(a)</option>
														<option value="3">Separado(a)</option>
														<option value="4">divorciado(a)</option>
														<option value="5">Viúvo(a)</option>
													</select>
												</div>
											</div>

										</div><!-- fim-col-12 -->

										<div class="col-md-12">
											<div class="col-md-6">
												<div class="input-group">
													<span class="input-group-addon">Data Casamento / União</span>
													<input type="text" name="" id="" class="form-control">
												</div>
											</div>
										</div><!-- fim-col-12 -->


										
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

						<!-- PERMISSÕES -->
						<div id="panel_projects" class="tab-pane">

						</div>
						<!-- FIM PERMISSÕES -->
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