<?php include 'head.php'; ?>
<style media="screen">
/* entire container, keeps perspective */
.flip-container {
	perspective: 1000px;
}
	/* flip the pane when hovered */
	.flip-container:hover .flipper, .flip-container.hover .flipper {
		transform: rotateY(180deg);
	}

.flip-container, .front, .back {
	width: 320px;
	height: 480px;
}

/* flip speed goes here */
.flipper {
	transition: 0.6s;
	transform-style: preserve-3d;

	position: relative;
}

/* hide back of pane during swap */
.front, .back {
	backface-visibility: hidden;

	position: absolute;
	top: 0;
	left: 0;
}

/* front pane, placed above back */
.front {
	z-index: 2;
	/* for firefox 31 */
	transform: rotateY(0deg);
}

/* back, initially hidden pane */
.back {
	transform: rotateY(180deg);
}
.demo-card-square.mdl-card {
width: 320px;
height: 320px;
}
.demo-card-square > .mdl-card__title {
color: #fff;
background:
  url('../assets/demos/dog.png') bottom right 15% no-repeat #46B6AC;
}

</style>
<h2 align="center">MY AWESOME TEAM</h2>
<h5 align="center">Young Celebes Art Studio</h5>
<div class="mdl-grid">
  <div class="mdl-cell mdl-cell--4-col">
    <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
      <div class="flipper">
        <div class="front">
                <img src="<?php echo base_url('images/dian.jpg'); ?>"/>
        </div>
        <div class="back">
          <div class="demo-card-square mdl-card mdl-shadow--2dp">
            <h5 align="center">Dian Eka Muzdalifah</h5>
            <div class="mdl-card__supporting-text">
              <h6 align="center">Database Analys</h6>
              Web Programming, CSS3,HTML5,PHP javascript <br>
              SQL,database engineering <br>
              And Many Other<Br>
            </div>
            <div class="mdl-card__actions mdl-card--border">
              <a href="https://www.facebook.com/dayonggg?fref=ts"class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                <img src="<?php echo base_url('images/fb.png'); ?>" width="auto" height="30px"/>
              </a>
              <a href="https://plus.google.com/109621760511307548952?hl=id"class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                <img src="<?php echo base_url('images/google.png'); ?>" width="auto" height="30px"/>
              </a>
              <a href="#"class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                <img src="<?php echo base_url('images/tweet.png'); ?>" width="auto" height="30px"/>
              </a>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
    <div class="mdl-cell mdl-cell--4-col">
      <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
        <div class="flipper">
          <div class="front">
                  <img src="<?php echo base_url('images/adnan.jpg'); ?>"/>
          </div>
          <div class="back">
            <div class="demo-card-square mdl-card mdl-shadow--2dp">
              <h5 align="center">Adnan Imam Hidayat</h5>
              <div class="mdl-card__supporting-text">
                <h6 align="center">Team Leader & web Designer</h6>
                Web Programming, Web Designer, CSS3,HTML5,PHP javascript <br>
                adobe Illustrator,adobe Photoshop,Corel<br>
                And Many Other<Br>
              </div>
              <div class="mdl-card__actions mdl-card--border">
                <a href="https://www.facebook.com/namakuadnan"class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                  <img src="<?php echo base_url('images/fb.png'); ?>" width="auto" height="30px"/>
                </a>
                <a href="https://plus.google.com/114242369206019506434?hl=id"class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                  <img src="<?php echo base_url('images/google.png'); ?>" width="auto" height="30px"/>
                </a>
                <a href="#"class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                  <img src="<?php echo base_url('images/tweet.png'); ?>" width="auto" height="30px"/>
                </a>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
      <div class="mdl-cell mdl-cell--4-col">
        <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
          <div class="flipper">
            <div class="front">
                    <img src="<?php echo base_url('images/zahra.jpg'); ?>"/>
            </div>
            <div class="back">
              <div class="demo-card-square mdl-card mdl-shadow--2dp">
                <h5 align="center">Khaeruz Zahra</h5>
                <div class="mdl-card__supporting-text">
                  <h6 align="center">software engineering</h6>
                  Web Programming, CSS3,HTML5,PHP javascript <br>
                  SQL,database engineering,Adobe illustrator <br>
                  And Many Other<Br>
                </div>
                <div class="mdl-card__actions mdl-card--border">
                  <a href="https://www.facebook.com/putry.cliquers.7927?fref=ts"class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                    <img src="<?php echo base_url('images/fb.png'); ?>" width="auto" height="30px"/>
                  </a>
                  <a href="https://plus.google.com/108678313600812111421?hl=id"class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                    <img src="<?php echo base_url('images/google.png'); ?>" width="auto" height="30px"/>
                  </a>
                  <a href="#"class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                    <img src="<?php echo base_url('images/tweet.png'); ?>" width="auto" height="30px"/>
                  </a>
                </div>
              </div>
              </div>
            </div>
          </div>
        </div>

  </div>
