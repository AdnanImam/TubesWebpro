<?php include'head.php'; ?>

<!-- Wide card with share menu button -->
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
      <h2 class="mdl-card__title-text">BUAT EVENT BARU</h2>
    </div>

    <div class="mdl-card__supporting-text">
        <?php echo form_open('televent/upload_file'); ?>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--12-col">
          <input class="mdl-textfield__input" type="text" id="nama" name="nama"  placeholder="NAMA ACARA">
        </div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--12-col">
          <input class="mdl-textfield__input" type="text" id="lokasi" name="lokasi"  placeholder="LOKASI">
          </div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--12-col">
          <input class="mdl-textfield__input" type="text" id="hari" name="hari"  placeholder="HARI">
        </div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--12-col">
          <input class="mdl-textfield__input" type="date" id="tanggal" name="tanggal"  placeholder="TANGGAL">
        </div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--12-col">
          <input class="mdl-textfield__input" type="time" id="pukul" name="pukul"  placeholder="PUKUL">
        </div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--12-col">
          <textarea rows="10" cols="70" class="mdl-textfield__input" type="text" id="desk" name="desk" placeholder="DESKRIPSI">
          </textarea>
        </div>
              <!-- Upload File -->
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--12-col">
          <input class="mdl-textfield__input" type="file" id="filefoto" name="filefoto"  placeholder="UPLOAD GAMBAR ACARA">
        </div>
      </form>
    </div>
    <div class="mdl-card__actions mdl-card--border">
      <input type="submit" name="submit" value="BUAT" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-cell mdl-cell--12-col">
  </div>
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
  </center>
