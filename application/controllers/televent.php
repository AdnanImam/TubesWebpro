<?php
  class televent extends CI_Controller{
    function __construct(){
      parent::__construct();
      $this->load->model('televent_m');
    }
    public function index(){
      $this->load->view('index');
    }
    public function insert_user(){
      $nama_cust = $this->input->post('nama_cust');
      $email_cust = $this->input->post('email_cust');
      $notelp_cust = $this->input->post('notelp_cust');
      $uname_cust = $this->input->post('uname_cust');
      $pass_cust = $this->input->post('pass_cust');
      $pass_cust2 = $this->input->post('pass_cust2');

      $user = array (
        'nama_cust' => $nama_cust,
        'email_cust' => $email_cust,
        'notelp_cust' => $notelp_cust,
        'username_cust' => $uname_cust,
        'pass_cust' => $pass_cust,
        'pass_cust2' => $pass_cust2
      );

      $passsama=$pass_cust==$pass_cust2;
      if ($passsama){
        $insert = $this->televent_m->insert_user($user);
        if($insert){
          redirect('televent/login');
        } else {
          echo "gagal";
        }
      }
      else {
        echo 'pssword tidak sama';
        $this->load->view('register');
      }
    }
    public function login_user(){
      $uname = $this->input->post('uname');
      $password = $this->input->post('password');
      $where = array(
        'username_cust' => $uname,
        'pass_cust' => $password
      );
      $cek = $this->televent_m->cek_login("customer", $where)->num_rows();
      if($cek > 0){
        $data_session = array(
          'nama' => $uname,
          'status' => "login"
        );

        $this->session->set_userdata($data_session);
        $this->load->view('profil');
      }
      else{
        echo " username dan password salah !";
      }
    }

    public function logout(){
      $this->session->sessio_destroy();
      $this->load->view('login');
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
    public function eventview(){
      $this->load->view('eventview');
    }
  }
 ?>
