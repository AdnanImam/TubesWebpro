<?php
  class televent extends CI_Controller{
    function __construct(){
      parent::__construct();
      $this->load->model('televent_m');
    }
    public function index(){
      $this->load->view('index');
    }
  }
 ?>
