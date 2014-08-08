<?php
require_once ('config.php');

$mysqli = new mysqli ( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME );
if ($mysqli->connect_errno) {
	echo "Impossibile connettersi a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
} else {
	if (isset ( $_GET ['q'] )) {
		$query = "SELECT 
							`diz_comuni`.`IdComune` As Id,
	    				`diz_comuni`.`comune_nome` As NomeComune
						FROM 
							`db_ebtt`.`diz_comuni`
						WHERE
							`diz_comuni`.`IdProvincia` = " . $_GET ['q'];
		
		if ($result = mysqli_query ( $mysqli, $query )) {
			
			if (! mysqli_query ( $mysqli, "SET @a:='this will not work'" )) {
				printf ( "Error: %s\n", mysqli_error ( $mysqli ) );
				mysqli_free_result ( $result );
			}
		}
		
		$data = array ();
		
		echo "<select class=\"form-control\">";
		echo "<option value=\"\">selezionare un comune..</option>";
		while ( $row = mysqli_fetch_array ( $result ) ) {
			echo "<option value=\"" . $row ['Id'] . "\">" . $row ['NomeComune'] . "</option>";
		}
		
		echo "</select>";
		
		mysqli_free_result ( $result );
	}
	
	mysqli_close ( $mysqli );
}
?>