<?php
require_once ('config.php');

$mysqli = new mysqli ( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME );
if ($mysqli->connect_errno) {
	echo "Impossibile connettersi a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
} else {
	
	$query = "SELECT 
						`diz_regioni`.`IdRegione` As Id,
						`diz_regioni`.`regione_nome` As NomeRegione
					FROM 
						`db_ebtt`.`diz_regioni`
			 		WHERE
						`diz_regioni`.`IdRegione` <> '0'";
	
	if ($result = mysqli_query ( $mysqli, $query )) {
		
		if (! mysqli_query ( $mysqli, "SET @a:='this will not work'" )) {
			printf ( "Error: %s\n", mysqli_error ( $mysqli ) );
			mysqli_free_result ( $result );
		}
	}
	
	$data = array ();
	
	echo "<select class=\"form-control\" onchange=\"javascript:GetList('" . $targetId . "','getProvince',(this).value,'". $childId ."')\">";
	echo "<option value=\"\">selezionare una regione..</option>";
	while ( $row = mysqli_fetch_array ( $result ) ) {
		echo "<option value=\"" . $row ['Id'] . "\">" . $row ['NomeRegione'] . "</option>";
	}
	
	echo "</select>";
	
	mysqli_free_result ( $result );
	
	unset ( $item0Description );
	mysqli_close ( $mysqli );
}
?>