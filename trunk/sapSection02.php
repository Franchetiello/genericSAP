<?php
session_start ();

require_once 'functions/pageSettings.php';
require_once 'functions/menu.php';
?>
<!DOCTYPE html>
<?php
htmlDeclaration ();
?>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Insert title here</title>
<?php
headDeclaration ();
?>
</head>
<body>
	<form action="sapSection03.php" class="form-horizontal" method="post">
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

						</div>
						<div class="col-lg-12 field">
							<input type="submit" name="submit" value="continua.."
								class="btn default green pull-right">
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