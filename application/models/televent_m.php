<?php
  class televent_m extends CI_Model{
    function construct(){
      parent;;construct();
    }
    function insert_user($user){
			$result = $this->db->insert("customer", $user);
			return $result;
		}
    function insert_event($event){
      $result = $this->db->insert("event",$event);
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

    function get_all(){
      $ambil_data = $this->db->get('booking');//mengambil tabel mhs
		    //jika data lebih dari 0
		  if ($ambil_data->num_rows() > 0 ){
				foreach ($ambil_data->result() as $data){
				      $hasil[] = $data;
			         }
			  return $hasil;
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

  function booking(){
		$nim = $this->input->post('nim'); //input nim
		$nama  = $this->input->post('nama'); //input nama
		$jurusan = $this->input->post('jurusan'); //input kelas
    $nohp = $this->input->post('nohp'); //input nomor_hp
    $email = $this->input->post('email'); //input email
		$data = array (
			'nim_mhs' => $nim,  //input kedalam field nim
			'nama_mhs'  => $nama, //input kedalam field nama
			'jurusan_mhs'=> $jurusan, //input kedalam field jurusan
      'no_telp' => $nohp, //input kedalam field nomor_hp
      'email_mhs' => $email //input kedalam field email
		);
		$this->db->insert('booking',$data);//insert data di tabel booking

	 }

   function tambaheventadmin(){
     $config['upload_path']          = '/uploads';
              $config['allowed_types']        = 'gif|jpg|png';
              $config['max_size']             = 100;
              $config['max_width']            = 1024;
              $config['max_height']           = 768;

              $this->load->library('upload', $config);
              $this->upload->do_upload('eventimage');
              $data_upload_files = $this->upload->data();
              $image = $data_upload_files['full_path'];

     $nama=$this->input->post('nama');
     $lokasi=$this->input->post('lokasi');
     $tanggal=$this->input->post('tanggal');
     $hari=$this->input->post('hari');
     $pukul=$this->input->post('pukul');
     $deskripsi=$this->input->post('deskripsi');
     $cp=$this->input->post('cp');
     $penyelenggara=$this->input->post('penyelenggara');

     $event = array(
       'nama_event'=> $nama,
       'lokasi_event'=> $lokasi,
       'tanggal'=> $tanggal,
       'hari'=> $hari,
       'pukul'=> $pukul,
       'deskripsi'=> $deskripsi,
       'cp'=>$cp,
       'penyelenggara'=>$penyelenggara,
       'gambar' => $image
     );
     $this->db->insert('event',$event);
   }

    function edit_event($value, $where){
			$this->db->where($where);
			$even = $this->db->update("event",$value);
			return $even;
		}

  }
 ?>
