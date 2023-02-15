<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {


	public function index()
	{

    	$mod_page = 'Mod_'.get_class($this);
		$this->load->model($mod_page);
		$this->$mod_page->loadPage();
	
	}
}
