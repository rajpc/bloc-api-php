<?php


class GenericAPISuccessResponse{
	
	public function __construct() {
	
		$o = new stdClass();
		$o->Status  = 0;
		$o->Action = "";
        $this->{"Agencybloc Response"} = $o;
    }
	
	public function loadResponse($obj,$props){
		
		$o = $this->{"Agencybloc Response"};
		
		if(property_exists($obj,"Agencybloc Response")){
			$r =  $obj->{"Agencybloc Response"};
			foreach ($props as $key => $value) {
				if(property_exists($r,$value)){
					$o->$value = $r->$value;
				}
			}
		}
		
		$this->{"Agencybloc Response"} = $o;
	}
	
}