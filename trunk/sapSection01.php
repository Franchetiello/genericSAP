<?php
session_start();

require_once 'functions/pageSettings.php';
require_once 'functions/menu.php';
require_once 'functions/debug.php';
//	-------------------------------------------------------
//	Funzioni di navigazione
//	-------------------------------------------------------

//dPrint($_POST);

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
	<form action="sapSection01.php" class="form-horizontal" method="post">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<?php
					DisplayMenu("menuSection01");
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
									<input type="text" id="name" name="name" class="form-control" value="">
								</div>
								<span class="col-lg-3 control-label">cognome</span>
								<div class="col-lg-9 field">
									<input type="text" id="surname" name="surname" class="form-control" value="">
								</div>
								<div class="break"></div>
								<div class="col-lg-12 separator">
									&nbsp;
								</div>
								<span class="col-lg-3 control-label">codice fiscale</span>
								<div class="col-lg-3 field">
									<input type="text" id="codiceFiscale" name="codiceFiscale" class="form-control"
									value="">
								</div>
								<div class="break"></div>
								<span class="col-lg-3 control-label">genere</span>
								<div class="col-lg-4 field">
									<select id="genere" name="genere" class="form-control">
										<option value="N">selezionare un genere..</option>
										<option value="F">femminile</option>
										<option value="M">maschile</option>
									</select>
								</div>
								<div class="break"></div>
								<span class="col-lg-3 control-label">data di nascita</span>
								<div class="col-lg-2 field">
									<div class="input-group input-medium date date-picker">
										<input type="text" id="dataNascita" name="dataNascita" data-date-format="dd-mm-yyyy" class="form-control" readonly="">
										<span class="input-group-btn">
											<button id="btnDataNascita" class="btn default" type="button">
												<i class="fa fa-calendar"></i>
											</button> </span>
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
								<div id="regioneNascita" class="col-lg-5 field">
									<select class="form-control"></select>
								</div>
								<div class="break"></div>
								<span  id="spanProvinciaNascita" class="col-lg-3 control-label">provincia di nascita</span>
								<div id="provinciaNascita" class="col-lg-5 field">
									<select class="form-control"></select>
								</div>
								<div class="break"></div>
								<span id="spanComuneNascita" class="col-lg-3 control-label">comune di nascita</span>
								<div id="comuneNascita" class="col-lg-5 field">
									<select class="form-control"></select>
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
									<select id="cittadinanza" class="form-control">
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
									<input type="checkbox" id="autorizzazioneDatiPersonali"
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