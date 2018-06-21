<?php


class M_home extends CI_Model {
    public function signup($data) {
        $param = array(
            'ho_ten'   => $data['fullname'],
            'email'    => $data['email'],
            'username' => $data['username'],
            'mat_khau' => $data['password'],
        );
        //check trung ten
        $result = $this->db->get_where('nguoi_dung', array('username' => $param['username']));
        $count = $result->num_rows();
        if ($count != 0) {
            return 2;
        }
        $result = $this->db->insert('nguoi_dung', $param);
        return $result;
    }

    public function login($data) {
        $param = array(
            'username' => $data['username'],
            'mat_khau' => $data['password'],
        );
        $result = $this->db->get_where('nguoi_dung', array('username' => $param['username']))->result_array();
        if (empty($result)) {
            $str = "0";
        } else {
            if ($param['mat_khau'] != $result[0]['mat_khau']) {
                $str = "1";
            } else $str = "ok";
        }
        return $str;
    }
}

?>