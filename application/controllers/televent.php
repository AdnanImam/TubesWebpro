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
      $this->session->session_destroy();
      $this->load->view('login');
    }

    public function login(){
      $this->load->view('login');
    }

    public function createevent(){
      $file = $this->televent_m->get_file();
			$data['file'] = $file;
			$this->load->view('create_event',$data);
    }

		public function upload_file(){
			$this->load->library('upload');
			$nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
			$config['upload_path'] = './upload/'; //path folder
			$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
			$config['max_size'] = '2048'; //maksimum besar file 2M
			$config['max_width']  = '1288'; //lebar maksimum 1288 px
			$config['max_height']  = '768'; //tinggi maksimu 768 px
			$config['file_name'] = $nmfile; //nama yang terupload nantinya

			$this->upload->initialize($config);

			if($_FILES['filefoto']['name'])
			{
				if ($this->upload->do_upload('filefoto'))
				{
					$value = $this->upload->data();
					$data = array(
					  'nama_file' =>$value['file_name'],
					  'tipe_file' =>$value['file_type'],
					  'nama' =>$this->input->post('nama'),
					  'lokasi' =>$this->input->post('lokasi'),
					  'hari' =>$this->input->post('hari'),
					  'tanggal' =>$this->input->post('tanggal'),
					  'pukul' =>$this->input->post('pukul'),
					  'deskripsi' =>$this->input->post('deskripsi')
					);
					$this->televent_m->insert_file($data); //akses model untuk menyimpan ke database
					//pesan yang muncul jika berhasil diupload pada session flashdata
					echo "<script>alert ('file berhasil di upload'); window.location.href='"; //.base_url()."index.php/mahasiswa/activity'</script>";//jika berhasil maka akan ditampilkan form upload
				}else{
					//pesan yang muncul jika terdapat error dimasukkan pada session flashdata
					echo "<script>alert ('file gagal di upload'); window.location.href='";//.base_url()."index.php/mahasiswa/activity'</script>"; //jika gagal maka akan ditampilkan form upload
				}
		 	}
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
