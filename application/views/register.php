<?php include 'head.php' ?>

<style>
.demo-card-wide.mdl-card {
  top: 30px;
  width: 800px;
}
.demo-card-wide > .mdl-card__title {
  color: #fff;
  background: #B71C1C;
  height: 60px;

}
.demo-card-wide > .mdl-card__menu {
  color: #fff;
}
.demo-card-wide > .mdl-card__actions > .mdl-button {
  color: #fff;
  background: #424242;
}
.demo-card-wide > .mdl-card__actions > .mdl-button:hover {
  color: #fff;
  background: #B71C1C;
}
.mdl-button--file input {
  cursor: pointer;
  height: 100%;
  right: 0;
  opacity: 0;
  position: absolute;
  top: 0;
  width: 300px;
  z-index: 4;
}
.mdl-textfield--file .mdl-textfield__input {
  box-sizing: border-box;
  width: calc(100% - 32px);
}
.mdl-textfield--file .mdl-button--file {
  right: 0;
}
</style>

<center>
  <div class="demo-card-wide mdl-card mdl-shadow--2dp">
    <div class="mdl-card__title">
      <h2 class="mdl-card__title-text">REGISTRASI CUSTOMER</h2>
    </div>

    <div class="mdl-card__supporting-text">
      <?php echo form_open('televent/insert_user'); ?>
        <div class="mdl-textfield mdl-cell mdl-cell--12-col">
          <input type="text" name="nama_cust" placeholder="NAMA LENGKAP" class="mdl-textfield__input">
        </div>
        <div class="mdl-textfield mdl-cell mdl-cell--12-col">
          <input  type="text" name="email_cust" placeholder="EMAIL" class="mdl-textfield__input">
        </div>
        <div class="mdl-textfield mdl-cell mdl-cell--12-col">
          <input type="number" name="notelp_cust" placeholder="NO. TELP" class="mdl-textfield__input">
        </div>
        <div class="mdl-textfield mdl-cell mdl-cell--12-col">
          <input type="text" name="uname_cust" placeholder="USERNAME" class="mdl-textfield__input">
        </div>
        <div class="mdl-textfield mdl-cell mdl-cell--12-col">
          <input type="text" name="pass_cust" placeholder="PASSWORD" class="mdl-textfield__input" >
        </div>
        <div class="mdl-textfield mdl-cell mdl-cell--12-col">
          <input type="text" name="pass_cust2" placeholder="KONFIRMASI PASSWORD" class="mdl-textfield__input">
        </div>
      </div>
      <div class="mdl-card__actions mdl-card--border">
        <input type="submit" name="register" value="REGISTER" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-cell mdl-cell--12-col">
      </div>
    </div>
</center>
