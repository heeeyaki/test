
<?php
class Mod_contact extends CI_Model{
	
	
	private $className;


	function __construct(){
		$this->className = str_replace("Mod_","",get_class($this));
	}

    public function loadPage(){
		
		$data["rootclass"] = $this->className;
    	$data["title"] = 'Contact Us';
    	$this->load->view('/header',$data);
		$this->load->view($this->className.'/css');
		$this->load->view($this->className.'/view');
    	$this->load->view($this->className.'/js');
    	$this->load->view('footer');
	
    }
}
?>