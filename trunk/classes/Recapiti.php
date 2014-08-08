<?php
class Recapiti{
	// membri
	protected $recapitiTelefonici;
	protected $recapitiemail;
	protected $residenza;
	protected $domicilio;
	// proprietà
	
	// costruttori
	public function __construct(){
		//new Recapiti()
	}
	
	public function __construct($RecapitiTelefonici, $RecapitiEmail, $Residenza, $Domicilio){
		
	}
	
	public function __construct(Recapiti $Recapiti){
		try {
			//new Recapiti($Recapiti)
		} catch (Exception $e){
			
		}
	}
	
	// metodi
	
}


?>