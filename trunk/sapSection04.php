<?php 
	session_start();
	
	require_once 'functions/pageSettings.php';
	require_once 'functions/menu.php'; 
	
	if (isset($menu)) {
		if (isset($_POST['submit'])) {
			switch ($_POST['submit']) {
				case 'forward' :
					header("Location: sapSection05.php");
					break;
				case "backward" :
					header("Location: sapSection03.php");
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
	headDeclaration("Scheda candidatura - Titoli");
?>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" class="form-horizontal" method="post">
		<div class="container">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2">
					<?php
					DisplayMenu ( "menuSection04" );
					?>
				</div>
				</div>
				<div class="verticaplGap"></div>
				<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="form-group">
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
</html>
