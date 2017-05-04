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
      <div class="mdl-cell mdl-cell--4-col">
        <div class="demo-card-square mdl-card mdl-shadow--2dp">
        <div class="mdl-card__title mdl-card--expand">
          <h2 class="mdl-card__title-text">Fesbud KBMS</h2>
        </div>
        <div class="mdl-card__supporting-text">
          Fesbud KBMS menggabungkan unsur unsur budaya yang ada di Sulawesi, yang dikemas dengan menggabungkan musik khas, tarian, dan drama teater.
        </div>
        <div class="mdl-card__actions mdl-card--border">
          <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
            View Event
          </a>
        </div>
        </div>
    </div>
    <div class="mdl-cell mdl-cell--4-col">
      <div class="demo-card-square mdl-card mdl-shadow--2dp">
      <div class="mdl-card__title mdl-card--expand">
        <h2 class="mdl-card__title-text">Nihon No Matsuri</h2>
      </div>
      <div class="mdl-card__supporting-text">
        Acara perhelatan atau pengenalan kebuadayaan Jepang
      </div>
      <div class="mdl-card__actions mdl-card--border">
        <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
          View Event
        </a>
      </div>
    </div></div>
    <div class="mdl-cell mdl-cell--4-col">
      <div class="demo-card-square mdl-card mdl-shadow--2dp">
      <div class="mdl-card__title mdl-card--expand">
        <h2 class="mdl-card__title-text">Dies Natalis Himadif</h2>
      </div>
      <div class="mdl-card__supporting-text">
        Acara Ulang tahun Himadif yang merupakan malam puncak dari serangkaian acaranya yang telah dilaksankan sebelumnya. Dikemas dengan konsep yang elegant dan penampilan dari perwakilan tiap kelas.
      </div>
      <div class="mdl-card__actions mdl-card--border">
        <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
          View Event
        </a>
      </div>
      </div>
    </div>
  </div>



<?php include 'foot.php'; ?>
