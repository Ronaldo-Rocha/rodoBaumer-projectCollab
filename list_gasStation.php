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
				</ol>
				<div class="page-header">
					<h1>Abastecimento <small>todos os abastecimentos</small></h1>
				</div>
				<!-- end: PAGE TITLE & BREADCRUMB -->
			</div>
		</div>
		<!-- end: PAGE HEADER -->
		<!-- start: PAGE CONTENT -->
		<div class="row">
			<div class="col-md-12">
				<!-- NOVAS TABELAS -->
				<!-- start: DYNAMIC TABLE PANEL -->
				<div class="panel panel-default">
					<div class="panel-heading">
						<i class="fa fa-external-link-square"></i>
						Tabela de Abastecimentos
						<div class="panel-tools">
							<a class="btn btn-xs btn-green tooltips" href="cad_gasStation.php" data-original-title="Adicionar Abastecimento" data-placement="top"><i class="fa fa-plus"></i></a>
							<a class="btn btn-xs btn-link panel-collapse collapses" href="#"></a>
						</div>
					</div>
					<div class="panel-body">
						<table class="table table-striped table-bordered table-hover table-full-width" id="sample_1">
							<thead>
								<tr>
									<th>Nome</th>
									<th class="hidden-xs">Função</th>
									<th>Email</th>
									<th class="hidden-xs">Telefone</th>
									<th>Opções</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Amaya</td>
									<td class="hidden-xs">W3C,
										INRIA</td>
									<td>Free</td>
									<td class="hidden-xs">W3C</td>
									<td><a href="#" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Editar"><i class="fa fa-edit"></i></a>
										<a href="#" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Deletar"><i class="fa fa-times fa fa-white"></i></a>
									</td>
								</tr>
								<tr>
									<td>AOL Explorer</td>
									<td class="hidden-xs">America Online, Inc</td>
									<td>Free</td>
									<td class="hidden-xs">Proprietary</td>
									<td><a href="#" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Editar"><i class="fa fa-edit"></i></a>
										<a href="#" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Deletar"><i class="fa fa-times fa fa-white"></i></a>
									</td>
								</tr>
								<tr>
									<td>Arora</td>
									<td class="hidden-xs">Benjamin C. Meyer</td>
									<td>Free</td>
									<td class="hidden-xs">GPL</td>
									<td><a href="#" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Editar"><i class="fa fa-edit"></i></a>
										<a href="#" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Deletar"><i class="fa fa-times fa fa-white"></i></a>
									</td>
								</tr>
								<tr>
									<td>Avant</td>
									<td class="hidden-xs">Avant Force</td>
									<td>Free</td>
									<td class="hidden-xs">Proprietary</td>
									<td><a href="#" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Editar"><i class="fa fa-edit"></i></a>
										<a href="#" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Deletar"><i class="fa fa-times fa fa-white"></i></a>
									</td>
								</tr>
								<tr>
									<td>Camino</td>
									<td class="hidden-xs">The Camino Project</td>
									<td>Free</td>
									<td class="hidden-xs">tri-license</td>
									<td><a href="#" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Editar"><i class="fa fa-edit"></i></a>
										<a href="#" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Deletar"><i class="fa fa-times fa fa-white"></i></a>
									</td>
								</tr>
								<tr>
									<td>Chromium</td>
									<td class="hidden-xs">Google</td>
									<td>Free</td>
									<td class="hidden-xs">BSD</td>
									<td><a href="#" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Editar"><i class="fa fa-edit"></i></a>
										<a href="#" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Deletar"><i class="fa fa-times fa fa-white"></i></a>
									</td>
								</tr>
								<tr>
									<td>Dillo</td>
									<td class="hidden-xs">The Dillo team</td>
									<td>Free</td>
									<td class="hidden-xs">GPL</td>
									<td><a href="#" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Editar"><i class="fa fa-edit"></i></a>
										<a href="#" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Deletar"><i class="fa fa-times fa fa-white"></i></a>
									</td>
								</tr>
								<tr>
									<td>Dooble</td>
									<td class="hidden-xs">Dooble Team</td>
									<td>Free</td>
									<td class="hidden-xs">GPL</td>
									<td><a href="#" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Editar"><i class="fa fa-edit"></i></a>
										<a href="#" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Deletar"><i class="fa fa-times fa fa-white"></i></a>
									</td>
								</tr>
								<tr>
									<td>ELinks</td>
									<td class="hidden-xs">Baudis, Fonseca, <i>et al.</i></td>
									<td>Free</td>
									<td class="hidden-xs">GPL</td>
									<td><a href="#" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Editar"><i class="fa fa-edit"></i></a>
										<a href="#" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Deletar"><i class="fa fa-times fa fa-white"></i></a>
									</td>
								</tr>
								<tr>
									<td>Web</td>
									<td class="hidden-xs">Marco Pesenti Gritti</td>
									<td>Free</td>
									<td class="hidden-xs">GPL</td>
									<td><a href="#" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Editar"><i class="fa fa-edit"></i></a>
										<a href="#" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Deletar"><i class="fa fa-times fa fa-white"></i></a>
									</td>
								</tr>
								<tr>
									<td>Flock</td>
									<td class="hidden-xs">Flock Inc</td>
									<td>Free</td>
									<td class="hidden-xs">Proprietary</td>
									<td><a href="#" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Editar"><i class="fa fa-edit"></i></a>
										<a href="#" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Deletar"><i class="fa fa-times fa fa-white"></i></a>
									</td>
								</tr>
								<tr>
									<td>Galeon</td>
									<td class="hidden-xs">Marco Pesenti Gritti</td>
									<td>Free</td>
									<td class="hidden-xs">GPL</td>
									<td><a href="#" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Editar"><i class="fa fa-edit"></i></a>
										<a href="#" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Deletar"><i class="fa fa-times fa fa-white"></i></a>
									</td>
								</tr>
								<tr>
									<td>Google Chrome</td>
									<td class="hidden-xs">Google</td>
									<td>Free</td>
									<td class="hidden-xs">Google Chrome Terms of Service</td>
									<td><a href="#" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Editar"><i class="fa fa-edit"></i></a>
										<a href="#" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Deletar"><i class="fa fa-times fa fa-white"></i></a>
									</td>
								</tr>
								<tr>
									<td>GNU IceCat</td>
									<td class="hidden-xs">GNU</td>
									<td>Free</td>
									<td class="hidden-xs">MPL</td>
									<td><a href="#" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Editar"><i class="fa fa-edit"></i></a>
										<a href="#" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Deletar"><i class="fa fa-times fa fa-white"></i></a>
									</td>
								</tr>
								<tr>
									<td>iCab</td>
									<td class="hidden-xs">Alexander Clauss</td>
									<td>$20 (Pro)</td>
									<td class="hidden-xs">Proprietary</td>
									<td><a href="#" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Editar"><i class="fa fa-edit"></i></a>
										<a href="#" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Deletar"><i class="fa fa-times fa fa-white"></i></a>
									</td>
								</tr>
								<tr>
									<td>Internet Explorer</td>
									<td class="hidden-xs">Microsoft,
										<br>
										Spyglass
									</td>
									<td>comes with Windows</td>
									<td class="hidden-xs">Proprietary</td>
									<td><a href="#" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Editar"><i class="fa fa-edit"></i></a>
										<a href="#" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Deletar"><i class="fa fa-times fa fa-white"></i></a>
									</td>
								</tr>
								<tr>
									<td>Internet Explorer for Mac (terminated)</td>
									<td class="hidden-xs">Microsoft</td>
									<td>Free</td>
									<td class="hidden-xs">Proprietary</td>
									<td><a href="#" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Editar"><i class="fa fa-edit"></i></a>
										<a href="#" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Deletar"><i class="fa fa-times fa fa-white"></i></a>
									</td>
								</tr>
								<tr>
									<td>K-Meleon</td>
									<td class="hidden-xs">Dorian, KKO, <i>et al.</i></td>
									<td>Free</td>
									<td class="hidden-xs">GPL</td>
									<td><a href="#" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Editar"><i class="fa fa-edit"></i></a>
										<a href="#" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Deletar"><i class="fa fa-times fa fa-white"></i></a>
									</td>
								</tr>
								<tr>
									<td>Konqueror</td>
									<td class="hidden-xs">KDE</td>
									<td>Free</td>
									<td class="hidden-xs">GPL</td>
									<td><a href="#" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Editar"><i class="fa fa-edit"></i></a>
										<a href="#" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Deletar"><i class="fa fa-times fa fa-white"></i></a>
									</td>
								</tr>
								<tr>
									<td>Links</td>
									<td class="hidden-xs">Patocka, <i>et al.</i></td>
									<td>Free</td>
									<td class="hidden-xs">GPL</td>
									<td><a href="#" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Editar"><i class="fa fa-edit"></i></a>
										<a href="#" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Deletar"><i class="fa fa-times fa fa-white"></i></a>
									</td>
								</tr>
								<tr>
									<td>Lunascape</td>
									<td class="hidden-xs">Lunascape Corporation</td>
									<td>Free</td>
									<td class="hidden-xs">Proprietary</td>
									<td><a href="#" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Editar"><i class="fa fa-edit"></i></a>
										<a href="#" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Deletar"><i class="fa fa-times fa fa-white"></i></a>
									</td>
								</tr>
								<tr>
									<td>Lynx</td>
									<td class="hidden-xs">Montulli, Grobe, Rezac, <i>et al.</i></td>
									<td>Free</td>
									<td class="hidden-xs">GPL</td>
									<td><a href="#" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Editar"><i class="fa fa-edit"></i></a>
										<a href="#" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Deletar"><i class="fa fa-times fa fa-white"></i></a>
									</td>
								</tr>
								<tr>
									<td>Maxthon</td>
									<td class="hidden-xs">Maxthon International Limited</td>
									<td>Free</td>
									<td class="hidden-xs">Proprietary</td>
									<td><a href="#" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Editar"><i class="fa fa-edit"></i></a>
										<a href="#" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Deletar"><i class="fa fa-times fa fa-white"></i></a>
									</td>
								</tr>
								<tr>
									<td>Midori</td>
									<td class="hidden-xs">Christian Dywan, et al.</td>
									<td>Free</td>
									<td class="hidden-xs">LGPL</td>
									<td><a href="#" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Editar"><i class="fa fa-edit"></i></a>
										<a href="#" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Deletar"><i class="fa fa-times fa fa-white"></i></a>
									</td>
								</tr>
								<tr>
									<td>Mosaic</td>
									<td class="hidden-xs">Marc Andreessen and
										Eric Bina,
										NCSA</td>
									<td>non-commercial use</td>
									<td class="hidden-xs">Proprietary</td>
									<td><a href="#" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Editar"><i class="fa fa-edit"></i></a>
										<a href="#" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Deletar"><i class="fa fa-times fa fa-white"></i></a>
									</td>
								</tr>
								<tr>
									<td>Mozilla Application Suite</td>
									<td class="hidden-xs">Mozilla Foundation</td>
									<td>Free</td>
									<td class="hidden-xs">tri-license</td>
									<td><a href="#" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Editar"><i class="fa fa-edit"></i></a>
										<a href="#" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Deletar"><i class="fa fa-times fa fa-white"></i></a>
									</td>
								</tr>
								<tr>
									<td>Mozilla Firefox</td>
									<td class="hidden-xs">Mozilla Foundation</td>
									<td>Free</td>
									<td class="hidden-xs">MPL</td>
									<td><a href="#" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Editar"><i class="fa fa-edit"></i></a>
										<a href="#" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Deletar"><i class="fa fa-times fa fa-white"></i></a>
									</td>
								</tr>
								<tr>
									<td>Netscape (v.6-7) </td>
									<td class="hidden-xs">Netscape Communications Corporation,
										AOL</td>
									<td>Free</td>
									<td class="hidden-xs">Proprietary</td>
									<td><a href="#" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Editar"><i class="fa fa-edit"></i></a>
										<a href="#" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Deletar"><i class="fa fa-times fa fa-white"></i></a>
									</td>
								</tr>
								<tr>
									<td>Netscape Browser (v.8)[note 2]</td>
									<td class="hidden-xs">Mercurial Communications for
										AOL</td>
									<td>Free</td>
									<td class="hidden-xs">Proprietary</td>
									<td><a href="#" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Editar"><i class="fa fa-edit"></i></a>
										<a href="#" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Deletar"><i class="fa fa-times fa fa-white"></i></a>
									</td>
								</tr>
								<tr>
									<td>Netscape Communicator (v.4)[note 2]</td>
									<td class="hidden-xs">Netscape Communications</td>
									<td>Free</td>
									<td class="hidden-xs">Proprietary</td>
									<td><a href="#" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Editar"><i class="fa fa-edit"></i></a>
										<a href="#" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Deletar"><i class="fa fa-times fa fa-white"></i></a>
									</td>
								</tr>
								<tr>
									<td>Netscape Navigator (v.1-4)[note 2]</td>
									<td class="hidden-xs">Netscape Communications</td>
									<td>Free</td>
									<td class="hidden-xs">Proprietary</td>
									<td><a href="#" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Editar"><i class="fa fa-edit"></i></a>
										<a href="#" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Deletar"><i class="fa fa-times fa fa-white"></i></a>
									</td>
								</tr>
								<tr>
									<td>Netscape Navigator 9[note 2]</td>
									<td class="hidden-xs">Netscape Communications
										<br>
										(division of AOL)
									</td>
									<td>Free</td>
									<td class="hidden-xs">Proprietary</td>
									<td><a href="#" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Editar"><i class="fa fa-edit"></i></a>
										<a href="#" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Deletar"><i class="fa fa-times fa fa-white"></i></a>
									</td>
								</tr>
								<tr>
									<td>NetSurf</td>
									<td class="hidden-xs">The NetSurf Developers</td>
									<td>Free</td>
									<td class="hidden-xs">GPL</td>
									<td><a href="#" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Editar"><i class="fa fa-edit"></i></a>
										<a href="#" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Deletar"><i class="fa fa-times fa fa-white"></i></a>
									</td>
								</tr>
								<tr>
									<td>OmniWeb</td>
									<td class="hidden-xs">The Omni Group</td>
									<td>Free</td>
									<td class="hidden-xs">Proprietary</td>
									<td><a href="#" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Editar"><i class="fa fa-edit"></i></a>
										<a href="#" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Deletar"><i class="fa fa-times fa fa-white"></i></a>
									</td>
								</tr>
								<tr>
									<td>Opera</td>
									<td class="hidden-xs">Opera Software</td>
									<td>Free</td>
									<td class="hidden-xs">Proprietary</td>
									<td><a href="#" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Editar"><i class="fa fa-edit"></i></a>
										<a href="#" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Deletar"><i class="fa fa-times fa fa-white"></i></a>
									</td>
								</tr>
								<tr>
									<td>Opera Mobile</td>
									<td class="hidden-xs">Opera Software</td>
									<td>Free</td>
									<td class="hidden-xs">Proprietary</td>
									<td><a href="#" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Editar"><i class="fa fa-edit"></i></a>
										<a href="#" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Deletar"><i class="fa fa-times fa fa-white"></i></a>
									</td>
								</tr>
								<tr>
									<td>Origyn Web Browser</td>
									<td class="hidden-xs">Sand-labs</td>
									<td>Free</td>
									<td class="hidden-xs">BSD</td>
									<td><a href="#" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Editar"><i class="fa fa-edit"></i></a>
										<a href="#" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Deletar"><i class="fa fa-times fa fa-white"></i></a>
									</td>
								</tr>
								<tr>
									<td>QupZilla</td>
									<td class="hidden-xs">David Rosca</td>
									<td>Free</td>
									<td class="hidden-xs">GNU GPLv3</td>
									<td><a href="#" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Editar"><i class="fa fa-edit"></i></a>
										<a href="#" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Deletar"><i class="fa fa-times fa fa-white"></i></a>
									</td>
								</tr>
								<tr>
									<td>Safari</td>
									<td class="hidden-xs">Apple Inc.</td>
									<td>Free</td>
									<td class="hidden-xs">Proprietary</td>
									<td><a href="#" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Editar"><i class="fa fa-edit"></i></a>
										<a href="#" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Deletar"><i class="fa fa-times fa fa-white"></i></a>
									</td>
								</tr>
								<tr>
									<td>SeaMonkey</td>
									<td class="hidden-xs">SeaMonkey Council</td>
									<td>Free</td>
									<td class="hidden-xs">tri-license</td>
									<td><a href="#" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Editar"><i class="fa fa-edit"></i></a>
										<a href="#" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Deletar"><i class="fa fa-times fa fa-white"></i></a>
									</td>
								</tr>
								<tr>
									<td>Shiira</td>
									<td class="hidden-xs">Happy Macintosh Developing Team</td>
									<td>Free</td>
									<td class="hidden-xs">BSD</td>
									<td><a href="#" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Editar"><i class="fa fa-edit"></i></a>
										<a href="#" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Deletar"><i class="fa fa-times fa fa-white"></i></a>
									</td>
								</tr>
								<tr>
									<td>Sleipnir</td>
									<td class="hidden-xs">Fenrir Inc.</td>
									<td>Free</td>
									<td class="hidden-xs">Proprietary</td>
									<td><a href="#" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Editar"><i class="fa fa-edit"></i></a>
										<a href="#" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Deletar"><i class="fa fa-times fa fa-white"></i></a>
									</td>
								</tr>
								<tr>
									<td>Torch Browser</td>
									<td class="hidden-xs">Torch Media</td>
									<td>Free</td>
									<td class="hidden-xs">Proprietary</td>
									<td><a href="#" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Editar"><i class="fa fa-edit"></i></a>
										<a href="#" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Deletar"><i class="fa fa-times fa fa-white"></i></a>
									</td>
								</tr>
								<tr>
									<td>Uzbl</td>
									<td class="hidden-xs">Dieter Plaetinck</td>
									<td>Free</td>
									<td class="hidden-xs">GNU GPLv3</td>
									<td><a href="#" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Editar"><i class="fa fa-edit"></i></a>
										<a href="#" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Deletar"><i class="fa fa-times fa fa-white"></i></a>
									</td>
								</tr>
								<tr>
									<td>WorldWideWeb (Later renamed Nexus)</td>
									<td class="hidden-xs">Tim Berners-Lee</td>
									<td>Free</td>
									<td class="hidden-xs">Public domain</td>
									<td><a href="#" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Editar"><i class="fa fa-edit"></i></a>
										<a href="#" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Deletar"><i class="fa fa-times fa fa-white"></i></a>
									</td>
								</tr>
								<tr>
									<td>w3m</td>
									<td class="hidden-xs">Akinori Ito</td>
									<td>Free</td>
									<td class="hidden-xs">MIT</td>
									<td><a href="#" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Editar"><i class="fa fa-edit"></i></a>
										<a href="#" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Deletar"><i class="fa fa-times fa fa-white"></i></a>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<!-- end: DYNAMIC TABLE PANEL -->
				<!-- NOVAS TABELAS -->
			</div>
		</div>
		<!-- end: PAGE CONTENT-->
	</div>
</div>
<!-- end: PAGE -->

<?php
include 'footer.php';
?>