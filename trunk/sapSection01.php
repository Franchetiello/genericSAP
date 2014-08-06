<?php 
	require_once 'functions/pageSettings.php';
	require_once 'functions/menu.php'; 
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
	headDeclaration();
?>
</head>
<body>
	<form action="sapSectionp01.php" class="form-horizontal" method="post">
		<?php  
			DisplayMenu();
		?>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="form-group">
						<span class="col-lg-3 control-label">nome</span>
						<div class="col-lg-9 field">
							<input type="text" name="name" class="form-control" value="">
						</div>
						<span class="col-lg-3 control-label">cognome</span>
						<div class="col-lg-9 field">
							<input type="text" name="surname" class="form-control" value="">
						</div>
						<div class="col-lg-12 separator">&nbsp;</div>
						<span class="col-lg-3 control-label">codice fiscale</span>
						<div class="col-lg-3 field">
							<input type="text" name="codiceFiscale" class="form-control"
								value="">
						</div>
						<div class="break"></div>
						<span class="col-lg-3 control-label">genere</span>
						<div class="col-lg-4 field">
							<select name="genere" class="form-control">
								<option value="N">selezionare un genere..</option>
								<option value="F">femminile</option>
								<option value="M">maschile</option>
							</select>
						</div>
						<div class="break"></div>
						<span class="col-lg-3 control-label">data di nascita</span>
						<div class="col-lg-2 field">
							<input type="text" id="dataNascita" class="form-control date-picker" value="">
						</div>
						<div class="break"></div>
						<!-- <div class="col-lg-12 separator">&nbsp;</div> -->
						<?php include('functions/getNazioni.php'); ?>
						<span class="col-lg-3 control-label">cittadinanza</span>
						<div class="col-lg-5 field">
							<select id="cittadinanza" class="form-control">
								<option value="N">selezionare una cittadinanza..</option>
								<?php echo $htmlResult; ?>
							</select>
						</div>
						<div class="break"></div>
						<span class="col-lg-3 control-label">stato di nascita</span>
						<div class="col-lg-5 field">
							<select id="statoNascita" class="form-control"
								onchange="javascript:GetList('regioneNascita','getRegioni',(this).value)">
								<option value="">selezionare uno stato di nascita..</option>
								<?php echo $htmlResult; ?>
							</select>
						</div>
						<div class="break"></div>
						<span class="col-lg-3 control-label">regione di nascita</span>
						<div id="regioneNascita" class="col-lg-5 field">
							<select class="form-control">
								<option value="">selezionare una regione di nascita..</option>
								<option value="010">piemonte</option>
							</select>
						</div>
						<div class="break"></div>
						<span class="col-lg-3 control-label">provincia di nascita</span>
						<div id="provinciaNascita" class="col-lg-5 field">
							<select class="form-control">
								<option value="">selezionare una provincia di nascita..</option>
								<option value="010">torino</option>
							</select>
						</div>
						<div class="break"></div>
						<span class="col-lg-3 control-label">comune di nascita</span>
						<div id="comuneNascita" class="col-lg-5 field">
							<select class="form-control">
								<option value="N">selezionare un comune di nascita..</option>
								<option value="010">torino</option>
							</select>
						</div>
						<div class="break"></div>
						<span class="col-lg-3 control-label">c.a.p.</span>
						<div class="col-lg-2 field">
							<input type="text" id="capNascita" class="form-control" value="">
						</div>
						<div class="break"></div>
						<div class="col-lg-3 field">
							<input type="checkbox" name="autorizzazioneDatiPersonali"
								class="form-control pull-right" value="autorizzazione">
						</div>
						<span class="col-lg-9">autorizzazione al trattamento dei dati
							personali</span>
					</div>
					<div class="col-lg-12 field">
						<input type="submit" name="submit" value="submit"
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
<script>
$(function() {
    $( "#dataNascita" ).datepicker();
  });


	/* $(document).ready(
		$function() {
			$("#dataNascita").datepicker();
		}
	); */
</script>


</html>