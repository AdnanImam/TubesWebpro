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
    public function register(){
      $this->load->view('register');
    }
    public function profil(){
      $this->load->view('profil');
    }
  }
 ?>
