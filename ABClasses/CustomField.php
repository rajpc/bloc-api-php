<?php

class CustomField {
	
	private $name = "";
	private $value = "";
	
	public function __construct($_name){
		$this->name = "custom_".$_name;
	}
	
	public function getName(){
		return $this->name;
	}
	
	public function getValue(){
		return $this->value;
	}
	
	public function setTextValue($_val){
		$this->value = $_val;
	}
	
	public function setCheckboxListValues($_values = array()){
		
		$_val = "";
		
		$addDelim = false;
		
		foreach($_values as $_key => $v){
		
			if($addDelim){
			
				$_val = $_val."||";
			
			}
			$_val = $_val.$v;
			$addDelim = true;
		
		}
	
		$this->value = $_val;
	
	}
	
	public function setDateValue($_val){
		$this->value = date('d/m/Y',strtotime($_val));;
	}
	
}