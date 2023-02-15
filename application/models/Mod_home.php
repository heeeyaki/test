<?php
class Mod_home extends CI_Model{
	
	
	private $className;


	function __construct(){
		$this->className = str_replace("Mod_","",get_class($this));
	}

    public function loadPage(){

  		$data["rootclass"] = $this->className;
    	$data["title"] = 'Vixion Analytics';
    	$this->load->view('/header',$data);
		$this->load->view($this->className.'/view');
    	$this->load->view($this->className.'/script');
    	$this->load->view('/footer');
    
	
    }
}
?>