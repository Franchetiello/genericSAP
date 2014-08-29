<?php
require_once ("Collection.php");

class EsperienzaProfessionale {
	// Membri

	// Proprietà

	// Costruttori
	public function __construct() {

	}

}

class EsperienzeProfessionali	extends Collection {
	// Metodi
	public function AddItem(EsperienzaProfessionale $Obj, $key= null){
		parent::addItem($Obj,$key);
	}
	
}

?>