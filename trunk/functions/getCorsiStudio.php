<?php
	require_once ('config.php');
	
	$mysqli = new mysqli ( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME );
	if ($mysqli->connect_errno) {
		echo "Impossibile connettersi a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	} else {
		if (isset ( $_GET ['q'] )) {
			$_filter = substr($_GET ['q'], 0, 1) . "%";
			
			$query = "SELECT 
		  						`diz_titoli_studio`.`id`,
							    `diz_titoli_studio`.`codice`,
							    `diz_titoli_studio`.`titolo`
								FROM 
									`diz_titoli_studio`
								WHERE
									`diz_titoli_studio`.`cod_lvl_1` LIKE '".$_filter."'";
											
			if ($result = mysqli_query ( $mysqli, $query )) {
				
				if (! mysqli_query ( $mysqli, "SET @a:='this will not work'" )) {
					printf ( "Error: %s\n", mysqli_error ( $mysqli ) );
					mysqli_free_result ( $result );
				}
				
			}
			
					
			$data = array ();
			if (!isset($controlId)) {$controlId = "slcCorsiStudio";}
			echo "<select id=\"". $controlId ."\" name=\"". $controlId ."\" class=\"form-control\" >";
			echo "<option value=\"\">selezionare un corso di studio..</option>";
			while ( $row = mysqli_fetch_array ( $result ) ) {
				echo "<option value=\"" . $row ['id'] . "\">" . $row ['titolo'] . "</option>";
			}
			echo "</select>";
			
			mysqli_free_result ( $result );
		}
		
		mysqli_close ( $mysqli );
	}
?>