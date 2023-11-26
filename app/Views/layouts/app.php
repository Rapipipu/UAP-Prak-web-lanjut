<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuesax admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuesax admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="dafahan">
  

  
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body{
            margin:0;
            
        }
        .btn-1{
            background:#9F481B;
            font-weight:500;
            text-decoration:none;
            padding:5px 10px;
            color:white;
            border-radius:10px;
        }
        .btn-custom a{
            background:#9F481B;
            font-weight:500;
            text-decoration:none;
            padding:5px 10px;
            color:white;
            border-radius:10px;
            margin-right:5px;
        }
        .btn-custom a:hover{
            text-decoration:none;
            color:white;
        }
        .menu-item div a{
            font-family: 'Roboto', sans-serif;
            font-weight:bold;
            color:#9F481B;
            font-size:20px;
            text-decoration:none;
        }
    </style>

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="d-flex" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="semi-dark-layout">
<!-- BEGIN: Main Menu-->
<div class="d-flex flex-column" data-scroll-to-active="true" style="  height:100vh;width:20vw;">
  <div class="d-flex justify-content-center align-items-center" style="width:100%;height:30%;">
    <img style="height:20vh;width:20vh;border:1px solid black;" class="img rounded-circle"  src="/assets/img/1.png" />
  </div>
  <?php if(in_groups('admin')) : ?>
  <div class="menu-item d-flex flex-column align-items-center justify-content-around" style="width:100%;height:70%;">
  <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center" id="menu">
            <li>
                <a href="<?=base_url('/dashboard')?>" data-bs-toggle="collapse" class="nav-link text-truncate">
                    <i class="fs-5 bi-speedometer2"></i><span class="ms-1 d-none d-sm-inline"><h4 style="color:#9F481B; margin-top:35px;">Dashboard</h4></span> </a>
            </li>
            <li>
                <a href="<?=base_url('/reservasi')?>" data-bs-toggle="collapse" class="nav-link text-truncate">
                    <i class="fs-5 bi-speedometer2"></i><span class="ms-1 d-none d-sm-inline"><h4 style="color:#9F481B; margin-top:35px;">Reservation</h4></span> </a>
            </li>
            <li >
                <a href="<?=base_url('/layanan')?>" class="nav-link text-truncate">
                    <i class="fs-5 bi-table"></i><span class="ms-1 d-none d-sm-inline" ><h4 style="color:#9F481B; margin-top:35px;">Service</h4></span></a>
            </li>
            <li>
                <a href="<?=base_url('/pegawai')?>" class="nav-link text-truncate">
                    <i class="fs-5 bi-grid"></i><span class="ms-1 d-none d-sm-inline"><h4 style="color:#9F481B; margin-top:35px;">Employee</h4></span></a>
            </li>
            <li>
                <a href="<?=base_url('/pasien')?>" class="nav-link text-truncate">
                    <i class="fs-5 bi-grid"></i><span class="ms-1 d-none d-sm-inline"><h4 style="color:#9F481B; margin-top:35px;">Patient</h4></span></a>
            </li>
            <li>
                <a href="<?=base_url('/terapis')?>" class="nav-link text-truncate">
                    <i class="fs-5 bi-people"></i><span class="ms-1 d-none d-sm-inline"><h4 style="color:#9F481B; margin-top:35px;">Terapist</h4></span> </a>
            </li>
            <li>
                <a href="<?=base_url('/jadwal')?>" class="nav-link text-truncate">
                    <i class="fs-5 bi-people"></i><span class="ms-1 d-none d-sm-inline"><h4 style="color:#9F481B; margin-top:35px;">Practice Schedule</h4></span> </a>
            </li>
            <li>
                <form action="<?= url_to('logout') ?>">
                    <?= csrf_field() ?>
                    <button type="submit" class="btn ms-1 d-none d-sm-inline" href="#"><h4 style="color:#9F481B; margin-top:35px;">Logout</h4></button>
                </form>
            </li>
            
        </ul>
  </div>
  <?php endif ?>

  <?php if(in_groups('pegawai')) : ?>
  <div class="menu-item d-flex flex-column align-items-center justify-content-around" style="width:100%;height:70%;">
  <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center" id="menu">
            <li>
                <a href="<?=base_url('/dashboard')?>" data-bs-toggle="collapse" class="nav-link text-truncate">
                    <i class="fs-5 bi-speedometer2"></i><span class="ms-1 d-none d-sm-inline"><h4 style="color:#9F481B; margin-top:35px;">Dashboard</h4></span> </a>
            </li>
            <li>
                <a href="<?=base_url('/reservasi')?>" data-bs-toggle="collapse" class="nav-link text-truncate">
                    <i class="fs-5 bi-speedometer2"></i><span class="ms-1 d-none d-sm-inline"><h4 style="color:#9F481B; margin-top:35px;">Reservation</h4></span> </a>
            </li>
            <li >
                <a href="<?=base_url('/layanan')?>" class="nav-link text-truncate">
                    <i class="fs-5 bi-table"></i><span class="ms-1 d-none d-sm-inline" ><h4 style="color:#9F481B; margin-top:35px;">Service</h4></span></a>
            </li>
            <li>
                <a href="<?=base_url('/pasien')?>" class="nav-link text-truncate">
                    <i class="fs-5 bi-grid"></i><span class="ms-1 d-none d-sm-inline"><h4 style="color:#9F481B; margin-top:35px;">Patient</h4></span></a>
            </li>
            <li>
                <a href="<?=base_url('/terapis')?>" class="nav-link text-truncate">
                    <i class="fs-5 bi-people"></i><span class="ms-1 d-none d-sm-inline"><h4 style="color:#9F481B; margin-top:35px;">Terapist</h4></span> </a>
            </li>
            <li>
                <a href="<?=base_url('/jadwal')?>" class="nav-link text-truncate">
                    <i class="fs-5 bi-people"></i><span class="ms-1 d-none d-sm-inline"><h4 style="color:#9F481B; margin-top:35px;">Practice Schedule</h4></span> </a>
            </li>
            <li>
                <form action="<?= url_to('logout') ?>">
                    <?= csrf_field() ?>
                    <button type="submit" class="btn ms-1 d-none d-sm-inline" href="#"><h4 style="color:#9F481B; margin-top:35px;">Logout</h4></button>
                </form>
            </li>
            
        </ul>
  </div>
  <?php endif ?>

  <?php if(in_groups('pelanggan')) : ?>
  <div class="menu-item d-flex flex-column align-items-center justify-content-around" style="width:100%;height:70%;">
  <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center" id="menu">
            <li>
                <a href="<?=base_url('/reservasi/create')?>" data-bs-toggle="collapse" class="nav-link text-truncate">
                    <i class="fs-5 bi-speedometer2"></i><span class="ms-1 d-none d-sm-inline"><h4 style="color:#9F481B; margin-top:35px;">Reservation</h4></span> </a>
            </li>
            <li>
                <a href="<?=base_url('/layanan')?>" data-bs-toggle="collapse" class="nav-link text-truncate">
                    <i class="fs-5 bi-speedometer2"></i><span class="ms-1 d-none d-sm-inline"><h4 style="color:#9F481B; margin-top:35px;">Service</h4></span> </a>
            </li>
            <li >
                <a href="<?=base_url('/jadwal')?>" class="nav-link text-truncate">
                    <i class="fs-5 bi-table"></i><span class="ms-1 d-none d-sm-inline" ><h4 style="color:#9F481B; margin-top:35px;">Practice Schedule</h4></span></a>
            </li>
            <li>
                <form action="<?= url_to('logout') ?>">
                    <?= csrf_field() ?>
                    <button type="submit" class="btn ms-1 d-none d-sm-inline" href="#"><h4 style="color:#9F481B; margin-top:35px;">Logout</h4></button>
                </form>
            </li>
        </ul>
  </div>
  <?php endif ?>
</div>
  <!-- BEGIN: Content-->
  <div class="d-flex justify-content-center align-items-center" style="width:80vw;height:110vh;background:#9F481B;">

    <?= $this->renderSection('content') ?>
  </div>
  <!-- END: Content-->

  <div class="sidenav-overlay"></div>
  <div class="drag-target"></div>
</body>
<!-- END: Body-->

</html>