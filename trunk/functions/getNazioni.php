<?php
require_once ('config.php');

$htmlCitizenshipResult = "";
$htmlNationResult = "";

if (!isset($cittadinanzaSelezionata)) { $cittadinanzaSelezionata = ""; }
if (!isset($nazioneSelezionata)) { $nazioneSelezionata = ""; }

$mysqli = new mysqli ( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME );
if ($mysqli->connect_errno) {
	echo "Impossibile connettersi a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
} else {
	$query = "SELECT 
						`diz_cittadinanze`.`IdCittadinanza` As Id,
    				`diz_cittadinanze`.`cittadinanza_nome` As NomeCittadinanza
					FROM 
						`diz_cittadinanze`;
					";
	
	if ($result = mysqli_query ( $mysqli, $query )) {
		
		if (! mysqli_query ( $mysqli, "SET @a:='this will not work'" )) {
			printf ( "Error: %s\n", mysqli_error ( $mysqli ) );
			mysqli_free_result ( $result );
		}
	}
	
	$data = array ();
	while ( $row = mysqli_fetch_array ( $result ) ) {
		$htmlCitizenshipResult .= "<option value=\"" . $row ['Id'] . "\" ". ($cittadinanzaSelezionata == $row ['Id'] ? "selected" : "")." >" . $row ['NomeCittadinanza'] . "</option>";
	}
	// echo json_encode ( $data );
	
	mysqli_free_result ( $result );
	
	$query = "SELECT 
						`diz_nazioni`.`IdNazione` As Id,
    				`diz_nazioni`.`nazione_nome`As NomeNazione
					FROM 
						`diz_nazioni`;
					";
	
	if ($result = mysqli_query ( $mysqli, $query )) {
		
		if (! mysqli_query ( $mysqli, "SET @a:='this will not work'" )) {
			printf ( "Error: %s\n", mysqli_error ( $mysqli ) );
			mysqli_free_result ( $result );
		}
	}
	
	$data = array ();
	while ( $row = mysqli_fetch_array ( $result ) ) {
		$htmlNationResult .= "<option value=\"" . $row ['Id'] . "\"". ($nazioneSelezionata == $row ['Id'] ? "selected" : "").">" . $row ['NomeNazione'] . "</option>";
	}
	// echo json_encode ( $data );
	
	mysqli_free_result ( $result );
	
	mysqli_close ( $mysqli );
}
?>