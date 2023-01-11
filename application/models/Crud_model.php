<?php

class Crud_model extends CI_Model
{
    function saverecords($data){
        $this->db->insert('crud',$data); //$this->db-.insert() will generate an sql query with the help of codeigniter
        return true;
    }

}