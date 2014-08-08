<?php
require_once ('Anagrafe.php');
require_once ('RiferimentiGeografici.php');
require_once ('Recapiti.php');

class Sap{
	// members
	protected $id;
	protected $anagrafe;
	protected $riferimentiAmministrativi;
	protected $workHistoryInfos;
	protected $qualificationInfos;

	// constructors
	public function __construct() {
		$this->id = 0;
		$this->anagrafe = 0;
		$this->administrativeInfos = 0;
		$this->workHistoryInfos = 0;
		$this->qualificationInfos = 0;
	}
	
	// methods
	
}
?>