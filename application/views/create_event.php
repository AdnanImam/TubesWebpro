<?php include'head.php'; ?>
<!-- Wide card with share menu button -->
<style>
.demo-card-wide.mdl-card {
  position:inherit;
  top: 20%;
  width: 512px;
}
.demo-card-wide > .mdl-card__title {
  color: #fff;
  background: #BDBDBD;
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
<div class="demo-card-wide mdl-card mdl-shadow--2dp">
    <div class="mdl-card__title">
      <h2 class="mdl-card__title-text">BUAT EVENT BARU</h2>
    </div>

    <div class="mdl-card__supporting-text">
      <form class="" action="#" method="post">
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--12-col">
          <input class="mdl-textfield__input" type="text" id="nama" name="nama">
          <label class="mdl-textfield__label" for="nama">NAMA EVENT</label>
        </div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--12-col">
          <input class="mdl-textfield__input" type="text" id="lokasi" name="lokasi">
          <label class="mdl-textfield__label" for="lokasi">LOKASI</label>
        </div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--12-col">
          <input class="mdl-textfield__input" type="text" id="hari" name="hari">
          <label class="mdl-textfield__label" for="hari">HARI</label>
        </div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--12-col">
          <input class="mdl-textfield__input" type="date" id="tanggal" name="tanggal">
          <label class="mdl-textfield__label" for="tanggal">TANGGAL</label>
        </div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--12-col">
          <input class="mdl-textfield__input" type="time" id="pukul" name="pukul">
          <label class="mdl-textfield__label" for="pukul">PUKUL MULAI</label>
        </div>
              <!-- Upload File -->
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--12-col">
          <input class="mdl-textfield__input" type="file" id="gambar" name="gambar">
          <label class="mdl-textfield__label" for="gambar">UPLOAD GAMBAR</label>
        </div>
      </form>
    </div>
    <div class="mdl-card__actions mdl-card--border">
      <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-cell mdl-cell--12-col">
        Buat
      </a>
</div>
</div>
