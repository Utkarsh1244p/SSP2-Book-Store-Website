<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Users / Profile - NiceAdmin Bootstrap Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <?= $this->include('Layout/admin/admin-links.php') ?>

    <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <div class="app">
        <?= $this->renderSection('content') ?>
        
    </div>



    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="<?= base_url('assets/admin/vendor/apexcharts/apexcharts.min.js')?>"></script>
<script src="<?= base_url('assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
<script src="<?= base_url('assets/admin/vendor/chart.js/chart.umd.js')?>"></script>
<script src="<?= base_url('assets/admin/vendor/echarts/echarts.min.js')?>"></script>
<script src="<?= base_url('assets/admin/vendor/quill/quill.js')?>"></script>
<script src="<?= base_url('assets/admin/vendor/simple-datatables/simple-datatables.js')?>"></script>
<script src="<?= base_url('assets/admin/vendor/tinymce/tinymce.min.js')?>"></script>
<script src="<?= base_url('assets/admin/vendor/php-email-form/validate.js')?>"></script>

<!-- Template Main JS File -->
<script src="<?= base_url('assets/admin/js/main.js')?>"></script>

</body>

</html>