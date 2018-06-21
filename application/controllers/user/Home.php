<?php

/**
 *
 */
class Home extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model("user/M_home");
    }

    public function index() {
        $this->load->view("user/home");
    }

    public function ajax_tour() {
        $query = $this->M_home->get_data_table();
        $i = 0;
        foreach ($query as $value) {
            $id = $value['id'];
            $data['tour'] = $this->M_home->get_group($id);
            $data['tieu_de'] = $data['tour']['0']['ten'];
            $data['mo_ta'] = $data['tour']['0']['mo_ta'];
            $html[$i] = $this->load->view("user/tour", $data);
            $i++;
        }
        return $html;
    }


    public function login() {
        $data = $this->input->post();
        if (empty($data["username"]) || empty($data["password"])) {
            $data_return = array
            (
                'status' => 0,
                'msg'    => "Vui lòng điền đủ dữ liệu",
            );
            echo json_encode($data_return);
            return TRUE;
        }
        $result = $this->M_home->login($data);
        if ($result == '0') {
            $data_return = array
            (
                'status' => 0,
                'msg'    => "Tài khoản không tồn tại",
            );
            echo json_encode($data_return);
            return TRUE;
        }
        if ($result == '1') {
            $data_return = array
            (
                'status' => 0,
                'msg'    => "Mật khẩu không đúng",
            );
            echo json_encode($data_return);
            return TRUE;
        }
        if ($result == 'ok') {
            $data_return = array
            (
                'status' => 1,
                'msg'    => "",
            );
            $_SESSION["name"] = $data['username'];
            echo json_encode($data_return);
            return TRUE;
        }

    }

    /**
     * @return bool
     */
    public function signup() {
        $data = $this->input->post();
        if (empty($data["fullname"]) || empty($data["username"]) || empty($data["email"]) || empty($data["password"]) || empty($data["passwordconfirm"])) {
            $data_return = array
            (
                'status' => 0,
                'msg'    => "Vui lòng điền đủ dữ liệu",
            );
            echo json_encode($data_return);
            return TRUE;
        }

        if ($data['password'] != $data['passwordconfirm']) {
            $data_return = array
            (
                'status' => 0,
                'msg'    => "Nhập lại mật khẩu",
            );
            echo json_encode($data_return);
            return TRUE;
        }
        $result = $this->M_home->signup($data);

        if ($result === 2) {
            $data_return = array
            (
                'status' => 0,
                'msg'    => "Username bị trùng, vui lòng chọn tên khác",
            );
            echo json_encode($data_return);
            return TRUE;
        }
        if (empty($result)) {
            $status = 0;
            $msg = "Thêm thất bại";
        } else {
            $status = 1;
            $msg = "Thêm thành công";
            $_SESSION["name"] = $data['username'];
        }

        $data_return = array('status' => $status,
                             'msg'    => $msg,
        );
        echo json_encode($data_return);
        return TRUE;
    }

    public function logout() {
        session_destroy();
        return;
    }
}

?>