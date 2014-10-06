<?php

class Contratto{
	// Membri
	protected $tipoDiContratto;
	protected $categoriaDiInquadramento;
	protected $assunzioneL_68;
	protected $lavoratoreInMobilita;
	protected $lavoroStagionale;
	protected $lavoroInAgricoltura;
	protected $dataInizioValidita;
	
	// Proprietà
	public function GetTipoDiContratto() {
		return $this -> tipoDiContratto;
	}

	public function SetTipoDiContratto(CodeValeu $value) {
		$this -> tipoDiContratto = new CodeValue($value);
	}
	
	public function GetCategoriaDiInquadramento() {
		return $this -> categoriaDiInquadramento;
	}

	public function SetCategoriaDiInquadramento(CodeValue $value) {
		$this -> categoriaDiInquadramento = new CodeValue($value);
	}
	
	public function GetAssunzioneL_68() {
		return $this -> assunzioneL_68;
	}

	public function SetAssunzioneL_68($value) {
		$this -> assunzioneL_68 = $value;
	}
	
	public function GetLavoratoreInMobilita() {
		return $this -> lavoratoreInMobilita;
	}

	public function SetLavoratoreInMobilita($value) {
		$this -> lavoratoreInMobilita = $value;
	}

	public function GetLavoroStagionale() {
		return $this -> lavoroStagionale;
	}

	public function SetLavoroStagionale($value) {
		$this -> lavoroStagionale = $value;
	}

	public function GetLavoroInAgricoltura() {
		return $this -> lavoroInAgricoltura;
	}

	public function SetLavoroInAgricoltura($value) {
		$this -> lavoroInAgricoltura = $value;
	}

	public function GetDataInizioValidita() {
		return $this -> dataInizioValidita;
	}

	public function SetDataInizioValidita($value) {
		$this -> dataInizioValidita = $value;
	}
	
	// Costruttori
 	public function __construct(){
		$this = new Contratto(new CodeValue(), new CodeValue(), FALSE, FALSE, FALSE, FALSE, null);
	}

	public function __construct(CodeValue $TipoDiContratto, CodeValue $CategoriaDiInquadramento, $AssunzioneL_68, $LavoratoreInMobilita, $LavoroStagionale, $LavoroInAgricoltura, $DataInizioValidita){
		$this -> tipoDiContratto = new CodeValue($TipoDiContratto);
		$this -> categoriaDiInquadramento = new CodeValue($CategoriaDiInquadramento);
		$this -> assunzioneL_68 = $AssunzioneL_68;
		$this -> lavoratoreInMobilita = $LavoratoreInMobilita;
		$this -> lavoroStagionale = $LavoroStagionale;
		$this -> lavoroInAgricoltura = $LavoroInAgricoltura;
		$this -> dataInizioValidita = $DataInizioValidita;
	}

	public function __construct(Contratto $value){
		$this = new Contratto($value->GetTipoDiContratto(), $value->GetCategoriaDiInquadramento(), $value->GetAssunzioneL_68,$value->GetLavoratoreInMobilita,$value->GetLavoroStagionale,$value->GetLavoroInAgricoltura,$value->GetDtaInizioValidita);
	}
	
	
}
?>