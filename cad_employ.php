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
											<div class="col-md-offset-4">
												<label>
													Foto
												</label>
												<div class="fileupload fileupload-new" data-provides="fileupload">
													<div class="fileupload-new thumbnail" style="width: 150px; height: 150px;"><img src="assets/images/avatar-1-xl.jpg" alt="">
													</div>
													<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 150px; max-height: 150px; line-height: 20px;"></div>
													<div class="user-edit-image-buttons">
														<span class="btn btn-light-grey btn-file"><span class="fileupload-new"><i class="fa fa-picture"></i> Selecionar foto</span><span class="fileupload-exists"><i class="fa fa-picture"></i> Trocar</span>
															<input type="file">
														</span>
														<a href="#" class="btn fileupload-exists btn-light-grey" data-dismiss="fileupload">
															<i class="fa fa-times"></i> Deletar
														</a>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-4"></div>
									</div>
									<div class="form-group col-md-2">
										<label class="control-label">
											Nome
										</label>
										<input type="text" class="form-control" name="first_name">
									</div>
									<div class="form-group col-md-2">
										<label class="control-label">
											Sobrenome
										</label>
										<input type="text" class="form-control" name="last_name">
									</div>
									<div class="form-group col-md-2">
										<label class="control-label">
											Codinome
										</label>
										<input type="text" class="form-control" name="email">
									</div>
									<div class="form-group col-md-2">
										<label class="control-label">
											Data de Nascimento
										</label>
										<input type="date" class="form-control" name="date_birth">
									</div>
									<div class="form-group col-md-2">
										<label class="control-label">
											Telefone
										</label>
										<input type="text" class="form-control" name="phone">
									</div>
									<div class="form-group col-md-2">
										<label class="control-label">
											Cargo
										</label>
										<select name="role" class="form-control">
											<option value="1">Motorista</option>
										</select>
									</div>
									<div class="form-group col-md-3">
										<label class="control-label">
											RG
										</label>
										<input type="text" class="form-control" name="rg">
									</div>
									<div class="form-group col-md-3">
										<label class="control-label">
											RG Validade
										</label>
										<input type="text" class="form-control" name="rg_validity">
									</div>
									<div class="form-group col-md-3">
										<label class="control-label">
											CPF
										</label>
										<input type="text" class="form-control" name="cpf">
									</div>
									<div class="form-group col-md-3">
										<label class="control-label">
											CPF Validade
										</label>
										<input type="text" class="form-control" name="cpf_validity">
									</div>
									<div class="form-group col-md-3">
										<label class="control-label">
											CNH
										</label>
										<input type="text" class="form-control" name="cnh">
									</div>
									<div class="form-group col-md-3">
										<label class="control-label">
											CNH Validade
										</label>
										<input type="text" class="form-control" name="cnh_validity">
									</div>
									<div class="form-group col-md-3">
										<label class="control-label">
											MOP
										</label>
										<input type="text" class="form-control" name="mop">
									</div>
									<div class="form-group col-md-3">
										<label class="control-label">
											MOP Validade
										</label>
										<input type="text" class="form-control" name="mop_validity">
									</div>
									<div class="form-group col-md-4">
										<label class="control-label">
											CEP
										</label>
										<input type="text" class="form-control" name="cep">
									</div>
									<div class="form-group col-md-6">
										<label class="control-label">
											Endereço
										</label>
										<input type="text" class="form-control" name="address">
									</div>
									<div class="form-group col-md-2">
										<label class="control-label">
											Número
										</label>
										<input type="text" class="form-control" name="number">
									</div>
									<div class="form-group col-md-3">
										<label class="control-label">
											Complemento
										</label>
										<input type="text" class="form-control" name="complement">
									</div>
									<div class="form-group col-md-3">
										<label class="control-label">
											Bairro
										</label>
										<input type="text" class="form-control" name="district">
									</div>
									<div class="form-group col-md-3">
										<label class="control-label">
											Cidade
										</label>
										<input type="text" class="form-control" name="city">
									</div>
									<div class="form-group col-md-3">
										<label class="control-label">
											Estado
										</label>
										<input type="text" class="form-control" name="state">
									</div>
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