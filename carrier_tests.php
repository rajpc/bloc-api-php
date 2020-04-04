<?php
require_once(__DIR__."/ABAPIHelper.php");
require_once(__DIR__."/ABClasses/CustomField.php");
require_once(__DIR__."/ABClasses/DataFormatHelper.php");
require_once(__DIR__."/Requests/carriers/SearchCarrierAPIRequest.php");

/*

//Search Request
$request = new SearchCarrierAPIRequest();
$request->setCarrierName("Ab Carrier");
$apiHelper = new ABAPIHelper($request);
$response = $apiHelper->executeRequest();
var_dump(json_encode(json_decode($response), JSON_PRETTY_PRINT));


*/