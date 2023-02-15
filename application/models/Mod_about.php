
<?php
class Mod_about extends CI_Model{
	
	
	private $className;


	function __construct(){
		$this->className = str_replace("Mod_","",get_class($this));
	}

    public function loadPage(){

    	$data["rootclass"] = $this->className;
    	$data["title"] = 'About';
    	$this->load->view('/header',$data);
		$this->load->view($this->className.'/css');
		$this->load->view($this->className.'/view');
		$this->load->view($this->className.'/js');
    	$this->load->view('footer');
	
    }
}
?>