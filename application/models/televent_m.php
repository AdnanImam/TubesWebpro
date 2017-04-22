<?php
  class televent_m extends CI_Model{
    function construct(){
      parent;;construct();
    }
    function insert_user($user){
			$result = $this->db->insert("customer", $user);
			return $result;
		}
    function cek_login($customer, $where){
      return $this->db->get_where($customer, $where);
    }
  }
 ?>
