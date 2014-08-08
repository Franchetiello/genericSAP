<?php
require_once('Collection.php');

class RecapitoTelefonico {
	// membri
	protected $id;
	protected $chiave;
	protected $valore;
	
	// proprietà
	public function GetIdRecapito() {
		try {
			return $this->id;
		} catch ( Exception $e ) {
			throw $e;
		}
	}
	public function SetIdRecapito($value) {
		$this->id = $value;
	}
	public function GetChiaveRecapito() {
		try {
			return $this->chiave;
		} catch ( Exception $e ) {
			throw $e;
		}
	}
	public function SetChiaveRecapito($value) {
		$this->chiave = $value;
	}
	public function GetValoreRecapito() {
		try {
			return $this->valore;
		} catch ( Exception $e ) {
			throw $e;
		}
	}
	public function SetValoreRecapito($value) {
		$this->valore = $value;
	}
	
	// costruttori
	public function __construct(){
		new RecapitoTelefonico("", "", "");	
	}
	
	public function __construct($Id, $Chiave, $Valore){
		$this->id = $Id;
		$this->chiave = $Chiave;
		$this->valore = $Valore; 
	}
	
	public function __construct(RecapitoTelefonico $Object){
		new RecapitoTelefonico($Object->GetIdRecapito(), $Object->GetChiaveRecapito(), $Object->GetChiaveRecapito());
	}
	
	// metodi
	
}

class RecapitiTelefonici extends Collection{
	public function addItem(RecapitoTelefonico $obj, $key = null) {
		parent::addItem($obj, $key);
	}
}  
?>