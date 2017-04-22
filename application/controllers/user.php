<?php
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class user extends CI_Controller {
		public function __construct(){
			parent:: __construct();
			if ($this->session->userdata('status') != "login"){
				redirect(base_url("login"));
			}
		}
		function index(){
			$this->load->view(profil);
		}

	}
?>
