<?php
function DisplayMenu() {
	$menu = array();
	
	$menu[0] = array( "name" => "menuSection01", "description" => "anagrafe", "page" => "sapSection01.php", "target" => "_blank");
	$menu[1] = array( "name" => "menuSection02", "description" => "recapiti", "page" => "sapSection02.php", "target" => "_blank");
	$menu[2] = array( "name" => "menuSection03", "description" => "titoli di studio", "page" => "sapSection03.php", "target" => "_blank");
	$menu[3] = array( "name" => "menuSection04", "description" => "Sezione 4", "page" => "sapSection04.php", "target" => "_blank");
	$menu[4] = array( "name" => "menuSection05", "description" => "Sezione 5", "page" => "sapSection05.php", "target" => "_blank");
	
	echo "<div class=\"navbar-collapse collapse\">";
	echo "<ul class=\"nav navbar-nav\">";
	for ($i = 0; $i < count($menu); $i++){
		$classValue = ((false) ? "class=\"active\"" : "");
		echo "<li id=\"" . $menu[$i]["name"] . "\" " . $classValue . "><a href=\"" . $menu[$i]["page"] . "\" target=\"" . $menu[$i]["target"] . "\">" .  $menu[$i]["description"] . "</a></li>";
	}
	echo "</ul>";
	echo "</div>";
}
?>