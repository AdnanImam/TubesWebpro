<?php include 'head.php'; ?>
  <base href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/">
      <div id="slider">
      <figure>
        <img src="<?php echo base_url('images/slider1.png'); ?>" width="auto" height="660px" />
        <img src="<?php echo base_url('images/slider2.png'); ?>" width="auto" height="660px" />
        <img src="<?php echo base_url('images/slider3.png'); ?>" width="auto" height="660px" />
        <img src="<?php echo base_url('images/slider4.png'); ?>" width="auto" height="660px" />
        </figure>

        <div class="posisi-header">
          <div class="logo-font header-slogan">Telkom University Event</div>
          <div class="logo-font header-sub-slogan">Welcome to Televent... Be Yourself, Do Your Thing, See What's Going On.</div>
          <div class="button">
            <button  onclick="location.href='<?php echo base_url();?>index.php/televent/createevent'" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"  >
              Create Event
            </button>
            <button onclick="location.href='<?php echo base_url();?>index.php/televent/eventview'" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
              View Event
            </button>
          </div>
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
          <?php echo $u->lokasi_event ?> <?php echo $u->tanggal ?>
          <h2 class="mdl-card__title-text">
            <?php echo $u->nama_event ?></h2>
        </div>
        <div class="mdl-card__supporting-text">
          <?php echo $u->deskripsi ?>
        </div>
        <div class="mdl-card__actions mdl-card--border">
          <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
            View Event
          </a>
        </div>
        </div>
    </div>
  <?php } ?>
  <?php
    echo $this->pagination->create_links();
  ?>
</div>
<?php include 'foot.php'; ?>
