<?php
	session_start();
	session_destroy();
	
	session_start();
	
	require_once 'functions/pageSettings.php';
	//	require_once 'functions/menu.php';
	
	if (isset($_POST['submit'])) {
		switch ($_POST['submit']) {
			case 'forward' :
				header("Location: sapSection01.php");
				break;
			default :
				break;
		}
	}
?>
<!doctype html>
<?php
	htmlDeclaration();
?>
<head>
	<head>
		<meta charset="ISO-8859-1">
		<?php
		headDeclaration("Scheda candidato");
		?>
	</head>
	<body>
		<form action="index.php" class="form-horizontal" method="post">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2">
						<div class="col-lg-12 field">
							<!--<input type="submit" id="submit" name="submit" 
							class="btn default green pull-right">-->
							<button name="submit" class="btn default green pull-right" value="forward">inizia..<i class="glyphicon glyphicon-step-forward"></i></button>
						</div>
						<div class="col-lg-12 field">
							<div class="input-append date" id="dp3" data-date="12-02-2012" data-date-format="dd-mm-yyyy">
	  						<input class="span2" size="16" type="text" value="12-02-2012" readonly="">
							  <span class="add-on rightButton">
							  	<i class="fa fa-calendar"></i>
							  </span>
							</div>
						</div>
						<div class="col-lg-12 field">
							<div class="input-group input-medium date date-picker" data-date-format="dd-mm-yyyy" data-date-start-date="+0d">
								<input type="text" class="form-control" readonly>
								<span class="input-group-btn">
								<button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
		</div>

	</body>
<?php
	jsSection();
?>
</script>
</html>
