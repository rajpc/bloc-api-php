<?php

//Where api_key, api_sid defined
require(__DIR__."/config.php");

require(__DIR__."/Requests/iAPIRequest.php");
require(__DIR__."/Requests/GenericAPIRequest.php");

require(__DIR__."/Responses/iAPIResponse.php");
require(__DIR__."/Responses/GenericAPIResponse.php");

require(__DIR__."/Responses/GenericAPIExceptionResponse.php");
require(__DIR__."/Responses/GenericAPISuccessResponse.php");


class ABAPIHelper{
	
	public $api_key = AB_API_KEY;
	public $api_sid = AB_API_SID;
	
	public $endpoint = "https://".AB_API_DOMAIN."/api/v1";
	
	public $request = null;
	
	public function __construct(iAPIRequest $_request){
		
		if($_request instanceof iAPIRequest){
			
			$this->request = $_request;
			$this->endpoint = $this->endpoint.$_request->getPath();
			
		} else {
			
			throw new Exception('Invalid Request Object');
			
		}
			
		
	}
	
	public function executeRequest(){
		
		
		$requestParameters = array(
		
			"sid" => $this->api_sid,
			"key" => $this->api_key
		
		);
		
		$curlParameters = array_merge($requestParameters,$this->request->requestParameters);
		$customParameters = array();
		
		foreach($this->request->customFields as $k => $customField){
		
			$customParameters[$customField->getName()] = $customField->getValue();
		
		}
		
		$curlParameters = array_merge($curlParameters,$customParameters);
		
		$ch = curl_init();
		
		curl_setopt($ch, CURLOPT_URL,$this->endpoint);
		curl_setopt($ch, CURLOPT_POST,1);
		curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($curlParameters));
		curl_setopt($ch, CURLOPT_HTTPHEADER,array("Content-Type: application/x-www-form-urlencoded"));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
		
		$response = curl_exec($ch);
		return $response;
	}
	
	public function tryParseResponse($response,$props){
		
		$returnObj = null;
		
		try {
			$returnObj = (json_decode($response));
			$successResp = new GenericAPISuccessResponse();
			$successResp->loadResponse($returnObj,$props);
			if($successResp->{"Agencybloc Response"}->Status == 200){
				$returnObj = $successResp;
			} else {
				$returnObj = null;
				Throw new Exception("Error reading API success response");
			}
		} catch (Exception $e) {
			$returnObj = null;	
		}
		
		if($returnObj == null){
			
			try {
					
				$returnObj = (json_decode($response));
				$failResp = new GenericAPIExceptionResponse();
				$failResp->loadResponse($returnObj);
				
				if($failResp->{"Agencybloc Response"}->Exception->Status > 0){
					$returnObj = $failResp;
				} else {
					Throw new Exception("Error reading API exception response");
				}
				
			} catch (Exception $e) {
				$returnObj = new GenericAPIExceptionResponse();			
			}			
			
			
		}
		return $returnObj;
	}
}