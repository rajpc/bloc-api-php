<?php
require_once(__DIR__."/../GenericAPIRequest.php");

class ListEntityActivityAPIRequest extends GenericAPIRequest implements iAPIRequest{
	
	public $path = "/activities/list";
		
	
	public function getPath(){
		return $this->path;
	}
	
	public function getRequestParameters(){
		return $this->path;
	}
	
	public $requestParameters = array();
	
	public function setEntityID($val){
		$this->requestParameters['entityID'] = $val;
		
	}
	public function setEntityTypeID($val){
		$this->requestParameters['entityTypeID'] = $val;
	}
	
	
}