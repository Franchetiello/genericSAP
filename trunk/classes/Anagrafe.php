<?php
require_once("RiferimentiGeografici.php");

class Anagrafe{
	// membri
	protected $id;
	protected $nome;
	protected $cognome;
	protected $codiceFiscale;
	protected $luogoNascita;
	protected $dataNascita;
	protected $genere;
	
	// costruttori
	public function __construct($Id, $Nome, $Cognome, $CodiceFiscale,RiferimentoGeografico $LuogoNascita, $DataNascita, $Genere){
		$this->id = $Id;
		$this->nome = $Nome;
		$this->cognome = $Cognome;
		$this->codiceFiscale = $CodiceFiscale;
		$this->luogoNascita = new RiferimentoGeografico($LuogoNascita);
		$this->dataNascita = $DataNascita;
		$this->genere = $Genere;
	}
	
}

?>