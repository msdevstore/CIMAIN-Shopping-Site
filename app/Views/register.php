  <!DOCTYPE html>
  <html lang="en">

  <head>
      <meta charset="utf-8">
      <title>SignUp</title>
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <meta content="" name="keywords">
      <meta content="" name="description">

      <!-- Favicon -->
      <link href="img/favicon.ico" rel="icon">

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


          <!-- Sign Up Start -->
          <div class="container-fluid">
              <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                  <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                      <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">

                          <?= form_open('register/signup') ?>
                              <div class="d-flex align-items-center justify-content-between mb-3">
                                  <a href="index.html" class="">
                                      <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i><?= $_SESSION['name']; ?></h3>
                                  </a>
                                  <h3>Sign Up</h3>
                              </div>
                              <?= $validation->listErrors() ?>
                              <div class="form-floating mb-3">
                                  <input type="text" class="form-control" id="floatingText" placeholder="John Doe" name="username" value="<?= set_value('username') ?>">
                                  <label for="floatingText">User Name</label>
                              </div>
                              <div class="form-floating mb-3">
                                  <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" value="<?= set_value('email') ?>">
                                  <label for="floatingInput">Email address</label>
                              </div>
                              <div class="form-floating mb-4">
                                  <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" value="<?= set_value('password') ?>">
                                  <label for="floatingPassword">Password</label>
                              </div>
                              <div class="form-floating mb-4">
                                  <input type="password" class="form-control" id="floatingPassword" placeholder="Confirm Password" name="passconf" value="<?= set_value('passconf') ?>">
                                  <label for="floatingPassword">Confirm Password</label>
                              </div>
                              <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Sign Up</button>
                              <p class="text-center mb-0">Already have an Account? <a href="<?php echo site_url('login'); ?>">Sign In</a></p>
                          <?= form_close() ?>
                      </div>
                  </div>
              </div>
          </div>
          <!-- Sign Up End -->
          <!-- Content End -->
          <?php if (isset($_SESSION['msg'])) : ?>
              <div class="alert <?= $_SESSION['msg-class']; ?> alert-dismissible fade show" role="alert"><?= $_SESSION['msg']; ?><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
          <?php endif; session()->remove('msg'); ?>
          <!-- Back to Top -->
      </div>

      <!-- JavaScript Libraries -->
      <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
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