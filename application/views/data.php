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
									<a href="<?php echo base_url('index.php/televent/tambahEvent_admin') ?>">
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
                    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
                    <thead>
                      <tr>
                        <th><center>No</center></th>
                        <th><center>Nama</center></th>
                        <th><center>Lokasi</center></th>
                        <th><center>tanggal</center></th>
                        <th><center>hari</center></th>
                        <th><center>pukul</center></th>
                        <th><center>deskripsi</center></th>
                        <th><center>cp</center></th>
                        <th><center>gambar</center></th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php
                          $no = $this->uri->segment('3') + 1;
                          foreach($user as $u){
                        ?>
                        <tr>
                          <td><?php echo $no++; ?></td>
                          <td><?php echo $u->nama_event ?></td>
                          <td><?php echo $u->lokasi_event ?></td>
                          <td><?php echo $u->tanggal ?></td>
                          <td><?php echo $u->hari ?></td>
                          <td><?php echo $u->pukul ?></td>
                          <td><?php echo $u->deskripsi ?></td>
                          <td><?php echo $u->cp ?></td>
                          <td><?php echo $u->gambar ?></td>
                          <td><a href="<?php echo base_url('index.php/televent/deleteevent/'.$u->id_event)?> ">hapus</a> </center></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                  </table>
                <?php
                  echo $this->pagination->create_links();
                ?>
              </div><!--/.module-->
            </div><!--/.content-->
          </div><!--/.span9-->
        </div>
      </div>
    </div>
</html>
