<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
//reference http://www.w3school.com.cn/tags/tag_form.asp
class Ccik {
	protected $formHeader=null;
	protected $fields=null;
    protected $formString=null;
    public function setsForm($formTempale,$baseurl){
    	$this->formHeader='<form action="'.$baseurl.$formTempale->getGgactionto().'" method="post">';	
    }
    
    public function addFields($theFields){
    	foreach ($theFields as $theField){
    		
	    	if($theField->getGginputtype()=="text"){
	    		//echo $theField->getGginputtype();
	    		$text=$theField->getGglabel().':<input type="text" name="'.$theField->getGgfieldname().'" id="'.$theField->getGgfieldname().'"/></br>';
	    		//echo $text;
	    		//array_push($this->fields, $text);
	    		$this->fields=$this->fields.$text;
	    	}
    	//print_r($this->fields);
    	}
    }
	public function getFormString(){
		$formstring=$this->formHeader;
		$formstring=$formstring.$this->fields;
		$formstring=$formstring.'<input type="submit"/></form>';
		return $formstring;
	}
	
	public function fillPost($entity){
		//$theBlog = new models\Ggblog;
		foreach ($_POST as $key=>$value){
			$method="set".$key;
			//echo $method;
			$entity->$method($value);
			//$theBlog->setGblogurl($value);
			
			//echo '<hr>';
		}
		print_r($entity);
	}
}
