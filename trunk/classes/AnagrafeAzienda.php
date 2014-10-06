<?php
require_once ("CodeValue.php");
require_once ("RiferimentiGeografici.php");

class AnagrafeAzienda {
	// Membri
	protected $id;
	protected $codiceFiscale;
	protected $denominazione;
	protected $indirizzo;
	protected $idSettore;
	
	// Proprietà
	public function GetId() {
		return $this -> id;
	}

	public function SetId($value) {
		$this -> id = $value;
	}
	
public function GetCodiceFiscale() {
		return $this -> codiceFiscale;
	}

	public function SetCodiceFiscale($value) {
		$this -> codiceFiscale = $value;
	}
	
public function GetDenominazione() {
		return $this -> denominazione;
	}

	public function SetDenominazione($value) {
		$this -> denominazione = $value;
	}
	
public function GetIndirizzo() {
		return $this -> indirizzo;
	}

	public function SetIndirizzo(RifGeoConIndirizzo $value) {
		$this -> indirizzo = new RifGeoConIndirizzo($value);
	}
	
public function GetIdSettore() {
		return $this -> idSettore;
	}

	public function SetIdSettore(CodeValue $value) {
		$this -> idSettore = new CodeValue($value);
	}

	// Costruttori
	public function __construct(){
		$this = new AnagrafeAzienda(0, "", "", new RifGeoConIndirizzo(), new CodeValue());
	}
	
	
	public function __construct($Id, $CodiceFiscale, $Denominazione, RifGeoConIndirizzo $Indirizzo, CodeValue $IdSettore) {
		$this -> id = $Id;
		$this -> codiceFiscale = $CodiceFiscale;
		$this -> denominazione = $Denominazione;
		$this -> indirizzo = new RifGeoConIndirizzo($Indirizzo);
		$this -> idSettore = new CodeValue($IdSettore);
	}

	public function __construct(AnagrafeAzienda $value){
		$this = new AnagrafeAzienda($value->GetId(), $value->GetCodiceFiscale(), $value->GetIndirizzo(), $value->GetIdSettore()); 
	}
}

?>