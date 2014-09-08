<?php
require_once ('config.php');

if (!isset($provinciaSelezionata)) { $provinciaSelezionata = ""; }

$mysqli = new mysqli ( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME );
if ($mysqli->connect_errno) {
	echo "Impossibile connettersi a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
} else {
	if (isset($_GET['q'])){
		$filter = $_GET ['q'];
	}	else {
		if (isset($regioneSelezionata) & strlen($regioneSelezionata)){ $filter = $regioneSelezionata; }
	}
	
	if (isset ($filter)) {
		$query = "SELECT 
						`diz_province`.`IdProvincia` As Id,
    				`diz_province`.`provincia_nome` As NomeProvincia
					FROM 
						`diz_province`
					WHERE
						`diz_province`.`IdRegione` = " . $filter;
		
		if ($result = mysqli_query ( $mysqli, $query )) {
			
			if (! mysqli_query ( $mysqli, "SET @a:='this will not work'" )) {
				printf ( "Error: %s\n", mysqli_error ( $mysqli ) );
				mysqli_free_result ( $result );
			}
		}
		
		$data = array ();
		
		if (isset ( $_GET ['p'] )) {
			$childId = $_GET ['p'];
			
			$controlId = str_replace("comune", "slcProvincia", $childId);
			echo "<select id=\"".$controlId."\" name=\"".$controlId."\" class=\"form-control\" onchange=\"javascript:GetList('" . $childId . "','getComuni',(this).value,'" ."p=" . $childId . "')\">";
			echo "<option value=\"\">selezionare una provincia..</option>";
			while ( $row = mysqli_fetch_array ( $result ) ) {
				echo "<option value=\"" . $row ['Id'] . "\" ".($provinciaSelezionata == $row['Id'] ? "selected" : "").">" . $row ['NomeProvincia'] . "</option>";
			}
			
			echo "</select>";
			
			unset ( $childId );
		}
		mysqli_free_result ( $result );
	}
	mysqli_close ( $mysqli );
}

unset($provinciaSelezionata);
unset($regioneSelezionata);
unset($filter);

?>