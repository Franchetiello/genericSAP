<?php
$menu = array();

$menu[0] = array( "name" => "menuSection01", "description" => "dati personali", "page" => "sapSection01.php", "target" => "_self");
$menu[1] = array( "name" => "menuSection02", "description" => "recapiti", "page" => "sapSection02.php", "target" => "_self");
$menu[2] = array( "name" => "menuSection03", "description" => "istruzione e formazione", "page" => "sapSection03.php", "target" => "_self");
$menu[3] = array( "name" => "menuSection04", "description" => "competenze", "page" => "sapSection04.php", "target" => "_self");
$menu[4] = array( "name" => "menuSection05", "description" => "esperienze professionali", "page" => "sapSection05.php", "target" => "_self");


function DisplayMenu($Active) {
	global $menu;
	
	
	echo "<div class=\"navbar-collapse collapse\">";
	echo "<ul class=\"nav navbar-nav\">";
	for ($i = 0; $i < count($menu); $i++){
		$classValue = (($menu[$i]["name"] == $Active) ? "class=\"active\"" : "");
		echo "<li id=\"" . $menu[$i]["name"] . "\" " . $classValue . "><a href=\"" . $menu[$i]["page"] . "\" target=\"" . $menu[$i]["target"] . "\">" .  $menu[$i]["description"] . "</a></li>";
	}
	echo "</ul>";
	echo "</div>";
}
?>