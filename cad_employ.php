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
									<i class="clip-file"></i>
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
									<li >
										<a data-toggle="tab" href="#panel_overview">
											Visão Geral
										</a>
									</li>
									<li class="active">
										<a data-toggle="tab" href="#panel_edit_account">
											Cadastrar dados
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
									<div id="panel_overview" class="tab-pane ">
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
																<th colspan="3">Informações de Contato</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>url</td>
																<td>
																<a href="#">
																	www.example.com
																</a></td>
																<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
															</tr>
															<tr>
																<td>email:</td>
																<td>
																<a href="">
																	peter@example.com
																</a></td>
																<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
															</tr>
															<tr>
																<td>Telefone:</td>
																<td>(641)-734-4763</td>
																<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
															</tr>
															<tr>
																<td>skype</td>
																<td>
																<a href="">
																	peterclark82
																</a></td>
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
												<div class="col-md-12 avatarImg">
													<h3>Informações da Conta</h3>
													<hr>
													<!-- FIM AVATAR -->
													<div class="form-group avatarImg">
														<div class="fileupload-new thumbnail" style="width: 150px; height: 150px;">
															<img src="assets/images/avatar-1-xl.jpg" alt="">
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

												<div class="col-md-12" style="display: flex; justify-content:space-around;">
													<!-- FIRST COLUMN -->
													<div class="col-md-5 well well-sm">
														<div class="row">
															
															<div class="col-md-12 ">
																<!-- name last name -->
																<div class="col-md-4">
																	<div class="form-group">
																		<label class="control-label">
																			Nome
																		</label>
																		<input type="text" placeholder="Peter" class="form-control" id="firstname" name="firstname">
																	</div>
																</div>
																<div class="col-md-4">
																	<div class="form-group">
																		<label class="control-label">
																			Sobrenome
																		</label>
																		<input type="text" placeholder="Clark" class="form-control" id="lastname" name="lastname">
																	</div>
																</div>
																<div class="col-md-4">
																	<div class="form-group">
																		<label class="control-label">
																			Codinome
																		</label>
																		<input type="text" placeholder="Clark_Sixty" class="form-control" id="lastname" name="lastname">
																	</div>
																</div>
																<!-- end name last name -->
															</div><!-- end col-12 -->
															

															<div class="col-md-12">
																<!-- phone -->
																<div class="col-md-4">
																	<div class="form-group">
																		<label class="control-label">
																			Telefone
																		</label>
																	<input type="email" placeholder="(641)-734-4763" class="form-control" id="phone" name="email">
																	</div>
																</div>
																<!-- end phone -->
																<!-- BIRTHDATE -->
																<div class="col-md-4">
																	<div class="input-group">
																		<label class="control-label">
																			Nascimento
																		</label>
																		<input type="date" data-date-format="dd-mm-yyyy" data-date-viewmode="years" class="form-control date-picker">
																	</div>
																</div>
																<!-- BIRTHDATE -->
																<div class="col-md-4">
																	<div class="form-group">
																		<label class="control-label">
																			CPF
																		</label>
																		<input class="form-control" placeholder="444.555.666-78" type="text" name="" id="">
																	</div>
																</div>
															</div><!-- end col-12 -->

															<div class="col-md-12">
																<!-- RG -->
																<div class="col-md-4">
																	<div class="form-group">
																		<label class="control-label">
																			RG
																		</label>
																		<input class="form-control" placeholder="44.444.444-4" type="text" name="" id="">
																	</div>
																</div>
																<!-- end RG -->
																<!-- expedição -->
																<div class="col-md-4">
																	<div class="input-group">
																		<label class="control-label">
																			Data de expedição
																		</label>
																		<input type="date" data-date-format="dd-mm-yyyy" data-date-viewmode="years" class="form-control date-picker">
																	</div>
																</div>
																<!-- end expedição -->
															</div><!-- end col-12 -->

															<div class="col-md-12">
																<div class="col-md-4">
																	<div class="form-group">
																		<label class="control-label">
																			CNH
																		</label>
																		<input class="form-control" placeholder="123456789" type="text" name="" id="">
																	</div>
																</div>
																<!-- validade -->
																<div class="col-md-4">
																	<div class="input-group">
																		<label class="control-label">
																			Validade
																		</label>
																		<input type="date" data-date-format="dd-mm-yyyy" data-date-viewmode="years" class="form-control date-picker">
																	</div>
																</div>
																<!-- end validade -->
															</div><!-- end col-12 -->

															<div class="col-md-12">
																<div class="col-md-4">
																	<div class="form-group">
																		<label class="control-label">
																			MOPP
																		</label>
																		<input class="form-control" placeholder="123456789" type="text" name="" id="">
																	</div>
																</div>
																<!-- validade -->
																<div class="col-md-4">
																	<div class="input-group">
																		<label class="control-label">
																			Validade
																		</label>
																		<input type="date" data-date-format="dd-mm-yyyy" data-date-viewmode="years" class="form-control date-picker">
																	</div>
																</div>
																<!-- end validade -->
															</div><!-- end col-12 -->

														</div><!-- end row -->
													</div><!-- end first column -->
													

													<!-- SECOND COLUMN -->
													<div class="col-md-5 well well-sm">
														<div class="row">

															<div class="col-md-12">
																<!-- ADRESS -->
																<div class="col-md-4">
																	<div class="form-group">
																		<label class="control-label">
																			CEP
																		</label>
																		<input class="form-control" placeholder="12345" type="text" name="zipcode" id="zipcode">
																	</div>
																</div>
															
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label">
																			Rua
																		</label>
																		<input class="form-control" placeholder="Rua..." type="text" name="" id="">
																	</div>
																</div>
																<div class="col-md-2">
																	<div class="form-group">
																		<label class="control-label">
																			Número
																		</label>
																		<input type="text"  placeholder="15" class="form-control" id="" name="">
																	</div>
																</div>
															</div>


															<div class="col-md-12">
																<div class="col-md-3">
																	<div class="form-group">
																		<label class="control-label">
																			Complemento
																		</label>
																		<input class="form-control" placeholder="casa 1" type="text" name="" id="">
																	</div>
																</div>
																<div class="col-md-9">
																	<div class="form-group">
																		<label class="control-label">
																			Bairro
																		</label>
																		<input class="form-control" placeholder="Parque do jardim do sol" type="text" name="" id="">
																	</div>
																</div>	
															</div>
															<div class="col-md-12">
															<div class="col-md-5">
																	<div class="form-group">
																		<label class="control-label">
																			Cidade
																		</label>
																		<input class="form-control" placeholder="São Paulo" type="text" name="" id="">
																	</div>
																</div>
																<div class="col-md-2">
																	<div class="form-group">
																		<label class="control-label">
																			Estado
																		</label>
																		<input type="text"  placeholder="SP" class="form-control" id="" name="">
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>

											</div> <!-- end row -->
											
											
											<div class="row">
												<div class="col-md-12">
													<div>
														<hr>
													</div>
												</div>
											</div>
											<div class="row" style="display: flex; justify-content:space-between;">
												<div class="col-md-2">
												<button class="btn btn-red btn-block" type="submit">
													<i class="fa fa-arrow-circle-left"></i> VOLTAR 
													</button>
												</div>
												<div class="col-md-2">
													<button class="btn btn-green btn-block" type="submit">
													CADASTRAR <i class="fa fa-arrow-circle-right"></i>
													</button>
												</div>
											</div>
										</form>
									</div>
									<!-- FIM INFORMAÇOES DA CONTA  -->

									<!-- PERMISSÕES -->
									<div id="panel_projects" class="tab-pane">
										<table class="table table-striped table-bordered table-hover" id="projects">
											<thead>
												<tr>
													<th class="center">
													<div class="checkbox-table">
														<label>
															<input type="checkbox" class="flat-grey">
														</label>
													</div></th>
													<th>Project Name</th>
													<th class="hidden-xs">Client</th>
													<th>Proj Comp</th>
													<th class="hidden-xs">%Comp</th>
													<th class="hidden-xs center">Priority</th>
													<th></th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td class="center">
													<div class="checkbox-table">
														<label>
															<input type="checkbox" class="flat-grey">
														</label>
													</div></td>
													<td>IT Help Desk</td>
													<td class="hidden-xs">Master Company</td>
													<td>11 november 2014</td>
													<td class="hidden-xs">
													<div class="progress progress-striped active progress-sm">
														<div style="width: 70%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" role="progressbar" class="progress-bar progress-bar-warning">
															<span class="sr-only"> 70% Complete (danger)</span>
														</div>
													</div></td>
													<td class="center hidden-xs"><span class="label label-danger">Critical</span></td>
													<td class="center">
													<div class="visible-md visible-lg hidden-sm hidden-xs">
														<a href="#" class="btn btn-teal tooltips" data-placement="top" data-original-title="Edit"><i class="fa fa-edit"></i></a>
														<a href="#" class="btn btn-green tooltips" data-placement="top" data-original-title="Share"><i class="fa fa-share"></i></a>
														<a href="#" class="btn btn-bricky tooltips" data-placement="top" data-original-title="Remove"><i class="fa fa-times fa fa-white"></i></a>
													</div>
													<div class="visible-xs visible-sm hidden-md hidden-lg">
														<div class="btn-group">
															<a class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
																<i class="fa fa-cog"></i> <span class="caret"></span>
															</a>
															<ul role="menu" class="dropdown-menu pull-right">
																<li role="presentation">
																	<a role="menuitem" tabindex="-1" href="#">
																		<i class="fa fa-edit"></i> Edit
																	</a>
																</li>
																<li role="presentation">
																	<a role="menuitem" tabindex="-1" href="#">
																		<i class="fa fa-share"></i> Share
																	</a>
																</li>
																<li role="presentation">
																	<a role="menuitem" tabindex="-1" href="#">
																		<i class="fa fa-times"></i> Remove
																	</a>
																</li>
															</ul>
														</div>
													</div></td>
												</tr>
												<tr>
													<td class="center">
													<div class="checkbox-table">
														<label>
															<input type="checkbox" class="flat-grey">
														</label>
													</div></td>
													<td>PM New Product Dev</td>
													<td class="hidden-xs">Brand Company</td>
													<td>12 june 2014</td>
													<td class="hidden-xs">
													<div class="progress progress-striped active progress-sm">
														<div style="width: 40%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-info">
															<span class="sr-only"> 40% Complete</span>
														</div>
													</div></td>
													<td class="center hidden-xs"><span class="label label-warning">High</span></td>
													<td class="center">
													<div class="visible-md visible-lg hidden-sm hidden-xs">
														<a href="#" class="btn btn-teal tooltips" data-placement="top" data-original-title="Edit"><i class="fa fa-edit"></i></a>
														<a href="#" class="btn btn-green tooltips" data-placement="top" data-original-title="Share"><i class="fa fa-share"></i></a>
														<a href="#" class="btn btn-bricky tooltips" data-placement="top" data-original-title="Remove"><i class="fa fa-times fa fa-white"></i></a>
													</div>
													<div class="visible-xs visible-sm hidden-md hidden-lg">
														<div class="btn-group">
															<a class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
																<i class="fa fa-cog"></i> <span class="caret"></span>
															</a>
															<ul role="menu" class="dropdown-menu pull-right">
																<li role="presentation">
																	<a role="menuitem" tabindex="-1" href="#">
																		<i class="fa fa-edit"></i> Edit
																	</a>
																</li>
																<li role="presentation">
																	<a role="menuitem" tabindex="-1" href="#">
																		<i class="fa fa-share"></i> Share
																	</a>
																</li>
																<li role="presentation">
																	<a role="menuitem" tabindex="-1" href="#">
																		<i class="fa fa-times"></i> Remove
																	</a>
																</li>
															</ul>
														</div>
													</div></td>
												</tr>
												<tr>
													<td class="center">
													<div class="checkbox-table">
														<label>
															<input type="checkbox" class="flat-grey">
														</label>
													</div></td>
													<td>ClipTheme Web Site</td>
													<td class="hidden-xs">Internal</td>
													<td>11 november 2014</td>
													<td class="hidden-xs">
													<div class="progress progress-striped active progress-sm">
														<div style="width: 90%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="90" role="progressbar" class="progress-bar progress-bar-success">
															<span class="sr-only"> 90% Complete</span>
														</div>
													</div></td>
													<td class="center hidden-xs"><span class="label label-success">Normal</span></td>
													<td class="center">
													<div class="visible-md visible-lg hidden-sm hidden-xs">
														<a href="#" class="btn btn-teal tooltips" data-placement="top" data-original-title="Edit"><i class="fa fa-edit"></i></a>
														<a href="#" class="btn btn-green tooltips" data-placement="top" data-original-title="Share"><i class="fa fa-share"></i></a>
														<a href="#" class="btn btn-bricky tooltips" data-placement="top" data-original-title="Remove"><i class="fa fa-times fa fa-white"></i></a>
													</div>
													<div class="visible-xs visible-sm hidden-md hidden-lg">
														<div class="btn-group">
															<a class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
																<i class="fa fa-cog"></i> <span class="caret"></span>
															</a>
															<ul role="menu" class="dropdown-menu pull-right">
																<li role="presentation">
																	<a role="menuitem" tabindex="-1" href="#">
																		<i class="fa fa-edit"></i> Edit
																	</a>
																</li>
																<li role="presentation">
																	<a role="menuitem" tabindex="-1" href="#">
																		<i class="fa fa-share"></i> Share
																	</a>
																</li>
																<li role="presentation">
																	<a role="menuitem" tabindex="-1" href="#">
																		<i class="fa fa-times"></i> Remove
																	</a>
																</li>
															</ul>
														</div>
													</div></td>
												</tr>
												<tr>
													<td class="center">
													<div class="checkbox-table">
														<label>
															<input type="checkbox" class="flat-grey">
														</label>
													</div></td>
													<td>Local Ad</td>
													<td class="hidden-xs">UI Fab</td>
													<td>15 april 2014</td>
													<td class="hidden-xs">
													<div class="progress progress-striped active progress-sm">
														<div style="width: 50%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" role="progressbar" class="progress-bar progress-bar-warning">
															<span class="sr-only"> 50% Complete</span>
														</div>
													</div></td>
													<td class="center hidden-xs"><span class="label label-success">Normal</span></td>
													<td class="center">
													<div class="visible-md visible-lg hidden-sm hidden-xs">
														<a href="#" class="btn btn-teal tooltips" data-placement="top" data-original-title="Edit"><i class="fa fa-edit"></i></a>
														<a href="#" class="btn btn-green tooltips" data-placement="top" data-original-title="Share"><i class="fa fa-share"></i></a>
														<a href="#" class="btn btn-bricky tooltips" data-placement="top" data-original-title="Remove"><i class="fa fa-times fa fa-white"></i></a>
													</div>
													<div class="visible-xs visible-sm hidden-md hidden-lg">
														<div class="btn-group">
															<a class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
																<i class="fa fa-cog"></i> <span class="caret"></span>
															</a>
															<ul role="menu" class="dropdown-menu pull-right">
																<li role="presentation">
																	<a role="menuitem" tabindex="-1" href="#">
																		<i class="fa fa-edit"></i> Edit
																	</a>
																</li>
																<li role="presentation">
																	<a role="menuitem" tabindex="-1" href="#">
																		<i class="fa fa-share"></i> Share
																	</a>
																</li>
																<li role="presentation">
																	<a role="menuitem" tabindex="-1" href="#">
																		<i class="fa fa-times"></i> Remove
																	</a>
																</li>
															</ul>
														</div>
													</div></td>
												</tr>
												<tr>
													<td class="center">
													<div class="checkbox-table">
														<label>
															<input type="checkbox" class="flat-grey">
														</label>
													</div></td>
													<td>Design new theme</td>
													<td class="hidden-xs">Internal</td>
													<td>2 october 2014</td>
													<td class="hidden-xs">
													<div class="progress progress-striped active progress-sm">
														<div style="width: 20%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" role="progressbar" class="progress-bar progress-bar-success">
															<span class="sr-only"> 20% Complete (warning)</span>
														</div>
													</div></td>
													<td class="center hidden-xs"><span class="label label-danger">Critical</span></td>
													<td class="center">
													<div class="visible-md visible-lg hidden-sm hidden-xs">
														<a href="#" class="btn btn-teal tooltips" data-placement="top" data-original-title="Edit"><i class="fa fa-edit"></i></a>
														<a href="#" class="btn btn-green tooltips" data-placement="top" data-original-title="Share"><i class="fa fa-share"></i></a>
														<a href="#" class="btn btn-bricky tooltips" data-placement="top" data-original-title="Remove"><i class="fa fa-times fa fa-white"></i></a>
													</div>
													<div class="visible-xs visible-sm hidden-md hidden-lg">
														<div class="btn-group">
															<a class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
																<i class="fa fa-cog"></i> <span class="caret"></span>
															</a>
															<ul role="menu" class="dropdown-menu pull-right">
																<li role="presentation">
																	<a role="menuitem" tabindex="-1" href="#">
																		<i class="fa fa-edit"></i> Edit
																	</a>
																</li>
																<li role="presentation">
																	<a role="menuitem" tabindex="-1" href="#">
																		<i class="fa fa-share"></i> Share
																	</a>
																</li>
																<li role="presentation">
																	<a role="menuitem" tabindex="-1" href="#">
																		<i class="fa fa-times"></i> Remove
																	</a>
																</li>
															</ul>
														</div>
													</div></td>
												</tr>
												<tr>
													<td class="center">
													<div class="checkbox-table">
														<label>
															<input type="checkbox" class="flat-grey">
														</label>
													</div></td>
													<td>IT Help Desk</td>
													<td class="hidden-xs">Designer TM</td>
													<td>6 december 2014</td>
													<td class="hidden-xs">
													<div class="progress progress-striped active progress-sm">
														<div style="width: 40%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-warning">
															<span class="sr-only"> 40% Complete (warning)</span>
														</div>
													</div></td>
													<td class="center hidden-xs"><span class="label label-warning">High</span></td>
													<td class="center">
													<div class="visible-md visible-lg hidden-sm hidden-xs">
														<a href="#" class="btn btn-teal tooltips" data-placement="top" data-original-title="Edit"><i class="fa fa-edit"></i></a>
														<a href="#" class="btn btn-green tooltips" data-placement="top" data-original-title="Share"><i class="fa fa-share"></i></a>
														<a href="#" class="btn btn-bricky tooltips" data-placement="top" data-original-title="Remove"><i class="fa fa-times fa fa-white"></i></a>
													</div>
													<div class="visible-xs visible-sm hidden-md hidden-lg">
														<div class="btn-group">
															<a class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
																<i class="fa fa-cog"></i> <span class="caret"></span>
															</a>
															<ul role="menu" class="dropdown-menu pull-right">
																<li role="presentation">
																	<a role="menuitem" tabindex="-1" href="#">
																		<i class="fa fa-edit"></i> Edit
																	</a>
																</li>
																<li role="presentation">
																	<a role="menuitem" tabindex="-1" href="#">
																		<i class="fa fa-share"></i> Share
																	</a>
																</li>
																<li role="presentation">
																	<a role="menuitem" tabindex="-1" href="#">
																		<i class="fa fa-times"></i> Remove
																	</a>
																</li>
															</ul>
														</div>
													</div></td>
												</tr>
											</tbody>
										</table>
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