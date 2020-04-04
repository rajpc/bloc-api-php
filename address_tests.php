<?php
require_once(__DIR__."/ABAPIHelper.php");
require_once(__DIR__."/ABClasses/CustomField.php");
require_once(__DIR__."/ABClasses/DataFormatHelper.php");
require_once(__DIR__."/Requests/addresses/CreateAddressAPIRequest.php");
require_once(__DIR__."/Requests/addresses/UpdateAddressAPIRequest.php");
require_once(__DIR__."/Requests/addresses/DeleteAddressAPIRequest.php");




/* Create and Update test

//Create Address Request
$request = new CreateAddressAPIRequest();


//substitute actual ids from your Agencybloc account here
$request->setEntityID(1);

$request->setEntityType('Agent');
$request->setAddrType("Home");
$request->setStreet1("123 N 4th Street");
$request->setStreet2("");
$request->setCity("Fargo");
$request->setStateAbbrev("ND");
$request->setZip("58103");
$apiHelper = new ABAPIHelper($request);
$response = $apiHelper->executeRequest();

$created_id = 0;
if($response instanceof GenericAPISuccessResponse){
	
	$created_id = $response->{"Agencybloc Response"}->addressID;
	echo "Success: ";
	echo "Address with ID: ".$response->{"Agencybloc Response"}->addressID." created";
	
} else if($response instanceof GenericAPIExceptionResponse){
	
	echo "Exception: ".$response->{"Agencybloc Response"}->Exception->Title."<BR>";
	
} else {
	
	echo "Error:";

}
*/




//Upate Address Request
/*

//substitute actual ids from your Agencybloc account here

$created_id = 1;

if($created_id > 0){
	
	
	$request = new UpdateAddressAPIRequest();
	$request->setAddressID($created_id);
	$request->setAddrType("Home");
	$request->setStreet1("123 N 4th Street");
	$request->setStreet2("Updated");
	$request->setCity("Fargo");
	$request->setStateAbbrev("ND");
	$request->setZip("58103");
	$apiHelper = new ABAPIHelper($request);
	
	$response = $apiHelper->executeRequest();
	$response = $apiHelper->tryParseResponse($response,array('Status','addressID','Action'));

	if($response instanceof GenericAPISuccessResponse){
		
		$created_id = $response->{"Agencybloc Response"}->addressID;
		echo "Success: ";
		echo "Address with ID: ".$response->{"Agencybloc Response"}->addressID." updated";
		
	} else if($response instanceof GenericAPIExceptionResponse){
		
		echo "Exception: ".$response->{"Agencybloc Response"}->Exception->Title."<BR>";
		
	} else {
		
		echo "Error:";

	}
}
*/
