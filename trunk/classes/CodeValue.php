<?php
class CodeValue{
	// Membri
	protected $code;
	protected $value;
	
	// Proprietà
	public function GetCode(){
		return $this->code;
	}
	
	public function GetValue(){
		return $this->value;
	}
	
	public function SetCode($value){
		$this->code = $value;
	}
	
	public function SetValue($value){
		$this->value = $value;
	}
	
	// Costruttori
	public function __construct(){
		$this::CodeValue("","");
	}
	
	public function __construct($Code, $Value){
		$this->code = $Code;
		$this->value = $Value;
	}
	
	public function __construct(CodeValue $Obj){
		$this::CodeValue($Obj->GetCode(), $Obj->GetValue());
	}
}

?>