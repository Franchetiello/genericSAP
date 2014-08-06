<?php
require_once('config.php');

$htmlResult = "";
$query = "SELECT 
						`diz_nazioni`.`IdNazione` As Id,
    				`diz_nazioni`.`nazione_nome`As NomeNazione
					FROM 
						`db_ebtt`.`diz_nazioni`;
					";
//printf ( $query );

if ($result = mysqli_query ( $mysqli, $query )) {
	
	if (! mysqli_query ( $mysqli, "SET @a:='this will not work'" )) {
		printf ( "Error: %s\n", mysqli_error ( $mysqli ) );
		mysqli_free_result ( $result );
	}
}

$data = array ();
while ( $row = mysqli_fetch_array ( $result ) ) {
	$htmlResult .= "<option value=\"".$row ['Id']."\">".$row ['NomeNazione']."</option>";
}
//echo json_encode ( $data );

mysqli_free_result ( $result );

mysqli_close ( $mysqli );
?>