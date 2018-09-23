<?php
class Main_Controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url'); //Loading url helper    
        $this->load->database();
        $this->load->library('session');
    }

    public function view($page,$script,$data,$css,$uri)
    {
        if(isset($_SESSION['user_session'])){
            $data['uri'] = $uri;
            $data['page_css'] = $css;
            $this->load->view('template/head', $data);
            $this->load->view('template/header');
            $this->load->view('template/sidebar',$data);
            $this->load->view($page,$data);
            $this->load->view('template/script_footer');
            if(!empty($script)){
                $this->load->view($script); 
            }
            $this->load->view('template/closing');
        } else {
            header("LOCATION: ".base_url());
        }
        
    }

    public function view_login($page,$script,$css)
    {
        if(isset($_SESSION['user_session'])){
            $this->view('finance_view',null,null,'finance.css',null);
        } else {
            $data['page_css'] = $css;
            $this->load->view('template/head', $data);
            $this->load->view($page);
            $this->load->view('template/script_footer');
            if(!empty($script)){
                $this->load->view($script); 
            }
            $this->load->view('template/closing');
        }
    }
}
?>