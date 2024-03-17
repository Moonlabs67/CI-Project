<?php

Class My_model extends CI_Model{
    
    function proyek($id_proyek){
        return $this->db->get_where('data_proyek',array('id_proyek'=>$id_proyek));
    }

    function bahan($id_bahan){
        return $this->db->get_where('data_bahan',array('id_bahan'=>$id_bahan));
    }
    function user($id_user){
        return $this->db->get_where('user',array('id_user'=>$id_user));
    }
}