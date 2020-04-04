<?php
require_once(__DIR__."/ABAPIHelper.php");
require_once(__DIR__."/ABClasses/CustomField.php");
require_once(__DIR__."/ABClasses/DataFormatHelper.php");
require_once(__DIR__."/Requests/agents/CreateAgentAPIRequest.php");
require_once(__DIR__."/Requests/agents/UpdateAgentAPIRequest.php");
require_once(__DIR__."/Requests/agents/DetailAgentAPIRequest.php");
require_once(__DIR__."/Requests/agents/SearchAgentAPIRequest.php");

/*
//Detail Request
$request = new DetailAgentAPIRequest();

//substitute actual ids from your Agencybloc account here
$request->setAgentID(1);

$request->setIncludeActivities(1);
$apiHelper = new ABAPIHelper($request);
$response = $apiHelper->executeRequest();
print_r(json_encode(json_decode($response), JSON_PRETTY_PRINT));
*/





/*
//Search Request
$request = new SearchAgentAPIRequest();
$request->setFirstName("Quentin");
$apiHelper = new ABAPIHelper($request);
$response = $apiHelper->executeRequest();
var_dump(json_encode(json_decode($response), JSON_PRETTY_PRINT));
*/







//Create and Update test
/*
//Create Agent Request
$request = new CreateAgentAPIRequest();
$request->setFirstName('PHP Agent');
$request->setLastName('PHP Agent');

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
$response = $apiHelper->tryParseResponse($response,array('Status','agentID','Action'));


$created_id = 0;
if($response instanceof GenericAPISuccessResponse){
	
	$created_id = $response->{"Agencybloc Response"}->agentID;
	echo "Success: ";
	echo "Agent with ID: ".$response->{"Agencybloc Response"}->agentID." created";
	
} else if($response instanceof GenericAPIExceptionResponse){
	
	echo "Exception: ".$response->{"Agencybloc Response"}->Exception->Title."<BR>";
	
} else {
	
	echo "Error:";

}
*/





/*

//Upate Agent Request
//substitute actual ids from your Agencybloc account here

$created_id = 1;
if($created_id > 0){
	
	
	$request = new UpdateAgentAPIRequest();
	$request->setAgentID($created_id);
	$request->setFirstName("PHP Agent Updated");
	
	$apiHelper = new ABAPIHelper($request);
	
	$response = $apiHelper->executeRequest();
	$response = $apiHelper->tryParseResponse($response,array('Status','agentID','Action'));

	if($response instanceof GenericAPISuccessResponse){
		
		$created_id = $response->{"Agencybloc Response"}->agentID;
		echo "Success: ";
		echo "Agent with ID: ".$response->{"Agencybloc Response"}->agentID." updated";
		
	} else if($response instanceof GenericAPIExceptionResponse){
		
		echo "Exception: ".$response->{"Agencybloc Response"}->Exception->Title."<BR>";
		
	} else {
		
		echo "Error:";

	}
}
*/

