<?php include 'head.php'; ?>

    <!-- Wide card with share menu button -->
    <style>
    .demo-card-wide.mdl-card {
      top:50px;
      width: 512px;
      height: 470px;
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
    </style>
<center>
    <div class="demo-card-wide mdl-card mdl-shadow--2dp">
      <div class="mdl-card__title">
        <h2 class="mdl-card__title-text">LOGIN</h2>
      </div>
      <div class="mdl-card__supporting-text">
        <form class="" action="#" method="post">
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--12-col">
            <input class="mdl-textfield__input" type="text" name="uname">
            <label class="mdl-textfield__label" for="uname">Username</label>
          </div>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--12-col">
            <input class="mdl-textfield__input" type="password" name="password">
            <label class="mdl-textfield__label" for="password">Password</label>
          </div>
        </form>
      </div>
      <div class="mdl-card__actions mdl-card--border">
        <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-cell mdl-cell--12-col">
          LOGIN
        </a>
      </div>
      <div class="mdl-card__actions mdl-card--border">
        <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-cell mdl-cell--12-col">
          REGISTER
        </a>
      </div>
    </div>
<center>
