<?php
require_once("config.php");
require_once("Collection.php");

class TitoloStudio {
	// Membri
	protected $id;
	protected $refId;
	protected $livelloScolarizzazione;
	protected $corsoDiStudio;
	protected $descrizione;
	protected $luogoFrequentazione;
	protected $riconosciutoInItalia;
	protected $conseguito;
	protected $annoConseguimento;
	protected $votoConseguito;
	protected $ultimoAnnoFrequenza;
	protected $annoFrequenza;

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

	public function GetLivelloScolarizzazione() {
		return $this -> livelloScolarizzazione;
	}

	public function SetLivelloScolarizzazione($value) {
		$this -> livelloScolarizzazione = $value;
	}

	public function GetCorsoDiStudio() {
		return $this -> corsoDiStudio;
	}

	public function SetCorsoDiStudio($value) {
		$this -> corsoDiStudio = $value;
	}

	public function GetDescrizione() {
		return $this -> descriziome;
	}

	public function SetDescrizione($value) {
		$this -> descrizione = $value;
	}

	public function GetLuogoFrequentazione() {
		return $this -> luogoFrequentazione;
	}

	public function SetLuogoFrequentazione($value) {
		$this -> luogoFrequentazione = $value;
	}

	public function GetRiconosciutoInItalia() {
		return $this -> riconosciutoInItalia;
	}

	public function SetRiconosciutoInItalia($value) {
		$this -> riconosciutoInItalia = $value;
	}

	public function GetConseguito() {
		return $this -> conseguito;
	}

	public function SetConseguito($value) {
		$this -> conseguito = $value;
	}

	public function GetAnnoConseguimento() {
		return $this -> annoConseguimento;
	}

	public function SetAnnoConseguimento($value) {
		$this -> annoConseguimento = $value;
	}

	public function GetVotoConseguito() {
		return $this -> votazioneConseguito;
	}

	public function SetVotoConseguito($value) {
		$this -> votoConseguito = $value;
	}

	public function GetUltimoAnnoFrequenza() {
		return $this -> ultimoAnnoFrequenza;
	}

	public function SetUltimoAnnoFrequenza($value) {
		$this -> ultimoAnnoFrequenza = $value;
	}

	public function GetAnnoFrequenza() {
		return $this -> annoFrequenza;
	}

	public function SetAnnoFrequenza($value) {
		$this -> annoFrequenza = $value;
	}

	// Costruttori
	public function __construct($Id, $RefId, CodeValue $LivelloScolarizzazione, CodeValue $CorsoDiStudio, $Descrizione, CodeValue $LuogoFrequentazione, $RiconosciutoInItalia, $Conseguito, $AnnoConseguimento, $VotoConseguito, $UltimoAnnoFrequenza, $AnnoFrequenza) {
		$this -> id = $Id;
		$this -> refId = $RefId;
		$this -> livelloScolarizzazione = new CodeValue($LivelloScolarizzazione);
		$this -> corsoDiStudio = new CodeValue($CorsoDiStudio);
		$this -> descrizione = $Descrizione;
		$this -> luogoFrequentazione = new CodeValue($LuogoFrequentazione);
		$this -> riconosciutoInItalia = $RiconosciutoInItalia;
		$this -> conseguito = $Conseguito;
		$this -> annoConseguimento = $AnnoConseguimento;
		$this -> votoConseguito = $VotoConseguito;
		$this -> ultimoAnnoFrequenza = $UltimoAnnoFrequenza;
		$this -> annoFrequenza = $AnnoFrequenza;
	}

	public function __construct() {
		$this::TitoloStudio(0, 0, new CodeValue(), new CodeValue(), "", new CodeValue(), False, False, 0, 0, 0, 0);
	}

	public function __construct(TitoloStudio $Obj) {
		$this::TitoloStudio($Obj -> GetId(), $Obj -> GetRefId(), $Obj -> GetLivelloScolarizzazione(), $Obj -> GetCorsoDiStudio(), $Obj -> GetDescrizione(), $Obj -> GetLuogoFrequentazione(), $Obj -> GetRiconosciutoInItalia(), $Obj -> GetConseguito(), $Obj -> GetAnnoConseguimento(), $Obj -> GetVotoConseguito(), $Obj -> GetUltimoAnnoFrequenza(), $Obj -> GetAnnoFrequenza());
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

	public function Store() {
		if ($this -> id > 0) {
			$_result = Update();
		} else {
			$_result = Insert();
		}

		return $_result;
	}

	// Protected Methods
	protected static function Insert($Connection) {
		$result = FALSE;
		$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		if ($mysqli -> connect_errno) {
			echo "Impossibile connettersi a MySQL: (" . $mysqli -> connect_errno . ") " . $mysqli -> connect_error;
		} else {
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
									
			if ($result = mysqli_query($mysqli, $query)) {
				if (!mysqli_query($mysqli, "SET @a:='this will not work'")) {
					printf("Error: %s\n", mysqli_error($mysqli));
					mysqli_free_result($result);
				}
			}
		}
		return $result;
	}

	protected static function Update(PDO $Connection) {
		$result = FALSE;
		// $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
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
				
					
			if ($result = mysqli_query($mysqli, $query)) {
				if (!mysqli_query($mysqli, "SET @a:='this will not work'")) {
					printf("Error: %s\n", mysqli_error($mysqli));
					mysqli_free_result($result);
				}
			}
		
		} catch (exception $ex){
			
			
		}
		return $result;		
	}

}

class TitoliStudio	extends Collection {
	// Metodi
	public function AddItem(TitoloStudio $Obj, $key = null) {
		parent::addItem($Obj, $key);
	}

}
?>