<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Modul 10</title>
		<link type="text/css" href="<?php echo base_url('files/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
		<link type="text/css" href="<?php echo base_url('files/bootstrap/css/bootstrap-responsive.min.css') ?>" rel="stylesheet">
		<link type="text/css" href="<?php echo base_url('files/css/theme.css') ?>" rel="stylesheet">
		<link type="text/css" href="<?php echo base_url('files/images/icons/css/font-awesome.css') ?>" rel="stylesheet">
	</head>
<div class="wrapper">
			<div class="container">
        <div class="row">
					<div class="span3">
						<div class="sidebar">
							<ul class="widget widget-menu unstyled">
								<li class="active">
									<a href="<?php echo base_url('index.php/televent/data') ?>">
										<i class="menu-icon icon-folder-close"></i>
										Tambah Event
									</a>
								</li>
								<li>
									<a href="<?php echo base_url('index.php/televent/data') ?>">
										<i class="menu-icon icon-table"></i>
										Tabel Event
									</a>
								</li>
							</ul><!--/.widget-nav-->
						</div><!--/.sidebar-->
					</div><!--/.span3-->
          <div class="span9">
						<div class="content">
							<div class="module">
								<div class="module-head">
                  <div class="module-head">
      								<h3>Tambah Event Baru</h3>
    							</div>
    							<div class="module-body">
    								<div class="stream-composer media">
    									<div class="media-body">
    										<?php echo form_open("mahasiswa/proses_input"); ?>
    											<h5>Nama :</h5><?php echo form_error('nama', '<div style="color:red">','</div>');?>
    											<div class="row-fluid">
    												<textarea type="text" name="nama" class="span12" style="height: 30px; resize: none;"></textarea>
    											</div>
    											<h5>Lokasi :</h5><?php echo form_error('lokasi', '<div style="color:red">','</div>');?>
    											<div class="row-fluid">
    												<textarea type="text" name="Lokasi" class="span12" style="height: 30px; resize: none;"></textarea>
    											</div>
    											<h5>Tanggal :</h5><?php echo form_error('tanggal', '<div style="color:red">','</div>');?>
    											<div class="row-fluid">
    												<textarea type="date" name="tanggal" class="span12" style="height: 30px; resize: none;"></textarea>
    											</div>
    											<h5>Hari :</h5><?php echo form_error('hari', '<div style="color:red">','</div>');?>
    											<div class="row-fluid">
    												<textarea type="text" name="hari" class="span12" style="height: 30px; resize: none;"></textarea>
    											</div>
                          <h5>Pukul :</h5><?php echo form_error('pukul', '<div style="color:red">','</div>');?>
    											<div class="row-fluid">
    												<textarea type="time" name="pukul" class="span12" style="height: 30px; resize: none;"></textarea>
    											</div>
                          <h5>Deskripsi :</h5><?php echo form_error('deskripsi', '<div style="color:red">','</div>');?>
    											<div class="row-fluid">
    												<textarea type="longtext" name="deskripsi" class="span12" style="height: 30px; resize: none;"></textarea>
    											</div>
                          <h5>Contact Person :</h5><?php echo form_error('cp', '<div style="color:red">','</div>');?>
    											<div class="row-fluid">
    												<textarea type="number" name="cp" class="span12" style="height: 30px; resize: none;"></textarea>
    											</div>
                          <h5>Penyelenggara :</h5><?php echo form_error('penyelenggara', '<div style="color:red">','</div>');?>
    											<div class="row-fluid">
    												<textarea type="text" name="penyelenggara" class="span12" style="height: 30px; resize: none;"></textarea>
    											</div>
                          <h5>Upload Gambar</h5>
													<input type="file" name="filefoto">
  												<div class="clearfix">
  													<input type="submit" name="submit" value="Upload File" class="btn btn-primary pull-right">
  													<p>&nbsp;</p>
  												</div>
    											<br></br>
    											<div class="clearfix">
    												<input type="submit" name="submit" value="Buat Event" class="btn btn-primary pull-right">
    												<p>&nbsp;</p>
    											</div>
    											<input type="hidden" name="MM_insert" value="form1">
    										</form>
    										<p>&nbsp;</p>
    									</div>
    								</div>
