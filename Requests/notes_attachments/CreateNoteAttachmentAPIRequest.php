<?php
require_once(__DIR__."/../GenericAPIRequest.php");

class CreateNoteAttachmentAPIRequest extends GenericAPIRequest implements iAPIRequest{
	
	public $path = "/notes/create";
		
	
	public function getPath(){
		return $this->path;
	}
	
	public function getRequestParameters(){
		return $this->path;
	}
	
	public $requestParameters = array();
	
	public function setEntityID($val){
		$this->requestParameters['entity_id'] = $val;
		
	}
	public function setEntityType($val){
		$this->requestParameters['entity_type'] = $val;
	}
	
	public function setNoteBody($noteNumber, $val){
		$this->requestParameters['attachment_note_'.$noteNumber.'_body_text'] = $val;
	}
	public function setNoteSubject($noteNumber, $val){
		$this->requestParameters['attachment_note_'.$noteNumber.'_subject_text'] = $val;
	}
	public function setNotePinned($noteNumber, $val){
		$this->requestParameters['attachment_note_'.$noteNumber.'_pinned'] = $val;
	}
	public function setAttachFileToNote($noteNumber, $val){
		$this->requestParameters['attach_file_to_note_'.$noteNumber] = $val;
	}
	
	public function setNoteAttachmentFileURL($noteNumber,$fileNumber,$val){
		$this->requestParameters['attachment_note_'.$noteNumber.'_file_url_'.$fileNumber] = $val;
	}
	public function setNoteAttachmentFileBody($noteNumber,$fileNumber,$val){
		$this->requestParameters['attachment_note_'.$noteNumber.'_file_body_'.$fileNumber] = $val;
	}
	public function setNoteAttachmentFileName($noteNumber,$fileNumber,$val){
		$this->requestParameters['attachment_note_'.$noteNumber.'_file_name_'.$fileNumber] = $val;
	}
	
	
	
}