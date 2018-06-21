<?php


class M_home extends CI_Model {

    // lay tour theo id nhom
    public function get_group($id){
        $this->db->select('*');
        $this->db->limit(4);
        $this->db->from('nhom');
        $this->db->where("nhom.id",$id);
        $this->db->join('tour', 'tour.nhom = nhom.id');
        $query = $this->db->get()->result_array();
        return $query;
    }

    //lay id cac nhom
    public function get_data_table(){
        $this->db->select("id");
        $this->db->limit(2);
        $query = $this->db->get("nhom")->result_array();
        return $query;
    }


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