<?php
  class televent extends CI_Controller{
    function __construct(){
      parent::__construct();
      $this->load->model('televent_m');
    }
    public function index(){
      $this->load->view('index');
    }
    public function login(){
      $this->load->view('login');
    }
    public function createevent(){
      $this->load->view('create_event');
    }
    public function registercostumer(){
      $this->load->view('register_costumer');
    }
    public function registerowner(){
      $this->load->view('register_owner');
    }
  }
 ?>
