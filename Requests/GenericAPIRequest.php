<?php
require_once(__DIR__."/iAPIRequest.php");
require_once(__DIR__."/../ABClasses/CustomField.php");
require_once(__DIR__."/../ABClasses/DataFormatHelper.php");

class GenericAPIRequest implements iAPIRequest{
	
	public $requestParameters = array();
	public $path = "";
	public $customFields = array();
	
	public function setCustomField(CustomField $f){
		array_push($this->customFields,$f);
	}
	
	public function getPath(){
		return $this->path;
	}
	
	public function getRequestParameters(){
		return $this->path;
	}
	
}