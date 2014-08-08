<?php
class RiferimentoGeografico {
	// membri
	protected $idNazione;
	protected $idRegione;
	protected $idProvincia;
	protected $idComune;
	
	// proprietà
	public function GetIdNazione(){
		try {
			return $this->idNazione;	
		} catch (Exception $e){
			throw $e;			
		}
	}
	
	public function SetIdNazione($value){
		$this->idNazione = $value;
	}	
	
	public function GetIdRegione(){
		try {
			return $this->idRegione;
		} catch (Exception $e){
			throw $e;
		}
	}
	
	public function SetIdRegione($value){
		$this->idRegione = $value;
	}
	
	public function GetIdProvincia(){
		try {
			return $this->idProvincia;
		} catch (Exception $e){
			throw $e;
		}
	}
	
	public function SetIdProvincia($value){
		$this->idProvincia = $value;
	}
	
	public function GetIdComune(){
		try {
			return $this->idComune;
		} catch (Exception $e){
			throw $e;
		}
	}
	
	public function SetIdComune($value){
		$this->idComune = $value;
	}
	
	// costruttori
	public function __construct() {
		new RiferimentoGeografico ( "", "", "", "" );
	}
	
	public function __construct($IdRegione, $IdProvicia, $IdComune) {
		new RiferimentoGeografico ( "", $IdRegione, $IdProvicia, $IdComune );
	}
	
	public function __construct($IdNazione) {
		new RiferimentoGeografico ( $IdNazione, "", "", "" );
	}
	
	protected function __construct($IdNazione, $IdRegione, $IdProvicia, $IdComune) {
		$this->idNazione = $IdNazione;
		$this->idRegione = $IdRegione;
		$this->idProvincia = $IdProvincia;
		$this->idComune = $IdComune;
	}
	
	// metodi
	public function Validate($param) {
		return TRUE;
	}
}

class RifGeoConIndirizzo extends RiferimentoGeografico{
	// membri
	protected $indirizzo;
	
	// proprietà
	public function GetIndirizzo(){
		try {
			return $this->indirizzo;
		} catch (Exception $e){
			throw $e;
		}
	}
	
	public function SetIndirizzo($value){
		$this->indirizzo = $value;
	}
	
	// costruttori
	public function __construct($IdRegione, $IdProvicia, $IdComune, $Indirizzo)	{
		parent::__construct($IdRegione, $IdProvicia, $IdComune);
		$this->indirizzo = $Indirizzo;
	}
	
	public function __construct($Luogo){
		try {
			new RifGeoConIndirizzo($LuogoNascita->GetIdRegione(), $LuogoNascita->GetIdProvicia(), $LuogoNascita->GetIdComune(), $LuogoNascita->GetIndirizzo()); 
		} catch (Exception $e){
			throw $e;
		}
	}
	
	// metodi
	
}

?>