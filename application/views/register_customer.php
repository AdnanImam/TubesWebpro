<?php include 'head.php' ?>

<style>
.demo-card-wide.mdl-card {
  width: 512px;
}
.demo-card-wide > .mdl-card__title {
  color: #fff;
  background: #9e9e9e;
  height: 60px;

}
.demo-card-wide > .mdl-card__menu {
  color: #fff;
}
.demo-card-wide > .mdl-card__actions > .mdl-button {
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
      <form class="" action="#" method="post">
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--12-col">
          <input class="mdl-textfield__input" type="text" name="nama_cust">
          <label class="mdl-textfield__label" for="nama_owner">Nama Customer</label>
        </div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--12-col">
          <input class="mdl-textfield__input" type="text" name="email_cust">
          <label class="mdl-textfield__label" for="email_owner">Email Customer</label>
        </div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--12-col">
          <input class="mdl-textfield__input" type="text" name="notelp_cust">
          <label class="mdl-textfield__label" for="notelp_owner">No. Telp Customer</label>
        </div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--12-col">
          <input class="mdl-textfield__input" type="text" name="uname_cust">
          <label class="mdl-textfield__label" for="uname_owner">Username Customer</label>
        </div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--12-col">
          <input class="mdl-textfield__input" type="text" name="pass_cust">
          <label class="mdl-textfield__label" for="password">Password Customer</label>
        </div>
      </form>
      </div>
      <div class="mdl-card__actions mdl-card--border">
        <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-cell mdl-cell--12-col">
          Register
        </a>
      </div>
    </div>
</center>
<?php Include 'foot.php' ?>
