<?php
session_start();
//echo (isset($_POST['nome'])?$_POST['nome']:"niente");

// echo "START";
// foreach ($_POST as $key => $value) {
	// echo htmlspecialchars("$key: $value") . '; ';
// }
// echo "END";
	
if(isset($_POST['nome'])){ $_SESSION['nome']=$_POST['nome']; }
if(isset($_POST['cognome'])){$_SESSION['cognome']=$_POST['cognome']; }
if(isset($_POST['codiceFiscale'])){$_SESSION['codiceFiscale']=$_POST['codiceFiscale']; }
if(isset($_POST['genere'])){$_SESSION['genere']=$_POST['genere']; }
if(isset($_POST['dataNascita'])){$_SESSION['dataNascita']=$_POST['dataNascita']; }
if(isset($_POST['statoNascita'])){$_SESSION['statoNascita']=$_POST['statoNascita']; }
if(isset($_POST['slcRegioneNascita'])){$_SESSION['regioneNascita']=$_POST['slcRegioneNascita']; }
if(isset($_POST['slcProvinciaNascita'])){$_SESSION['provinciaNascita']=$_POST['slcProvinciaNascita']; }
if(isset($_POST['slcComuneNascita'])){$_SESSION['comuneNascita']=$_POST['slcComuneNascita']; }
if(isset($_POST['cittadinanza'])){$_SESSION['cittadinanza']=$_POST['cittadinanza']; }
if(isset($_POST['autorizzazioneDatiPersonali'])){$_SESSION['autorizzazioneDatiPersonali']=$_POST['autorizzazioneDatiPersonali']; }

require_once('functions/pageSettings.php');
require_once('functions/menu.php');
require_once('functions/debug.php');
//	-------------------------------------------------------
//	Funzioni di navigazione
//	-------------------------------------------------------

dPrint($_SESSION);

if (isset($menu)) {
	if (isset($_POST['submit'])) {
		switch ($_POST['submit']) {
			case 'forward' :
				header("Location: sapSection02.php");
				break;
			case "backward" :
				header("Location: index.php");
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
<head>
	<?php
	headDeclaration("Scheda Candidato - Dati Anagrafici");
	?>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" class="form-horizontal" method="post">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<?php
					DisplayMenu("menuSection01");
					
					$cittadinanzaSelezionata = (isset($_SESSION['cittadinanza']) ? $_SESSION['cittadinanza'] : "");
					$nazioneSelezionata  = (isset($_SESSION['statoNascita']) ? $_SESSION['statoNascita'] : "");
					
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
								<span class="caption">dati anagrafici</span>
							</div>
							<div class="portlet-body">
								<span class="col-lg-3 control-label">nome</span>
								<div class="col-lg-9 field">
									<input type="text" id="nome" name="nome" class="form-control" value="<?php echo (isset($_SESSION['nome']) ? $_SESSION['nome'] : ""); ?>">
								</div>
								<span class="col-lg-3 control-label">cognome</span>
								<div class="col-lg-9 field">
									<input type="text" id="cognome" name="cognome" class="form-control" value="<?php echo (isset($_SESSION['cognome']) ? $_SESSION['cognome'] : ""); ?>">
								</div>
								<div class="break"></div>
								<div class="col-lg-12 separator">
									&nbsp;
								</div>
								<span class="col-lg-3 control-label">codice fiscale</span>
								<div class="col-lg-3 field">
									<input type="text" id="codiceFiscale" name="codiceFiscale" class="form-control" value="<?php echo (isset($_SESSION['codiceFiscale']) ? $_SESSION['codiceFiscale'] : ""); ?>">
								</div>
								<div class="break"></div>
								<span class="col-lg-3 control-label">genere</span>
								<div class="col-lg-4 field">
									<?php $genereSelezionato = (isset($_SESSION['genere'])? $_SESSION['genere'] : ""); ?>
									<select id="genere" name="genere" class="form-control">
										<option value>selezionare un genere..</option>
										<option value="F" <?php echo ($genereSelezionato == "F"? "selected": "") ?>>femminile</option>
										<option value="M" <?php echo ($genereSelezionato == "M"? "selected": "") ?>>maschile</option>
									</select>
								</div>
								<div class="break"></div>
								<span class="col-lg-3 control-label">data di nascita</span>
								<!-- <div class="col-lg-2 field">
									<div class="input-group input-medium date date-picker">
										<input type="text" id="dataNascita" name="dataNascita" data-date-format="dd-mm-yyyy" class="form-control" readonly="">
										<span class="input-group-btn">
											<button id="btnDataNascita" class="btn default" type="button">
												<i class="fa fa-calendar"></i>
											</button> </span>
									</div>
								</div> -->
								
								<div class="col-md-3">
									<div class="input-group input-medium date date-picker" data-date-format="dd-mm-yyyy" data-date-start-date="+0d">
										<input type="text" name="dataNascita" id="dataNascita" class="form-control" readonly="" value="<?php echo (isset($_SESSION['dataNascita']) ? $_SESSION['dataNascita'] : ""); ?>">
										<span class="input-group-btn">
										<button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
										</span>
									</div>
									
								</div>
								<div class="break"></div>
								<span class="col-lg-3 control-label">stato di nascita</span>
								<div class="col-lg-5 field">
									<select id="statoNascita" name="statoNascita" class="form-control"
									onchange="javascript:GetRegionList('regioneNascita','getRegioniPerNazione',(this).value, '')">
										<option value="">selezionare uno stato di nascita..</option>
										<?php echo $htmlNationResult; ?>
									</select>
								</div>
								<div class="break"></div>
								<span id="spanRegioneNascita" class="col-lg-3 control-label">regione di nascita</span>
								<div id="regioneNascita" name="regioneNascita" class="col-lg-5 field">
								<?php 
									if (isset($_SESSION['regioneNascita'])){
										$regioneSelezionata =  $_SESSION['regioneNascita'];
										include('functions/getRegioniPerNazione.php');
									} else {
										echo '<select class="form-control"></select>';				
									}
								?>
								</div>
								<div class="break"></div>
								<span  id="spanProvinciaNascita" class="col-lg-3 control-label">provincia di nascita</span>
								<?php $provinciaSelezionata = (isset($_SESSION['provinciaNascita'])? $_SESSION['provinciaNascita'] : ""); ?>
								<div id="provinciaNascita" name="provinciaNascita" class="col-lg-5 field">
								<?php 
									if (isset($_SESSION['provinciaNascita'])){
										$provinciaSelezionata =  $_SESSION['provinciaNascita'];
										include('functions/getProvince.php');
									} else {
										echo '<select class="form-control"></select>';				
									}
								?>
								</div>
								<div class="break"></div>
								<span id="spanComuneNascita" class="col-lg-3 control-label">comune di nascita</span>
								<?php $comuneSelezionato = (isset($_SESSION['comuneNascita'])? $_SESSION['comuneNascita'] : ""); ?>
								<div id="comuneNascita" name="comuneNascita" class="col-lg-5 field">
								<?php 
									if (isset($_SESSION['comuneNascita'])){
										$comuneSelezionato =  $_SESSION['comuneNascita'];
										include('functions/getComuni.php');
									} else {
										echo '<select class="form-control"></select>';				
									}
								?>
								</div>
								<div class="break"></div>
							</div>
						</div>
						<div class="verticalGap"></div>
						<div class="portlet blue box">
							<div class="portlet-title">
								<span class="caption">cittadinanza</span>
							</div>
							<div class="portlet-body">
								<span class="col-lg-3 control-label">cittadinanza</span>
								<div class="col-lg-5 field">
									<select id="cittadinanza" name"cittadinanza" class="form-control">
										<option value="N">selezionare una cittadinanza..</option>
										<?php echo $htmlCitizenshipResult; ?>
									</select>
								</div>
								<div class="break"></div>
							</div>
						</div>
						<div class="break"></div>
						<div class="verticalGap"></div>
						<div class="portlet blue box">
							<div class="portlet-title">
								<span class="caption">autorizzazione al trattamento dei dati personali</span>
							</div>
							<div class="portlet-body">
								<div class="col-lg-3 field">
									<?php $autorDatiPersonali = (isset($_SESSION['autorizzazioneDatiPersonali']) ? $_SESSION['autorizzazioneDatiPersonali'] : ""); ?>
									<input type="checkbox" id="autorizzazioneDatiPersonali" name="autorizzazioneDatiPersonali" <?php if($autorDatiPersonali == 'on') { echo "checked"; } ?>
									class="form-control pull-right">
								</div>
								<span class="col-lg-9"> 									
									<textarea class="form-control" rows="4" readonly="">autorizzazione al trattamento dei dati	personali..</textarea> 
								</span>
								<div class="break"></div>
							</div>
						</div>
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
<script src="http://goprintme.com/metronic/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
<script>
	$(function() {
		$("#dataNascita").datepicker({
			showOn : "btnDataNascita"
		});

	});

	/* $(document).ready(
	 $function() {
	 $("#dataNascita").datepicker();
	 }
	 ); */
</script>

</html>