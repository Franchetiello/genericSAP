<?php
require_once ("CodeValue.php");
require_once ("RiferimentiGeografici.php");

class Anagrafe {
	// Membri
	protected $id;
	protected $nome;
	protected $cognome;
	protected $codiceFiscale;
	protected $luogoNascita;
	protected $dataNascita;
	protected $genere;
	protected $cittadinanza;

	// Proprietà
	public function GetId() {
		return $this -> id;
	}

	public function SetId($value) {
		$this -> id = $value;
	}
	
public function GetNome() {
		return $this -> nome;
	}

	public function SetNome($value) {
		$this -> nome = $value;
	}
	
public function GetCognome() {
		return $this -> cognome;
	}

	public function SetCognome($value) {
		$this -> cognome = $value;
	}
	
public function GetCodiceFiscale() {
		return $this -> codiceFiscale;
	}

	public function SetCodiceFiscale($value) {
		$this -> codiceFiscale = $value;
	}
	
public function GetLuogoNascita() {
		return $this -> luogoNascita;
	}

	public function SetLuogoNascita(RiferimentoGeografico $value) {
		$this -> luogoNascita = new RiferimentoGeografico($value);
	}
	
public function GetId() {
		return $this -> id;
	}

	public function SetId($value) {
		$this -> id = $value;
	}
	
public function GetId() {
		return $this -> id;
	}

	public function SetId($value) {
		$this -> id = $value;
	}
	

	// Costruttori
	public function __construct($Id, $Nome, $Cognome, $CodiceFiscale, RiferimentoGeografico $LuogoNascita, $DataNascita, CodeValue $Genere, CodeValue $Cittadinanza) {
		$this -> id = $Id;
		$this -> nome = $Nome;
		$this -> cognome = $Cognome;
		$this -> codiceFiscale = $CodiceFiscale;
		$this -> luogoNascita = new RiferimentoGeografico($LuogoNascita);
		$this -> dataNascita = $DataNascita;
		$this -> genere = new CodeValue($Genere);
		$this -> cittadinanza = new CodeValue($Cittadinanza);
	}

}
?>