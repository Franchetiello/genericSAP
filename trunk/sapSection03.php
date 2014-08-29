<?php 
	session_start();
	
	require_once 'functions/pageSettings.php';
	require_once 'functions/menu.php';
	
	if (isset($menu)) {
		if (isset($_POST['submit'])) {
			switch ($_POST['submit']) {
				case 'forward' :
					header("Location: sapSection04.php");
					break;
				case "backward" :
					header("Location: sapSection02.php");
					break;
				default :
					break;
			}
		}
	} 
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
	headDeclaration("Scheda candidatura - Titoli di studio");
?>

<SCRIPT language="javascript">
        //function addRow(tableID) {
				// function aggiungiTitoloStudio(tableID) {
            // var table = document.getElementById(tableID);
// 
            // var rowCount = table.rows.length;
            // var row = table.insertRow(rowCount);
// 
            // var cell1 = row.insertCell(0);
//             
//             
         // }

        function deleteRow(tableID) {
            try {
            var table = document.getElementById(tableID);
            var rowCount = table.rows.length;

            for(var i=0; i<rowCount; i++) {
                var row = table.rows[i];
                var chkbox = row.cells[0].childNodes[0];
                if(null != chkbox && true == chkbox.checked) {
                    table.deleteRow(i);
                    rowCount--;
                    i--;
                }


            }
            }catch(e) {
                alert(e);
            }
        }

    </SCRIPT>
    
    
</head>
<body>
	<form action="sapSection03.php" class="form-horizontal" method="post">
		<div class="container">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2">
					<?php
					DisplayMenu ( "menuSection03" );
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
								<span class="caption">Titoli di studio</span>
							</div>
							<div class="portlet-body clearfix">
								<table id="tblTitoliStudio" name="tblTitoliStudio" class="col-lg-12">
									<!-- inserimento dinamico delle righe -->	
								</table>
								<a class="btn default green pull-right" data-toggle="modal" href="#TitoloStudio"><i class="glyphicon glyphicon-plus"></i>&nbsp;aggiungi titolo di studio</a>
							</div>
							<div class="modal fade" id="TitoloStudio" tabindex="-1" role="basic" data-backdrop="static" data-keyboard="false" aria-hidden="true" style="display: none;">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
											<h4 class="modal-title">Titolo di studio</h4>
										</div>
										<div class="modal-body">
											<div class="clearfix">
												<span class="col-lg-3 control-label">livello</span>
												<div id="LivelloStudio" class="col-lg-9 field">
													<?php include('functions/getLivelliStudio.php'); ?>
												</div>
												<div class="break"></div>
												<span class="col-lg-3 control-label">corso di studio</span>
												<div id="CorsoStudio" class="col-lg-9 field">
													<select class="form-control"></select>
												</div>
												<div class="break"></div>
												<span class="col-lg-3 control-label">descrizione</span>
												<div class="col-lg-9"> 									
													<textarea class="form-control" rows="3" id="txtDescrizioneCorso" name="txtDescrizioneCorso"></textarea>
													<div class="break"></div> 
												</div>
											</div>
											<div class="separator"></div>
											<div class="clearfix">
												<span class="col-lg-3 control-label">frequentato in</span>
												<div class="col-lg-9 field">
													<select id="slcStatoStudio" name="slcStatoStudio" class="form-control"
													onchange="javascript:GetRegionList03('regioneStudio','getRegioniPerNazione03',(this).value, '')">
														<option value="">selezionare uno stato..</option>
														<?php echo $htmlNationResult; ?>
													</select>
												</div>
												<div class="break"></div>
												<span id="spanRegioneStudio" class="col-lg-3 control-label">regione</span>
												<div id="regioneStudio" class="col-lg-9 field">
													<select class="form-control"></select>
												</div>
												<div class="break"></div>
												<span  id="spanProvinciaStudio" class="col-lg-3 control-label">provincia</span>
												<div id="provinciaStudio" class="col-lg-9 field">
													<select class="form-control"></select>
												</div>
												<div class="break"></div>
												<span id="spanComuneStudio" class="col-lg-3 control-label">comune</span>
												<div id="comuneStudio" class="col-lg-9 field">
													<select class="form-control"></select>
												</div>
												<div class="break"></div>
												<span id="spanRiconosciutoInItalia" class="col-lg-3 control-label">riconosciuto in italia</span>
												<div id="riconosciutoInItalia" class="col-lg-9 field">
													<input type="radio" name="rdoRiconosciutoInItalia" class="radio radio-inline" value="SI"/>SI&nbsp;
        									<input type="radio" name="rdoRiconosciutoInItalia" class="radio radio-inline" value="NO"/>NO
												</div>
												<div class="break"></div>
											</div>
											<div class="clearfix">
												<div class="separator"></div>
												<span id="spanConseguito" class="col-lg-3 control-label">conseguito</span>
												<div id="conseguito" class="col-lg-9 field">
													<input type="checkbox" id="cbxConseguito"
													class="form-control" value="titolo di studio conseguito" onchange="javascript:SetCompleyedChoice('cbxConseguito');">
												</div>
												<div class="break"></div>
												<span id="spanAnnoConseguimento" class="col-lg-4 control-label">anno di conseguimento</span>
												<div id="annoConseguimento" class="col-lg-2 field"> 									
													<input type="text" class="form-control" id="txtAnnoConseguimento" name="txtAnnoConseguimento" />
												</div>
												<span id="spanVotoConseguito" class="col-lg-4 control-label">voto conseguito</span>
												<div id="votoConseguito" class="col-lg-2 field"> 									
													<input type="text" class="form-control" id="txtVotoConseguito" name="txtVotoConseguito" />
												</div>
												<div class="break"></div>
												<span id="spanUltimoAnnoFrequentato" class="col-lg-4 control-label">ultimo anno frequentato</span>
												<div id="ultimoAnnoFrequentato" class="col-lg-2 field"> 									
													<input type="text" class="form-control" id="txtUltimoAnnoFrequentato" name="txtUltimoAnnoFrequentato"> />
												</div>
												<span id="spanAnnoFrequenzaInCorso" class="col-lg-4 control-label">anno di frequenza (in corso)</span>
												<div id="annoFrequenzaInCorso" class="col-lg-2 field"> 									
													<input type="text" class="form-control" id="txtAnnoFrequenzaInCorso" name="txtAnnoFrequenzaInCorso" />
												</div>
												<div class="break"></div>
											</div>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn default" data-dismiss="modal">annulla</button>
											<button type="button" class="btn blue" data-dismiss="modal" onClick="AggiungiTitoloStudio('tblTitoliStudio')"><i class="glyphicon glyphicon-plus"></i>&nbsp;aggiungi..</button>
										</div>
									</div>
									<!-- /.modal-content -->
								</div>
								<!-- /.modal-dialog -->
							</div>
						</div>
						<div class="portlet blue box">
							<div class="portlet-title">
								<span class="caption">Formazione Professionale</span>
							</div>
							<div class="portlet-body clearfix">
								<table id="tblFormazioniProfessionali" name="tblFormazioniProfessionali" class="col-lg-12">
									<!-- inserimento dinamico delle righe -->	
								</table>
								<a class="btn default green pull-right" data-toggle="modal" href="#FormazioneProfessionale"><i class="glyphicon glyphicon-plus"></i>&nbsp;aggiungi formazioni professionali</a>
							</div>
							<div class="modal fade" id="FormazioneProfessionale" tabindex="-1" role="basic" data-backdrop="static" data-keyboard="false" aria-hidden="true" style="display: none;">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
											<h4 class="modal-title">Formazione Professionale</h4>
										</div>
										<div class="modal-body">
											<div class="clearfix">
												<span class="col-lg-3 control-label">titolo del corso</span>
												<div id="titoloFormazione" class="col-lg-9 field"> 									
													<input type="text" class="form-control" id="txtTitoloFormazione" name="txtTitoloFormazione" />
												</div>
												<div class="break"></div>
												<span class="col-lg-3 control-label">ente erogatore</span>
												<div id="enteErogatore" class="col-lg-9 field"> 									
													<input type="text" class="form-control" id="txtEnteErogatore" name="txtEnteErogatore" />
												</div>
												<div class="break"></div>
												<span class="col-lg-3 control-label">sede</span>
												<div id="sedeFormazione" class="col-lg-9 field"> 									
													<?php include('functions/getSediFormazione.php'); ?>
												</div>
												<div class="break"></div>
												<span class="col-lg-3 control-label">durata</span>
												<div id="durataFormazione" class="col-lg-3 field"> 									
													<input type="text" class="form-control" id="txtDurataFormazione" name="txtDurataFormazione" />
												</div>
												<span class="col-lg-3 control-label">in</span>
												<div id="misuraDurataFormazione" name="misuraDurataFormazione" class="col-lg-3 field"> 
													<select id="slcMisuraDurataFormazione" name="slcMisuraDurataFormazione" class="form-control">
														<option value="">selezionare la misura della durata..</option>
														<option value="O" >ore</option>
														<option value="G" >giorni</option>
														<option value="M" >mesi</option>
													</select>									
												</div>
												<div class="break"></div>
												<span class="col-lg-3 control-label">certificazioni e attestazioni</span>
												<div id="attestazioni" class="col-lg-9 field"> 									
													<?php include('functions/getAttestazioni.php'); ?>
												</div>
												<div class="break"></div>
												<span id="spanStage" class="col-lg-3 control-label">stage</span>
												<div id="stage" class="col-lg-9 field">
													<input type="checkbox" id="cbxStage"
													class="form-control" value="stage">
												</div>
												<div class="break"></div>
												<span class="col-lg-3 control-label">azienda dello stage</span>
												<div id="aziendaStage" class="col-lg-9 field"> 									
													<input type="text" class="form-control" id="txtAziendaStage" name="txtAziendaStage" />
												</div>
												<div class="break"></div>
											</div>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn default" data-dismiss="modal">annulla</button>
											<button type="button" class="btn blue" data-dismiss="modal" onClick="AggiungiFormazioneProfessionale('tblFormazioniProfessionali')"><i class="glyphicon glyphicon-plus"></i>&nbsp;aggiungi..</button>
										</div>
									</div>
									<!-- /.modal-content -->
								</div>
								<!-- /.modal-dialog -->
							</div>
						</div>
						<div class="portlet blue box">
							<div class="portlet-title">
								<span class="caption">Lingue straniere conosciute</span>
							</div>
							<div class="portlet-body clearfix">
								<span id="spanRegioneResidenza" class="col-lg-3 control-label">regione</span>
								<div id="regioneResidenza" class="col-lg-5 field">
									<?php
									$targetId = "provinciaResidenza";
									$controlId = "slcRegioneResidenza";
									$childId = "p=comuneResidenza";
									include 'functions/getRegioni.php';
									?>
								</div>
								<div class="break"></div>
								<span id="spanProvinciaResidenza"
									class="col-lg-3 control-label">provincia</span>
								<div id="provinciaResidenza" class="col-lg-5 field">
									<select class="form-control">
									</select>
								</div>
								<div class="break"></div>
								<span id="spanComuneResidenza" class="col-lg-3 control-label">comune</span>
								<div id="comuneResidenza" class="col-lg-5 field">
									<select class="form-control">
									</select>
								</div>
								<div class="break"></div>
								<span id="spanCapResidenza" class="col-lg-3 control-label">c.a.p.</span>
								<div class="col-lg-2 field">
									<input type="text" id="capResidenza" class="form-control"
										value="">
								</div>
								<div class="break"></div>
								<span class="col-lg-3 control-label">indirizzo</span>
								<div class="col-lg-9 field">
									<input type="text" id="indirizzoResidenza"
										class="form-control" value="">
								</div>
								<div class="break"></div>
							</div>
						</div>
						<div class="portlet blue box">
							<div class="portlet-title">
								<span class="caption">Conoscenze informatiche</span>
							</div>
							<div class="portlet-body">
								<span id="spanRegioneResidenza" class="col-lg-3 control-label">regione</span>
								<div id="regioneResidenza" class="col-lg-5 field">
									<?php
									$targetId = "provinciaResidenza";
									$controlId = "slcRegioneResidenza";
									$childId = "p=comuneResidenza";
									include 'functions/getRegioni.php';
									?>
								</div>
								<div class="break"></div>
								<span id="spanProvinciaResidenza"
									class="col-lg-3 control-label">provincia</span>
								<div id="provinciaResidenza" class="col-lg-5 field">
									<select class="form-control">
									</select>
								</div>
								<div class="break"></div>
								<span id="spanComuneResidenza" class="col-lg-3 control-label">comune</span>
								<div id="comuneResidenza" class="col-lg-5 field">
									<select class="form-control">
									</select>
								</div>
								<div class="break"></div>
								<span id="spanCapResidenza" class="col-lg-3 control-label">c.a.p.</span>
								<div class="col-lg-2 field">
									<input type="text" id="capResidenza" class="form-control"
										value="">
								</div>
								<div class="break"></div>
								<span class="col-lg-3 control-label">indirizzo</span>
								<div class="col-lg-9 field">
									<input type="text" id="indirizzoResidenza"
										class="form-control" value="">
								</div>
								<div class="break"></div>
							</div>
						</div>
					
						<!--
						<INPUT type="button" value="Add Row" onClick="addRow('dataTable')" />
						<INPUT type="button" value="Delete Row" onClick="deleteRow('dataTable')" />
						
						<TABLE id="dataTable" width="350px" border="1">
							<TR>
								<TD><INPUT type="checkbox" name="chkbox[]"/></TD>
								<TD> 1 </TD>
								<TD> <INPUT type="text" name="txtbox[]"/> </TD>
							</TR>
						</TABLE>
						-->
						<!-- 
						
							INSERIRE QUI IL FORM
							
						 -->					
					</div>
					<div class="col-lg-12 field">
						<button id="submit" name="submit" value="backward" class="btn default green"><i class="glyphicon glyphicon-step-backward"></i>&nbsp;indietro..</button>
						<button id="submit" name="submit" value="forward" class="btn default green pull-right">continua..&nbsp;<i class="glyphicon glyphicon-step-forward"></i></button>
					</div>
				</div>
			</div>
		</div>
	</form>
</body>
<?php
	jsSection(); 
?>
<script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
<script src="content/js/jsListFunctions.js" type="text/javascript"></script>
</html>
