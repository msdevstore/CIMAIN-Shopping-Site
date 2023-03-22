<div class="headtop">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-lg-6">
                <ul class="social">
                    <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-pinterest-p"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-tumblr"></i></a></li>
                </ul>
            </div>
            <div class="col-xs-8 col-sm-8 col-lg-4">
                <div class="search">
                    <input type="search" placeholder="Search">
                    <a href="#"><i class="fa fa-search"></i></a>
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-lg-2 text-right mcenter">
                <ul class="callto">
                    <?php if (!isset($_SESSION['auth'])) : ?>
                        <li><a href="<?php echo site_url('login'); ?>" title="Login">Login</a></li>
                        <li><a href="<?php echo site_url('register'); ?>" title="Register">Register</a></li>
                    <?php else: ?>
                        <li><a href="<?php echo site_url('logout'); ?>" title="Logout">Logout</a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
</div>