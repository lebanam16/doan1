<?php 
    /**
    * 
    */
    class Home extends CI_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->load->helper('url');
        }
    	public function index()
    	{
    		$this->load->view("user/home");
    	}
        public function order()
        {
            $this->load->view("user/order");
        }
    }

 ?>