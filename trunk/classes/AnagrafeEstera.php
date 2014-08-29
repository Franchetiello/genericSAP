<?php
require_once("CodeValue.php");

class AnagrafeEstera {
	// Membri
	protected $titoloSoggiorno;
	protected $numeroTitoloSoggiorno;
	protected $motivoTitoloSoggiorno;
	protected $scadenzaTitoloSoggiorno;
	protected $dataUltimaIscrizione;

	// Proprietà
	public function GetTitoloSoggiorno() {
		return $this -> titoloSoggiorno;
	}

	public function GetNumeroTitoloSoggiorno() {
		return $this -> titoloSoggiorno;
	}

	public function GetMotivoTitoloSoggiorno() {
		return $this -> titoloSoggiorno;
	}

	public function GetScadenzaTitoloSoggiorno() {
		return $this -> titoloSoggiorno;
	}

	public function GetDataUltimaIscrizione() {
		return $this -> titoloSoggiorno;
	}

	public function SetTitoloSoggiorno($Value) {
		$this -> titoloSoggiorno = $Value;
	}

	public function SetNumeroTitoloSoggiorno($Value) {
		$this -> titoloSoggiorno = $Value;
	}

	public function SetMotivoTitoloSoggiorno($Value) {
		$this -> titoloSoggiorno = $Value;
	}

	public function SetScadenzaTitoloSoggiorno($Value) {
		$this -> titoloSoggiorno = $Value;
	}

	public function SetDataUltimaIscrizione($Value) {
		$this -> titoloSoggiorno = $Value;
	}

	// Costruttori
	public function __construct() {
		$this::AnagrafeEstera(new CodeValue(), "", new CodeValue(), new DateTime(), new DateTime());
	}

	public function __construct(CodeValue $TitoloSoggiorno, $NumeroTitoloSoggiorno, CodeValue $MotivoTitoloSoggiorno, DateTime $ScadenzaTitoloSoggiorno, DateTime $DataUltimaIscrizione) {
		$this -> titoloSoggiorno = new CodeValue($TitoloSoggiorno);
		$this -> numeroTitoloSoggiorno = $NumeroTitoloSoggiorno;
		$this -> motivoTitoloSoggiorno = new CodeValue($MotivoTitoloSoggiorno);
		$this -> scadenzaTitoloSoggiorno = $ScadenzaTitoloSoggiorno;
		$this -> dataUltimaIscrizione = $DataUltimaIscrizione;
	}

	public function __construct(AnagrafeEstera $Obj) {
		$this::AnagrafeEstera($Obj -> GetTitoloSoggiorno(), $Obj -> GetNumeroTitoloSoggiorno(), $Obj -> GetMotivoTitoloSoggiorno(), $Obj -> GetScadenzaTitoloSoggiorno(), $Obj -> GetDataUltimaIscrizione());
	}

}
?>