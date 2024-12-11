<!doctype html>

<html lang="en" class="light-style layout-wide" dir="ltr" data-theme="theme-default" data-assets-path="../assets/"
    data-template="vertical-menu-template-free" data-style="light">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Error - Pages | Materio - Bootstrap Material Design Admin Template</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&ampdisplay=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="<?= base_url('assets/') ?>assets/vendor/fonts/remixicon/remixicon.css" />

    <!-- Menu waves for no-customizer fix -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>assets/vendor/libs/node-waves/node-waves.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>assets/vendor/css/core.css"
        class="template-customizer-core-css" />
    <link rel="stylesheet" href="<?= base_url('assets/') ?>assets/vendor/css/theme-default.css"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="<?= base_url('assets/') ?>assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet"
        href="<?= base_url('assets/') ?>assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>assets/vendor/css/pages/page-misc.css" />

    <!-- Helpers -->
    <script src="<?= base_url('assets/') ?>assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="<?= base_url('assets/') ?>assets/js/config.js"></script>
</head>

<body>
    <!-- Content -->

    <!-- Error -->
    <div class="misc-wrapper">
        <h1 class="mb-2 mx-2" style="font-size: 6rem; line-height: 6rem">404</h1>
        <h4 class="mb-2">Page Not Found 🙄</h4>
        <p class="mb-10 mx-2">we couldn't find the page you are looking for</p>
        <div class="d-flex justify-content-center mt-5">
            <div class="d-flex flex-column align-items-center">
                <img src="<?= base_url('assets/assets/img/404.png') ?>" alt="misc-error"
                    class="misc-model img-fluid z-1" width="780" />
                <div>
                <div>
                <a href="javascript:void(0);" onclick="goBack()" class="btn btn-primary text-center my-6 border">Back to home</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /Error -->

    <!-- / Content -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="<?= base_url('assets/') ?>assets/vendor/libs/jquery/jquery.js"></script>
    <script src="<?= base_url('assets/') ?>assets/vendor/libs/popper/popper.js"></script>
    <script src="<?= base_url('assets/') ?>assets/vendor/js/bootstrap.js"></script>
    <script src="<?= base_url('assets/') ?>assets/vendor/libs/node-waves/node-waves.js"></script>
    <script src="<?= base_url('assets/') ?>assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?= base_url('assets/') ?>assets/vendor/js/menu.js"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="<?= base_url('assets/') ?>assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag before closing body tag for github widget button. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>