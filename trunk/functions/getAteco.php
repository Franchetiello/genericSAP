<?php
  require_once ('config.php');
	
	// TODO: Gestire la ricerca...
	
	$mysqli = new mysqli ( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME );
	if ($mysqli->connect_errno) {
		echo "Impossibile connettersi a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	} else {
		$query = "SELECT 
								`diz_ateco_2007`.`id`,
    						`diz_ateco_2007`.`codice`,
						    `diz_ateco_2007`.`descrizione` 
							FROM 
								`diz_ateco_2007`;";
	
		if ($result = mysqli_query ( $mysqli, $query )) {
			
			if (! mysqli_query ( $mysqli, "SET @a:='this will not work'" )) {
				printf ( "Error: %s\n", mysqli_error ( $mysqli ) );
				mysqli_free_result ( $result );
			}
		}
		
		$data = array ();
		if (!isset($controlId)) {$controlId = "slcAteco";}
		echo "<select id=\"" . $controlId . "\" name=\"" . $controlId . "\" class=\"form-control\">";
		echo "<option value=\"\">selezionare un settore di attività..</option>";
		while ( $row = mysqli_fetch_array ( $result ) ) {
			echo "<option value=\"" . $row ['id'] . "\">" . $row ['descrizione'] . "</option>";
		}
		
		echo "</select>";
		
		mysqli_free_result ( $result );
		
		unset ( $controlId );
		mysqli_close ( $mysqli );
	}
?>