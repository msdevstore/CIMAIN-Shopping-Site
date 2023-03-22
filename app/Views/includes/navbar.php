<!-- Navbar Start -->
<nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
    <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
        <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
    </a>
    <a href="#" class="sidebar-toggler flex-shrink-0">
        <i class="fa fa-bars"></i>
    </a>
    <div class="navbar-nav align-items-center ms-auto">
        <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                <?php if(!isset($_SESSION['auth'])): ?>
                    <img class="rounded-circle me-lg-2" src="<?php echo img_data('assets/images/images'); ?>" alt="" style="width: 40px; height: 40px;">
                <?php else: ?>
                    <img class="rounded-circle me-lg-2" src="<?= img_data($_SESSION['auth']->avatar); ?>" width="25px" height="25px" alt="Avatar">
                <?php endif ?>


                <span class="d-none d-lg-inline-flex">
                    <?php if (isset($_SESSION['auth'])) : ?>
                        <?= $_SESSION['auth']->name; ?>
                    <?php endif; ?>
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                <a href="<?= site_url('users/'.$_SESSION['auth']->id.'/edit'); ?>" class="dropdown-item">My Profile</a>
                <a href="<?php echo site_url('logout'); ?>" class="dropdown-item">Log Out</a>
            </div>
        </div>
    </div>
</nav>
<!-- Navbar End -->