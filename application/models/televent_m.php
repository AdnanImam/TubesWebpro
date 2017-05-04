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
    function insert_file($data){
      $result = $this->db->insert('event',$data);
      return $result;
    }
    function get_file() {
      $this->db->select("*");
      $this->db->from("event");
      $data = $this->db->get();
      if ($data->num_rows() > 0) {
        return $data->result();
      }
    }
    function data($number,$offset){
			return $query = $this->db->get("event",$number,$offset)->result();
		}

    function jumlah_data(){
			return $this->db->get("event")->num_rows();
		}
    public function delete_event($id){
      $con = array(
        'id_event' => $id
        );
      $even = $this->db->delete("event",$con);
      return $even;
    }
    function edit_event($value, $where){
			$this->db->where($where);
			$even = $this->db->update("event",$value);
			return $even;
		}
  }
 ?>
