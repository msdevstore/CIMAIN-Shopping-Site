<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
<body class="head_two" onload="loader()">
<!--======== Loader  =================-->
<?= $this->include('includes/loader') ?>
<!--======== /Loader  =================-->
<div id="main_div">
<!--============ Header ==============-->
<header class="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="headtop">
                    <div class="col-sm-12 col-md-5 col-lg-4">
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
                    <div class="col-sm-12 col-md-3 col-lg-4 text-center">
                        <a id="title" href="<?= site_url('dashboard'); ?>" class="logo" title="PCUBE BLOG || HOME PAGE" style="font-size: 35px"><?= $_SESSION['name']; ?></a>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4 text-right">
                        <a href="#newsletter" data-toggle="modal" title="Subscribe" class="sub"><i class="fa fa-envelope"></i>Email Subscribe</a>
                    </div>
                </div>
                <?= $this->include('includes/menu') ?>
            </div>
        </div>
    </div>
</header>
<!--============ /Header ==============-->
<!--============ Sidebar ==============-->
<?= $this->include('includes/sidebar') ?>
<!--============ /Sidebar ==============-->
<!--============ Slider ============-->
<section class="slider homesecond">
	<div class="container-fluid">
		<div class="row">
			<div class="mainslide owl-carousel col-sm-12">
                <?php if(count($slides) > 0): ?>
                <?php foreach ($slides as $slide): ?>
                <div class="item">
                    <img src="<?= $slide->img_path; ?>" alt="slide3">
                    <div class="carousel-caption">
                        <span><a href=""><?= $slide->tag; ?></a></span>
                        <h5><?= $slide->title; ?></h5>
                        <p><?= $slide->date; ?></p>
                    </div>
                </div>
                <?php endforeach ?>
                <?php else: ?>
				<div class="item">
					<img src="assets/images/1800x1047.png" alt="slide3">
					<div class="carousel-caption">
						<span><a href="">Travelling</a></span>
						<h5>Yesterday Morning</h5>
						<p>November 14, 2017</p>
					</div>
				</div>
				<div class="item">
					<img src="assets/images/1800x1047.png" alt="slide1">
					<div class="carousel-caption">
						<span><a href="">Travelling</a></span>
						<h5>Tomorrow Morning</h5>
						<p>November 15, 2017</p>
					</div>
				</div>
				<div class="item">
					<img src="assets/images/1800x1047.png" alt="slide1">
					<div class="carousel-caption">
						<span><a href="">Travelling</a></span>
						<h5>Created Today</h5>
						<p>November 16, 2017</p>
					</div>
				</div>
				<?php endif ?>
			</div>
		</div>
	</div>
</section>
<!--============ /Slider ============-->
<!--============ Blog ============-->
<div class="blog blog_two">
	<div class="container-fluid">
		<div class="row">
			<!--============ Blog-Left ============-->
			<div class="col-sm-12 col-md-8 col-lg-8 text-left">
                <?php if(count($blogs) > 2): ?>
                <?php for($i = 0; $i < 3; $i ++): ?>
                <div class="weekday">
                    <div class="excerpt_data">
                        <a href="#" class="border"><img src="<?= $blogs[$i]->img_path; ?>" class="img-responsive" alt="blog"></a>
                        <article>
                            <h6><a href="#"><?= $blogs[$i]->title; ?></a></h6>
                            <p class="category_name"><i class="fa fa-briefcase"></i>In <a href="javascript:void(0)"> Business</a></p>
                            <p class="category_name"><i class="fa fa-user"></i>By <a href="javascript:void(0)"> <?= $blogs[$i]->poster; ?></a></p>
                            <ul class="social">
                                <li><a href="javascript:void(0)"><?= $blogs[$i]->date; ?></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-pinterest-p"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                            <p><?= $blogs[$i]->content; ?></p>
                            <a href="#" class="button">Read More</a>
                        </article>
                    </div>
                </div>
                <?php endfor; ?>
                <?php else: ?>
                <div class="weekday">
                    <div class="excerpt_data">
                        <a href="#" class="border"><img src="assets/images/800x534.png" class="img-responsive" alt="blog"></a>
                        <article>
                            <h6><a href="#">How The Cloud Can Improve Business</a></h6>
                            <p class="category_name"><i class="fa fa-briefcase"></i>In <a href="javascript:void(0)"> Business</a></p>
                            <p class="category_name"><i class="fa fa-user"></i>By <a href="javascript:void(0)"> dummy</a></p>
                            <ul class="social">
                                <li><a href="javascript:void(0)">12 April</a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-pinterest-p"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                            <a href="#" class="button">Read More</a>
                        </article>
                    </div>
                </div>
				<div class="weekday">
					<div class="excerpt_data">
						<a href="#" class="border"><img src="assets/images/800x534.png" class="img-responsive" alt="blog"></a>
						<article>
							<h6><a href="#">How The Cloud Can Improve Business</a></h6>
							<p class="category_name"><i class="fa fa-briefcase"></i>In <a href="javascript:void(0)"> Business</a></p>
							<p class="category_name"><i class="fa fa-user"></i>By <a href="javascript:void(0)"> dummy</a></p>
							<ul class="social">
								<li><a href="javascript:void(0)">12 April</a></li>
								<li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
								<li><a href="#" target="_blank"><i class="fa fa-pinterest-p"></i></a></li>
								<li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
							</ul>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
							<a href="#" class="button">Read More</a>
						</article>
					</div>
				</div>
				<div class="weekday">
					<div class="excerpt_data">
						<a href="#" class="border"><img src="assets/images/800x534.png" class="img-responsive" alt="blog"></a>
						<article>
							<h6><a href="#">How The Cloud Can Improve Business</a></h6>
							<p class="category_name"><i class="fa fa-briefcase"></i>In <a href="javascript:void(0)"> Business</a></p>
							<p class="category_name"><i class="fa fa-user"></i>By <a href="javascript:void(0)"> dummy</a></p>
							<ul class="social">
								<li><a href="javascript:void(0)">12 April</a></li>
								<li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
								<li><a href="#" target="_blank"><i class="fa fa-pinterest-p"></i></a></li>
								<li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
							</ul>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
							<a href="#" class="button">Read More</a>
						</article>
					</div>
				</div>
                <?php endif; ?>
				<ul class="pagination">
					<li>
						<a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a>
					</li>
					<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li>
  						<a href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a>
					</li>
				</ul>
			</div>
			<!--============ /Blog-Left ============-->
			<!--============ Blog-Right ============-->
			<div class="col-sm-12 col-md-4 col-lg-4 text-center">
				<div class="rightblog">
					<article>
						<div class="head"><h6>ABOUT</h6></div>
						<img src="<?= $_SESSION['logo']; ?>" class="aboutimg" alt="blog">
						<p><?= $_SESSION['description']; ?></p>
						<a href="#" class="button">Read More</a>
					</article>
					<article>
						<div class="head"><h6>Follow us</h6></div>
						<ul class="social">
							<li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#" target="_blank"><i class="fa fa-pinterest-p"></i></a></li>
							<li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
						</ul>
					</article>
					<article>
						<div class="head"><h6>Categories</h6></div>
						<ul class="cate">
							<li><a href="javascript:void(0)">Adventure (13) </a></li>
							<li><a href="javascript:void(0)">Business (7) </a></li>
							<li><a href="javascript:void(0)">Air (12)</a></li>
							<li><a href="javascript:void(0)">Family (15) </a></li>
							<li><a href="javascript:void(0)">Honeymoon (5) </a></li>
						</ul>
					</article>
					<article>
						<div class="head"><h6>Newsletter</h6></div>
						<p>Sign up to receive the latest story</p>
						<input type="email" placeholder="Your Email Address">
						<input type="submit" class="button" value="SUBSCRIBE">
					</article>
					<article class="blogpost">
						<div class="head"><h6>Popular Posts</h6></div>
                        <?php if(count($blogs) > 3): ?>
                        <?php for($i = 0; $i < 4; $i ++): ?>
                        <div class="col-sm-12 col-lg-4 padded">
                            <a href="javascript:void(0)"><img src="<?= img_data($blogs[$i]->img_path); ?>" class="img-responsive" alt="blog"></a>
                        </div>
                        <div class="col-sm-12 col-lg-8 text-left">
                            <a href="javascript:void(0)"><?= $blogs[$i]->title; ?></a>
                            <span><a href="javascript:void(0)">Business</a></span>
                            <span><?= $blogs[$i]->date; ?></span>
                        </div>
                        <hr>
                        <?php endfor; ?>
                        <?php else: ?>
                        <div class="col-sm-12 col-lg-4 padded">
                            <a href="javascript:void(0)"><img src="assets/images/800x534.png" class="img-responsive" alt="blog"></a>
                        </div>
                        <div class="col-sm-12 col-lg-8 text-left">
                            <a href="javascript:void(0)">How The Cloud Can Improve Business</a>
                            <span><a href="javascript:void(0)">Business</a></span>
                            <span>22.10.2017</span>
                        </div>
                        <hr>
						<div class="col-sm-12 col-lg-4 padded">
							<a href="javascript:void(0)"><img src="assets/images/800x534.png" class="img-responsive" alt="blog"></a>
						</div>
						<div class="col-sm-12 col-lg-8 text-left">
							<a href="javascript:void(0)">How The Cloud Can Improve Business</a>
							<span><a href="javascript:void(0)">Business</a></span>
							<span>22.10.2017</span>
						</div>
						<hr>
						<div class="col-sm-12 col-lg-4 padded">
							<a href="javascript:void(0)"><img src="assets/images/800x534.png" class="img-responsive" alt="blog"></a>
						</div>
						<div class="col-sm-12 col-lg-8 text-left">
							<a href="javascript:void(0)">How The Cloud Can Improve Business</a>
							<span><a href="javascript:void(0)">Business</a></span>
							<span>22.10.2017</span>
						</div>
						<hr>
						<div class="col-sm-12 col-lg-4 padded">
							<a href="javascript:void(0)"><img src="assets/images/800x534.png" class="img-responsive" alt="blog"></a>
						</div>
						<div class="col-sm-12 col-lg-8 text-left">
							<a href="javascript:void(0)">How The Cloud Can Improve Business</a>
							<span><a href="javascript:void(0)">Business</a></span>
							<span>22.10.2017</span>
						</div>
						<?php endif; ?>
						<div class="clearfix"></div>
					</article>
					<article class="blogpost">
						<div class="head"><h6>Tags</h6></div>
						<ul class="tag">
							<li><a href="<?= site_url('dashboard'); ?>" title="Food">Food</a></li>
							<li><a href="<?= site_url('travel'); ?>" title="Travelling" class="button">Travelling</a></li>
							<li><a href="<?= site_url('photographer'); ?>" title="Photographer">Photographer</a></li>
							<li><a href="<?= site_url('legal'); ?>" title="Legal">Legal</a></li>
							<li><a href="<?= site_url('personal'); ?>" title="Personal">Personal</a></li>
						</ul>
					</article>
					<div class="right tag_cloud">
						<a href="javascript:void(0)" class="tagimg"><img src="<?= $one->img_path; ?>" alt="blog"></a>
						<div class="carousel-caption">
							<i class="icofont icofont-close-line"></i>
							<h5><?= $one->title; ?></h5>
							<a href="javascript:void(0)" class="button">More Info</a>
						</div>
					</div>
				</div>
			</div>
			<!--============ /Blog-Right ============-->
		</div>
	</div>
</div>
<!--============ /Blog ============-->
<!--=========== Articles ==========-->
<section class="articles">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12 text-center">
				<h6><i class="fa fa-newspaper-o"></i>Most Liked Articles</h6>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="owl-carousel artslide">
                    <?php if($blogs > 3): ?>
                    <?php for($i = 0; $i < 4; $i ++): ?>
                    <div class="item">
                        <div class="weekday">
                            <div class="excerpt_data">
                                <a class="border" href="#"><img alt="blog" class="img-responsive" src="<?= img_data($blogs[$i]->img_path); ?>"></a>
                                <p class="category_name">In <a href=""> Business</a></p>
                                <h6><a href="#"><?= $blogs[$i]->title; ?></a></h6>
                                <p><?= $blogs[$i]->content; ?></p>
                                <p class="category_name"><?= $blogs[$i]->date; ?> | By <a href=""> <?= $blogs[$i]->poster; ?></a></p>
                                <a class="button" href="">Read More</a>
                            </div>
                        </div>
                    </div>
                    <?php endfor; ?>
                    <?php else: ?>
                    <div class="item">
                        <div class="weekday">
                            <div class="excerpt_data">
                                <a class="border" href="#"><img alt="blog" class="img-responsive" src="assets/images/800x534.png"></a>
                                <p class="category_name">In <a href=""> Business</a></p>
                                <h6><a href="#">How The Cloud Can Improve Business</a></h6>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                <p class="category_name">12 April | By <a href=""> dummy</a></p>
                                <a class="button" href="">Read More</a>
                            </div>
                        </div>
                    </div>
					<div class="item">
						<div class="weekday">
							<div class="excerpt_data">
								<a class="border" href="#"><img alt="blog" class="img-responsive" src="assets/images/800x534.png"></a>
								<p class="category_name">In <a href=""> Business</a></p>
								<h6><a href="#">How The Cloud Can Improve Business</a></h6>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
								<p class="category_name">12 April | By <a href=""> dummy</a></p>
								<a class="button" href="">Read More</a>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="weekday">
							<div class="excerpt_data">
								<a class="border" href="#"><img alt="blog" class="img-responsive" src="assets/images/800x534.png"></a>
								<p class="category_name">In <a href=""> Business</a></p>
								<h6><a href="#">How The Cloud Can Improve Business</a></h6>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
								<p class="category_name">12 April | By <a href=""> dummy</a></p>
								<a class="button" href="">Read More</a>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="weekday">
							<div class="excerpt_data">
								<a class="border" href="#"><img alt="blog" class="img-responsive" src="assets/images/800x534.png"></a>
								<p class="category_name">In <a href=""> Business</a></p>
								<h6><a href="#">How The Cloud Can Improve Business</a></h6>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
								<p class="category_name">12 April | By <a href=""> dummy</a></p>
								<a class="button" href="">Read More</a>
							</div>
						</div>
					</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>
<!--=========== /Articles ==========-->
<!--=========== Instagram ==========-->
<div class="insta">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12 text-center">
				<h6><i class="fa fa-instagram"></i>Follow on Instagram</h6>
			</div>
		</div>
	</div>
	<div class="owl-carousel instaslide">
        <?php if(count($ads) > 3): ?>
        <?php foreach($ads as $ad): ?>
        <a class="item" href="#" target="_blank">
            <img src="<?= img_data($ad->path); ?>" alt="blog">
        </a>
        <?php endforeach; ?>
        <?php else: ?>
        <a class="item" href="#" target="_blank">
            <img src="assets/images/640x800.png" alt="blog">
        </a>
		<a class="item" href="#" target="_blank">
			<img src="assets/images/640x800.png" alt="blog">
		</a>
		<a class="item" href="#" target="_blank">
			<img src="assets/images/640x800.png" alt="blog">
		</a>
		<a class="item" href="#" target="_blank">
			<img src="assets/images/640x800.png" alt="blog">
		</a>
		<a class="item" href="#" target="_blank">
			<img src="assets/images/640x800.png" alt="blog">
		</a>
		<a class="item" href="#" target="_blank">
			<img src="assets/images/640x800.png" alt="blog">
		</a>
		<?php endif; ?>
	</div>
</div>
<!--=========== /Instagram ==========-->
<!--=========== Footer ==========-->
<footer class="footer">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12 text-center">
				<a href="#" title="Blog Site Template"><img src="assets/images/footlogo.png" alt="Logo"></a>
				<ul class="social">
					<li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#" target="_blank"><i class="fa fa-pinterest-p"></i></a></li>
					<li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
					<li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
					<li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
				</ul>
				<ul class="fmenu">
					<li><a href="<?= site_url('dashboard'); ?>" title="Home">Home</a></li>
					<li><a href="<?= site_url('about'); ?>" title="About">About</a></li>
					<li><a href="<?= site_url('all-post'); ?>" title="Blog">Blog</a></li>
					<li><a href="<?= site_url('spost'); ?>" title="Features">Features</a></li>
					<li><a href="<?= site_url('contact'); ?>" title="Contact">Contact</a></li>
					<li><a href="#" title="Buy Theme">Buy Theme</a></li>
				</ul>
			</div>
		</div>
	</div>
</footer>
<div class="copyright">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12 text-center">
				<p>Copyright © 2018 Pcube Blog Theme</p>
			</div>
		</div>
	</div>
</div>
<!--=========== /Footer ==========-->
<!--=========== /Subscribe Modal ==========-->
<div class="modal fade" id="newsletter">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Join Our Newsletter</h5>
        <p>Sign up today for free and be the first to get notified of<br> new updates</p>
      </div>
      <div class="modal-body">
        <input type="email" placeholder="Email Address">
        <input type="submit" class="button" value="Subscribe Now">
      </div>
      <button type="button" class="close" title="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  </div>
</div>
<!--=========== /Subscribe Modal ==========-->
<?= $this->endSection() ?>