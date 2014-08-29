<?php
require_once ("Anagrafe.php");
require_once ("Recapiti.php");
require_once ("RiferimentiAmministrativi.php");
require_once ("EsperienzeProfessionali.php");

class Sap{
	// Membri
	protected $id;
	protected $anagrafe;
	protected $anagrafeEstera;
	protected $recapiti;
	protected $riferimentiAmministrativi;
	protected $istruzioneFormazione;
	protected $esperienzeProfessionali;
	protected $qualificationInfos;

	// Proprietà
	
	// Costruttori
	public function __construct() {
		$this->id = 0;
		$this->anagrafe = new Anagrafe();
		$this->anagrafeEstera = new AnagrafeEstera();
		$this->recapiti = new Recapiti();
		$this->riferimentiAmministrativi = new RiferimentiAmministrativi();
		$this->esperienzeProfessionali = new EsperienzeProfessionali();
		$this->qualificationInfos = 0;
	}
	
	
	
}
?>