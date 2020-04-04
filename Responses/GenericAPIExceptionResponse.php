<?php


class GenericAPIExceptionResponse{
	
	public function __construct() {
	
		$o = new stdClass();
		$o->Exception = new stdClass();
		$o->Exception->Status  = 0;
		$o->Exception->Title = "Request Exception";
		$o->Exception->Message = "Request Exception";
        $this->{"Agencybloc Response"} = $o;
    }
	
	public function loadResponse($obj){
		
		$o = $this->{"Agencybloc Response"};
		
		if(property_exists($obj,"Agencybloc Response")){
			
			$r =  $obj->{"Agencybloc Response"};
			
			if(property_exists($r,"Exception")){
				
				if(property_exists($r->Exception,"Status")){
					$o->Exception->Status = $r->Exception->Status;
				}
				if(property_exists($r->Exception,"Title")){
					$o->Exception->Title = $r->Exception->Title;
				}
				if(property_exists($r->Exception,"Message")){
					$o->Exception->Message = $r->Exception->Message;
				}
			}
		}
		$this->{"Agencybloc Response"} = $o;
		
	}
	
}