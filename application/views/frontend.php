<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Karirpad</title>

  <!-- Bootstrap core CSS -->
  <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <!-- <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css"> -->
  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" type="text/css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>

  <!-- Custom styles for this template -->
  <link href="<?=base_url()?>assets/css/landing-page.min.css" rel="stylesheet">
  <style media="screen">
  body{
    font-family: 'Poppins';
  }
  .btn-blue{
    color: #fff;
    background: #02ADFB;
    border-color: #02ADFB;
  }
  .text-pink{
    color: #FF0066;
  }
  .btn-pink{
    color: #fff;
    background: #FF0066;
    border-color: #FF0066;
  }
  .btn-ats{
    color: #fff;
    background: #CAAE49;
    border-color: #CAAE49;
  }
  .btn-rms{
    color: #fff;
    background: #00C201;
    border-color: #00C201;
  }
  .overlays{
    position: absolute;
    background-color: #212529;
    height: 100%;
    width: 100%;
    top: 0;
    left: 0;
  }

  /* carousel */
  .col-md-3{
    display: inline-block;
    margin-left:-4px;
  }
  .col-md-3 img{
    width:100%;
    height:auto;
  }
  body .carousel-indicators li{
    background-color:red;
  }
  body .carousel-control-prev-icon,
  body .carousel-control-next-icon{
    color:#F9F9F9;
    background-color: black;
  }
  body .carousel-control-prev,
  body .carousel-control-next{
    margin-top:165px;
    width:40px;
    height:40px;
    border-radius:100%;
    background-color:#F9F9F9;
    color: #000;
    border: 1px solid #6B7187;
  }
  body .no-padding{
    padding-left: 0;
    padding-right: 0;
  }
  .carousel-item .card-lowongan{
    min-width: 200px;
  }
  </style>
</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light px-5">
    <a class="navbar-brand" href="#"><img src="<?=base_url("assets/images/karirpad-logo.png")?>" width="200" alt=""> </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- <div style="width:45vw;"></div> -->
    <div class="collapse navbar-collapse right-menu" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto font-weight-bold">
        <li class="nav-item">
          <a href="#" class="nav-link mr-5">Pencari Kerja</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link mr-3" style="color:#FF0066;">Daftar</a>
        </li>
        <li class="nav-item">
          <span class="nav-link mr-3">|</span>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link mr-4">Masuk</a>
        </li>
        <li class="nav-item">
          <a href="#" class="badge-pill btn btn-blue rounded-3 px-4 py-2">Perusahaan</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Masthead -->
  <header class="masthead text-white text-center bg-light">
    <div class="overlays">
      <img src="<?=base_url("assets/images/prambanan.jpg")?>" style="object-fit: fill; height:100%; width:100%;" alt="">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <label class="mt-5 mb-3" style="font-size:35px;">Cari Kerja <b>Jauh Lebih Mudah</b></label>
        </div>
        <div class="col-md-10 col-lg-8 col-xl-8 mx-auto">
          <form>
            <div class="form-row">
              <div class="col-12 col-md-7 mb-2 mb-md-0">
                <input type="text" class="form-control form-control-md" placeholder="Cari Posisi atau Perusahaan">
              </div>
              <div class="col-12 col-md-3 mb-2 mb-md-0">
                <input type="text" class="form-control form-control-md" placeholder="&#xf041;  Lokasi" style="font-family: FontAwesome, Arial; font-style: normal">
              </div>
              <div class="col-12 col-md-2">
                <button type="submit" class="btn btn-block btn-md btn-pink">Cari</button>
              </div>
            </div>
          </form>
        </div>
        <div class="col-xl-9 mx-auto">
          <label class="mt-3" style="font-size:15px;">Tersedia ribuan lowongan pekerjaan untuk Kamu saat ini. Lihat lowongan <a href="#" style="color:#E5A058;">di sini</a>
          </label>
        </div>
      </div>
    </div>
  </header>

  <section class="features-icons text-center" style="background:#F5F5F5;">
    <div class="container">
      <label class="" style="font-size:25px;"><b>Lowongan pilihan untuk kamu</b></label><br>
      <label class="text-secondary" style="font-size:15px;">Buruan lamar lowongannya biar kamu cepet dapet kerja</label>
      <div class="row">
        <div id="demo" class="carousel slide col-md-12 col-lg-12" data-ride="carousel">
          <!-- Indicators -->
          <!-- <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
        </ul> -->
        <div class="container carousel-inner no-padding mt-5">
          <div class="carousel-item active">
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 card-lowongan">
              <div class="col-md-12 text-right fa" style="background:#F9F9F9;">
                <br>
                <span class="fas fa-map-marker" style="color:#CAF0E5;"></span> <label class="text-secondary" style="font-size:12px;">&nbsp;689 km</label>
                <br>
              </div>
              <div class="" style="background:#F9F9F9;">
                <div class="col-md-12 rounded-circle mx-auto" style="border: 4px solid #E0E0E0; height: 80px; width: 80px; background-image:url(<?=base_url('assets/images/prambanan.jpg')?>); background-size: cover; background-position: 100%"></div>
              </div>
              <div class="bg-white text-center px-2" style="margin-top:-40px; line-height:1.2;">
                <label class="mt-5 m-0"><b>Programmer</b> </label><br>
                <label style="font-size:12px; margin:0;">PT. Karir Pad</label><br>
                <label class="text-secondary m-0"style="font-size:12px;">Malang, Jawa Timur</label><br>
                <label class="text-secondary mt-3 mb-0 text-info"style="font-size:12px;">Gaji Negosiasi</label><br>
                <a href="#" class="btn btn-secondary btn-sm text-sm px-4 mt-3 badge-pill">Lamar Sekarang</a>
                <br><br><br>
              </div>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 card-lowongan">
              <div class="col-md-12 text-right fa" style="background:#F9F9F9;">
                <br>
                <span class="fas fa-map-marker" style="color:#CAF0E5;"></span> <label class="text-secondary" style="font-size:12px;">&nbsp;689 km</label>
                <br>
              </div>
              <div class="" style="background:#F9F9F9;">
                <div class="col-md-12 rounded-circle mx-auto" style="border: 4px solid #E0E0E0; height: 80px; width: 80px; background-image:url(<?=base_url('assets/images/prambanan.jpg')?>); background-size: cover; background-position: 100%"></div>
              </div>
              <div class="bg-white text-center px-2" style="margin-top:-40px; line-height:1.2;">
                <label class="mt-5 m-0"><b>Programmer</b> </label><br>
                <label style="font-size:12px; margin:0;">PT. Karir Pad</label><br>
                <label class="text-secondary m-0"style="font-size:12px;">Malang, Jawa Timur</label><br>
                <label class="text-secondary mt-3 mb-0 text-info"style="font-size:12px;">Gaji Negosiasi</label><br>
                <a href="#" class="btn btn-secondary btn-sm text-sm px-4 mt-3 badge-pill">Lamar Sekarang</a>
                <br><br><br>
              </div>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 card-lowongan">
              <div class="col-md-12 text-right fa" style="background:#F9F9F9;">
                <br>
                <span class="fas fa-map-marker" style="color:#CAF0E5;"></span> <label class="text-secondary" style="font-size:12px;">&nbsp;689 km</label>
                <br>
              </div>
              <div class="" style="background:#F9F9F9;">
                <div class="col-md-12 rounded-circle mx-auto" style="border: 4px solid #E0E0E0; height: 80px; width: 80px; background-image:url(<?=base_url('assets/images/prambanan.jpg')?>); background-size: cover; background-position: 100%"></div>
              </div>
              <div class="bg-white text-center px-2" style="margin-top:-40px; line-height:1.2;">
                <label class="mt-5 m-0"><b>Programmer</b> </label><br>
                <label style="font-size:12px; margin:0;">PT. Karir Pad</label><br>
                <label class="text-secondary m-0"style="font-size:12px;">Malang, Jawa Timur</label><br>
                <label class="text-secondary mt-3 mb-0 text-info"style="font-size:12px;">Gaji Negosiasi</label><br>
                <a href="#" class="btn btn-secondary btn-sm text-sm px-4 mt-3 badge-pill">Lamar Sekarang</a>
                <br><br><br>
              </div>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 card-lowongan">
              <div class="col-md-12 text-right fa" style="background:#F9F9F9;">
                <br>
                <span class="fas fa-map-marker" style="color:#CAF0E5;"></span> <label class="text-secondary" style="font-size:12px;">&nbsp;689 km</label>
                <br>
              </div>
              <div class="" style="background:#F9F9F9;">
                <div class="col-md-12 rounded-circle mx-auto" style="border: 4px solid #E0E0E0; height: 80px; width: 80px; background-image:url(<?=base_url('assets/images/prambanan.jpg')?>); background-size: cover; background-position: 100%"></div>
              </div>
              <div class="bg-white text-center px-2" style="margin-top:-40px; line-height:1.2;">
                <label class="mt-5 m-0"><b>Programmer</b> </label><br>
                <label style="font-size:12px; margin:0;">PT. Karir Pad</label><br>
                <label class="text-secondary m-0"style="font-size:12px;">Malang, Jawa Timur</label><br>
                <label class="text-secondary mt-3 mb-0 text-info"style="font-size:12px;">Gaji Negosiasi</label><br>
                <a href="#" class="btn btn-secondary btn-sm text-sm px-4 mt-3 badge-pill">Lamar Sekarang</a>
                <br><br><br>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 card-lowongan">
              <div class="col-md-12 text-right fa" style="background:#F9F9F9;">
                <br>
                <span class="fas fa-map-marker" style="color:#CAF0E5;"></span> <label class="text-secondary" style="font-size:12px;">&nbsp;689 km</label>
                <br>
              </div>
              <div class="" style="background:#F9F9F9;">
                <div class="col-md-12 rounded-circle mx-auto" style="border: 4px solid #E0E0E0; height: 80px; width: 80px; background-image:url(<?=base_url('assets/images/prambanan.jpg')?>); background-size: cover; background-position: 100%"></div>
              </div>
              <div class="bg-white text-center px-2" style="margin-top:-40px; line-height:1.2;">
                <label class="mt-5 m-0"><b>Programmer</b> </label><br>
                <label style="font-size:12px; margin:0;">PT. Karir Pad</label><br>
                <label class="text-secondary m-0"style="font-size:12px;">Malang, Jawa Timur</label><br>
                <label class="text-secondary mt-3 mb-0 text-info"style="font-size:12px;">Gaji Negosiasi</label><br>
                <a href="#" class="btn btn-secondary btn-sm text-sm px-4 mt-3 badge-pill">Lamar Sekarang</a>
                <br><br><br>
              </div>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 card-lowongan">
              <div class="col-md-12 text-right fa" style="background:#F9F9F9;">
                <br>
                <span class="fas fa-map-marker" style="color:#CAF0E5;"></span> <label class="text-secondary" style="font-size:12px;">&nbsp;689 km</label>
                <br>
              </div>
              <div class="" style="background:#F9F9F9;">
                <div class="col-md-12 rounded-circle mx-auto" style="border: 4px solid #E0E0E0; height: 80px; width: 80px; background-image:url(<?=base_url('assets/images/prambanan.jpg')?>); background-size: cover; background-position: 100%"></div>
              </div>
              <div class="bg-white text-center px-2" style="margin-top:-40px; line-height:1.2;">
                <label class="mt-5 m-0"><b>Programmer</b> </label><br>
                <label style="font-size:12px; margin:0;">PT. Karir Pad</label><br>
                <label class="text-secondary m-0"style="font-size:12px;">Malang, Jawa Timur</label><br>
                <label class="text-secondary mt-3 mb-0 text-info"style="font-size:12px;">Gaji Negosiasi</label><br>
                <a href="#" class="btn btn-secondary btn-sm text-sm px-4 mt-3 badge-pill">Lamar Sekarang</a>
                <br><br><br>
              </div>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 card-lowongan">
              <div class="col-md-12 text-right fa" style="background:#F9F9F9;">
                <br>
                <span class="fas fa-map-marker" style="color:#CAF0E5;"></span> <label class="text-secondary" style="font-size:12px;">&nbsp;689 km</label>
                <br>
              </div>
              <div class="" style="background:#F9F9F9;">
                <div class="col-md-12 rounded-circle mx-auto" style="border: 4px solid #E0E0E0; height: 80px; width: 80px; background-image:url(<?=base_url('assets/images/prambanan.jpg')?>); background-size: cover; background-position: 100%"></div>
              </div>
              <div class="bg-white text-center px-2" style="margin-top:-40px; line-height:1.2;">
                <label class="mt-5 m-0"><b>Programmer</b> </label><br>
                <label style="font-size:12px; margin:0;">PT. Karir Pad</label><br>
                <label class="text-secondary m-0"style="font-size:12px;">Malang, Jawa Timur</label><br>
                <label class="text-secondary mt-3 mb-0 text-info"style="font-size:12px;">Gaji Negosiasi</label><br>
                <a href="#" class="btn btn-secondary btn-sm text-sm px-4 mt-3 badge-pill">Lamar Sekarang</a>
                <br><br><br>
              </div>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 card-lowongan">
              <div class="col-md-12 text-right fa" style="background:#F9F9F9;">
                <br>
                <span class="fas fa-map-marker" style="color:#CAF0E5;"></span> <label class="text-secondary" style="font-size:12px;">&nbsp;689 km</label>
                <br>
              </div>
              <div class="" style="background:#F9F9F9;">
                <div class="col-md-12 rounded-circle mx-auto" style="border: 4px solid #E0E0E0; height: 80px; width: 80px; background-image:url(<?=base_url('assets/images/prambanan.jpg')?>); background-size: cover; background-position: 100%"></div>
              </div>
              <div class="bg-white text-center px-2" style="margin-top:-40px; line-height:1.2;">
                <label class="mt-5 m-0"><b>Programmer</b> </label><br>
                <label style="font-size:12px; margin:0;">PT. Karir Pad</label><br>
                <label class="text-secondary m-0"style="font-size:12px;">Malang, Jawa Timur</label><br>
                <label class="text-secondary mt-3 mb-0 text-info"style="font-size:12px;">Gaji Negosiasi</label><br>
                <a href="#" class="btn btn-secondary btn-sm text-sm px-4 mt-3 badge-pill">Lamar Sekarang</a>
                <br><br><br>
              </div>
            </div>
          </div>
          <br>
          <label class="mt-3" style="font-size:15px;">Lihat lowongan lainnya <a href="#" class="text-info">di sini</a>
          </div>

          <!-- Left and right controls -->
          <a class="carousel-control-prev btn-carousel mr-3" href="#demo" data-slide="prev">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
            </svg>
          </a>
          <a class="carousel-control-next btn-carousel ml-3" href="#demo" data-slide="next">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
            </svg>
          </a>
        </div>
      </div>
    </div>
  </section>

  <section class="features-icons text-center" style="background:#FFF;">
    <div class="container">
      <label class="" style="font-size:25px;"><b>Fungsi Pekerjaan Terpopuler</b></label><br>
      <label class="text-secondary" style="font-size:15px;">Penasaran kan lowongan yang terpopuler saat ini? Cek lowongan di bawah ini:</label>
      <div class="row mt-5">
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 card-lowongan">
          <img src="<?=base_url("assets/images/lowongan/megaphone.svg")?>" alt="" style="width:80px;">
          <div class="bg-white text-center px-2" style="margin-top:-40px; line-height:1.2;">
            <label class="mt-5 m-0"><b>Pemasaran</b> </label><br>
            <label class="text-secondary m-0"style="font-size:12px;">300 Lowongan tersedia</label><br>
            <a href="#"><label class="text-secondary mt-3 mb-0 text-info"style="font-size:12px;">Lihat Semua</label></a><br>
            <br><br><br>
          </div>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 card-lowongan">
          <img src="<?=base_url("assets/images/lowongan/admin.svg")?>" alt="" style="width:80px;">
          <div class="bg-white text-center px-2" style="margin-top:-40px; line-height:1.2;">
            <label class="mt-5 m-0"><b>Pengelola Akun/Penjual/Sales</b> </label><br>
            <label class="text-secondary m-0"style="font-size:12px;">158 Lowongan tersedia</label><br>
            <a href="#"><label class="text-secondary mt-3 mb-0 text-info"style="font-size:12px;">Lihat Semua</label></a><br>
            <br><br><br>
          </div>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 card-lowongan">
          <img src="<?=base_url("assets/images/lowongan/monitor.svg")?>" alt="" style="width:80px;">
          <div class="bg-white text-center px-2" style="margin-top:-40px; line-height:1.2;">
            <label class="mt-5 m-0"><b>Administrasi, Admin</b> </label><br>
            <label class="text-secondary m-0"style="font-size:12px;">156 Lowongan tersedia</label><br>
            <a href="#"><label class="text-secondary mt-3 mb-0 text-info"style="font-size:12px;">Lihat Semua</label></a><br>
            <br><br><br>
          </div>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 card-lowongan">
          <img src="<?=base_url("assets/images/lowongan/menperson.svg")?>" alt="" style="width:80px;">
          <div class="bg-white text-center px-2" style="margin-top:-40px; line-height:1.2;">
            <label class="mt-5 m-0"><b>Konsultan</b> </label><br>
            <label class="text-secondary m-0"style="font-size:12px;">62 Lowongan tersedia</label><br>
            <a href="#"><label class="text-secondary mt-3 mb-0 text-info"style="font-size:12px;">Lihat Semua</label></a><br>
            <br><br><br>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 card-lowongan">
          <img src="<?=base_url("assets/images/lowongan/megaphone.svg")?>" alt="" style="width:80px;">
          <div class="bg-white text-center px-2" style="margin-top:-40px; line-height:1.2;">
            <label class="mt-5 m-0"><b>Pemasaran</b> </label><br>
            <label class="text-secondary m-0"style="font-size:12px;">300 Lowongan tersedia</label><br>
            <a href="#"><label class="text-secondary mt-3 mb-0 text-info"style="font-size:12px;">Lihat Semua</label></a><br>
            <br><br><br>
          </div>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 card-lowongan">
          <img src="<?=base_url("assets/images/lowongan/admin.svg")?>" alt="" style="width:80px;">
          <div class="bg-white text-center px-2" style="margin-top:-40px; line-height:1.2;">
            <label class="mt-5 m-0"><b>Pengelola Akun/Penjual/Sales</b> </label><br>
            <label class="text-secondary m-0"style="font-size:12px;">158 Lowongan tersedia</label><br>
            <a href="#"><label class="text-secondary mt-3 mb-0 text-info"style="font-size:12px;">Lihat Semua</label></a><br>
            <br><br><br>
          </div>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 card-lowongan">
          <img src="<?=base_url("assets/images/lowongan/monitor.svg")?>" alt="" style="width:80px;">
          <div class="bg-white text-center px-2" style="margin-top:-40px; line-height:1.2;">
            <label class="mt-5 m-0"><b>Administrasi, Admin</b> </label><br>
            <label class="text-secondary m-0"style="font-size:12px;">156 Lowongan tersedia</label><br>
            <a href="#"><label class="text-secondary mt-3 mb-0 text-info"style="font-size:12px;">Lihat Semua</label></a><br>
            <br><br><br>
          </div>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 card-lowongan">
          <img src="<?=base_url("assets/images/lowongan/menperson.svg")?>" alt="" style="width:80px;">
          <div class="bg-white text-center px-2" style="margin-top:-40px; line-height:1.2;">
            <label class="mt-5 m-0"><b>Konsultan</b> </label><br>
            <label class="text-secondary m-0"style="font-size:12px;">62 Lowongan tersedia</label><br>
            <a href="#"><label class="text-secondary mt-3 mb-0 text-info"style="font-size:12px;">Lihat Semua</label></a><br>
            <br><br><br>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="features-icons text-center" style="background:#F5F5F5;">
    <div class="container">
      <label class="" style="font-size:25px;"><b>Kriteria Lowongan Pilihan Untuk Kamu</b></label><br>
      <label class="text-secondary" style="font-size:15px;">Di bawah ini beberapa kriteria yang mungkin cocok untuk Kamu. Silakan pilih kriterianya ya!</label>
      <div class="row mt-5">
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 card-lowongan">
          <img src="<?=base_url("assets/images/kriteria/graduation.jpg")?>" alt="">
          <div class="text-center px-2" style="margin-top:-40px; line-height:1.2;">
            <label class="mt-5 m-0"><b>Frehs Graduate</b> </label><br>
            <label class="text-secondary m-0"style="font-size:12px;">Baru lulus? Cocok banget nih lowongan buat Kamu yang mau mulai berkarir.</label><br>
            <a href="#"><label class="text-secondary mt-3 mb-0 text-info"style="font-size:12px;">Lihat Lowongan</label></a><br>
            <br><br><br>
          </div>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 card-lowongan">
          <img src="<?=base_url("assets/images/kriteria/graduation.jpg")?>" alt="">
          <div class="text-center px-2" style="margin-top:-40px; line-height:1.2;">
            <label class="mt-5 m-0"><b>Frehs Graduate</b> </label><br>
            <label class="text-secondary m-0"style="font-size:12px;">Baru lulus? Cocok banget nih lowongan buat Kamu yang mau mulai berkarir.</label><br>
            <a href="#"><label class="text-secondary mt-3 mb-0 text-info"style="font-size:12px;">Lihat Lowongan</label></a><br>
            <br><br><br>
          </div>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 card-lowongan">
          <img src="<?=base_url("assets/images/kriteria/graduation.jpg")?>" alt="">
          <div class="text-center px-2" style="margin-top:-40px; line-height:1.2;">
            <label class="mt-5 m-0"><b>Frehs Graduate</b> </label><br>
            <label class="text-secondary m-0"style="font-size:12px;">Baru lulus? Cocok banget nih lowongan buat Kamu yang mau mulai berkarir.</label><br>
            <a href="#"><label class="text-secondary mt-3 mb-0 text-info"style="font-size:12px;">Lihat Lowongan</label></a><br>
            <br><br><br>
          </div>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 card-lowongan">
          <img src="<?=base_url("assets/images/kriteria/graduation.jpg")?>" alt="">
          <div class="text-center px-2" style="margin-top:-40px; line-height:1.2;">
            <label class="mt-5 m-0"><b>Frehs Graduate</b> </label><br>
            <label class="text-secondary m-0"style="font-size:12px;">Baru lulus? Cocok banget nih lowongan buat Kamu yang mau mulai berkarir.</label><br>
            <a href="#"><label class="text-secondary mt-3 mb-0 text-info"style="font-size:12px;">Lihat Lowongan</label></a><br>
            <br><br><br>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="features-icons text-center" style="background:#F5F5F5;">
    <div class="container">
      <label class="" style="font-size:25px;"><b>Kriteria Lowongan Pilihan Untuk Kamu</b></label><br>
      <label class="text-secondary" style="font-size:15px;">Di bawah ini beberapa kriteria yang mungkin cocok untuk Kamu. Silakan pilih kriterianya ya!</label>
      <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 card-lowongan">
          <img src="<?=base_url("assets/images/ats.png")?>" style="width:70%;" alt="">
          <div class="text-center px-2" style="margin-top:-85px; line-height:1.5;">
            <label class="m-0"><b>Applicant Tracking System as Large Enterprise Solutions</b> </label><br>
            <label class="text-secondary m-0"style="font-size:12px;">Optimize recruiter's productivity while doing heavy recruitment by using systematic, faster, and accountable recruitment process from ATS.</label><br>
            <a href="#" class="btn btn-ats badge-pill mt-3 px-3" style="font-size:12px;">Read More</a><br>
            <br><br><br>
          </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 card-lowongan">
          <img src="<?=base_url("assets/images/rms.png")?>" style="width:75%;" alt="">
          <div class="text-center px-2" style="margin-top:-77px; line-height:1.5;">
            <label class="m-0"><b>Recruiter Management System as Small Medium Enterprise Solutions</b> </label><br>
            <label class="text-secondary m-0"style="font-size:12px;">Over 4000 trusts RMS for unlimited job posting, accssing talent pool, and processing candidates.</label><br>
            <a href="#" class="btn btn-rms badge-pill mt-3 px-3" style="font-size:12px;">Read More</a><br>
            <br><br><br>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Footer -->
  <footer class="footer" style="background:#353535;">
    <div class="container">
      <div class="col-md-12 text-center">
        <label class="" style="color:#A0A0A0; font-size:20px;">Customer Service</label>
      </div>
      <br>
      <div class="row">
        <div class="col-md-6 text-right" style="line-height:1;">
          <label style="color:#A0A0A0; font-size:15px;">Untuk Pencari Kerja</label><br>
          <label class="text-secondary" style="font-size:12px;">email: js@karirpad.com Whatsapp: +628 5951 8080 34</label>
        </div>
        <div class="col-md-6 text-left" style="line-height:1;">
          <label style="color:#A0A0A0; font-size:15px;">Untuk Perusahan</label><br>
          <label class="text-secondary" style="font-size:12px;">email: cs@karirpad.com Whatsapp: +628 5951 8080 32</label>
        </div>
      </div>
      <div class="row mt-5" style="padding:0 20%;">
        <div class="col-sm-4 col-md-4 col-lg-4" style="line-height:1;">
          <label class="mb-3" style="color:#A0A0A0; font-size:15px;">Pencari Kerja</label><br>
          <a href="#"><label class="text-secondary" style="font-size:12px;">Testimoni</label></a><br>
            <a href="#"><label class="text-secondary" style="font-size:12px;">Karir</label></a><br>
            <a href="#"><label class="text-secondary" style="font-size:12px;">Medi</label></a><br>
        </div>
        <div class="col-sm-4 col-md-4 col-lg-4" style="line-height:1;">
          <label class="mb-3" style="color:#A0A0A0; font-size:15px;">Perusahaan</label><br>
          <a href="#"><label class="text-secondary" style="font-size:12px;">Applicant Tracking System</label></a><br>
            <a href="#"><label class="text-secondary" style="font-size:12px;">Recruitment Management System</label></a><br>
        </div>
        <div class="col-sm-4 col-md-4 col-lg-4" style="line-height:1;">
          <label class="mb-3" style="color:#A0A0A0; font-size:15px;">Lainnya</label><br>
            <a href="#"><label class="text-secondary" style="font-size:12px;">Tentang</label></a><br>
            <a href="#"><label class="text-secondary" style="font-size:12px;">Kontak</label></a><br>
            <a href="#"><label class="text-secondary" style="font-size:12px;">Syarat & Ketentuan</label></a><br>
            <a href="#"><label class="text-secondary" style="font-size:12px;">Syarat & Kebijakan Privasi</label></a><br>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-md-6 col-lg-6">
          <label class="mb-3" style="color:#A0A0A0; font-size:15px;">Ikuti Kami: </label>&ensp;
          <label class="rounded-circle text-center" style="padding: 3px 10px; color:#A0A0A0; font-size:15px; border:1px solid #A0A0A0;"><i class="fa fa-facebook"></i> </label>
          <label class="rounded-circle text-center" style="padding: 3px 10px; color:#A0A0A0; font-size:15px; border:1px solid #A0A0A0;"><i class="fa fa-twitter"></i> </label>
          <label class="rounded-circle text-center" style="padding: 3px 10px; color:#A0A0A0; font-size:15px; border:1px solid #A0A0A0;"><i class="fa fa-linkedin"></i> </label>
          <label class="rounded-circle text-center" style="padding: 3px 10px; color:#A0A0A0; font-size:15px; border:1px solid #A0A0A0;"><i class="fa fa-instagram"></i> </label>
          <label class="rounded-circle text-center" style="padding: 3px 10px; color:#A0A0A0; font-size:15px; border:1px solid #A0A0A0;"><i class="fa fa-youtube"></i> </label>
          <label class="rounded-circle text-center" style="padding: 3px 10px; color:#A0A0A0; font-size:15px; border:1px solid #A0A0A0;"><i class="fa fa-whatsapp"></i> </label>
          &ensp;<label class="mb-3" style="color:#A0A0A0; font-size:15px;">@karirpad</label>
        </div>
        <div class="col-md-6 col-lg-6 text-right">
          <label class="mb-3" style="color:#A0A0A0; font-size:15px;">Download Aplikasi Karirpad </label>&ensp;
          <img src="<?=base_url("assets/images/gplay.png")?>" alt="google play store" width="150">
        </div>
      </div>
      <hr>
      <div class="col-md-12 text-center">
        <label class="mb-3" style="color:#A0A0A0; font-size:12px;">Copyright&nbsp;&copy;&nbsp; 2020 PT. Karir Pad Internasional - All Right Reserved</label><br>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="<?=base_url()?>assets/js/jquery-3.2.1.js"></script>
  <script src="<?=base_url()?>assets/js/bootstrap.bundle.min.js"></script>

</body>

</html>
