<?php include 'head.php'; ?>
<style media="screen">

</style>
<div class="event-header">
  <div class="posisi-header">
    <div class="event-font event-slogan">EVENT </div>
    <div class="event-font event-sub-slogan">Welcome to Televent... Be Yourself, Do Your Thing, See What's Going On.</div>
  </div>
</div>
<div class="mdl-grid">
  <?php
    $no = $this->uri->segment('3') + 1;
    foreach($user as $u){
  ?>
    <div class="mdl-cell mdl-cell--4-col">
      <div class="demo-card-square mdl-card mdl-shadow--2dp">
      <div class="mdl-card__title mdl-card--expand">
        <?php echo $u->lokasi_event ?> <br> <?php echo $u->tanggal ?>
        <h2 class="mdl-card__title-text">
          <?php echo $u->nama_event ?></h2>
      </div>
      <div class="mdl-card__supporting-text">
        <?php echo $u->deskripsi ?>
      </div>
      <div class="mdl-card__actions mdl-card--border">
        <button onclick="location.href='<?php echo base_url();?>index.php/televent/bookingevent'" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
          Booking
        </button>
      </div>
      </div>
  </div>
<?php } ?>
<?php
  echo $this->pagination->create_links();
?>
</div>

<?php include 'foot.php'; ?>
