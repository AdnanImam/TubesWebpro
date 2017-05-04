<?php include 'head.php' ?>
<style media="screen">
    @import url(https://fonts.googleapis.com/css?family=Roboto:300);

    .login-page {
    width: 400px;
    padding-left: 850px;
    padding-top: 20px;
    }
    .png-page {
      position: absolute;
    width: 400px;
    padding: 0 0 0;
    }
    .form {
    position: relative;
    z-index: 1;
    background: #FFFFFF;
    padding: 45px;
    text-align: center;
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
    }
    .form input {
    font-family: "Roboto", sans-serif;
    outline: 0;
    background: #f2f2f2;
    width: 100%;
    border: 0;
    margin: 0 0 15px;
    padding: 15px;
    box-sizing: border-box;
    font-size: 14px;
    }
    .form button {
    font-family: "Roboto", sans-serif;
    text-transform: uppercase;
    outline: 0;
    background: #4CAF50;
    width: 100%;
    border: 0;
    padding: 15px;
    color: #FFFFFF;
    font-size: 14px;
    -webkit-transition: all 0.3 ease;
    transition: all 0.3 ease;
    cursor: pointer;
    }
    .form button:hover,.form button:active,.form button:focus {
    background: #43A047;
    }
    .form .message {
    margin: 15px 0 0;
    color: #b3b3b3;
    font-size: 12px;
    }
    .form .message a {
    color: #4CAF50;
    text-decoration: none;
    }
    .form .register-form {
    display: none;
    }
    .container {
    position: relative;
    z-index: 1;
    max-width: 300px;
    margin: 0 auto;
    }
    .container:before, .container:after {
    content: "";
    display: block;
    clear: both;
    }
    .container .info {
    margin: 50px auto;
    text-align: center;
    }
    .container .info h1 {
    margin: 0 0 15px;
    padding: 0;
    font-size: 36px;
    font-weight: 300;
    color: #1a1a1a;
    }
    .container .info span {
    color: #4d4d4d;
    font-size: 12px;
    }
    .container .info span a {
    color: #000000;
    text-decoration: none;
    }
    .container .info span .fa {
    color: #EF3B3A;
    }
    body {
        background: #F5F5F5; /* fallback for old browsers */
        background: -webkit-linear-gradient(right, #F5F5F5, #EEEEEE);
        background: -moz-linear-gradient(right, #F5F5F5, #EEEEEE);
        background: -o-linear-gradient(right, #F5F5F5, #EEEEEE);
        background: linear-gradient(to left, #F5F5F5, #EEEEEE);
        font-family: "Roboto", sans-serif;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
      }
</style>
<div class="png-page">
      <img src="<?php echo base_url('images/register.jpg'); ?>" width="auto" height="669px" />
</div>
<div class="login-page">
  <div class="form">
    <?php echo form_open('televent/insert_user'); ?>
    <form class="login-form">
      <input class="mdl-textfield__input" type="text" id="nama" name="nama"  placeholder="NAMA ACARA">

      <input class="mdl-textfield__input" type="text" id="lokasi" name="lokasi"  placeholder="LOKASI">

      <input class="mdl-textfield__input" type="text" id="hari" name="hari"  placeholder="HARI">

      <input class="mdl-textfield__input" type="date" id="tanggal" name="tanggal"  placeholder="TANGGAL">

      <input class="mdl-textfield__input" type="time" id="pukul" name="pukul"  placeholder="PUKUL">

      <textarea rows="10" cols="70" class="mdl-textfield__input" type="text" id="desk" name="desk" placeholder="DESKRIPSI">
      </textarea>

      <button>register</button>
      <p class="message">Telah Memiliki Akun? <a href="<?php echo base_url('index.php/televent/login') ?>">Login Disini</a></p>
    </form>
    <?php if(empty($file)){ ?>
        <a href="#">
        Data Kosong
      </a>
      <?php }else{
      foreach($file as $value){ ?>
            <h5 >
              <small> <?php echo $value->judul ?></small>
            </h5>
                <img src="<?php echo base_url("upload/".$value->nama_file)?>"/>
      <?php }}?>
  </div>

</div>