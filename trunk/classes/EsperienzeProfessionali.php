<?php
require_once("config.php");
require_once("Collection.php");
require_once("AnagraficaAziende.php");

class EsperienzaProfessionale {
	// Membri
	protected $id;
	protected $refId;
	protected $azienda;
	protected $aziendaUtilizzatrice;
	protected $dataInizio;
	protected $dataFine;
	protected $dataFinePeriodoFormativo;
	protected $qualificaProfessionaleSvolta;
	protected $principaliMansioniResponsabilita;
	protected $contratto;
	protected $modalitaDiLavoro;
	protected $dataInizioValiditaModalita;
	protected $sedeDiLavoro;
	protected $dataInizioValiditaLuogo;
	// Proprietà
	public function GetId() {
		return $this -> id;
	}

	public function SetId($value) {
		$this -> id = $value;
	}
	
	public function GetRefId() {
		return $this -> refId;
	}

	public function SetRefId($value) {
		$this -> refId = $value;
	}
	
	public function GetAzienda() {
		return $this -> azienda;
	}

	public function SetAzienda(AnagrafeAzienda $value) {
		$this -> azienda = new AnagrafeAzienda($value);
	}
	
	public function GetAziendaUtilizzatrice() {
		return $this -> aziendaUtilizzatrice;
	}

	public function SetAziendaUtilizzatrice($value) {
		$this -> AziendaUtilizzatrice = new AnagrafeAzienda($value);
	}
	
	public function GetDataInizio() {
		return $this -> dataInizio;
	}

	public function SetDataInizio($value) {
		$this -> dataInizio = $value;
	}
	
	public function GetDataFine() {
		return $this -> dataFine;
	}

	public function SetDataFine($value) {
		$this -> dataFine = $value;
	}
	
	public function GetDataFinePeriodoFormativo() {
		return $this -> dataFinePeriodoFormativo;
	}

	public function SetDataFinePeriodoFormativo($value) {
		$this -> dataFinePeriodoFormativo = $value;
	}
	
	public function GeQualificaProfessionaleSvolta() {
		return $this -> qualificaProfessionaleSvolta;
	}

	public function SetQualificaProfessionaleSvolta(CodeValue $value) {
		$this -> qualificaProfessionaleSvolta = new CodeValue($value);
	}
	
	public function GetPrincipaliMansioniResponsabilita() {
		return $this -> principaliMansioniResponsabilita;
	}

	public function SetPrincipaliMansioniResponsabilita($value) {
		$this -> principaliMansioniResponsabilita = $value;
	}

		
	public function GetContratto() {
		return $this -> contratto;
	}

	public function SetContratto(Contratto $value) {
		$this -> id = new Contratto($value);
	}
	
	public function GetId() {
		return $this -> id;
	}

	public function SetId($value) {
		$this -> id = $value;
	}
	
	
	
	
	
	// Costruttori
	public function __construct() {

	}

		// Public Methods
	public function Load($Id) {
		$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		if ($mysqli -> connect_errno) {
			echo "Impossibile connettersi a MySQL: (" . $mysqli -> connect_errno . ") " . $mysqli -> connect_error;
		} else {
			$query = "SELECT 
									`per_titoli_studio`.`id`,
							    `per_titoli_studio`.`ref_id`,
							    `per_titoli_studio`.`livello_studio`,
							    `per_titoli_studio`.`corso_studio`,
							    `per_titoli_studio`.`descrizione`,
							    `per_titoli_studio`.`luogo_frequentazione`,
							    `per_titoli_studio`.`riconosciuto`,
							    `per_titoli_studio`.`conseguito`,
							    `per_titoli_studio`.`anno_conseguimento`,
							    `per_titoli_studio`.`voto_conseguito`,
							    `per_titoli_studio`.`ultimo_anno_frequenza`,
							    `per_titoli_studio`.`anno_frequenza`
								FROM 
									`per_titoli_studio`
								WHERE
									`per_titoli_studio`.`Id` = " . $Id . " LIMIT 1;";
			if ($result = mysqli_query($mysqli, $query)) {
				if (!mysqli_query($mysqli, "SET @a:='this will not work'")) {
					printf("Error: %s\n", mysqli_error($mysqli));
					mysqli_free_result($result);
				}
			}

			while ($row = mysqli_fetch_array($result)) {
				$this -> id = $row['Id'];
				$this -> refId = $row['ref_id'];
				$this -> livelloScolarizzazione = new CodeValue($row['livello_studio'], "", "");
				$this -> corsoDiStudio = new CodeValue($row['corso_studio'], "", "");
				$this -> descrizione = $row['Descrizione'];
				$this -> luogoFrequentazione = new CodeValue($row['luogo_frequentazione'], "", "");
				$this -> riconosciutoInItalia = $RiconosciutoInItalia;
				$this -> conseguito = $Conseguito;
				$this -> annoConseguimento = $AnnoConseguimento;
				$this -> votoConseguito = $VotoConseguito;
				$this -> ultimoAnnoFrequenza = $UltimoAnnoFrequenza;
				$this -> annoFrequenza = $AnnoFrequenza;
			}

		}
	}

	public function Store(PDO $Connection) {
		if ($this -> id > 0) {
			$_result = Update($Connection);
		} else {
			$_result = Insert($Connection);
		}

		return $_result;
	}

	// Protected Methods
	protected static function Insert(PDO $Connection) {
		$result = FALSE;
		
		try {
			$query = "INSERT INTO `per_titoli_studio`
									(`ref_id`,
									`livello_studio`,
									`corso_studio`,
									`descrizione`,
									`luogo_frequentazione`,
									`riconosciuto`,
									`conseguito`,
									`anno_conseguimento`,
									`voto_conseguito`,
									`ultimo_anno_frequenza`,
									`anno_frequenza`)
								VALUES
									(".$this->refId.",
									".$this->livelloScolarizzazione.",
									".$this->corsoDiStudio.",
									'".$this->descrizione."',
									".$this->luogoFrequentazione.",
									".$this->riconosciutoInItalia.",
									".$this->conseguito.",
									'".$this->annoConseguimento."',
									'".$this->votoConseguito."',
									'".$this->ultimoAnnoFrequenza."',
									'".$this->annoFrequenza."');";
			$stmt = $this -> conn -> prepare($query);
			$stmt -> execute();
			$stmt -> closeCursor();
			
			$this -> id = $stmt.lastInsertId();
			 
			$result = TRUE;
		} catch (exception $ex){							
			die("errore durante l'esecuzione dell'operazione '".$query."': ".$ex->getMessage());
		}
		return $result;
	}

	protected static function Update(PDO $Connection) {
		$result = FALSE;
		
		try {
			$query = "UPDATE `per_titoli_studio`
								SET
									`ref_id` = ".$this->refId.",
									`livello_studio` = ".$this->livelloScolarizzazione.",
									`corso_studio` = ".$this->corsoDiStudio.",
									`descrizione` = '".$this->descrizione."',
									`luogo_frequentazione` = ".$this->luogoFrequentazione.",
									`riconosciuto` = ".$this->riconosciutoInItalia.",
									`conseguito` = ".$this->conseguito.",
									`anno_conseguimento` = '".$this->annoConseguimento."',
									`voto_conseguito` = '".$this->votoConseguito."',
									`ultimo_anno_frequenza` = '".$this->ultimoAnnoFrequenza."',
									`anno_frequenza` = '".$this->annoFrequenza."'
								WHERE `Id` = ".$this->id.";";
			$stmt = $this -> conn -> prepare($query);
			$stmt -> execute();
			$stmt -> closeCursor();
					
			$result = TRUE;
		} catch (exception $ex){
			die("errore durante l'esecuzione dell'operazione '".$query."': ".$ex->getMessage());
		}
		return $result;		
	}
}

class EsperienzeProfessionali	extends Collection {
	// Metodi
	public function AddItem(EsperienzaProfessionale $Obj, $key= null){
		parent::addItem($Obj,$key);
	}
	
}

?>