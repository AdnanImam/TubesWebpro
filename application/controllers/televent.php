<?php
  class televent extends CI_Controller{
    function __construct(){
      parent::__construct();
      $this->load->model('televent_m');
      $this->load->helper(array('url', 'form'));
    }

    public function index(){
      $data['hasil'] = $this->televent_m->get_all();
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
        $this->load->view('profil_my_tiket');
      }
      else{
        echo " username dan password salah !";
      }
    }

    public function insert_event(){
      $config['upload_path']          = '/uploads';
               $config['allowed_types']        = 'gif|jpg|png';
               $config['max_size']             = 100;
               $config['max_width']            = 1024;
               $config['max_height']           = 768;

               $this->load->library('upload', $config);
               $this->upload->do_upload('eventimage');
               $data_upload_files = $this->upload->data();
               $image = $data_upload_files[full_path];

      $nama=$this->input->post('nama');
      $lokasi=$this->input->post('lokasi');
      $hari=$this->input->post('hari');
      $tanggal=$this->input->post('tanggal');
      $pukul=$this->input->post('pukul');
      $desk=$this->input->post('desk');

      $event = array(
        'nama_event'=> $nama,
        'lokasi_event'=> $lokasi,
        'hari'=> $hari,
        'tanggal'=> $tanggal,
        'pukul'=> $pukul,
        'deskripsi'=> $desk,
        'gambar' => $image,
      );
      $insert = $this->televent_m->insert_event($event);
      if($insert){
        redirect('televent/eventview');
      }
      else {
        echo "gagal";
      }

    }

    public function login_admin(){
      $this->load->view('login_admin');
    }

    public function tambahEvent_admin(){
      $this->load->view('tambahEvent_admin');
    }

    public function data(){
      $this->load->database();
  			$jumlah_data = $this->televent_m->jumlah_data();
  			$this->load->library('pagination');
  			$config['base_url'] = base_url().'index.php/televent/data/';
  			$config['total_rows'] = $jumlah_data;
  			$config['per_page'] = 10;
  			$from = $this->uri->segment(3);
  			$this->pagination->initialize($config);
  			$data['user'] = $this->televent_m->data($config['per_page'],$from);
  			$this->load->view('data',$data);
    }
    public function deleteevent($id){
  			$del = $this->televent_m->delete_event($id);
  			if($del){
  				redirect('televent/data');
  			}
  			else{
  				echo "gagal";
  			}
  		}

  		public function edit_event($id)
  		{
  			$data['id_event'] = $id;
  			$this->load->view('edit_event',$data);
  		}

  		public function action_edit_event($id_event)
  		{
  			$id = $this->input->post('id_event');
  			$nama_event = $this->input->post('nama_event');
  			$lokasi_event = $this->input->post('lokasi_event');
  			$tanggal = $this->input->post('tanggal');
  			$hari = $this->input->post('hari');
  			$pukul = $this->input->post('pukul');
  			$deskripsi = $this->input->post('deskripsi');
  			$cp = $this->input->post('cp');
        $penyelenggara = $this->input->post('penyelenggara');
  			$gambar = $this->input->post('gambar');
  			$where['id_event'] = $id_event;
  			$value = array(
  				'nama_event' => $nama_event,
  				'lokasi_event' => $lokasi_event,
  				'tanggal' => $tanggal,
  				'hari' => $hari,
  				'pukul' => $pukul,
  				'deskripsi' => $deskripsi,
  				'cp' => $cp,
          'penyelenggara' => $penyelenggara,
  				'gambar' => $gambar
  			);
  			$update = $this->televent_m->edit_event($value,$where);
  			if($update){
  				redirect('televent/data/');
  			}
  			else{
  				echo "gagal";
  			}
  		}

    public function login_ad(){
      $uname = $this->input->post('uname');
      $password = $this->input->post('password');
      $where = array(
        'username_admin' => $uname,
        'pass_admin' => $password
      );
    	redirect('televent/data');
    }

    public function logout(){
      session_destroy();
      $this->load->view('login');
    }

    public function login(){
      $this->load->view('login');
    }
    public function createevent(){
      $this->load->view('create_event');
    }
    public function bookingevent(){
      if($this->input->post('submit')){
  			$this->televent_m->booking();
  			redirect('televent');
		  }
      $this->load->view('bookingevent');
    }
    public function tambaheventadmin(){
      if($this->input->post('submit')){
  			$this->televent_m->tambaheventadmin();
  			redirect('televent/data');
		  }
      $this->load->view('tambaheventadmin');
    }
    public function register(){
      $this->load->view('register');
    }
    public function profil(){
      $this->load->view('profil_my_tiket');
    }
    public function eventview(){
      $this->load->database();
        $jumlah_data = $this->televent_m->jumlah_data();
        $this->load->library('pagination');
        $config['base_url'] = base_url().'index.php/televent/eventview';
        $config['total_rows'] = $jumlah_data;
        $config['per_page'] = 10;
        $from = $this->uri->segment(3);
        $this->pagination->initialize($config);
        $data['user'] = $this->televent_m->data($config['per_page'],$from);
        $this->load->view('eventview',$data);
    }
    public function mytiket(){
      $this->load->view('profil_my_tiket');
    }
    public function myevent(){
      $this->load->view('profil_my_event');
    }
    public function about(){
      $this->load->view('about');
    }
  }
 ?>
