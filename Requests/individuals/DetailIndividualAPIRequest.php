<?php
require_once(__DIR__."/../GenericAPIRequest.php");

class DetailIndividualAPIRequest extends GenericAPIRequest implements iAPIRequest{
	
	public $path = "/individuals/detail";
		
	
	public function getPath(){
		return $this->path;
	}
	
	public function getRequestParameters(){
		return $this->path;
	}
	
	public $requestParameters = array();
	
	public function setIndividualID($val){
		$this->requestParameters['individualID'] = $val;
	}
	public function setIncludeActivities($val){
		$this->requestParameters['includeActivities'] = $val;
	}
	
}