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
<?php include 'foot.php'; ?>
