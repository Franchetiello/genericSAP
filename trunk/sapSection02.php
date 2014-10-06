<?php
	session_start();
	
	if(isset($_POST['slcRegioneResidenza'])){$_SESSION['regioneResidenza']=$_POST['slcRegioneResidenza']; }
	if(isset($_POST['slcProvinciaResidenza'])){$_SESSION['provinciaResidenza']=$_POST['slcProvinciaResidenza']; }
	if(isset($_POST['slcComuneResidenza'])){$_SESSION['comuneResidenza']=$_POST['slcComuneResidenza']; }
	if(isset($_POST['capResidenza'])){$_SESSION['capResidenza']=$_POST['capResidenza']; }
	if(isset($_POST['indirizzoResidenza'])){$_SESSION['indirizzoResidenza']=$_POST['indirizzoResidenza']; }

	if(isset($_POST['cbxDomicilioDiverso'])){
		echo $_POST['cbxDomicilioDiverso'];
		$_SESSION['domicilioDiverso']=$_POST['cbxDomicilioDiverso']; 
		if ($_POST['cbxDomicilioDiverso']=='on'){
			if(isset($_POST['slcRegioneDomicilio'])){$_SESSION['regioneDomicilio']=$_POST['slcRegioneDomicilio']; }
			if(isset($_POST['slcProvinciaDomicilio'])){$_SESSION['provinciaDomicilio']=$_POST['slcProvinciaDomicilio']; }
			if(isset($_POST['slcComuneDomicilio'])){$_SESSION['comuneDomicilio']=$_POST['slcComuneDomicilio']; }
			if(isset($_POST['capDomicilio'])){$_SESSION['capDomicilio']=$_POST['capDomicilio']; }
			if(isset($_POST['indirizzoDomicilio'])){$_SESSION['indirizzoDomicilio']=$_POST['indirizzoDomicilio']; }
		} else {
			if(isset($_POST['slcRegioneResidenza'])){$_SESSION['regioneDomicilio']=$_POST['slcRegioneResidenza']; }
			if(isset($_POST['slcProvinciaResidenza'])){$_SESSION['provinciaDomicilio']=$_POST['slcProvinciaResidenza']; }
			if(isset($_POST['slcComuneResidenza'])){$_SESSION['comuneDomicilio']=$_POST['slcComuneResidenza']; }
			if(isset($_POST['capResidenza'])){$_SESSION['capDomicilio']=$_POST['capResidenza']; }
			if(isset($_POST['indirizzoResidenza'])){$_SESSION['indirizzoDomicilio']=$_POST['indirizzoResidenza']; }
		}
	} else {
		if(isset($_POST['slcRegioneResidenza'])){$_SESSION['regioneDomicilio']=$_POST['slcRegioneResidenza']; }
		if(isset($_POST['slcProvinciaResidenza'])){$_SESSION['provinciaDomicilio']=$_POST['slcProvinciaResidenza']; }
		if(isset($_POST['slcComuneResidenza'])){$_SESSION['comuneDomicilio']=$_POST['slcComuneResidenza']; }
		if(isset($_POST['capResidenza'])){$_SESSION['capDomicilio']=$_POST['capResidenza']; }
		if(isset($_POST['indirizzoResidenza'])){$_SESSION['indirizzoDomicilio']=$_POST['indirizzoResidenza']; }
	}
	
	if(isset($_POST['numeroFisso'])){ $_SESSION['numeroFisso']=$_POST['numeroFisso']; }
	if(isset($_POST['numeroMobile'])){$_SESSION['numeroMobile']=$_POST['numeroMobile']; }
	if(isset($_POST['email'])){$_SESSION['email']=$_POST['email']; }
	
	require_once('functions/pageSettings.php');
	require_once('functions/menu.php');
	require_once('functions/debug.php');
	
	dPrint($_SESSION);
	
	$menuIndex = 2;
	include('functions/navigation.php');
	
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
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" class="form-horizontal" method="post">
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
									<?php $regioneSelezionata = (isset($_SESSION['regioneResidenza'])? $_SESSION['regioneResidenza'] : ""); ?>
									<div id="regioneResidenza" class="col-lg-5 field">
									<?php
									$targetId = "provinciaResidenza";
									$controlId = "slcRegioneResidenza";
									$childId = "p=comuneResidenza";
									include 'functions/getRegioni.php';
									?>
								</div>
									<div class="break"></div>
									<span id="spanProvinciaResidenza" class="col-lg-3 control-label">provincia</span>
									<?php $provinciaSelezionata = (isset($_SESSION['provinciaResidenza'])? $_SESSION['provinciaResidenza'] : ""); ?>
									<div id="provinciaResidenza" class="col-lg-5 field">
									<?php 
										if (isset($_SESSION['provinciaResidenza']) && isset($regioneSelezionata)){
											$provinciaSelezionata =  $_SESSION['provinciaResidenza'];
											include('functions/getProvince.php');
										} else {
											echo '<select class="form-control"></select>';				
										}
									?>
									</div>
									<div class="break"></div>
									<span id="spanComuneResidenza" class="col-lg-3 control-label">comune</span>
									<?php $comuneSelezionato = (isset($_SESSION['comuneResidenza'])? $_SESSION['comuneResidenza'] : ""); ?>
									<div id="comuneResidenza" class="col-lg-5 field">
									<?php 
										if (isset($_SESSION['comuneResidenza'])){
											$comuneSelezionato =  $_SESSION['comuneResidenza'];
											include('functions/getComuni.php');
										} else {
											echo '<select class="form-control"></select>';				
										}
									?>
									</div>
									<div class="break"></div>
									<span id="spanCapResidenza" class="col-lg-3 control-label">c.a.p.</span>
									<div class="col-lg-2 field">
										<input type="text" id="capResidenza" class="form-control" value="<?php echo (isset($_SESSION['capResidenza']) ? $_SESSION['capResidenza'] : ""); ?>">
									</div>
									<div class="break"></div>
									<span class="col-lg-3 control-label">indirizzo</span>
									<div class="col-lg-9 field">
										<input type="text" id="indirizzoResidenza"	class="form-control" value="<?php echo (isset($_SESSION['indirizzoResidenza']) ? $_SESSION['indirizzoResidenza'] : ""); ?>">
									</div>
									<div class="break"></div>
									<span class="col-lg-3 control-label">&nbsp;</span>
									<div id="spanDomicilioDiverso" class="col-lg-1 field">
										<?php $domicilioDiverso = (isset($_SESSION['domicilioDiverso']) ? $_SESSION['domicilioDiverso'] : ""); ?>
										<input type="checkbox" id="cbxDomicilioDiverso"  name="cbxDomicilioDiverso" onchange="javascript:SetHomeAddressChoice('cbxDomicilioDiverso');" class="form-control" <?php if($domicilioDiverso == 'on') { echo "checked"; } ?>>
									</div>
									<span class="col-lg-8 checkboxLabel">domicilio diverso da residenza</span>
									<div class="break"></div>
								</div>
							</div>
							
							<div id="divDomicilio" name="divDomicilio" class="portlet blue box">
								<div class="portlet-title">
									<span class="caption">Domicilio</span>
								</div>
								<div class="portlet-body">
									<span id="spanRegioneDomicilio" class="col-lg-3 control-label">regione</span>
									<?php $regioneSelezionata = (isset($_SESSION['regioneDomicilio'])? $_SESSION['regioneDomicilio'] : ""); ?>
									<div id="regioneDomicilio" class="col-lg-5 field">
										<?php
										$targetId = "provinciaDomicilio";
										$controlId = "slcRegioneDomicilio";
										$childId = "p=comuneDomicilio";
										include 'functions/getRegioni.php';
										?>
									</div>
									<div class="break"></div>
									<span id="spanProvinciaDomicilio" class="col-lg-3 control-label">provincia</span>
									<?php $provinciaSelezionata = (isset($_SESSION['provinciaDomicilio'])? $_SESSION['provinciaDomicilio'] : ""); ?>
									<div id="provinciaDomicilio" class="col-lg-5 field">
									<?php 
										if (isset($_SESSION['provinciaDomicilio']) && isset($regioneSelezionata)){
											$provinciaSelezionata =  $_SESSION['provinciaDomicilio'];
											include('functions/getProvince.php');
										} else {
											echo '<select class="form-control"></select>';				
										}
									?>
									</div>
									<div class="break"></div>
									<span id="spanComuneDomicilio" class="col-lg-3 control-label">comune</span>
									<?php $comuneSelezionato = (isset($_SESSION['comuneDomicilio'])? $_SESSION['comuneDomicilio'] : ""); ?>
									<div id="comuneDomicilio" class="col-lg-5 field">
									<?php 
										if (isset($_SESSION['comuneDomicilio'])){
											$comuneSelezionato =  $_SESSION['comuneDomicilio'];
											include('functions/getComuni.php');
										} else {
											echo '<select class="form-control"></select>';				
										}
									?>
									</div>
									<div class="break"></div>
									<span id="spanCapDomicilio" class="col-lg-3 control-label">c.a.p.</span>
									<div class="col-lg-2 field">
										<input type="text" id="capDomicilio" class="form-control" value="<?php echo (isset($_SESSION['capDomicilio']) ? $_SESSION['capDomicilio'] : ""); ?>">
									</div>
									<div class="break"></div>
									<span class="col-lg-3 control-label">indirizzo</span>
									<div class="col-lg-9 field">
										<input type="text" id="indirizzoDomicilio" class="form-control" value="<?php echo (isset($_SESSION['indirizzoDomicilio']) ? $_SESSION['indirizzoDomicilio'] : ""); ?>">
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
										<input type="text" id="numeroFisso" class="form-control" value="<?php echo (isset($_SESSION['numeroFisso']) ? $_SESSION['numeroFisso'] : ""); ?>">
									</div>
									<div class="break"></div>
									<span id="spanNumeroMobile" class="col-lg-3 control-label">telefono cellulare</span>
									<div class="col-lg-3 field">
										<input type="text" id="numeroMobile" class="form-control" value="<?php echo (isset($_SESSION['numeroMobile']) ? $_SESSION['numeroMobile'] : ""); ?>">
									</div>
									<div class="break"></div>
									<span id="spanEmail" class="col-lg-3 control-label">email</span>
									<div class="col-lg-4 field">
										<input type="text" id="email" class="form-control" value="<?php echo (isset($_SESSION['email']) ? $_SESSION['email'] : ""); ?>">
									</div>
									<div class="break"></div>
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
	echo "<script type=\"text/javascript\">";
	echo "	SetHomeAddressChoice('cbxDomicilioDiverso');"; 
	echo "</script>";
?>
</html>