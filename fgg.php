<?php require_once('../../includes/session_control.php'); ?>
<!DOCTYPE html>
<html lang="en" data-layout-mode="detached" data-topbar-color="light" data-menu-color="light" data-sidenav-user="true">

<?php require_once('../../includes/head.php'); ?>
 <!-- Vector Maps css -->
<link href="<?= APP_BASE ?>assets/vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />

<body>
  
<div class="wrapper">
<?php require_once('../../includes/topnav.php'); ?>
<?php require_once('../../includes/sidenav.php'); ?>

<div class="content-page">
<div class="content">
 <!-- Start Content-->
<div class="container-fluid">

<!-- start page title -->
<div class="row">
<div class="col-12">
<div class="page-title-box">
<div class="page-title-right">
    <ol class="breadcrumb m-0">
        <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
        <li class="breadcrumb-item"><a href="javascript: void(0);">Maps</a></li>
        <li class="breadcrumb-item active">Vector Maps</li>
    </ol>
</div>
<h4 class="page-title">Vector Maps</h4>
</div>
</div>
</div>
<!-- end page title -->

<div class="row">
<div class="col-12">
<div class="card">
<div class="card-body">
    <h4 class="header-title mb-3">World Vector Map</h4>
    <div id="world-map-markers" style="height: 360px"></div>
</div> <!-- end card-body-->
</div> <!-- end card-->
</div> <!-- end col-->
</div>
<!-- end row-->


<!-- end row-->

<div class="row">
<div class="col-xl-6">
<div class="card">
<div class="card-body">
    <h4 class="header-title mb-3">Kenya Vector Map</h4>
    <div id="kenya-vectormap" style="height: 300px"></div>
</div> <!-- end card-body-->
</div> <!-- end card-->
</div> <!-- end col-->
<div class="col-xl-6">
<div class="card">
<div class="card-body">
    <h4 class="header-title mb-3">Tanzania Vector Map</h4>
    <div id="tanzania-vectormap"  style="height: 300px"></div>
</div> <!-- end card-body-->
</div> <!-- end card-->
</div> <!-- end col-->
<div class="col-xl-6">
<div class="card">
<div class="card-body">
    <h4 class="header-title mb-3">Uganda Vector Map</h4>
    <div id="uganda-vectormap"  style="height: 300px"></div>
</div> <!-- end card-body-->
</div> <!-- end card-->
</div> <!-- end col-->
</div>
<!-- end row-->


<div class="row">
<div class="col-xl-6">
<div class="card">
<div class="card-body">
    <h4 class="header-title mb-3">USA Vector Map</h4>
    <div id="usa-vectormap" style="height: 300px"></div>
</div> <!-- end card-body-->
</div> <!-- end card-->
</div> <!-- end col-->
<div class="col-xl-6">
<div class="card">
<div class="card-body">
    <h4 class="header-title mb-3">India Vector Map</h4>
    <div id="india-vectormap"  style="height: 300px"></div>
</div> <!-- end card-body-->
</div> <!-- end card-->
</div> <!-- end col-->
</div>
<!-- end row-->

<div class="row">
<div class="col-xl-6">
<div class="card">
<div class="card-body">
    <h4 class="header-title mb-3">Australia Vector Map</h4>
    <div id="australia-vectormap" style="height: 300px"></div>
</div> <!-- end card-body-->
</div> <!-- end card-->
</div> <!-- end col-->
<div class="col-xl-6">
<div class="card">
<div class="card-body">
    <h4 class="header-title mb-3">Chicago Vector Map</h4>
    <div id="chicago-vectormap"  style="height: 300px"></div>
</div> <!-- end card-body-->
</div> <!-- end card-->
</div> <!-- end col-->
</div>
<!-- end row-->

<div class="row">
<div class="col-xl-6">
<div class="card">
<div class="card-body">
    <h4 class="header-title mb-3">UK Vector Map</h4>
    <div id="uk-vectormap" style="height: 300px"></div>
</div> <!-- end card-body-->
</div> <!-- end card-->
</div> <!-- end col-->
<div class="col-xl-6">
<div class="card">
<div class="card-body">
    <h4 class="header-title mb-3">Canada Vector Map</h4>
    <div id="canada-vectormap"  style="height: 300px"></div>
</div> <!-- end card-body-->
</div> <!-- end card-->
</div> <!-- end col-->
</div>
<!-- end row-->

<div class="row">
<div class="col-xl-6">
<div class="card">
<div class="card-body">
    <h4 class="header-title mb-3">Europe Vector Map</h4>
    <div id="europe-vectormap" style="height: 300px"></div>
</div> <!-- end card-body-->
</div> <!-- end card-->
</div> <!-- end col-->
<div class="col-xl-6">
<div class="card">
<div class="card-body">
    <h4 class="header-title mb-3">France Vector Map</h4>
    <div id="france-vectormap"  style="height: 300px"></div>
</div> <!-- end card-body-->
</div> <!-- end card-->
</div> <!-- end col-->
</div>
<!-- end row-->

<div class="row">
<div class="col-xl-6">
<div class="card">
<div class="card-body">
    <h4 class="header-title mb-3">Spain Vector Map</h4>
    <div id="spain-vectormap" style="height: 300px"></div>
</div> <!-- end card-body-->
</div> <!-- end card-->
</div> <!-- end col-->
<div class="col-xl-6">
<div class="card">
<div class="card-body">
    <h4 class="header-title mb-3">Spain Vector Map</h4>
    <div id="spain2-vectormap"  style="height: 300px"></div>
</div> <!-- end card-body-->
</div> <!-- end card-->
</div> <!-- end col-->
</div>
<!-- end row-->

</div> <!-- container -->

</div> <!-- content -->
 
<?php require_once('../../includes/footer.php') ?>

</div>
</div>
 

<?php require_once('../../includes/foot.php') ?>
<!-- Vendor js -->
<script src="assets/js/vendor.min.js"></script>

<!-- Vector Maps js -->
<script src="<?= APP_BASE ?>assets/vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?= APP_BASE ?>assets/vendor/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js"></script>
<script src="<?= APP_BASE ?>assets/vendor/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js"></script>
<script src="<?= APP_BASE ?>assets/vendor/admin-resources/jquery.vectormap/maps/jquery-jvectormap-in-mill-en.js"></script>
<script src="<?= APP_BASE ?>assets/vendor/admin-resources/jquery.vectormap/maps/jquery-jvectormap-au-mill-en.js"></script>
<script src="<?= APP_BASE ?>assets/vendor/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-il-chicago-mill-en.js"></script>
<script src="<?= APP_BASE ?>assets/vendor/admin-resources/jquery.vectormap/maps/jquery-jvectormap-uk-mill-en.js"></script>
<script src="<?= APP_BASE ?>assets/vendor/admin-resources/jquery.vectormap/maps/jquery-jvectormap-ca-lcc-en.js"></script>
<script src="<?= APP_BASE ?>assets/vendor/admin-resources/jquery.vectormap/maps/jquery-jvectormap-europe-mill-en.js"></script>
<script src="<?= APP_BASE ?>assets/vendor/admin-resources/jquery.vectormap/maps/jquery-jvectormap-fr-merc-en.js"></script>
<script src="<?= APP_BASE ?>assets/vendor/admin-resources/jquery.vectormap/maps/jquery-jvectormap-es-merc.js"></script>
<script src="<?= APP_BASE ?>assets/vendor/admin-resources/jquery.vectormap/maps/jquery-jvectormap-es-mill.js"></script>
<script src="js/jvectormap.counties.ken.js"></script>
<script src="js/jvectormap.districts.uga.js"></script>
<script src="js/jvectormap.regions.tza.js"></script>
 <!-- Vector Maps Demo js -->
<script src="<?= APP_BASE ?>assets/js/pages/demo.vector-maps.js"></script>

<!-- App js -->
<script src="<?= APP_BASE ?>assets/js/app.min.js"></script>

</body>
</html>
