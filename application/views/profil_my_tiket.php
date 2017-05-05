<?php include 'head.php'; ?>
<style media="screen">
@import url(http://fonts.googleapis.com/css?family=Lato:300);

      body {
        margin-left: auto;
        margin-right: auto;
        background-color: #f2f2f2;
        color: #444;
        font-family: 'Lato', sans-serif;
        font-weight: 300;
        line-height: 1;
        text-align: center;
        }

        .profile-img {
        display: block;
        height: 7em;
        margin-right: auto;
        margin-left: auto;
        border: .5em solid #f2f2f2;
        border-radius: 100%;
        box-shadow:  0 1px 0 0 rgba(0,0,0,.1);
        }

        .profile-text {
        margin-top: -3.5em;
        padding: 5em 1.5em 1.5em 1.5em;
        background: white;
        border-radius: 3px;
        box-shadow: 0 1px 2px rgba(0,0,0,0.1)
        }

        .profile-name{
        margin-right: -1em;
        margin-bottom: .75em;
        margin-left: -1em;
        border-bottom: 1px solid rgba(0,0,0,0.1);
        padding-bottom: .75em;
        font-size: 1.5em;
        text-transform: uppercase;
        }

        .profile-title {
        color: #ccc;
        }
        .navigation {
          position: fixed;
          height: 100%;
          background-color: #373948;
        }

        .navigation__links {
          list-style: none;
          padding: 0;
        }

        .navigation__links li {
          border-right: 2px solid #373948;
          border-top: 2px solid #373948;
        }


        .navigation__link {
          padding: 20px;
          display: block;
          color: #FFFFFF;
        }

        .navigation__link--teal 	{background-color: #D32F2F;}
        .navigation__link--orange {background-color: #C62828;}
        .navigation__link--yellow {background-color: #B71C1C;}

        .navigation__link:hover .navigation__text {left: 54px;}

        .navigation__text {
          padding: 20px 10px;
          width: 150px;
          margin: 0;
          color: white;
          left: -155px;
          position: absolute;
          transition: left 0.5s;
        }

        .navigation__text--home {
          top: 0px;
          background-color: #373948;
          border: 2px solid #373948;
        }

        .navigation__text--about-me {
          top: 64px;
          background-color: #212121;
        }

        .navigation__text--services {
          top: 126px;
          background-color: #212121;
        }

        .navigation__text--contact-me	{
          top: 188px;
          background-color: #212121;
        }
        @import "compass/css3";

            @import "compass/css3";
            @import url(http://fonts.googleapis.com/css?family=Patua+One|Open+Sans);

            * {
              -moz-box-sizing: border-box;
              -webkit-box-sizing: border-box;
              box-sizing: border-box;
            }

            body {
              background:#353a40;
            }

            table {
              border-collapse: separate;
              background:#fff;
              @include border-radius(5px);
              margin:50px auto;
              @include box-shadow(0px 0px 5px rgba(0,0,0,0.3));
            }

            thead {
              @include border-radius(5px);
            }

            thead th {
              font-family: 'Patua One', cursive;
              font-size:16px;
              font-weight:400;
              color:#B71C1C;
              @include text-shadow(1px 1px 0px rgba(0,0,0,0.5));
              text-align:left;
              padding:20px;
              @include background-image(linear-gradient(#646f7f, #4a5564));
              border-top:1px solid #858d99;

              &:first-child {
               @include border-top-left-radius(5px);
              }

              &:last-child {
                @include border-top-right-radius(5px);
              }
            }

            tbody tr td {
              font-family: 'Open Sans', sans-serif;
              font-weight:400;
              color:#5f6062;
              font-size:13px;
              padding:20px 20px 20px 20px;
              border-bottom:1px solid #e0e0e0;

            }

            tbody tr:nth-child(2n) {
              background:#f0f3f5;
            }

            tbody tr:last-child td {
              border-bottom:none;
              &:first-child {
                @include border-bottom-left-radius(5px);
              }
              &:last-child {
                @include border-bottom-right-radius(5px);
              }
            }

            tbody:hover > tr td {
              @include opacity(0.5);

              /* uncomment for blur effect */
              /* color:transparent;
              @include text-shadow(0px 0px 2px rgba(0,0,0,0.8));*/
            }

            tbody:hover > tr:hover td {
              @include text-shadow(none);
              color:#2d2d2d;
              @include opacity(1.0);
            }


  </style>
      <img src="<?php echo base_url('images/profil1.jpg'); ?>" class="profile-img">
    <div class="profile-text">
      <h1 class="profile-name"><?php echo $this->session->userdata("nama"); ?></h1>
      <span class="profile-title">EVENT COMMITE</span><br>
      <a href="<?php echo base_url('index.php/televent/logout');?>"> LOGOUT </a>
    </div>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat:300,400,700' />
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css' />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css" />
<nav role="navigation" class="navigation">
  <ul class="navigation__links">

    <li>
      <a class="navigation__link" href="#home">
        <i class="fa fa-home" aria-hidden="true"></i>
        <p class="navigation__text navigation__text--home">Home</p>
      </a>
    </li>

    <li>
      <a class="navigation__link navigation__link--yellow" href="<?php echo base_url('index.php/televent/mytiket') ?>">
        <i class="fa fa-user" aria-hidden="true"></i>
        <p class="navigation__text navigation__text--about-me">My Tiket</p>
      </a>
    </li>

    <li>
      <a class="navigation__link navigation__link--teal" href="<?php echo base_url('index.php/televent/myevent') ?>">
        <i class="fa fa-wrench" aria-hidden="true"></i>
        <p class="navigation__text navigation__text--services">My Event</p>
      </a>
    </li>

    <li>
      <a class="navigation__link navigation__link--orange" href="#contact-me">
        <i class="fa fa-envelope" aria-hidden="true"></i>
        <p class="navigation__text navigation__text--contact-me">Contact Me</p>
      </a>
    </li>

  </ul>
</nav>
<h4 align="center">DAFTAR TIKET</h4>
<table>
  <thead>
      <tr>
          <th>No.</th>
          <th>Nama</th>
          <th>Lokasi</th>
          <th>Tanggal</th>
          <th>Hari</th>
          <th>Pukul</th>
          <th>Deskripsi</th>
          <th>CP</th>
          <th>Penyelenggara</th>
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
        <td><?php echo $u->penyelenggara ?></td>
      </tr>
      <?php } ?>
  </tbody>
</table>
