<?php
require_once ('config.php');

$mysqli = new mysqli ( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME );
if ($mysqli->connect_errno) {
	echo "Impossibile connettersi a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
} else {
	$query = "SELECT 
							`diz_livelli_titoli_studio`.`codice`,
					    `diz_livelli_titoli_studio`.`descrizione`
						FROM 
							`db_ebtt`.`diz_livelli_titoli_studio`;";

	if ($result = mysqli_query ( $mysqli, $query )) {
		
		if (! mysqli_query ( $mysqli, "SET @a:='this will not work'" )) {
			printf ( "Error: %s\n", mysqli_error ( $mysqli ) );
			mysqli_free_result ( $result );
		}
	}
	
	$data = array ();
	
	echo "<select id=\"slcLivelloStudio\" name=\"slcLivelloStudio\" class=\"form-control\" onchange=\"javascript:GetList('CorsoStudio','getCorsiStudio',(this).value,'')\">";
	echo "<option value=\"\">selezionare un livello di studio..</option>";
	while ( $row = mysqli_fetch_array ( $result ) ) {
		echo "<option value=\"" . $row ['codice'] . "\">" . $row ['descrizione'] . "</option>";
	}
	
	echo "</select>";
	
	mysqli_free_result ( $result );
	
	//unset ( $item0Description );
	mysqli_close ( $mysqli );
}
?>