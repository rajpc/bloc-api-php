<?php
require_once(__DIR__."/ABAPIHelper.php");
require_once(__DIR__."/ABClasses/CustomField.php");
require_once(__DIR__."/ABClasses/DataFormatHelper.php");
require_once(__DIR__."/Requests/notes_attachments/CreateNoteAttachmentAPIRequest.php");
require_once(__DIR__."/Requests/notes_attachments/ListEntityNoteAttachmentsAPIRequest.php");



//Create and Update test
//Create Note + Attachments Request


/*
$request = new CreateNoteAttachmentAPIRequest();

//substitute actual ids from your Agencybloc account here
$request->setEntityID(1);

$request->setEntityType('Agent');
for($i = 1;$i<6;$i++){
	
	$request->setNoteBody($i,'PHP Note (APPLE) '.$i);
	$request->setNoteSubject($i,'PHP Note (APPLE) '.$i);
	$request->setNotePinned($i,($i == 1));
	$request->setAttachFileToNote($i,1);
	for($fileNum = 1;$fileNum < 6;$fileNum++){
		
		//Example for setting a file from a URL
		//$request->setNoteAttachmentFileURL($i,$fileNum,'https://app.agencybloc.com/images/logo-agencybloc.svg');
		//$request->setNoteAttachmentFileName($i,$fileNum,'php-logo-agencybloc'.$i.'-'.$fileNum.'.svg');
		
		//Example for setting a file from a local file path
		$request->setNoteAttachmentFileBody($i,$fileNum,DataFormatHelper::attachmentFileBodyContentsFromPath(__DIR__."/apple.jpg"));
		$request->setNoteAttachmentFileName($i,$fileNum,'apple'.$i.'-'.$fileNum.'.jpg');
	}
}

$apiHelper = new ABAPIHelper($request);
$response = $apiHelper->executeRequest();
$response = $apiHelper->tryParseResponse($response,array('Status','note_ids','Action'));

if($response instanceof GenericAPISuccessResponse){
	
	$created_ids = $response->{"Agencybloc Response"}->note_ids;
	echo "Success: ";
	echo "Notes created  with IDs: ";
	foreach($created_ids as $key => $value){
			echo "<BR>".$value;
	}
} else if($response instanceof GenericAPIExceptionResponse){
	
	echo "Exception: ".$response->{"Agencybloc Response"}->Exception->Title."<BR>";
	
} else {
	
	echo "Error:";

}

*/









/*
//List Entity Notes Request
	
	
	$request = new ListEntityNoteAttachmentsAPIRequest();
	$request->setEntityID(1);
	$request->setEntityTypeID('Agent');
	
	$apiHelper = new ABAPIHelper($request);
	
	$response = $apiHelper->executeRequest();
	print_r($response);
//	var_dump(json_encode(json_decode($response), JSON_PRETTY_PRINT));

*/