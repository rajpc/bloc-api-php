<?php
require_once(__DIR__."/ABAPIHelper.php");
require_once(__DIR__."/ABClasses/CustomField.php");
require_once(__DIR__."/ABClasses/DataFormatHelper.php");
require_once(__DIR__."/Requests/policies/CreatePolicyAPIRequest.php");
require_once(__DIR__."/Requests/policies/UpdatePolicyAPIRequest.php");
require_once(__DIR__."/Requests/policies/DetailPolicyAPIRequest.php");
require_once(__DIR__."/Requests/policies/SearchPolicyAPIRequest.php");

//
/*
//Detail Request
$request = new DetailPolicyAPIRequest();

//substitute actual ids from your Agencybloc account here
$request->setPolicyID(1);

$apiHelper = new ABAPIHelper($request);
$response = $apiHelper->executeRequest();
var_dump(json_encode(json_decode($response), JSON_PRETTY_PRINT));
*/







//Search Request
/*
$request = new SearchPolicyAPIRequest();
$request->setPolicyNumber("123-policy-number");
$apiHelper = new ABAPIHelper($request);
$response = $apiHelper->executeRequest();
var_dump(json_encode(json_decode($response), JSON_PRETTY_PRINT));
*/







/*
// Create and Update test

//Create Policy Request
$request = new CreatePolicyAPIRequest();

//substitute actual ids from your Agencybloc account here
$request->setEntityID(1);
$request->setEntityTypeID('Individual');
$request->setPolicyCoverageType('Life');
$request->setPolicyStatus('In Force');

$request->setCarrier('Ab Carrier');


//Custom Fields

$cf = new CustomField("Dropdown");
$cf->setTextValue("2");
$request->setCustomField($cf);

$cf2 = new CustomField("Checkbox List");
$cf2->setCheckboxListValues([1,3]);
$request->setCustomField($cf2);

$cf3 = new CustomField("Date");
$cf3->setDateValue("3/4/2019");
$request->setCustomField($cf3);

$cf4 = new CustomField("Checkbox");
$cf4->setTextValue("1");
$request->setCustomField($cf4);

$cf5 = new CustomField("Text Area");
$cf5->setTextValue("A whole lotta text");
$request->setCustomField($cf5);


$cf6 = new CustomField("Text Field");
$cf6->setTextValue("A little text");
$request->setCustomField($cf6);


$cf7 = new CustomField("Number");
$cf7->setTextValue("123");
$request->setCustomField($cf7);

$cf8 = new CustomField("Currency");
$cf8->setTextValue("12.34");
$request->setCustomField($cf8);

$cf9 = new CustomField("Percent");
$cf9->setTextValue("1.2");
$request->setCustomField($cf9);
//End Custom Fields



$apiHelper = new ABAPIHelper($request);
$response = $apiHelper->executeRequest();
$response = $apiHelper->tryParseResponse($response,array('Status','policyID','Action'));



$created_id = 0;
if($response instanceof GenericAPISuccessResponse){
	
	$created_id = $response->{"Agencybloc Response"}->policyID;
	echo "Success: ";
	echo "Policy with ID: ".$response->{"Agencybloc Response"}->policyID." created";
	
} else if($response instanceof GenericAPIExceptionResponse){
	
	echo "Exception: ".$response->{"Agencybloc Response"}->Exception->Title."<BR>";
	
} else {
	
	echo "Error:";

}
*/






/*


//Upate Policy Request


//substitute actual ids from your Agencybloc account here
$created_id = 1;
if($created_id > 0){
	
	
	$request = new UpdatePolicyAPIRequest();
	$request->setPolicyID($created_id);
	$request->setPolicyNumber("ROFL-OMG_BBQ");
	
	$apiHelper = new ABAPIHelper($request);
	
	$response = $apiHelper->executeRequest();
	$response = $apiHelper->tryParseResponse($response,array('Status','policyID','Action'));

	if($response instanceof GenericAPISuccessResponse){
		
		$created_id = $response->{"Agencybloc Response"}->policyID;
		echo "Success: ";
		echo "Policy with ID: ".$response->{"Agencybloc Response"}->policyID." updated";
		
	} else if($response instanceof GenericAPIExceptionResponse){
		
		echo "Exception: ".$response->{"Agencybloc Response"}->Exception->Title."<BR>";
		
	} else {
		
		echo "Error:";

	}
}
*/