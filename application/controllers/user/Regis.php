<?php

/**
 *
 */
class Regis extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model("user/M_regis");
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }

    public function index(){
        $_SESSION['id_tour']= $_GET['id'];
        $this->load->view("user/registration");
    }

    public function regis(){
        $data = $this->input->post();
        $data['id_tour'] = $_SESSION['id_tour'];
        $result = $this->M_regis->regis($data);
        return;
    }
}
