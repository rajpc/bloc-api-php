<?php
require_once(__DIR__."/ABAPIHelper.php");

require_once(__DIR__."/ABClasses/CustomField.php");
require_once(__DIR__."/ABClasses/DataFormatHelper.php");
require_once(__DIR__."/Requests/activities/CreateActivityAPIRequest.php");
require_once(__DIR__."/Requests/activities/ListActivityAPIRequest.php");
require_once(__DIR__."/Requests/activities/ListEntityActivityAPIRequest.php");

/*

//Create and Update test

//Create Agent Request
$request = new CreateActivityAPIRequest();

//substitute actual ids from your Agencybloc account here
$request->setEntityID(1);

$request->setEntityTypeID('Agent');
$request->setStatusLookupID('In Progress');
$request->setTypeLookupID('Enrollment');
$request->setMethodLookupID('Email');
$request->setSubject('PHP Activity 03/25/2020');
$request->setNotes('PHP Notes 03/25/2020');
$request->setActivityDate('03/25/2020');
$apiHelper = new ABAPIHelper($request);
$response = $apiHelper->executeRequest();
$response = $apiHelper->tryParseResponse($response,array('Status','activityID','Action'));


$created_id = 0;
if($response instanceof GenericAPISuccessResponse){
	
	$created_id = $response->{"Agencybloc Response"}->activityID;
	echo "Success: ";
	echo "Activity with ID: ".$response->{"Agencybloc Response"}->activityID." created";
	
} else if($response instanceof GenericAPIExceptionResponse){
	
	echo "Exception: ".$response->{"Agencybloc Response"}->Exception->Title."<BR>";
	
} else {
	
	echo "Error:";

}
*/





//List Entity Activities Request

/*
	
	
	$request = new ListEntityActivityAPIRequest();
	
	//substitute actual ids from your Agencybloc account here
	$request->setEntityID(1);
	$request->setEntityTypeID('Agent');
	
	$apiHelper = new ABAPIHelper($request);
	
	$response = $apiHelper->executeRequest();
	
	var_dump(json_encode(json_decode($response), JSON_PRETTY_PRINT));

*/






//List Activities By Activity IDs Request
	
/*
	$request = new ListActivityAPIRequest();
	
	//substitute actual ids from your Agencybloc account here
	$request->setActivityIDs("1,2");
	
	$apiHelper = new ABAPIHelper($request);
	
	$response = $apiHelper->executeRequest();
	print_r($response);

*/