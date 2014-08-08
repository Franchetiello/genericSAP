<?php 
	session_start();
	
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
	<form action="sapSection04.php" class="form-horizontal" method="post">
		<?php  
			DisplayMenu("menuSection03");
		?>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="form-group">
						<!-- 
						
							INSERIRE QUI IL FORM
							
						 -->					
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
