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
										<!--######### BLOCO 1 #########-->
										<div class="form-group col-md-12  bg_form">
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

										<!--######### BLOCO 2 #########-->
										<div class="form-group col-md-12  bg_form">
											<p>Dados do(a) Contratado(a)</p>
										</div>

										<div class="col-md-12">
											<div class="form-group col-md-4">
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
											<div class="form-group col-md-3">
												<div class="input-group">
													<span class="input-group-addon">Data Casamento / União</span>
													<input type="date" name="" id="" class="form-control">
												</div>
											</div>

											<div class="form-group col-md-6">
												<div class="input-group">
													<span class="input-group-addon">Nome Completo</span>
													<input class="form-control" type="text" id="Nome">
												</div>
											</div>

											<div class="form-group col-md-3">
												<label class="radio-inline">
												<input type="radio" value="" name="optionsRadios2" class="grey" >
													Cônjuge
												</label>
												<label class="radio-inline">
													<input type="radio" value="" name="optionsRadios2" class="grey" >
													Companheiro(a)
												</label>
											</div>

										</div><!-- fim-col-12 -->

										<div class="col-md-12">
											<div class="form-group col-md-3">
												<span >Cônjuge/ companheiro(a) trabalha registrado?</span><br>	
												<label class="radio-inline">
												<input type="radio" value="" name="optionsRadios3" class="grey" >
													Sim
												</label>
												<label class="radio-inline">
													<input type="radio" value="" name="optionsRadios3" class="grey" >
													Não
												</label>
											</div>

											<div class="form-group col-md-6">
												<div class="input-group">
													<span class="input-group-addon">CPF Cônjuge/Companheiro(a)</span>
													<input class="form-control" type="text" id="Nome">
												</div>
											</div>

										</div><!-- fim-col-12 -->

										<!-- SUB BLOCO 2-1 -->
										<div class="form-group col-md-12  bg_form2">
											<p>raça/cor</p>
										</div>

										<div class="col-md-12 justify-content-around">
												<label class="radio-inline">
													<input type="radio" value="" name="optionsRadios4" class="grey" >
													Branca
												</label>
												<label class="radio-inline">
													<input type="radio" value="" name="optionsRadios4" class="grey" >
													Preta
												</label>
												<label class="radio-inline">
													<input type="radio" value="" name="optionsRadios4" class="grey" >
													Parda
												</label>
												<label class="radio-inline">
													<input type="radio" value="" name="optionsRadios4" class="grey" >
													Amarela 
												</label>
												<label class="radio-inline">
													<input type="radio" value="" name="optionsRadios4" class="grey" >
													Indígena
												</label>
										</div><!-- fim-col-12 -->

										<!-- SUB BLOCO 2-2 -->
										<div class="form-group col-md-12  bg_form2">
											<p>Deficiência</p>
										</div>

										<div class="col-md-12 justify-content-around">
												<label class="radio-inline">
													<input type="radio" value="" name="optionsRadios5" class="grey" >
													Física
												</label>
												<label class="radio-inline">
													<input type="radio" value="" name="optionsRadios5" class="grey" >
													Auditiva
												</label>
												<label class="radio-inline">
													<input type="radio" value="" name="optionsRadios5" class="grey" >
													Visual
												</label>
												<label class="radio-inline">
													<input type="radio" value="" name="optionsRadios5" class="grey" >
													Reabilitado 
												</label>
												<label class="radio-inline">
													<input type="radio" value="" name="optionsRadios5" class="grey" >
													Nenhuma
												</label>
										</div><!-- fim-col-12 -->

										<!--######### BLOCO 3 ######### -->
										<div class="form-group col-md-12  bg_form">
											<p>Grau de Instrução</p>
										</div>
										<div class="col-md-12">
											<div class="form-group col-md-2">
												<label class="radio-inline">
													<input type="radio" value="" name="optionsRadios7" class="grey" >
													Analfabeto
												</label>
											</div>
											<div class="form-group col-md-2">

												<label class="radio">
													<input type="radio" value="" name="optionsRadios7" class="grey" >
													1º Grau (Fundamental)
												</label>

												<div class="radio-grau-ml">
													<label class="radio">
														<input type="radio" value="" name="optionsRadios6" class="grey" >
														Completo
													</label>
													<label class="radio">
														<input type="radio" value="" name="optionsRadios6" class="grey" >
														Incompleto
													</label>
												</div>
											</div>

											<div class="form-group col-md-2">
												<label class="radio">
													<input type="radio" value="" name="optionsRadios7" class="grey" >
													2º Grau (Médio)
												</label>
												<div class="radio-grau-ml">
													<label class="radio">
														<input type="radio" value="" name="optionsRadios6" class="grey" >
														Completo
													</label>
													<label class="radio">
														<input type="radio" value="" name="optionsRadios6" class="grey" >
														Incompleto
													</label>
												</div>
											</div>

											<div class="form-group col-md-3">
												<label class="radio">
													<input type="radio" value="" name="optionsRadios7" class="grey" >
													Técnico
												</label>
												<div class="radio-grau-ml">
													<label class="radio">
														<input type="radio" value="" name="optionsRadios6" class="grey" >
														Completo
													</label>
													<label class="radio">
														<input type="radio" value="" name="optionsRadios6" class="grey" >
														Incompleto
													</label>
												</div>

												<div class="form-group input-group" >
													<span class="input-group-addon">Curso</span>
													<input type="text" class="form-control">
												</div>

												<div class="form-group input-group" style="width: 1rem ;">
													<span class="input-group-addon">Conclusão</span>
													<input type="date" class="form-control">
												</div>
											
											</div>

											<div class="form-group col-md-3">
													<label class="radio">
														<input type="radio" value="" name="optionsRadios7" class="grey" >
														Superior
													</label>

												<div class="radio-grau-ml">
													<label class="radio">
														<input type="radio" value="" name="optionsRadios6" class="grey" >
														Completo
													</label>
													<label class="radio">
														<input type="radio" value="" name="optionsRadios6" class="grey" >
														Incompleto
													</label>
												</div>

												<div class="form-group input-group" >
													<span class="input-group-addon">Curso</span>
													<input type="text" class="form-control">
												</div>

												<div class="form-group input-group" style="width: 1rem ;" >
													<span class="input-group-addon">Conclusão</span>
													<input type="date" class="form-control">
												</div>

												<div class="form-group input-group" >
													<span class="input-group-addon">Nº Registro no Conselho</span>
													<input type="text" class="form-control">
												</div>

											</div>

										</div><!-- fim-col-12 -->

										<!--######### BLOCO 4 ######### -->
										<div class="form-group col-md-12  bg_form">
											<p>Dados Contratuais</p>
										</div>
										<div class="col-md-12">
											<div class="form-group col-md-3">
												<div class="input-group"  >
													<span class="input-group-addon">Data de admissão</span>
													<input type="date" class="form-control">
												</div>
											</div>
											
											<div class="form-group col-md-3">
												<div class="input-group">
													<span class="input-group-addon">Função</span>
													<input type="text" class="form-control">
												</div>
											</div>

											<div class="form-group col-md-4">
												<div class="input-group">
													<span class="input-group-addon">Atividades que irá realizadar</span>
													<input type="text" class="form-control">
												</div>
											</div>
											
											<div class="form-group col-md-2">
												<div class="input-group">
													<span class="input-group-addon">Departamento</span>
													<input type="text" class="form-control">
												</div>
											</div>	
										</div><!-- fim-col-12 -->

										<div class="col-md-12">
											<div class="col-md-4">
												
													<div class="form-group input-group">
														<div class="input-group-addon">Salario combinado</div> 
														<input id="text" name="text" type="text" class="form-control">
													</div>
												
												<div class="form-group input-group">
													<div class="input-group-addon">% sobre vendas</div> 
													<input id="" name="" type="text" class="form-control"> 
													<div class="input-group-addon">
														<i class="fa fa-dollar"></i>
													</div>
												</div>
											</div>
											
											<div class="form-group col-md-6">
												<div class="col-md-12">
													<span>Prazo de experiência </span>
													<label class="checkbox-inline">
														<input type="checkbox" value="" class="grey">
														Não terá Experiência
													</label>
												</div>
													<div class="form-group col-md-6">
														<div class="input-group">
															<span class="input-group-addon">1º fase</span>
															<input type="text">
														</div>
													</div>			
													<div class="form-group col-md-6">
														<div class="input-group">
															<span class="input-group-addon">2º fase</span>
															<input type="text">
														</div>
													</div>	
													<span id="textHelpBlock" class="help-block"> <i class="fa fa-info-circle"></i> Informe a quantidade de dias em cada uma das fases se houver periodo de experiência.</span>		
													<span id="textHelpBlock" class="help-block"> <i class="fa fa-info-circle"></i> OBS: controlar e nos informar <span class="text-uppercase text-danger"><strong>com 05 dias úteis</strong></span>  antes do venimento se a 1º fase será prorrogada ou não e se a 2º fase será rescindida ou não.</span>		
											</div>

											<div class="col-md-2">
												<span>Forma de pagamento</span><br>
												<div class="form-group">
													
													<div class="radio">
														<label class="radio">
														<input type="radio" name="radio_pagamento" value="hora" class="grey">
															p/ Hora
														</label>
													</div>

													<div class="radio">
														<label class="radio">
														<input type="radio" name="radio_pagamento" value="mes" class="grey">
															p/ Mês
														</label>
													</div>

													<div class="radio">
														<label class="radio">
														<input type="radio" name="radio_pagamento" value="comissao" class="grey">
															p/ Só comissão
														</label>
													</div>

													<div class="radio">
														<label class="radio">
														<input type="radio" name="radio_pagamento" value="fixoComissao" class="grey">
															Fixo + Comissão
														</label>
													</div>

													<div class="radio">
														<label class="radio">
														<input type="radio" name="radio_pagamento" value="" class="grey">
															Outros
														</label>
													</div>

													<input id="text_pagamento" name="text_pagamento" placeholder="Especifique a opção 'Outros'" type="text" class="form-control">
												</div>
											</div>
										</div><!-- fim-col-12 -->

										<!--######### BLOCO 5 ######### -->
										<div class="form-group col-md-12  bg_form">
											<p>Horário de trabalho</p>
										</div>
										<div class="col-md-12">
											<div class="col-md-12 justify-content-around">
												<label class="radio-inline">
													<input type="radio" value="" name="optionsRadiosHorario" class="grey" >
													Normal
												</label>
												<label class="radio-inline">
													<input type="radio" value="" name="optionsRadiosHorario" class="grey" >
													Escala revezamento (06hrs diárias)
												</label>
												<label class="radio-inline">
													<input type="radio" value="" name="optionsRadiosHorario" class="grey" >
													Escala 12x36 (indicar dia de folga)
												</label>
												<label class="radio-inline">
													<input type="radio" value="" name="optionsRadiosHorario" class="grey" >
													Sábados alternados 
												</label>
												<label class="radio-inline">
													<input type="radio" value="" name="optionsRadiosHorario" class="grey" >
													EXTERNO
												</label>
											</div>
										
											<div class="col-md-12">
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title center">
														<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
															<i class="icon-arrow"></i>
															Detalhes do Horario de trabalho
														</a></h4>
													</div>
													<div id="collapseOne" class="panel-collapse collapse">
														<div class="panel-body">
															<!-- col-1 -->
															<div class="col-md-4">
																<div class="form-group input-group">
																	<div class="input-group-addon">2ªfeira | Entrada </div> 
																	<input id="text" name="text" type="time" class="form-control">
																</div>
																<div class="form-group input-group">
																	<div class="input-group-addon">3ªfeira | Entrada</div> 
																	<input id="text" name="text" type="time" class="form-control">
																</div>
																<div class="form-group input-group">
																	<div class="input-group-addon">4ªfeira | Entrada</div> 
																	<input id="text" name="text" type="time" class="form-control">
																</div>
																<div class="form-group input-group">
																	<div class="input-group-addon">5ªfeira | Entrada</div> 
																	<input id="text" name="text" type="time" class="form-control">
																</div>
																<div class="form-group input-group">
																	<div class="input-group-addon">6ªfeira | Entrada</div> 
																	<input id="text" name="text" type="time" class="form-control">
																</div>
																<div class="form-group input-group">
																	<div class="input-group-addon">Sábado | Entrada</div> 
																	<input id="text" name="text" type="time" class="form-control">
																</div>
																<div class="form-group input-group">
																	<div class="input-group-addon">Domingo | Entrada</div> 
																	<input id="text" name="text" type="time" class="form-control">
																</div>
															</div>
															<!-- col-2 -->
															<div class="col-md-5">
																<div class="form-group col-md-6">
																	<div class="input-group">
																		<span class="input-group-addon">Intervalo / Refeição</span>
																		<input type="time">
																	</div>
																</div>	
																
																<div class="form-group col-md-6">
																	<div class="input-group">
																		<span class="input-group-addon">ás</span>
																		<input type="time">
																	</div>
																</div>	
																
																<div class="form-group col-md-6">
																	<div class="input-group">
																		<span class="input-group-addon">Intervalo / Refeição</span>
																		<input type="time">
																	</div>
																</div>	
																
																<div class="form-group col-md-6">
																	<div class="input-group">
																		<span class="input-group-addon">ás</span>
																		<input type="time">
																	</div>
																</div>	
																<div class="form-group col-md-6">
																	<div class="input-group">
																		<span class="input-group-addon">Intervalo / Refeição</span>
																		<input type="time">
																	</div>
																</div>	
																
																<div class="form-group col-md-6">
																	<div class="input-group">
																		<span class="input-group-addon">ás</span>
																		<input type="time">
																	</div>
																</div>	
																<div class="form-group col-md-6">
																	<div class="input-group">
																		<span class="input-group-addon">Intervalo / Refeição</span>
																		<input type="time">
																	</div>
																</div>	
																
																<div class="form-group col-md-6">
																	<div class="input-group">
																		<span class="input-group-addon">ás</span>
																		<input type="time">
																	</div>
																</div>	
																<div class="form-group col-md-6">
																	<div class="input-group">
																		<span class="input-group-addon">Intervalo / Refeição</span>
																		<input type="time">
																	</div>
																</div>	
																
																<div class="form-group col-md-6">
																	<div class="input-group">
																		<span class="input-group-addon">ás</span>
																		<input type="time">
																	</div>
																</div>	
																<div class="form-group col-md-6">
																	<div class="input-group">
																		<span class="input-group-addon">Intervalo / Refeição</span>
																		<input type="time">
																	</div>
																</div>	
																
																<div class="form-group col-md-6">
																	<div class="input-group">
																		<span class="input-group-addon">ás</span>
																		<input type="time">
																	</div>
																</div>	
																<div class="form-group col-md-6">
																	<div class="input-group">
																		<span class="input-group-addon">Intervalo / Refeição</span>
																		<input type="time">
																	</div>
																</div>	
																
																<div class="form-group col-md-6">
																	<div class="input-group">
																		<span class="input-group-addon">ás</span>
																		<input type="time">
																	</div>
																</div>	

															</div>

															<!-- col-3 -->
															<div class="col-md-3">
																<div class="form-group input-group">
																	<div class="input-group-addon">Saída </div> 
																	<input id="text"  type="time" class="form-control">
																</div>
																<div class="form-group input-group">
																	<div class="input-group-addon">Saída</div> 
																	<input id="text"  type="time" class="form-control">
																</div>
																<div class="form-group input-group">
																	<div class="input-group-addon">Saída</div> 
																	<input id="text"  type="time" class="form-control">
																</div>
																<div class="form-group input-group">
																	<div class="input-group-addon">Saída</div> 
																	<input id="text"  type="time" class="form-control">
																</div>
																<div class="form-group input-group">
																	<div class="input-group-addon">Saída</div> 
																	<input id="text"  type="time" class="form-control">
																</div>
																<div class="form-group input-group">
																	<div class="input-group-addon">Saída</div> 
																	<input id="text"  type="time" class="form-control">
																</div>
																<div class="form-group input-group">
																	<div class="input-group-addon">Saída</div> 
																	<input id="text"  type="time" class="form-control">
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div><!-- fim-col-12 -->

										<div class="col-md-12">
											
											<div class="col-md-4">
												<span>Adiantamento (vale) 40% </span>
												
													<label class="radio-inline">
													<input type="radio" name="radio_vale" value="" class="grey">
														Sim
													</label>
												
													<label class="radio-inline">
													<input type="radio" name="radio_vale" value="" class="grey">
														Não
													</label>
												<span id="textHelpBlock" class="help-block"> <i class="fa fa-info-circle"></i> OBS: no mês de admissão não sera gerado o adto</span>	
											</div>

											<div class="col-md-4">
												<span>É sócio do Sindicato?</span>
												<label class="radio-inline">
													<input type="radio" name="radio_sindicato" value="" class="grey">
														Sim
													</label>
												
													<label class="radio-inline">
													<input type="radio" name="radio_sindicato" value="" class="grey">
														Não
													</label>
											</div>

											<div class="col-md-4">
												<span>Autoriza descontos Extras no Salário</span>
												<label class="radio-inline">
													<input type="radio" name="radio_desc" value="" class="grey">
														Sim
													</label>
												
													<label class="radio-inline">
													<input type="radio" name="radio_desc" value="" class="grey">
														Não
													</label>
											</div>

										</div><!-- fim-col-12 -->

										<div class="form-group col-md-12  bg_form">
											<p>Pagamento de salário em conta</p>
										</div>
										<div class="col-md-12">
												<div class="col-md-3">
													<span>Tipo de conta</span>
													
													<label class="radio-inline">
													<input type="radio" name="radio_conta" value="" class="grey">
														Poupança
													</label>
												
													<label class="radio-inline">
													<input type="radio" name="radio_conta" value="" class="grey">
														Conta Corrente
													</label>
												</div>

												<div class="form-group col-md-3">
													<div class="input-group">
														<span class="input-group-addon">Cod. Banco</span>
														<input type="text" class="form-control">
													</div>
												</div>	

												<div class="form-group col-md-3">
													<div class="input-group">
														<span class="input-group-addon">Nome Banco</span>
														<input type="text" class="form-control">
													</div>
												</div>
												
												<div class="form-group col-md-3">
													<div class="input-group">
														<span class="input-group-addon">Nº agência</span>
														<input type="text" class="form-control">
													</div>
												</div>												
										</div><!-- fim-col-12 -->
										
										<div class="col-md-12">
											<div class="form-group col-md-6">
												<div class="input-group">
													<span class="input-group-addon">Nome agência</span>
													<input type="text" class="form-control">
												</div>
											</div>

											<div class="form-group col-md-6">
												<div class="input-group">
													<span class="input-group-addon">Nº da conta</span>
													<input type="text" class="form-control">
												</div>
											</div>

										</div><!-- fim-col-12 -->

										<!--######### BLOCO 6 ######### -->
										<div class="form-group col-md-12  bg_form">
											<p>Outros tipos de contratos</p>
										</div>
										<div class="col-md-12">
											<div class="form-group col-md-3">
												
												<label class="radio-inline">
													<input type="radio" value="" name="outro_contrato" class="grey">
													Obra Certa
												</label>
												
												<div class="input-group">
													<span class="input-group-addon">Prazo duração Estimada</span>
													<input type="text" name="" id="" class="form-control" placeholder="insira quantidade de dias">
												</div>

											</div>

											<div class="form-group col-md-3">
												<label class="radio-inline">
													<input type="radio" value="" name="outro_contrato" class="grey">
													Trabalho intermitente
												</label>

												<div class="input-group">
													<span class="input-group-addon">observação</span>
													<input type="text" name="" id="" class="form-control" placeholder="">
												</div>
											</div>

											<div class="form-group col-md-3">
												<label class="radio-inline">
													<input type="radio" value="" name="outro_contrato" class="grey">
													Home Office
												</label>

												<label class="radio-inline">
													<input type="radio" value="" name="outro_contrato" class="grey">
													Teletrabalho
												</label>
												
												<div class="input-group">
													<span class="input-group-addon">observação</span>
													<input type="text" name="" id="" class="form-control" placeholder="">
												</div>
											</div>

											<div class="form-group col-md-3">
												<label class="radio-inline">
													<input type="radio" value="" name="outro_contrato" class="grey">
													Autonomo
												</label>

												<div class="input-group">
													<span class="input-group-addon">observação</span>
													<input type="text" name="" id="" class="form-control" placeholder="">
												</div>
											</div>

										</div><!-- fim-col-12 -->

										<!--######### BLOCO 7 ######### -->
										<div class="form-group col-md-12  bg_form">
											<p>Relação de dependentes para imposto de renda e salario familia</p>
										</div>
										<div class="col-md-12">
											
											<div class="form-group col-md-12">

												<div class="col-md-3">
													<div class="form-group input-group">
														<span class="input-group-addon">Nome</span>
														<input type="text" name="" id="" class="form-control" placeholder="">
													</div>
												</div>

												<div class="col-md-3">
													<div class="form-group input-group">
														<span class="input-group-addon">Parentesco</span>
														<input type="text" name="" id="" class="form-control" placeholder="">
													</div>
												</div>

												<div class="col-md-3">
													<div class="form-group input-group">
														<span class="input-group-addon">Data de nascimento</span>
														<input type="date" name="" id="" class="form-control" placeholder="">
													</div>
												</div>

												<div class="col-md-3">
													<div class="form-group input-group">
														<span class="input-group-addon">CPF</span>
														<input type="text" name="" id="" class="form-control" placeholder="">
													</div>
												</div>
											</div>

											<div class="form-group col-md-12">

												<div class="col-md-3">
													<div class="form-group input-group">
														<span class="input-group-addon">Nome</span>
														<input type="text" name="" id="" class="form-control" placeholder="">
													</div>
												</div>

												<div class="col-md-3">
													<div class="form-group input-group">
														<span class="input-group-addon">Parentesco</span>
														<input type="text" name="" id="" class="form-control" placeholder="">
													</div>
												</div>

												<div class="col-md-3">
													<div class="form-group input-group">
														<span class="input-group-addon">Data de nascimento</span>
														<input type="date" name="" id="" class="form-control" placeholder="">
													</div>
												</div>

												<div class="col-md-3">
													<div class="form-group input-group">
														<span class="input-group-addon">CPF</span>
														<input type="text" name="" id="" class="form-control" placeholder="">
													</div>
												</div>
											</div>

											<div class="form-group col-md-12">

												<div class="col-md-3">
													<div class="form-group input-group">
														<span class="input-group-addon">Nome</span>
														<input type="text" name="" id="" class="form-control" placeholder="">
													</div>
												</div>

												<div class="col-md-3">
													<div class="form-group input-group">
														<span class="input-group-addon">Parentesco</span>
														<input type="text" name="" id="" class="form-control" placeholder="">
													</div>
												</div>

												<div class="col-md-3">
													<div class="form-group input-group">
														<span class="input-group-addon">Data de nascimento</span>
														<input type="date" name="" id="" class="form-control" placeholder="">
													</div>
												</div>

												<div class="col-md-3">
													<div class="form-group input-group">
														<span class="input-group-addon">CPF</span>
														<input type="text" name="" id="" class="form-control" placeholder="">
													</div>
												</div>
											</div>

											<div class="form-group col-md-12">

												<div class="col-md-3">
													<div class="form-group input-group">
														<span class="input-group-addon">Nome</span>
														<input type="text" name="" id="" class="form-control" placeholder="">
													</div>
												</div>

												<div class="col-md-3">
													<div class="form-group input-group">
														<span class="input-group-addon">Parentesco</span>
														<input type="text" name="" id="" class="form-control" placeholder="">
													</div>
												</div>

												<div class="col-md-3">
													<div class="form-group input-group">
														<span class="input-group-addon">Data de nascimento</span>
														<input type="date" name="" id="" class="form-control" placeholder="">
													</div>
												</div>

												<div class="col-md-3">
													<div class="form-group input-group">
														<span class="input-group-addon">CPF</span>
														<input type="text" name="" id="" class="form-control" placeholder="">
													</div>
												</div>
											</div>
										</div><!-- fim-col-12 -->

										<!--######### BLOCO 8 ######### -->
										<div class="form-group col-md-12  bg_form">
											<p>OBSERVAÇÃO SOBRE DEPENDENDENTE(S): Se Trabalhar, não será(ão) considerado(s) dependente(s)</p>
										</div>
										<div class="col-md-12">
											<div class="panel panel-default">
												<div class="panel-heading">
													<h4 class="panel-title center">
													<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
														<i class="icon-arrow"></i>
														Ver mais detalhes +
													</a></h4>
												</div>
												<div id="collapseTwo" class="panel-collapse collapse">
													<div class="panel-body" style="font-size: 1.5rem ;">
														<ol>
															<li>Será considerado dependente: Companheiro(a) com quem o contribuinte tenha filho ou viva há mais de 5 anos, ou cônjuge;</li>
															<li>filho(a) ou enteado(a), até 21 anos de idade, ou, em qualquer idade, quando incapacitado física ou mentalmente para o trabalho;</li>
															<li>filho(a) ou enteado(a), se ainda estiverem cursando ensino superior ou escola técnica de segundo grau, até 24 anos de idade:</li>
															<li>irmão(ã), neto(a) ou bisneto(a), sem arrimo dos pais, de quem o contribuinte detenha a guarda judicial, até 21 anos, ou em qualquer
															idade, quando incapacitado física ou mentalmente para o trabalho;</li>
															<li>irmão(ã), neto(a) ou bisneto(a), sem arrimo dos pais, com idade de 21 anos até 24 anos, se ainda estiver cursando estabelecimento
															de ensino superior ou escola técnica de segundo grau, desde que o contribuinte tenha detido sua guarda judicial até os 21 anos.</li>
															<li>pais, avós e bisavós que tenham recebido rendimentos, tributáveis ou não, até o limite de isenção do imposto;</li>
															<li>menor pobre até 21 anos que o contribuinte crie e eduque e de quem detenha a guarda judicial;</li>
															<li>pessoa absolutamente incapaz, da qual o contribuinte seja tutor ou curador. </li>
														</ol>
													</div>
												</div>
											</div>
										</div><!-- fim-col-12 -->

										<!--######### BLOCO 9 ######### -->
										<div class="form-group col-md-12  bg_form">
											<p>Benefícios</p>
										</div>
										<div class="col-md-12 ">
											<div class="form-group col-md-2 ">
												<span>Vale Transporte </span>
												<label class="radio-inline ">
												<input type="radio" name="radio_transp" value="" class="grey">
													Sim
												</label>
											
												<label class="radio-inline">
												<input type="radio" name="radio_transp" value="" class="grey">
													Não
												</label>
											</div>

											<div class="col-md-5">
												<div class="form-group" >
													<div class="input-group">
														<span class="input-group-addon">Valor do passe R$</span>
														<input type="text" name="" id="" class="form-control">
													</div>
												</div>
											</div>

											<div class="col-md-5">
												<div class="form-group" >
													<div class="input-group">
														<span class="input-group-addon">Quantidade diária (ida e volta)</span>
														<input type="text" name="" id="" class="form-control">
													</div>
												</div>
											</div>
										</div><!-- fim-col-12 -->

										<div class="col-md-12">
											

											<div class="col-md-6">
												<div class="form-group" >
													<div class="input-group">
														<span class="input-group-addon">1º Empresa</span>
														<input type="text" name="" id="" class="form-control">
													</div>
												</div>
											</div>

											<div class="col-md-6">
												<div class="form-group" >
													<div class="input-group">
														<span class="input-group-addon">2º Empresa</span>
														<input type="text" name="" id="" class="form-control">
													</div>
												</div>
											</div>
										</div><!-- fim-col-12 -->

										<div class="col-md-12">
											<div class="form-group col-md-2">
												<span>Vale Refeição </span>
												<label class="radio-inline">
												<input type="radio" name="radio_ref" value="" class="grey">
													Sim
												</label>
											
												<label class="radio-inline">
												<input type="radio" name="radio_ref" value="" class="grey">
													Não
												</label>
											</div>

											<div class="col-md-5">
												<div class="form-group" >
													<div class="input-group">
														<span class="input-group-addon">Valor Diário</span>
														<input type="text" name="" id="" class="form-control">
													</div>
												</div>
											</div>

											<div class="col-md-5">
												<div class="form-group" >
													<div class="input-group">
														<span class="input-group-addon">% Desconto</span>
														<input type="text" name="" id="" class="form-control">
													</div>
												</div>
											</div>
										</div><!-- fim-col-12 -->
										
										<div class="col-md-12">
											<div class="form-group col-md-3">
												<span>Conv. Assistência Médica </span>
												<label class="radio-inline">
												<input type="radio" name="radio_med" value="" class="grey">
													Sim
												</label>
											
												<label class="radio-inline">
												<input type="radio" name="radio_med" value="" class="grey">
													Não
												</label>
											</div>

											<div class="col-md-9">
												<div class="form-group" >
													<div class="input-group">
														<span class="input-group-addon">Valor do Desconto Mensal, á ser informado em planilha</span>
														<input type="text" name="" id="" class="form-control">
													</div>
												</div>
											</div>
										</div><!-- fim-col-12 -->

										<div class="col-md-12">
											<div class="form-group col-md-3">
												<span>Convênio Odontológico</span>
												<label class="radio-inline">
												<input type="radio" name="radio_odont" value="" class="grey">
													Sim
												</label>
											
												<label class="radio-inline">
												<input type="radio" name="radio_odont" value="" class="grey">
													Não
												</label>
											</div>

											<div class="col-md-9">
												<div class="form-group" >
													<div class="input-group">
														<span class="input-group-addon">Valor do Desconto Mensal, á ser informado em planilha</span>
														<input type="text" name="" id="" class="form-control">
													</div>
												</div>
											</div>
										</div><!-- fim-col-12 -->

										<div class="col-md-12">
											<div class="form-group col-md-3">
												<span>Seguro de Vida</span>
												<label class="radio-inline">
												<input type="radio" name="radio_seguro" value="" class="grey">
													Sim
												</label>
											
												<label class="radio-inline">
												<input type="radio" name="radio_seguro" value="" class="grey">
													Não
												</label>
											</div>

											<div class="col-md-9">
												<div class="form-group" >
													<div class="input-group">
														<span class="input-group-addon">Valor do Desconto Mensal:</span>
														<input type="text" name="" id="" class="form-control">
													</div>
												</div>
											</div>
										</div><!-- fim-col-12 -->

										<div class="col-md-12">
											<div class="form-group col-md-4">
												<div class="form-group" >
													<div class="input-group">
														<span class="input-group-addon">Outros / Especificar:</span>
														<input type="text" name="" id="" class="form-control">
													</div>
												</div>
											</div>

											<div class="form-group col-md-2 center">
												<label class="radio-inline">
												<input type="radio" name="radio_outro" value="" class="grey">
													Sim
												</label>
											
												<label class="radio-inline">
												<input type="radio" name="radio_outro" value="" class="grey">
													Não
												</label>
											</div>

											<div class="col-md-6">
												<div class="form-group" >
													<div class="input-group">
														<span class="input-group-addon">Valor Mensal</span>
														<input type="text" name="" id="" class="form-control">
													</div>
												</div>
											</div>
										</div><!-- fim-col-12 -->

										<!--######### BLOCO 10 ######### -->
										<div class="form-group col-md-12  bg_form">
											<p>Dados do último emprego com registro</p>
										</div>
										<div class="col-md-12">
											<div class="form-group col-md-6">
												<div class="input-group">
													<span class="input-group-addon">Nº CNPJ:</span>
													<input class="form-control" type="text" id="Nome">
												</div>
											</div>

											<div class="form-group col-md-6">
												<div class="input-group">
													<span class="input-group-addon">Empresa / Razão Social:</span>
													<input class="form-control" type="text" id="Nome">
												</div>
											</div>
										</div><!-- fim-col-12 -->

										<div class="col-md-12">
											<div class="form-group col-md-4">
												<div class="input-group">
													<span class="input-group-addon">Data de Admissão:</span>
													<input class="form-control" type="date" id="Nome">
												</div>
											</div>

											<div class="form-group col-md-4">
												<div class="input-group">
													<span class="input-group-addon">Data Saída:</span>
													<input class="form-control" type="date" id="Nome">
												</div>
											</div>

											<div class="form-group col-md-4">
												<div class="input-group">
													<span class="input-group-addon">Nº Matrícula/Registro</span>
													<input class="form-control" type="text" id="Nome">
												</div>
											</div>
										</div><!-- fim-col-12 -->

										<!--######### BLOCO 11 ######### -->
										<div class="form-group col-md-12  bg_form">
											<p>Para estrangeiro</p>
										</div>
										<div class="col-md-12">
											<div class="form-group col-md-3">
												<div class="input-group">
													<span class="input-group-addon">País de Origem:</span>
													<input class="form-control" type="text" id="Nome">
												</div>
											</div>

											<div class="form-group col-md-3">
												<div class="input-group">
													<span class="input-group-addon">Data Chegada ao Brasil:</span>
													<input class="form-control" type="date" id="Nome">
												</div>
											</div>
											<div class="form-group col-md-3">
												<div class="input-group">
													<span class="input-group-addon">Nº do Passaporte:</span>
													<input class="form-control" type="text" id="Nome">
												</div>
											</div>
											<div class="form-group col-md-3">
												<div class="input-group">
													<span class="input-group-addon">Orgão Emissor:</span>
													<input class="form-control" type="text" id="Nome">
												</div>
											</div>
										</div><!-- fim-col-12 -->
										<div class="col-md-12">
											<div class="form-group col-md-3">
												<div class="input-group">
													<span class="input-group-addon">Data Expedição</span>
													<input class="form-control" type="date" id="Nome">
												</div>
											</div>

											<div class="form-group col-md-3">
												<div class="input-group">
													<span class="input-group-addon">Vencimento</span>
													<input class="form-control" type="date" id="Nome">
												</div>
											</div>
											<div class="form-group col-md-3">
												<div class="input-group">
													<span class="input-group-addon">RNE nº</span>
													<input class="form-control" type="text" id="Nome">
												</div>
											</div>
											<div class="form-group col-md-3">
												<div class="input-group">
													<span class="input-group-addon">Validade até</span>
													<input class="form-control" type="text" id="Nome">
												</div>
											</div>
										</div><!-- fim-col-12 -->
										<div class="col-md-12">
											<div class="form-group col-md-3">
												<div class="input-group">
													<span class="input-group-addon">Tipo de Visto:</span>
													<input class="form-control" type="text" id="Nome">
												</div>
											</div>

											<div class="form-group col-md-3">
												<div class="input-group">
													<span >Tem filhos com brasileiro(a)? </span>
													
														<label class="radio-inline">
														<input type="radio" name="radio_filho" value="" class="grey">
															Sim
														</label>
													
														<label class="radio-inline">
														<input type="radio" name="radio_filho" value="" class="grey">
															Não
														</label>
												</div>
											</div>

											<div class="form-group col-md-6">
												<div class="input-group">
													<span class="input-group-addon">Quantos</span>
													<input class="form-control" type="text" id="Nome">
												</div>
											</div>
										</div><!-- fim-col-12 -->
										<div class="col-md-12">
											<div class="form-group col-md-6">
												<div class="input-group">
													<span class="input-group-addon">Em caso de estrangeiro naturalizado brasileiro, informar o Nº RIC</span>
													<input class="form-control" type="text" id="Nome">
												</div>
											</div>

											<div class="form-group col-md-3">
												<div class="input-group">
													<span class="input-group-addon">Órgão Emissor</span>
													<input class="form-control" type="text" id="Nome">
												</div>
											</div>

											<div class="form-group col-md-3">
												<div class="input-group">
													<span class="input-group-addon">Data Emissão</span>
													<input class="form-control" type="text" id="Nome">
												</div>
											</div>
										</div><!-- fim-col-12 -->

										<!--######### BLOCO 12 ######### -->
										<div class="form-group col-md-12  bg_form">
											<p>Documentos necessários para admissão</p>
										</div>
										<div class="col-md-12">
											<div class="row">

											<!--############# TABS 1 #############-->
												<div class="col-sm-6">
													<div class="tabbable tabs-left">
														<ul id="myTab3" class="nav nav-tabs tab-green">
															<li class="active">
																<a href="#panel_tab4_example1" data-toggle="tab">
																	<i class="pink fa fa-dashboard"></i>  Carteira de Trabalho - CTPS
																</a>
															</li>
															<li class="">
																<a href="#panel_tab4_example2" data-toggle="tab">
																	<i class="blue fa fa-user"></i> Foto recente 3x4
																</a>
															</li>
															<li class="">
																<a href="#panel_tab4_example3" data-toggle="tab">
																	<i class="fa fa-rocket"></i> Comprovante de Endereço atual
																</a>
															</li>
															<li class="">
																<a href="#panel_tab4_example4" data-toggle="tab">
																	<i class="fa fa-rocket"></i> Título de eleitor
																</a>
															</li>
															<li class="">
																<a href="#panel_tab4_example5" data-toggle="tab">
																	<i class="fa fa-rocket"></i> Certificado de reservista
																</a>
															</li>
															<li class="">
																<a href="#panel_tab4_example6" data-toggle="tab">
																	<i class="fa fa-rocket"></i> Certidão de Casamento
																</a>
															</li>
															<li class="">
																<a href="#panel_tab4_example7" data-toggle="tab">
																	<i class="fa fa-rocket"></i> R.G.
																</a>
															</li>
															<li class="">
																<a href="#panel_tab4_example8" data-toggle="tab">
																	<i class="fa fa-rocket"></i> CPF
																</a>
															</li>
														</ul>
														<div class="tab-content">
															<div class="tab-pane active" id="panel_tab4_example1">
																<div class="col-md-12">
																	<div class="form-group col-md-12">
																		<div class="input-group">
																			<span class="input-group-addon">CTPS</span>
																			<input class="form-control" type="text" id="Nome">
																		</div>
																	</div>

																	<div class="form-group col-md-12">
																		<div class="input-group">
																			<span class="input-group-addon">CTPS</span>
																			<input class="form-control" type="text" id="Nome">
																		</div>
																	</div>

																</div><!-- fim-col-12 -->
															</div>
															<div class="tab-pane" id="panel_tab4_example2">
																<div class="form-group col-md-12">
																		<label>
																			Foto
																		</label>
																		<div data-provides="fileupload" class="fileupload fileupload-new">
																			<span class="btn btn-file btn-light-grey"><i class="fa fa-folder-open-o"></i> <span class="fileupload-new">Select file</span><span class="fileupload-exists">Change</span>
																				<input type="file">
																			</span>
																			<span class="fileupload-preview"></span>
																			<a style="float: none" data-dismiss="fileupload" class="close fileupload-exists" href="#">
																				&times;
																			</a>
																		</div>
																		<span class="help-block">
																			Example block-level help text here.
																		</span>
																</div><!-- fim-col-12 -->
															</div>
															<div class="tab-pane" id="panel_tab4_example3">
																<div class="form-group col-md-12">
																		<label>
																			Comprovante endereço
																		</label>
																		<div data-provides="fileupload" class="fileupload fileupload-new">
																			<span class="btn btn-file btn-light-grey"><i class="fa fa-folder-open-o"></i> <span class="fileupload-new">Select file</span><span class="fileupload-exists">Change</span>
																				<input type="file">
																			</span>
																			<span class="fileupload-preview"></span>
																			<a style="float: none" data-dismiss="fileupload" class="close fileupload-exists" href="#">
																				&times;
																			</a>
																		</div>
																		<span class="help-block">
																			Example block-level help text here.
																		</span>
																</div>
															</div>
															<div class="tab-pane" id="panel_tab4_example4">
																<div class="col-md-12">
																	<div class="form-group col-md-12">
																		<div class="input-group">
																			<span class="input-group-addon">Titulo Eleitor</span>
																			<input class="form-control" type="text" id="Nome">
																		</div>
																	</div>

																	<div class="form-group col-md-12">
																		<div class="input-group">
																			<span class="input-group-addon">Titulo Eleitor</span>
																			<input class="form-control" type="text" id="Nome">
																		</div>
																	</div>

																</div><!-- fim-col-12 -->
															</div>
															<div class="tab-pane" id="panel_tab4_example5">
																<div class="col-md-12">
																	<div class="form-group col-md-12">
																		<div class="input-group">
																			<span class="input-group-addon">Reservista</span>
																			<input class="form-control" type="text" id="Nome">
																		</div>
																	</div>

																	<div class="form-group col-md-12">
																		<div class="input-group">
																			<span class="input-group-addon">Reservista</span>
																			<input class="form-control" type="text" id="Nome">
																		</div>
																	</div>

																</div><!-- fim-col-12 -->
															</div>
															<div class="tab-pane" id="panel_tab4_example6">
																<div class="col-md-12">
																	<div class="form-group col-md-12">
																		<div class="input-group">
																			<span class="input-group-addon">Certidão</span>
																			<input class="form-control" type="text" id="Nome">
																		</div>
																	</div>

																	<div class="form-group col-md-12">
																		<div class="input-group">
																			<span class="input-group-addon">Certidão</span>
																			<input class="form-control" type="text" id="Nome">
																		</div>
																	</div>

																</div><!-- fim-col-12 -->
															</div>
															<div class="tab-pane" id="panel_tab4_example7">
																<div class="col-md-12">
																	<div class="form-group col-md-12">
																		<div class="input-group">
																			<span class="input-group-addon">Número RG</span>
																			<input class="form-control" type="text" id="Nome">
																		</div>
																	</div>

																	<div class="form-group col-md-12">
																		<div class="input-group">
																			<span class="input-group-addon">Data de emissão</span>
																			<input class="form-control" type="text" id="Nome">
																		</div>
																	</div>

																</div><!-- fim-col-12 -->
															</div>
															<div class="tab-pane" id="panel_tab4_example8">
																<div class="col-md-12">
																	<div class="form-group col-md-12">
																		<div class="input-group">
																			<span class="input-group-addon">CPF</span>
																			<input class="form-control" type="text" id="Nome">
																		</div>
																	</div>

																	<div class="form-group col-md-12">
																		<div class="input-group">
																			<span class="input-group-addon">Data de emissão</span>
																			<input class="form-control" type="text" id="Nome">
																		</div>
																	</div>

																</div><!-- fim-col-12 -->
															</div>
														</div>
													</div>
												</div>

												<div class="col-sm-6">
													<div class="tabbable tabs-left">
														<ul id="myTab3" class="nav nav-tabs tab-green">
															<li class="">
																<a href="#panel_tab4_example16" data-toggle="tab">
																	<i class="fa fa-rocket"></i> CPF Filhos
																</a>
															</li>
															<li class="">
																<a href="#panel_tab4_example9" data-toggle="tab">
																	<i class="fa fa-rocket"></i> Cartão de Inscrição no PIS/PASEP
																</a>
															</li>
															<li class="">
																<a href="#panel_tab4_example10" data-toggle="tab">
																	<i class="fa fa-rocket"></i> CNH
																</a>
															</li>
															<li class="">
																<a href="#panel_tab4_example11" data-toggle="tab">
																	<i class="fa fa-rocket"></i>  Registro DRT
																</a>
															</li>
															<li class="">
																<a href="#panel_tab4_example12" data-toggle="tab">
																	<i class="fa fa-rocket"></i> Certidão de Nascimento
																</a>
															</li>
															<li class="">
																<a href="#panel_tab4_example13" data-toggle="tab">
																	<i class="fa fa-rocket"></i> Caderneta de Vacinação
																</a>
															</li>
															<li class="">
																<a href="#panel_tab4_example14" data-toggle="tab">
																	<i class="fa fa-rocket"></i>  Cartão do SUS
																</a>
															</li>
															<li class="">
																<a href="#panel_tab4_example15" data-toggle="tab">
																	<i class="fa fa-rocket"></i> Certidão de Nascimento
																</a>
															</li>
														</ul>
														<div class="tab-content">
															<div class="tab-pane" id="panel_tab4_example16">
																<div class="col-md-12">
																	<div class="form-group col-md-12">
																		<div class="input-group">
																			<span class="input-group-addon">CPF</span>
																			<input class="form-control" type="text" id="Nome">
																		</div>
																	</div>

																	<div class="form-group col-md-12">
																		<div class="input-group">
																			<span class="input-group-addon">Data de emissão</span>
																			<input class="form-control" type="text" id="Nome">
																		</div>
																	</div>

																</div><!-- fim-col-12 -->
																<div class="col-md-12">
																	<div class="form-group col-md-12">
																		<div class="input-group">
																			<span class="input-group-addon">CPF</span>
																			<input class="form-control" type="text" id="Nome">
																		</div>
																	</div>

																	<div class="form-group col-md-12">
																		<div class="input-group">
																			<span class="input-group-addon">Data de emissão</span>
																			<input class="form-control" type="text" id="Nome">
																		</div>
																	</div>

																</div><!-- fim-col-12 -->
																<div class="col-md-12">
																	<div class="form-group col-md-12">
																		<div class="input-group">
																			<span class="input-group-addon">CPF</span>
																			<input class="form-control" type="text" id="Nome">
																		</div>
																	</div>

																	<div class="form-group col-md-12">
																		<div class="input-group">
																			<span class="input-group-addon">Data de emissão</span>
																			<input class="form-control" type="text" id="Nome">
																		</div>
																	</div>

																</div><!-- fim-col-12 -->
															</div>
															<div class="tab-pane" id="panel_tab4_example9">
																<div class="col-md-12">
																	<div class="form-group col-md-12">
																		<div class="input-group">
																			<span class="input-group-addon">Número PIS/PASEP</span>
																			<input class="form-control" type="text" id="Nome">
																		</div>
																	</div>

																	<div class="form-group col-md-12">
																		<div class="input-group">
																			<span class="input-group-addon">Número PIS/PASEP</span>
																			<input class="form-control" type="text" id="Nome">
																		</div>
																	</div>

																</div><!-- fim-col-12 -->
															</div>
															<div class="tab-pane" id="panel_tab4_example10">
																<div class="col-md-12">
																	<div class="form-group col-md-12">
																		<div class="input-group">
																			<span class="input-group-addon">CNH</span>
																			<input class="form-control" type="text" id="Nome">
																		</div>
																	</div>

																	<div class="form-group col-md-12">
																		<div class="input-group">
																			<span class="input-group-addon">Validade</span>
																			<input class="form-control" type="text" id="Nome">
																		</div>
																	</div>

																</div><!-- fim-col-12 -->
															</div>
															<div class="tab-pane" id="panel_tab4_example11">
																<div class="col-md-12">
																	<div class="form-group col-md-12">
																		<div class="input-group">
																			<span class="input-group-addon">DRT</span>
																			<input class="form-control" type="text" id="Nome">
																		</div>
																	</div>

																	<div class="form-group col-md-12">
																		<div class="input-group">
																			<span class="input-group-addon">Validade</span>
																			<input class="form-control" type="text" id="Nome">
																		</div>
																	</div>

																</div><!-- fim-col-12 -->
															</div>
															<div class="tab-pane" id="panel_tab4_example12">
																<div class="form-group col-md-12">
																		<label>
																			Certidão Nascimento
																		</label>
																		<div data-provides="fileupload" class="fileupload fileupload-new">
																			<span class="btn btn-file btn-light-grey"><i class="fa fa-folder-open-o"></i> <span class="fileupload-new">Select file</span><span class="fileupload-exists">Change</span>
																				<input type="file">
																			</span>
																			<span class="fileupload-preview"></span>
																			<a style="float: none" data-dismiss="fileupload" class="close fileupload-exists" href="#">
																				&times;
																			</a>
																		</div>
																		<span class="help-block">
																			Example block-level help text here.
																		</span>
																</div><!-- fim-col-12 -->
															</div>
															<div class="tab-pane" id="panel_tab4_example13">
																<div class="form-group col-md-12">
																		<label>
																			Caderneta Vacinação
																		</label>
																		<div data-provides="fileupload" class="fileupload fileupload-new">
																			<span class="btn btn-file btn-light-grey"><i class="fa fa-folder-open-o"></i> <span class="fileupload-new">Select file</span><span class="fileupload-exists">Change</span>
																				<input type="file">
																			</span>
																			<span class="fileupload-preview"></span>
																			<a style="float: none" data-dismiss="fileupload" class="close fileupload-exists" href="#">
																				&times;
																			</a>
																		</div>
																		<span class="help-block">
																			Example block-level help text here.
																		</span>
																</div><!-- fim-col-12 -->
															</div>
															<div class="tab-pane" id="panel_tab4_example14">
																<div class="col-md-12">
																	<div class="form-group col-md-12">
																		<div class="input-group">
																			<span class="input-group-addon">SUS</span>
																			<input class="form-control" type="text" id="Nome">
																		</div>
																	</div>

																	<div class="form-group col-md-12">
																		<div class="input-group">
																			<span class="input-group-addon">SUS</span>
																			<input class="form-control" type="text" id="Nome">
																		</div>
																	</div>

																</div><!-- fim-col-12 -->
															</div>
															<div class="tab-pane" id="panel_tab4_example15">
																<div class="form-group col-md-12">
																		<label>
																			Certidão de Nascimento Filho / Dependente
																		</label>
																		<div data-provides="fileupload" class="fileupload fileupload-new">
																			<span class="btn btn-file btn-light-grey"><i class="fa fa-folder-open-o"></i> <span class="fileupload-new">Select file</span><span class="fileupload-exists">Change</span>
																				<input type="file">
																			</span>
																			<span class="fileupload-preview"></span>
																			<a style="float: none" data-dismiss="fileupload" class="close fileupload-exists" href="#">
																				&times;
																			</a>
																		</div>
																		<span class="help-block">
																			Example block-level help text here.
																		</span>
																</div><!-- fim-col-12 -->
																<div class="form-group col-md-12">
																		<label>
																			Certidão de Nascimento Filho / Dependente
																		</label>
																		<div data-provides="fileupload" class="fileupload fileupload-new">
																			<span class="btn btn-file btn-light-grey"><i class="fa fa-folder-open-o"></i> <span class="fileupload-new">Select file</span><span class="fileupload-exists">Change</span>
																				<input type="file">
																			</span>
																			<span class="fileupload-preview"></span>
																			<a style="float: none" data-dismiss="fileupload" class="close fileupload-exists" href="#">
																				&times;
																			</a>
																		</div>
																		<span class="help-block">
																			Example block-level help text here.
																		</span>
																</div><!-- fim-col-12 -->
															</div>
														</div>
													</div>
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