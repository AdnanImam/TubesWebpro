<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Edit Event</title>
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
                        <?php echo form_open("televent/action_edit_event/".$id_event); ?>
                        <h5>ID :</h5>
												<div class="row-fluid">
													<input type="text" name="id" value="<?php echo $id_event; ?>" class="span12" style="height: 30px; resize: none;" disabled></input>
												</div>
												<h5>Nama :</h5>
												<div class="row-fluid">
													<input type="text" name="nama_event" class="span12" style="height: 30px; resize: none;"></input>
												</div>
												<h5>Lokasi :</h5>
												<div class="row-fluid">
													<input type="text" name="lokasi_event" class="span12" style="height: 30px; resize: none;"></input>
												</div>
												<h5>Tanggal :</h5>
												<div class="row-fluid">
													<input type="date" name="tanggal" class="span12" style="height: 30px; resize: none;"></input>
												</div>
                        <h5>Hari :</h5>
												<div class="row-fluid">
													<input type="text" name="hari" class="span12" style="height: 30px; resize: none;"></input>
												</div>
                        <h5>Pukul :</h5>
												<div class="row-fluid">
													<input type="time" name="pukul" class="span12" style="height: 30px; resize: none;"></input>
												</div>
                        <h5>Deskripsi :</h5>
												<div class="row-fluid">
													<input type="text" name="deskripsi" class="span12" style="height: 30px; resize: none;"></input>
												</div>
                        <h5>CP :</h5>
												<div class="row-fluid">
													<input type="text" name="cp" class="span12" style="height: 30px; resize: none;"></input>
												</div>
                        <h5>penyelenggara :</h5>
                        <div class="row-fluid">
                          <input type="text" name="penyelenggara" class="span12" style="height: 30px; resize: none;"></input>
                        </div>
                        <h5>Gambar :</h5>
												<div class="row-fluid">
													<input type="text" name="gambar" class="span12" style="height: 30px; resize: none;"></input>
												</div>
												<br></br>
												<div class="clearfix">
													<input type="submit" name="submit" value="Simpan Data" class="btn btn-primary pull-right">
													<p>&nbsp;</p>
												</div>
												<input type="hidden" name="MM_insert" value="form1">
											</form>
											<p>&nbsp;</p>
    										<p>&nbsp;</p>
    									</div>
    								</div>
