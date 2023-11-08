<?php

// $url = 'http://localhost/test/klinik?';

?>
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
  

  <?php require_once 'style.php'; ?>

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="d-flex" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="semi-dark-layout">

<?php require_once 'sidebar.php'; ?>
  <!-- BEGIN: Content-->
  <div class="d-flex justify-content-center align-items-center" style="width:80vw;height:100vh;background:#9F481B;">

      <?php require_once 'content.php'; ?>
  </div>
  <!-- END: Content-->

  <div class="sidenav-overlay"></div>
  <div class="drag-target"></div>

  <?php //require_once './footer.php'; ?>

  <!-- BEGIN: Vendor JS-->
  <script src="/assets/vendors/js/vendors.min.js"></script>
  <!-- BEGIN Vendor JS-->


  <?php //require_once './script.php' ?>


</body>
<!-- END: Body-->

</html>