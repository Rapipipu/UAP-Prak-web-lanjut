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
  <div class="menu-item d-flex flex-column align-items-center justify-content-around" style="width:100%;height:70%;">
    <div><a href="<?=base_url('/admin/dashboard')?>">Dashboard</a></div>
    <div><a href="<?=base_url('/admin/reservasi')?>">Reservation</a></div>
    <div><a href="<?=base_url('/admin/layanan')?>">Service</a></div>
    <div><a href="<?=base_url('/admin/pegawai')?>">Employee</a></div>
    <div><a href="<?=base_url('/admin/pasien')?>">Patient</a></div>
    <div><a href="<?=base_url('/admin/terapis')?>">Terapist</a></div>
    <div><a href="<?=base_url('/admin/jadwal')?>">Practice Schedule</a></div>
  </div>
</div>
  <!-- BEGIN: Content-->
  <div class="d-flex justify-content-center align-items-center" style="width:80vw;height:100vh;background:#9F481B;">

    <?= $this->renderSection('content') ?>
  </div>
  <!-- END: Content-->

  <div class="sidenav-overlay"></div>
  <div class="drag-target"></div>
</body>
<!-- END: Body-->

</html>