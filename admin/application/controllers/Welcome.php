<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Jumbojett\OpenIDConnectClient;

class Welcome extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('template');
		$this->load->library('session');
		$this->load->library('form_validation');
		
	}
	public function index()
	{
		
		$view = "pages/user/tambah";
		$this->template->display($view);
	}

	public function tambah()
	{
		//$hitung = 1 + 1;
		//$view = "pages/welcome/index";
		
		$data['userlogin'] = $this->detailSession();
		$data['menu']      = "Menu makan";
		$view = "pages/user/tambah";
		$this->template->display($view, $data);

	}
	public function edit()
	{
	//$hitung = 1 + 1;
		//$view = "pages/welcome/index";
		
		$data['userlogin'] = $this->detailSession();
		$data['menu']      = "Menu makan";
		$view = "pages/user/edit";
		$this->template->display($view, $data);
	}
}
