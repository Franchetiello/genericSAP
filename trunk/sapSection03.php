<?php 
	session_start();
	
	//$aTitoliStudio = new array
	
	
	if(isset($_POST['slcRegioneResidenza'])){$_SESSION['regioneResidenza']=$_POST['slcRegioneResidenza']; }
	if(isset($_POST['slcProvinciaResidenza'])){$_SESSION['provinciaResidenza']=$_POST['slcProvinciaResidenza']; }
	if(isset($_POST['slcComuneResidenza'])){$_SESSION['comuneResidenza']=$_POST['slcComuneResidenza']; }
	if(isset($_POST['capResidenza'])){$_SESSION['capResidenza']=$_POST['capResidenza']; }
	if(isset($_POST['indirizzoResidenza'])){$_SESSION['indirizzoResidenza']=$_POST['indirizzoResidenza']; }
	
	if(isset($_POST['slcRegioneDomicilio'])){$_SESSION['regioneDomicilio']=$_POST['slcRegioneDomicilio']; }
	if(isset($_POST['slcProvinciaDomicilio'])){$_SESSION['provinciaDomicilio']=$_POST['slcProvinciaDomicilio']; }
	if(isset($_POST['slcComuneDomicilio'])){$_SESSION['comuneDomicilio']=$_POST['slcComuneDomicilio']; }
	if(isset($_POST['capDomicilio'])){$_SESSION['capDomicilio']=$_POST['capDomicilio']; }
	if(isset($_POST['indirizzoDomicilio'])){$_SESSION['indirizzoDomicilio']=$_POST['indirizzoDomicilio']; }
	
	if(isset($_POST['numeroFisso'])){ $_SESSION['numeroFisso']=$_POST['numeroFisso']; }
	if(isset($_POST['numeroMobile'])){$_SESSION['numeroMobile']=$_POST['numeroMobile']; }
	if(isset($_POST['email'])){$_SESSION['email']=$_POST['email']; }
	
	require_once('functions/pageSettings.php');
	require_once('functions/menu.php');
	require_once('functions/debug.php');
	
	dPrint($_SESSION);
	
	$menuIndex = 3;
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
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" class="form-horizontal" method="post">
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
												<?php
													$controlId = "slcLivelliStudio";
													$targetId ="slcCorsiStudio"; 
													include('functions/getLivelliStudio.php'); 
												?>
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
													class="form-control" value="titolo di studio conseguito" onchange="javascript:SetCompletedChoice('cbxConseguito');">
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
													<input type="text" class="form-control" id="txtUltimoAnnoFrequentato" name="txtUltimoAnnoFrequentato" />
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
								<table id="tblLingueConosciute" name="tblLingueConosciute" class="col-lg-12">
									<!-- inserimento dinamico delle righe -->	
								</table>
								<a class="btn default green pull-right" data-toggle="modal" href="#LinguaConosciuta"><i class="glyphicon glyphicon-plus"></i>&nbsp;aggiungi lingue conosciute</a>
							</div>
							<div class="modal fade" id="LinguaConosciuta" tabindex="-1" role="basic" data-backdrop="static" data-keyboard="false" aria-hidden="true" style="display: none;">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
											<h4 class="modal-title">Conoscenza Lingua</h4>
										</div>
										<div class="modal-body">
											<div class="clearfix">
												<span class="col-lg-3 control-label">lingua</span>
												<div id="lingua" class="col-lg-9 field"> 									
													<?php include('functions/getLingue.php'); ?>
												</div>
												<div class="break"></div>
												<span class="col-lg-3 col-lg-offset-1 control-label">lettura</span>
												<div id="lettura" class="col-lg-8 field"> 									
													<?php
														$controlId = "slcLivelloConoscenzaLettura"; 
														include('functions/getLivelliConoscenzaLingua.php'); 
													?>
												</div>
												<div class="break"></div>
												<span class="col-lg-3 col-lg-offset-1 control-label">scrittura</span>
												<div id="scrittura" class="col-lg-8 field"> 									
													<?php
														$controlId = "slcLivelloConoscenzaScrittura"; 
														include('functions/getLivelliConoscenzaLingua.php'); 
													?>
												</div>
												<div class="break"></div>
												<span class="col-lg-3 col-lg-offset-1 control-label">conversazione</span>
												<div id="conversazione" class="col-lg-8 field"> 									
													<?php
														$controlId = "slcLivelloConoscenzaConversazione"; 
														include('functions/getLivelliConoscenzaLingua.php'); 
													?>
												</div>
												<div class="break"></div>
											</div>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn default" data-dismiss="modal">annulla</button>
											<button type="button" class="btn blue" data-dismiss="modal" onClick="AggiungiLingueConosciute('tblLingueConosciute')"><i class="glyphicon glyphicon-plus"></i>&nbsp;aggiungi..</button>
										</div>
									</div>
									<!-- /.modal-content -->
								</div>
								<!-- /.modal-dialog -->
							</div>	
						</div>
						<div class="portlet blue box">
							<div class="portlet-title">
								<span class="caption">Conoscenze informatiche</span>
							</div>
							<div class="portlet-body clearfix">
								<table id="tblConoscenzeInformatiche" name="tblConoscenzeInformatiche" class="col-lg-12">
									<!-- inserimento dinamico delle righe -->	
								</table>
								<a class="btn default green pull-right" data-toggle="modal" href="#ConoscenzaInformatica"><i class="glyphicon glyphicon-plus"></i>&nbsp;aggiungi conoscenze informatiche</a>
							</div>
							<div class="modal fade" id="ConoscenzaInformatica" tabindex="-1" role="basic" data-backdrop="static" data-keyboard="false" aria-hidden="true" style="display: none;">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
											<h4 class="modal-title">Conoscenza Informatica</h4>
										</div>
										<div class="modal-body">
											<div class="clearfix">
												<span class="col-lg-3 control-label">conoscenza informatica</span>
												<div id="lingua" class="col-lg-9 field"> 						
													<?php
														$controlId = "slcConoscenzeInformatiche"; 
														include('functions/getConoscenzeInformatiche.php'); 
													?>			
												</div>
												<div class="break"></div>
												<span class="col-lg-3 control-label">grado conoscenza</span>
												<div id="lettura" class="col-lg-9 field"> 									
													<?php
														$controlId = "slcLivelloConoscenzaInformatica"; 
														include('functions/getLivelliConoscenzeInformatiche.php'); 
													?>
												</div>
												<div class="break"></div>
												<span class="col-lg-3 control-label">eventuali specifiche</span>
												<div class="col-lg-9"> 									
													<textarea class="form-control" rows="6" id="txtEventualiSpecifiche" name="txtEventualiSpecifiche"></textarea>
													<div class="break"></div> 
												</div>
												<div class="break"></div>
											</div>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn default" data-dismiss="modal">annulla</button>
											<button type="button" class="btn blue" data-dismiss="modal" onClick="AggiungiConoscenzeInformatiche('tblConoscenzeInformatiche')"><i class="glyphicon glyphicon-plus"></i>&nbsp;aggiungi..</button>
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
</html>
