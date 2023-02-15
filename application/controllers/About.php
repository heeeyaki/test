<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {


	public function index()
	{

    	$mod_page = 'Mod_about';
		$this->load->model($mod_page);
		$this->$mod_page->loadPage();
	
	}
}
