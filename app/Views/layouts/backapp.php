<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Admin</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <?php echo link_tag('assets/admin/img/favicon.ico', 'shortcut icon', 'image/ico'); ?>

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <?php echo link_tag('assets/admin/lib/owlcarousel/assets/owl.carousel.min.css'); ?>
    <?php echo link_tag('assets/admin/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css'); ?>

    <!-- Customized Bootstrap Stylesheet -->
    <?php echo link_tag('assets/admin/css/bootstrap.min.css'); ?>

    <!-- Template Stylesheet -->
    <?php echo link_tag('assets/admin/css/style.css'); ?>
    <?php echo link_tag('assets/custom.css'); ?>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</head>

<body>
<div class="container-fluid position-relative d-flex p-0">
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Sidebar Start -->
    <div class="sidebar pe-4 pb-3">
        <nav class="navbar bg-secondary navbar-dark">
            <a href="<?php echo site_url('dashboard'); ?>" class="navbar-brand mx-4 mb-3">
                <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i><?= $_SESSION['name']; ?></h3>
            </a>
            <div class="d-flex align-items-center ms-4 mb-4">
                <div class="position-relative">
                    <?php if(!isset($_SESSION['auth'])): ?>
                        <img class="rounded-circle" src="<?php echo img_data('assets/images/avatar.png'); ?>" alt="" style="width: 50px; height: 50px;">
                    <?php else: ?>
                        <img class="rounded-circle" src="<?= img_data($_SESSION['auth']->avatar); ?>" style="width: 50px; height: 50px;" alt="Avatar">
                    <?php endif ?>
                    <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                </div>
                <div class="ms-3">
                    <h6 class="mb-0">
                        <?php if (isset($_SESSION['auth'])) : ?>
                            <?= strtoupper($_SESSION['auth']->name); ?>
                        <?php endif; ?>
                    </h6>
                    <span>
                        User Name
                    </span>
                </div>
            </div>
            <div class="navbar-nav w-100">
                <a href="<?php echo site_url('admin'); ?>" class="nav-item nav-link"><i class="fa fa-home me-2"></i>Dashboard</a>
                <a href="<?php echo site_url('company'); ?>" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Company</a>
                <a href="<?php echo site_url('users'); ?>" class="nav-item nav-link"><i class="fa fa-table me-2"></i>User</a>
                <a href="<?php echo site_url('slides'); ?>" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Slide</a>
                <a href="<?php echo site_url('tags'); ?>" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Tag</a>
                <a href="<?php echo site_url('blogs'); ?>" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Blog</a>
                <a href="<?php echo site_url('ads'); ?>" class="nav-item nav-link"><i class="fa fa-table me-2"></i>AD</a>
<!--                <div class="nav-item dropdown">-->
<!--                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Features</a>-->
<!--                    <div class="dropdown-menu bg-transparent border-0">-->
<!--                        <a href="button.html" class="dropdown-item">Standard Post</a>-->
<!--                        <a href="typography.html" class="dropdown-item">Gallery Post</a>-->
<!--                        <a href="element.html" class="dropdown-item">Audio Post</a>-->
<!--                        <a href="element.html" class="dropdown-item">Video Post</a>-->
<!--                        <a href="element.html" class="dropdown-item">Full Width Post</a>-->
<!--                    </div>-->
<!--                </div>-->
            </div>
        </nav>
    </div>
    <!-- Sidebar End -->
    <!-- Content Start -->
    <div class="content">

        <?= $this->include('includes/navbar') ?>

        <?= $this->renderSection('content') ?>

    </div>
    <!-- Content End -->
    <?php if (isset($_SESSION['msg'])) : ?>
        <div class="alert <?= $_SESSION['msg-class']; ?> alert-dismissible fade show" role="alert"><?= $_SESSION['msg']; ?><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; session()->remove('msg'); ?>
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>

<!-- JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<?php echo script_tag('assets/admin/lib/chart/chart.min.js'); ?>
<?php echo script_tag('assets/admin/lib/easing/easing.min.js'); ?>
<?php echo script_tag('assets/admin/lib/waypoints/waypoints.min.js'); ?>
<?php echo script_tag('assets/admin/lib/owlcarousel/owl.carousel.min.js'); ?>
<?php echo script_tag('assets/admin/lib/tempusdominus/js/moment.min.js'); ?>
<?php echo script_tag('assets/admin/lib/tempusdominus/js/moment-timezone.min.js'); ?>
<?php echo script_tag('assets/admin/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js'); ?>

<!-- Template Javascript -->
<?php echo script_tag('assets/admin/js/main.js'); ?>
</body>

</html>


