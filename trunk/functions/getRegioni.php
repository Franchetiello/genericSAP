<?php
require_once('config.php');

if($_GET['q'] == Italia){
	//$html2Result = "<li value=\"\">selezionare una regione..</li>";
	
	$query="SELECT 
						`diz_regioni`.`IdRegione` As Id,
						`diz_regioni`.`regione_nome` As NomeRegione
					FROM 
						`db_ebtt`.`diz_regioni`
			 		WHERE
						`diz_regioni`.`IdRegione` <> '0'";
		
	if ($result = mysqli_query($mysqli, $query)) {
		
		if (!mysqli_query($mysqli, "SET @a:='this will not work'")) {
			printf("Error: %s\n", mysqli_error($mysqli));
			mysqli_free_result($result);
		}
	}
	
	$data = array();
	
	echo "<select class=\"form-control\" onchange=\"javascript:GetList('provinciaNascita','getProvince',(this).value)\">";	
	echo "<option value=\"\">selezionare una regione di nascita..</option>";
	while ($row = mysqli_fetch_array($result)) {
		//$htmlResult .= "<option value=\"".$row['Id']."\">".$row['NomeRegione']."</option>";
		echo "<option value=\"".$row['Id']."\">".$row['NomeRegione']."</option>"; 
	}
	
	echo "</select>";
	
	mysqli_free_result($result);
	
	mysqli_close($mysqli);
	//return $htmlResult;
}


?>