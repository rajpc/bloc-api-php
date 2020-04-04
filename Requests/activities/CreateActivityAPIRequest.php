<?php
require_once(__DIR__."/../GenericAPIRequest.php");

class CreateActivityAPIRequest extends GenericAPIRequest implements iAPIRequest{
	
	public $path = "/activities/create";
		
	
	public function getPath(){
		return $this->path;
	}
	
	public function getRequestParameters(){
		return $this->path;
	}
	
	public $requestParameters = array();
	
	public function setEntityID($val){
		$this->requestParameters['entityID'] = $val;
		
	}
	public function setEntityTypeID($val){
		$this->requestParameters['entityTypeID'] = $val;
	}
	
	public function setStatusLookupID($val){
		$this->requestParameters['statusLookupID'] = $val;
	}
	
	public function setTypeLookupID($val){
		$this->requestParameters['typeLookupID'] = $val;
	}
	
	public function setMethodLookupID($val){
		$this->requestParameters['methodLookupID'] = $val;
	}
	
	public function setPriorityLookupID($val){
		$this->requestParameters['priorityLookupID'] = $val;
	}
	
	public function setActivityDate($val){
		$this->requestParameters['activityDate'] = $val;
	}
	
	public function setSubject($val){
		$this->requestParameters['subject'] = $val;
	}
	
	public function setNotes($val){
		$this->requestParameters['notes'] = $val;
	}
	
	public function setFollowUpUserID($val){
		$this->requestParameters['followUpUserID'] = $val;
	}
	
	public function setFollowUpTeamID($val){
		$this->requestParameters['followUpTeamID'] = $val;
	}
	
	public function setFollowUpDate($val){
		$this->requestParameters['followUpDate'] = $val;
	}
	
	public function setFollowUpAllDay($val){
		$this->requestParameters['followUpAllDay'] = $val;
	}
	
	public function setFollowUpStartTime($val){
		$this->requestParameters['followUpStartTime'] = $val;
	}
	
	public function setFollowUpEndTime($val){
		$this->requestParameters['followUpEndTime'] = $val;
	}
	
	public function setAttachmentFileURL($val){
		$this->requestParameters['attachment_file_url_'.$fileNumber] = $val;
	}
	
	public function setAttachmentFileBody($fileNumber, $val){
		$this->requestParameters['attachment_file_body_'.$fileNumber] = $val;
	}
	
	public function setAttachmentFileName($fileNumber, $val){
		$this->requestParameters['attachment_file_name_'.$fileNumber] = $val;
	}
	
	
}