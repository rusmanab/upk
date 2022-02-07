<?php
class Template{

	protected $ci;
	protected $_regCssHead;
    protected $_regjsClosing;
    protected $_regAddJs;

	public function __construct()
	{
		$this->ci = &get_instance();
	}

	public function display($view="",$data=[]){
		$data['jsclosing']	= "";
		$data['csshead'] 	= "";
		$data['addjs'] 		= "";

		if (!empty($this->_regjsClosing))
        {
            $data['jsclosing'] = $this->_regjsClosing;
        }
        if (!empty($this->_regCssHead))
        {
            $data['csshead'] = $this->_regCssHead;
        }
        if (!empty($this->_regAddJs))
        {
            $data['addjs'] = $this->ci->load->view($this->_regAddJs,$data,TRUE);
        }

		$this->ci->load->view('template/header',$data);
		$this->ci->load->view('template/sidebar');
		$this->ci->load->view('pages/'.$view,$data);
		$this->ci->load->view('template/footer',$data);

	}

	function registerCsshead($CSS,$p=1)
    {
        $css = "";
        if (is_array($CSS))
        {
            
            foreach($CSS as $csscript =>$key)
            {
               
                $styleLink = '<link href="'.$key.'" rel="stylesheet" type="text/css"/>';
                
                $css.= "\n".$styleLink;
            }
        }
        //var_dump($css);
        if ($p==1){
            $this->_regCssHead = $css;
        }else{
            $this->_regCssHead2 = $css;
        }
        
    }
    
    function regsiterJsClosing($jScript,$t=1)
    {
        $js = "";
        if (is_array($jScript))
        {
            
            foreach($jScript as $jscript =>$key)
            {
               
                $j = '<script src="'.$key.'"></script>';
                
                $js.= "\n".$j;
            }
        }
        $js.= "\n";
        
        if ($t==1){
            $this->_regjsClosing = $js;
        }elseif ($t==2){
            $this->_regjsClosing2 = $js;
        }
        
    }
    
    function registerScript($view)
    {
        $this->_regAddJs = $view;
    }
}
