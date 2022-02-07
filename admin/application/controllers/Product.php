<?php
class Product extends CI_Controller{
	public function __construct(){
        parent::__construct();
        $this->load->model('mpost','post');
        $this->load->model('mproduct','product');
		$this->load->library('template');
    }
	public function index(){
       
        $regCss = array(
						base_url('assets/template/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css'),
					);
        $regJs  = array(
                        base_url('assets/template/adminlte/plugins/datatables/jquery.dataTables.min.js'),       
						base_url('assets/template/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js'),                
                    );
                        
        $this->template->registerCsshead($regCss);
        $this->template->regsiterJsClosing($regJs);

        $addjs = "pages/product/js";
        $this->template->registerScript($addjs);
       
        $view = 'product/index';
        $this->template->display($view);
    }

	public function getTable()
	{
		$this->product->getDataTable();
	}

	public function add()
	{
		$view = 'product/add';
        $this->template->display($view);
	}
}
