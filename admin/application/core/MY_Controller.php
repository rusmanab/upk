<?php
class MY_Controller extends CI_Controller{
	
	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler(true);
		$this->load->library('form_validation');
		$this->load->library('session');
		$session_user_id = $this->session->userdata('user_id');
		$this->detailSession();
		if (!$session_user_id){
			redirect('login');
		} 
	}

	public function detailSession(){
		$session_user_id = $this->session->userdata('user_id');
		$q = "SELECT * FROM m_users WHERE id='".$session_user_id."'";
		$res = $this->db->query($q);
		return $res->row();
	}
}
