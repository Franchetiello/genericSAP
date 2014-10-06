<?php 
	session_start();
	
	require_once 'functions/pageSettings.php';
	require_once 'functions/menu.php';
	
	$menuIndex = 5;
	include('functions/navigation.php');
?>
<!DOCTYPE html>
<?php 
	htmlDeclaration();
?>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Insert title here</title>
<?php 
	headDeclaration("Scheda candidatura - Esperienze");
?>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" class="form-horizontal" method="post">
		<div class="container">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2">
					<?php
					DisplayMenu ( "menuSection05" );
					include ('functions/getNazioni.php');
					?>
				</div>
				</div>
				<div class="verticaplGap"></div>
				<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="form-group">
						<div class="portlet blue box">
							<div class="portlet-title">
								<span class="caption">Esperienze Lavorative</span>
							</div>
							<div class="portlet-body clearfix">
								<table id="tblEsperienzeLavorative" name="tblEsperienzeLavorative" class="col-lg-12">
									<!-- inserimento dinamico delle righe -->	
								</table>
								<a class="btn default green pull-right" data-toggle="modal" href="#EsperienzaLavorativa"><i class="glyphicon glyphicon-plus"></i>&nbsp;aggiungi esperienza lavorativa..</a>
							</div>
							<div class="modal fade" id="EsperienzaLavorativa" tabindex="-1" role="basic" data-backdrop="static" data-keyboard="false" aria-hidden="true" style="display: none;">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
											<h4 class="modal-title">Esperienza Lavorativa</h4>
										</div>
										<div class="modal-body">
											<div class="clearfix">
												<div class="col-lg-12 separator">
													<h5 class="bold">Azienda</h5>	
												</div>
												<span class="col-lg-3 control-label">denominazione</span>
												<div class="col-lg-9 field"> 									
													<input type="text" class="form-control" id="txtDenominazioneAzienda" name="txtDenominazioneAzienda" />
												</div>
												<div class="break"></div>
												<span class="col-lg-3 control-label">cod. fiscale/p. IVA</span>
												<div class="col-lg-3 field"> 									
													<input type="text" class="form-control" id="txtCodiceFiscaleAzienda" name="txtCodiceFiscaleAzienda" />
												</div>
												<div class="break"></div>
												<span class="col-lg-3 control-label">indirizzo</span>
												<div class="col-lg-9 field"> 									
													<input type="text" class="form-control" id="txtIndirizzoAzienda" name="txtIndirizzoAzienda" />
												</div>
												<div class="break"></div>
												
												<span class="col-lg-3 control-label">settore attivit&agrave;</span>
												<div class="col-lg-9 field"> 									
													<?php
														$controlId = "slcAtecoAzienda"; 
														include('functions/getAteco.php'); 
													?>
												</div>
												<div class="break"></div>
												<div class="col-lg-12 separator">
													<h5 class="bold">Azienda utilizzatrice</h5>	
												</div>
												<span class="col-lg-3 control-label">denominazione</span>
												<div class="col-lg-9 field"> 									
													<input type="text" class="form-control" id="txtDenominazioneAziendaUtilizzatrice" name="txtDenominazioneAziendaUtilizzatrice" />
												</div>
												<div class="break"></div>
												<span class="col-lg-3 control-label">cod. fiscale/p. IVA</span>
												<div class="col-lg-3 field"> 									
													<input type="text" class="form-control" id="txtCodiceFiscaleAziendaUtilizzatrice" name="txtCodiceFiscaleAziendaUtilizzatrice" />
												</div>
												<div class="break"></div>
												<span class="col-lg-3 control-label">indirizzo</span>
												<div class="col-lg-9 field"> 									
													<input type="text" class="form-control" id="txtIndirizzoAziendaUtilizzatrice" name="txtIndirizzoAziendaUtilizzatrice" />
												</div>
												<div class="break"></div>
												<span class="col-lg-3 control-label">settore attivit&agrave;</span>
												<div class="col-lg-9 field"> 									
													<?php
														$controlId = "slcAtecoAziendaUtilizzatrice"; 
														include('functions/getAteco.php'); 
													?>
												</div>
												<div class="break"></div>
												<div class="col-lg-12 separator">
													<h5 class="bold">Luogo di lavoro</h5>	
												</div>
												<span class="col-lg-3 control-label">nazione</span>
												<div class="col-lg-9 field">
													<select id="slcStatoLuogoLavoro" name="slcStatoLuogoLavoro" class="form-control"
													onchange="javascript:GetRegionList05('regioneLuogoLavoro','getRegioniPerNazione05',(this).value, '')">
														<option value="">selezionare uno stato..</option>
														<?php echo $htmlNationResult; ?>
													</select>
												</div>
												<div class="break"></div>
												<span id="spanRegioneLuogoLavoro" class="col-lg-3 control-label">regione</span>
												<div id="regioneLuogoLavoro" class="col-lg-9 field">
													<select class="form-control"></select>
												</div>
												<div class="break"></div>
												<span  id="spanProvinciaLuogoLavoro" class="col-lg-3 control-label">provincia</span>
												<div id="provinciaLuogoLavoro" class="col-lg-9 field">
													<select class="form-control"></select>
												</div>
												<div class="break"></div>
												<span id="spanComuneLuogoLavoro" class="col-lg-3 control-label">comune</span>
												<div id="comuneLuogoLavoro" class="col-lg-9 field">
													<select class="form-control"></select>
												</div>
												<div class="break"></div>
												<span class="col-lg-3 control-label">indirizzo</span>
												<div class="col-lg-9 field">
													<input type="text" id="indirizzoLuogoLavoro"
														class="form-control" value="">
												</div>
												<div class="break"></div>
												<div class="col-lg-12 separator">
													<h5 class="bold">Contratto</h5>	
												</div>
												<span class="col-lg-3 control-label">data inizio</span>
												<!-- <div class="col-lg-2 field">
													<div class="input-group input-medium date date-picker">
														<input type="text" id="dataNascita" name="dataNascita" data-date-format="dd-mm-yyyy" class="form-control" readonly="">
														<span class="input-group-btn">
															<button id="btnDataNascita" class="btn default" type="button">
																<i class="fa fa-calendar"></i>
															</button> </span>
													</div>
												</div> -->
												<div class="col-lg-9">
													<div class="input-group input-medium date date-picker" data-date-format="dd-mm-yyyy" data-date-start-date="+0d">
														<input type="text" name="dataInizio" id="dataInizio" value="01-01-2010" class="form-control" readonly="">
														<span class="input-group-btn">
														<button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
														</span>
													</div>
												</div>
												<div class="break"></div>
												<span class="col-lg-3 control-label">data fine</span>
												<!-- <div class="col-lg-2 field">
													<div class="input-group input-medium date date-picker">
														<input type="text" id="dataNascita" name="dataNascita" data-date-format="dd-mm-yyyy" class="form-control" readonly="">
														<span class="input-group-btn">
															<button id="btnDataNascita" class="btn default" type="button">
																<i class="fa fa-calendar"></i>
															</button> </span>
													</div>
												</div> -->
												<div class="col-lg-9">
													<div class="input-group input-medium date date-picker" data-date-format="dd-mm-yyyy" data-date-start-date="+0d">
														<input type="text" name="dataFine" id="dataFine" value="31-12-2010" class="form-control" readonly="">
														<span class="input-group-btn">
														<button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
														</span>
													</div>
												</div>
												<div class="break"></div>
												<span class="col-lg-3 control-label">qualifica svolta</span>
												<div class="col-lg-9 field"> 									
													<?php
														$controlId = "slcQualificheProfessionali"; 
														include('functions/getQualificheProfessionali.php'); 
													?>
												</div>
												<div class="break"></div>
												<span class="col-lg-3 control-label">mansioni e responsabilit&agrave;</span>
												<div class="col-lg-9"> 									
													<textarea class="form-control" rows="3" id="txtMansioniResponsabilita" name="txtMansioniResponsabilita"></textarea>
													<div class="break"></div> 
												</div>
												<div class="break"></div>
												<span class="col-lg-3 control-label">tipo di contratto</span>
												<div class="col-lg-9 field"> 									
													<?php
														$controlId = "slcTipoContratto"; 
														include('functions/getTipiContratti.php'); 
													?>
												</div>
												<div class="break"></div>
												<span class="col-lg-3 control-label">categoria di inquadramento</span>
												<div class="col-lg-9 field"> 									
													<?php
														$controlId = "slcCategoriaInquadramento"; 
														include('functions/getCategorieInquadramento.php'); 
													?>
												</div>
												<div class="break"></div>
												<span class="col-lg-3 control-label">&nbsp;</span>
												<div id="assunzioneL_68_99" class="col-lg-1 field">
													<input type="checkbox" id="cbxAssunzioneL_68_99"
													class="form-control">
												</div>
												<span class="col-lg-8 checkboxLabel">assunzione effettuata ai sensi della L.68/99</span>
												<div class="break"></div>
												<span class="col-lg-3 control-label">&nbsp;</span>
												<div id="lavoratoreInMobilita" class="col-lg-1 field">
													<input type="checkbox" id="cbxLavoratoreInMobilita"
													class="form-control">
												</div>
												<span class="col-lg-8 checkboxLabel">lavoratore in mobilit&agrave;</span>
												<div class="break"></div>
												<span class="col-lg-3 control-label">&nbsp;</span>
												<div id="lavoratoreStagionale" class="col-lg-1 field">
													<input type="checkbox" id="cbxLavoratoreStagionale"
													class="form-control">
												</div>
												<span class="col-lg-8 checkboxLabel">lavoro stagionale</span>
												<div class="break"></div>
												<span class="col-lg-3 control-label">&nbsp;</span>
												<div id="lavoroInAgricoltura" class="col-lg-1 field">
													<input type="checkbox" id="cbxLavoroInAgricoltura"
													class="form-control">
												</div>
												<span class="col-lg-8 checkboxLabel">lavoro in agricoltura</span>
												<div class="break"></div>
												<span class="col-lg-3 control-label">modalit&agrave; di lavoro</span>
												<div class="col-lg-9 field"> 									
													<?php
														$controlId = "slcModalitaLavoro"; 
														include('functions/getModalitaLavoro.php'); 
													?>
												</div>
												<div class="break"></div>
											</div>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn default" data-dismiss="modal">annulla</button>
											<button type="button" class="btn blue" data-dismiss="modal" onClick="AggiungiEsperienzaLavorativa('tblEsperienzeLavorative')"><i class="glyphicon glyphicon-plus"></i>&nbsp;aggiungi..</button>
										</div>
									</div>
									<!-- /.modal-content -->
								</div>
								<!-- /.modal-dialog -->
							</div>
						</div>					
					</div>
					<?php
						DisplayNavBar($menuIndex, Count($menu) - 1, TRUE);
					?>
				</div>
			</div>
		</div>
	</form>
</body>
<?php
	jsSection(); 
?>
<script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
</html>
