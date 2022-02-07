<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Jumbojett\OpenIDConnectClient;

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('template');
		
	}
	public function index()
	{
		
		$view = "home";
		$this->template->display($view);
	}

	public function about(){
		$view = "about";
		$this->template->display($view);
	}
	
}
