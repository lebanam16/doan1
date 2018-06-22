<?php


class M_regis extends CI_Model {
    public function regis($data){
        $query = $this->db->get_where('tour',array('id'=>$data['id_tour']))->result_array();
        $param = array(
            'ho_ten' => $data['ho_ten'],
            'email' => $data['email'],
            'sdt' => $data['sdt'],
            'dia_chi' => $data['dia_chi'],
            'so_luong_nguoi_lon' => $data['so_luong_nguoi_lon'],
            'so_luong_tre_em' => $data['so_luong_tre_em'],
            'gia_nguoi_lon' => $query[0]['gia_nguoi_lon'],
            'gia_tre_em' => $query[0]['gia_tre_em'],
            'ngay_khoi_hanh' => $query[0]['ngay_khoi_hanh'],
        );
        $this->db->insert('hoa_don_dat',$param);
    }
}
?>