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
						Usuários
					</li>
					<li class="active">
						Adicionar Usuário
					</li>
				</ol>
				<div class="page-header">
					<h1>Adicionar Usuário</h1>
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
										<h3>Informações do Usuário</h3>
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
									<div class="form-group col-md-6">
										<label class="control-label">
											Perfil de Acesso
										</label>
										<select name="" class="form-control">
											<option value="">Funcionário</option>
											<option value="">Administrador</option>
										</select>
									</div>
									<div class="form-group col-md-6">
										<label class="control-label">
											Funcionário
										</label>
										<select name="" class="form-control">
											<option value="">Peter Clark</option>
										</select>
									</div>
									<div class="form-group col-md-6">
										<label class="control-label">
											E-mail
										</label>
										<input type="email" name="email" class="form-control">
									</div>
									<div class="form-group col-md-6">
										<label class="control-label">
											Senha
										</label>
										<input type="password" name="password" class="form-control">
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<hr>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<a href="list_users.php" class="btn btn-danger btn-block">
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