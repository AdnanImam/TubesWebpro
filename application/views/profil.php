<?php include 'head.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<center>
<div class="event-header">
  <br>
  <br>
  <div class="profil-header">
  <div class="logo-font header-sub-slogan">Welcome <?php echo $this->session->userdata("nama"); ?></div>
  <a href="<?php echo base_url('index.php/televent/logout');?>"> LOGOUT </a>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <ul class="nav nav-pills nav-justified" "mdl-cell mdl-cell--12-col">
    <li class="active"><a href="#">MY TICKET</a></li>
    <li><a href="#">MY EVENT</a></li>
  </ul>
</div>
</div>
</center>
</body>
</html>
