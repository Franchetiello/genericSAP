<?php
require_once ('config.php');

if (!isset($comuneSelezionato)) { $regioneSelezionato = ""; }

$mysqli = new mysqli ( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME );
if ($mysqli->connect_errno) {
	echo "Impossibile connettersi a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
} else {
	if (isset ( $_GET ['q'] )) {
		$controlId = "slc". ucfirst($_GET ['q']);
		$query = "SELECT 
							`diz_comuni`.`IdComune` As Id,
	    				`diz_comuni`.`comune_nome` As NomeComune
						FROM 
							`diz_comuni`
						WHERE
							`diz_comuni`.`IdProvincia` = " . $_GET ['q'];
		
		if ($result = mysqli_query ( $mysqli, $query )) {
			
			if (! mysqli_query ( $mysqli, "SET @a:='this will not work'" )) {
				printf ( "Error: %s\n", mysqli_error ( $mysqli ) );
				mysqli_free_result ( $result );
			}
		}
		
		$data = array ();
		$controlId="nonDefinito";
		if (isset ( $_GET ['p'] )) {
			$childId = $_GET ['p'];
			$controlId = str_replace("comune", "slcComune", $childId);
		}
		
		echo "<select  id=\"".$controlId."\" name=\"".$controlId."\" class=\"form-control\">";
		echo "<option value=\"\">selezionare un comune..</option>";
		while ( $row = mysqli_fetch_array ( $result ) ) {
			echo "<option value=\"" . $row ['Id'] . "\" ".($comuneSelezionato == $row['Id'] ? "selected" : "")." >" . $row ['NomeComune'] . "</option>";
		}
		
		echo "</select>";
		
		mysqli_free_result ( $result );
	}
	
	mysqli_close ( $mysqli );
}
?>