<?php

class DataFormatHelper {
	
	public static function formatDateValue($_val){
		
		return date('m/d/Y',strtotime($_val));;
	
	}
	
	public static function formatTimeValue($_val){
		
		return date('H:i:s',strtotime($_val));;
	
	}
	
	public static function formatPhoneValue($_val){
		
		preg_replace("/^\d/", "", $_val);
		
		$phone = $_val;
		
		if(strlen($phone)>10){
			$phone = substr($phone,0,10);
		}
		
		if(strlen($phone) == 10){
			$phone = preg_replace("/(\d{3})(\d{3})(\d{4})/", "($1) $2-$3", $phone);
		
		}
		return $phone;
	}
	
	public static function attachmentFileBodyContentsFromPath($_path){
		
		$data = file_get_contents($_path);
		$base64 = base64_encode($data);
		return $base64;	
	}
}