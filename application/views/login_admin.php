<html>
  <head>
    <meta charset="utf-8">
    <style media="screen">

    </style>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Introducing Lollipop, a sweet new take on Android.">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

        <!-- Material Design Lite CSS -->
        <link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.0/material.indigo-pink.min.css">
        <!-- Material Design Icons -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.min.css">
        <link rel="stylesheet" href="files/styles.css">

        <link type="text/css" href="<?php echo base_url('files/modelcss.css') ?>" rel="stylesheet">


  </head>
    <!-- Wide card with share menu button -->
    <style>
    .demo-card-wide.mdl-card {
      top:50px;
      width: 512px;
      height: 400px;
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
      background:#424242;
    }
    .demo-card-wide > .mdl-card__actions > .mdl-button:hover {
      color: #fff;
      background: #B71C1C;
    }
    </style>
<center>
    <div class="demo-card-wide mdl-card mdl-shadow--2dp">
      <div class="mdl-card__title">
        <h2 class="mdl-card__title-text">LOGIN ADMIN</h2>
      </div>
        <?php echo form_open('televent/login_ad'); ?>
      <div class="mdl-card__supporting-text">
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--12-col">
            <input class="mdl-textfield__input" type="text" name="uname" placeholder="USERNAME">
          </div>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--12-col">
            <input class="mdl-textfield__input" type="password" name="password" placeholder="PASSWORD">
          </div>
      </div>
      <div class="mdl-card__actions mdl-card--border">
          <input type="submit" name="login" value="LOGIN" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-cell mdl-cell--12-col">
      </div>
    </div>
<center>
</html>
