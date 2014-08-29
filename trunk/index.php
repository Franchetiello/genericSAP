<?php
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
							<button name="submit" class="btn default green pull-right" value="forward">continua..<i class="glyphicon glyphicon-step-forward"></i></button>
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
</html>
