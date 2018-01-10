<?php
/**
 * Created by PhpStorm.
 * User: vinaylogics
 * Date: 1/8/2018
 * Time: 1:48 AM
 */

class Enquiry_model extends CI_Model
{

    function save_enquiry($data){
        $this->db->insert("enquiries",$data);
        $data['id']=$this->db->insert_id();
        return $data;
    }
}