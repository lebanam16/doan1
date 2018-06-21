<?php

class M_order extends CI_Model {
    //lay tour khi da co id
    public function get_tour($id){
        $this->db->select('*');
        $this->db->where('tour.id',$id);
        $this->db->join('nhom', 'nhom.id = tour.nhom');
        $result = $this->db->get('tour')->result_array();
        return $result;
    }

    //lay nhung tour lien quan
    public  function relate_tour($id){
        $this->db->select('nhom');
        $this->db->where('id',$id);
        $result = $this->db->get('tour')->result_array();
        $group = $result[0]['nhom'];

        $this->db->select('*');
        $this->db->limit(4);
        $this->db->from('nhom');
        $this->db->where("nhom.id",$group);
        $this->db->join('tour', 'tour.nhom = nhom.id');
        $query = $this->db->get()->result_array();
        return $query;
    }
}

?>