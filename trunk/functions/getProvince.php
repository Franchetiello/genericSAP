<?php
require_once('config.php');

if(isset($_GET['q'])){
	//$html2Result = "<li value=\"\">selezionare una regione..</li>";

	$query="SELECT 
						`diz_province`.`IdProvincia` As Id,
    				`diz_province`.`provincia_nome` As NomeProvincia
					FROM 
						`db_ebtt`.`diz_province`
					WHERE
						`diz_province`.`IdRegione` = ".$_GET['q'];

	if ($result = mysqli_query($mysqli, $query)) {

		if (!mysqli_query($mysqli, "SET @a:='this will not work'")) {
			printf("Error: %s\n", mysqli_error($mysqli));
			mysqli_free_result($result);
		}
	}

	$data = array();
	
	echo "<select class=\"form-control\" onchange=\"javascript:GetList('comuneNascita','getComuni',(this).value)\">";
	echo "<option value=\"\">selezionare una provincia di nascita..</option>";
	while ($row = mysqli_fetch_array($result)) {
		//$htmlResult .= "<option value=\"".$row['Id']."\">".$row['NomeRegione']."</option>";
		echo "<option value=\"".$row['Id']."\">".$row['NomeProvincia']."</option>";
	}

	echo "</select>";

	mysqli_free_result($result);

	mysqli_close($mysqli);
	//return $htmlResult;
}


?>