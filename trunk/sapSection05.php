<?php 
	session_start();
	
	require_once 'functions/pageSettings.php';
	require_once 'functions/menu.php';
	
	if (isset($menu)) {
		if (isset($_POST['submit'])) {
			switch ($_POST['submit']) {
				case 'save' :
					/*header("Location: sapSection02.php");*/
					break;
				case "backward" :
					header("Location: sapSection04.php");
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
	headDeclaration("Scheda candidatura - Esperienze");
?>
</head>
<body>
	<form action="sapSection05.php" class="form-horizontal" method="post">
		<div class="container">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2">
					<?php
					DisplayMenu ( "menuSection05" );
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
						<button id="submit" name="submit" value="save" class="btn default green pull-right">salva&nbsp;<i class="glyphicon glyphicon-save"></i></button>
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
