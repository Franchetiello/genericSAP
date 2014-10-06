<?php
	require_once ('config.php');
	
	$mysqli = new mysqli ( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME );
	if ($mysqli->connect_errno) {
		echo "Impossibile connettersi a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	} else {
		$query = "SELECT 
								`diz_livelli_titoli_studio`.`id`,
						    `diz_livelli_titoli_studio`.`codice`,
						    `diz_livelli_titoli_studio`.`descrizione`
							FROM 
								`diz_livelli_titoli_studio`;";
	
		if ($result = mysqli_query ( $mysqli, $query )) {
			
			if (! mysqli_query ( $mysqli, "SET @a:='this will not work'" )) {
				printf ( "Error: %s\n", mysqli_error ( $mysqli ) );
				mysqli_free_result ( $result );
			}
		}
		
		$data = array ();
		
		$onChangeSection = "";
		if (isset($targetId)){
			if(!isset($childId)){$childId = "";}
			$onChangeSection = " onchange=\"javascript:GetList('" . $targetId . "','getProvince',(this).value,'" . $childId . "')\"";
		}
		if (!isset($controlId)) {$controlId = "slcLivelliStudio";}
		echo "<select id=\"" . $controlId . "\" name=\"" . $controlId . "\" class=\"form-control\"  class=\"form-control\"".$onChangeSection."\">";
		echo "<option value=\"\">selezionare un livello di studio..</option>";
		while ( $row = mysqli_fetch_array ( $result ) ) {
			echo "<option value=\"" . $row ['id'] . "\">" . $row ['descrizione'] . "</option>";
		}
		
		echo "</select>";
		
		mysqli_free_result ( $result );
		
		//unset ( $item0Description );
		mysqli_close ( $mysqli );
	}
?>