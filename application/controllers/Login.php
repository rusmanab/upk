<?php
class Login extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('session');

		/* $this->load->library(array('form_validation','session')); => boleh menggunakan seperti ini */ 
	}
	
	public function index(){
		
		$this->load->view("pages/login/index");
	}

	public function submit(){
		
	}
		
	public function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}
}
