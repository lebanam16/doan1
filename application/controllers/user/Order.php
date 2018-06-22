<?php
/**
 *
 */
class Order extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model("user/M_order");
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }
    public function index()
    {
        $id = $_GET['id'];
        $query = $this->M_order->get_tour($id);
        $data['tour']= $query[0];
        $query = $this->M_order->relate_tour($id);
        $data['relate'] = $query;
        $this->load->view("user/order",$data);
        return true;
    }

}

?>