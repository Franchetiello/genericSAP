<?php
	session_start ();
	
	require_once 'functions/pageSettings.php';
	require_once 'functions/menu.php';
	
	if (isset($menu)) {
		if (isset($_POST['submit'])) {
			switch ($_POST['submit']) {
				case 'forward' :
					header("Location: sapSection03.php");
					break;
				case "backward" :
					header("Location: sapSection01.php");
					break;
				default :
					break;
			}
		}
	}
?>
<!DOCTYPE html>
<?php
htmlDeclaration ();
?>
<html>
<head>
<?php
headDeclaration ("Scheda candidato - Recapiti");
?>
</head>
<body>
	<form action="sapSection02.php" class="form-horizontal" method="post">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2">
					<?php
					DisplayMenu ( "menuSection02" );
					?>
				</div>
				</div>
				<div class="verticaplGap"></div>
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2">
						<div class="form-group">
							<div class="portlet blue box">
								<div class="portlet-title">
									<span class="caption">Residenza</span>
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
							<div class="portlet blue box">
								<div class="portlet-title">
									<span class="caption">Domicilio</span>
								</div>
								<div class="portlet-body">
									<span id="spanRegioneDomicilio" class="col-lg-3 control-label">regione</span>
									<div id="regioneDomicilio" class="col-lg-5 field">
										<?php
										$targetId = "provinciaDomicilio";
										$controlId = "slcRegioneDomicilio";
										$childId = "p=comuneDomicilio";
										include 'functions/getRegioni.php';
										?>
									</div>
									<div class="break"></div>
									<span id="spanProvinciaDomicilio"
										class="col-lg-3 control-label">provincia</span>
									<div id="provinciaDomicilio" class="col-lg-5 field">
										<select class="form-control">
										</select>
									</div>
									<div class="break"></div>
									<span id="spanComuneDomicilio" class="col-lg-3 control-label">comune</span>
									<div id="comuneDomicilio" class="col-lg-5 field">
										<select class="form-control">
										</select>
									</div>
									<div class="break"></div>
									<span id="spanCapDomicilio" class="col-lg-3 control-label">c.a.p.</span>
									<div class="col-lg-2 field">
										<input type="text" id="capDomicilio" class="form-control"
											value="">
									</div>
									<div class="break"></div>
									<span class="col-lg-3 control-label">indirizzo</span>
									<div class="col-lg-9 field">
										<input type="text" id="indirizzoDomicilio"
											class="form-control" value="">
									</div>
									<div class="break"></div>
								</div>
							</div>
							<div class="portlet blue box">
								<div class="portlet-title">
									<span class="caption">numeri telefonici</span>
								</div>
								<div class="portlet-body">
									<span id="spanNumeroFisso" class="col-lg-3 control-label">telefono fisso</span>
									<div class="col-lg-3 field">
										<input type="text" id="numeroFisso" class="form-control"
											value="">
									</div>
									<div class="break"></div>
									<span id="spanNumeroMobile" class="col-lg-3 control-label">telefono cellulare</span>
									<div class="col-lg-3 field">
										<input type="text" id="numeroMobile" class="form-control"
											value="">
									</div>
									<div class="break"></div>
									<span id="spanEmail" class="col-lg-3 control-label">email</span>
									<div class="col-lg-4 field">
										<input type="text" id="email" class="form-control"
											value="">
									</div>
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
</html>