<?php
class CodeValue{
	// Membri
	protected $id;
	protected $code;
	protected $value;
	
	// Proprietà
	public function GetId(){
		return $this->id;
	}
	
	public function GetCode(){
		return $this->code;
	}
	
	public function GetValue(){
		return $this->value;
	}
	
	public function SetId($value){
		$this->id = $value;
	}
	
	public function SetCode($value){
		$this->code = $value;
	}
	
	public function SetValue($value){
		$this->value = $value;
	}
	
	// Costruttori
	public function __construct(){
		$this::CodeValue("","","");
	}
	
	public function __construct($Id, $Code, $Value){
		$this->id = $Id;
		$this->code = $Code;
		$this->value = $Value;
	}
	
	public function __construct(CodeValue $Obj){
		$this::CodeValue($Obj->GetId(), $Obj->GetCode(), $Obj->GetValue());
	}
}

?>