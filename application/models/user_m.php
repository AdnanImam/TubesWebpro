<?php
	class user_m extends CI_Model {
		public function construct(){
			parent:: construct();
		}

		function insert_mhs($user){
			$result = $this->db->insert("customer", $user);
			return $result;
		}
	}
?>
