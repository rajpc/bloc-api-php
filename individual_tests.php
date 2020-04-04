<?php
require_once(__DIR__."/ABAPIHelper.php");
require_once(__DIR__."/ABClasses/CustomField.php");
require_once(__DIR__."/ABClasses/DataFormatHelper.php");
require_once(__DIR__."/Requests/individuals/CreateIndividualAPIRequest.php");
require_once(__DIR__."/Requests/individuals/UpdateIndividualAPIRequest.php");
require_once(__DIR__."/Requests/individuals/DetailIndividualAPIRequest.php");
require_once(__DIR__."/Requests/individuals/SearchIndividualAPIRequest.php");





/*
//Detail Request
$request = new DetailIndividualAPIRequest();

//substitute actual ids from your Agencybloc account here
$request->setIndividualID(1);

$request->setIncludeActivities(true);
$apiHelper = new ABAPIHelper($request);
$response = $apiHelper->executeRequest();
var_dump(json_encode(json_decode($response), JSON_PRETTY_PRINT));
*/





/*
//Search Request

$request = new SearchIndividualAPIRequest();
$request->setFirstName("Nancy");
$apiHelper = new ABAPIHelper($request);
$response = $apiHelper->executeRequest();
var_dump(json_encode(json_decode($response), JSON_PRETTY_PRINT));
*/





/*
// Create and Update test

//Create Individual Request
$request = new CreateIndividualAPIRequest();
$request->setFirstName('First Name');
$request->setLastName('Last Name');

$request->setHomePhone(DataFormatHelper::formatPhoneValue("1238675309"));

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

$apiHelper = new ABAPIHelper($request);
$response = $apiHelper->executeRequest();
$response = $apiHelper->tryParseResponse($response,array('Status','individualID','Action'));


$created_id = 0;
if($response instanceof GenericAPISuccessResponse){
	
	$created_id = $response->{"Agencybloc Response"}->individualID;
	echo "Success: ";
	echo "Individual with ID: ".$response->{"Agencybloc Response"}->individualID." created";
	
} else if($response instanceof GenericAPIExceptionResponse){
	
	echo "Exception: ".$response->{"Agencybloc Response"}->Exception->Title."<BR>";
	
} else {
	
	echo "Error:";

}
*/







//Upate Individual Request
/*

if($created_id > 0){
	
	
	$request = new UpdateIndividualAPIRequest();
	$request->setIndividualID($created_id);
	$request->setFirstName("First Name zzz2");
	
	$apiHelper = new ABAPIHelper($request);
	
	$response = $apiHelper->executeRequest();
	$response = $apiHelper->tryParseResponse($response,array('Status','individualID','Action'));

	if($response instanceof GenericAPISuccessResponse){
		
		$created_id = $response->{"Agencybloc Response"}->individualID;
		echo "Success: ";
		echo "Individual with ID: ".$response->{"Agencybloc Response"}->individualID." updated";
		
	} else if($response instanceof GenericAPIExceptionResponse){
		
		echo "Exception: ".$response->{"Agencybloc Response"}->Exception->Title."<BR>";
		
	} else {
		
		echo "Error:";

	}
}
*/