<?php
require_once ("CodeValue.php");
require_once ("RiferimentiGeografici.php");

class Anagrafe {
	// membri
	protected $id;
	protected $nome;
	protected $cognome;
	protected $codiceFiscale;
	protected $luogoNascita;
	protected $dataNascita;
	protected $genere;
	protected $cittadinanza;

	// costruttori
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