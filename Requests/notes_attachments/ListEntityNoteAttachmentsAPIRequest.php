<?php
require_once(__DIR__."/../GenericAPIRequest.php");

class ListEntityNoteAttachmentsAPIRequest extends GenericAPIRequest implements iAPIRequest{
	
	public $path = "/notes/list";
		
	
	public function getPath(){
		return $this->path;
	}
	
	public function getRequestParameters(){
		return $this->path;
	}
	
	public $requestParameters = array();
	
	public function setEntityID($val){
		$this->requestParameters['entity_ID'] = $val;
		
	}
	public function setEntityTypeID($val){
		$this->requestParameters['entity_Type'] = $val;
	}
	
	
}