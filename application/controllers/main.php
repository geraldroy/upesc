<?php

class Main extends CI_Controller
{   
    function __construct() 
    {
        parent::__construct();
        $this->load->model('m_db');
    }
	
    function index()//index page
    {
        $class_name = array(
            'home_class'=>'active', 
            'login_class' => '', 
            'register_class' => '',
            'upload_class'=>'',
			'council' => '',
			'news_class' => '',
            'contact_class'=>'');
        $this->load->view('header',$class_name);
        $this->load->view('v_home');
        $this->load->view('footer');
    }
	
	function about()//index page
    {
        $class_name = array(
            'home_class'=>'', 
            'login_class' => '', 
            'register_class' => '',
            'upload_class'=>'',
			'council' => 'active',
			'news_class' => '',
            'contact_class'=>'');
        $this->load->view('header',$class_name);
        $this->load->view('v_about');
        $this->load->view('footer');
    }
}