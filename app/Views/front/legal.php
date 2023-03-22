<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
<body class="breadcrumbmenu" onload="loader()">
<!--======== Loader  =================-->
<?= $this->include('includes/loader') ?>
<!--======== /Loader  =================-->
<div id="main_div">
<header class="header">
	<div class="photohead">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-lg-6 text-left mcenter">
					<ul class="callto">
						<li><a href="tel:123-456-7890" title="Call">Call us 123-456-7890</a></li>
						<li><a href="mailto:no-reply@domain.com" title="email">no-reply@domain.com</a></li>
					</ul>
					<div class="search">
						<form class="search-header">
							<input type="search" placeholder="Search">
							<i class="fa fa-search psearch"></i>
							<i class="fa fa-close sclose"></i>
							<button class="fa fa-search"></button>
						</form>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-lg-6 text-right mcenter">
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
			</div>
		</div>
	</div>
	<div class="headmenu" data-spy="affix" data-offset-top="60" data-offset-bottom="200">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-3 col-lg-4">
					<a href="index.html" class="logo" title="PCUBE BLOG || HOME PAGE"><img src="assets/images/logo.png" alt="logo"></a>
				</div>
				<div class="col-xs-12 col-sm-9 col-lg-8 text-right">
                    <?= $this->include('includes/menu') ?>
				</div>
			</div>
		</div>
	</div>
</header>
<!--============ Sidebar ==============-->
<?= $this->include('includes/sidebar') ?>
<!--============ /Sidebar ==============-->
<!--============ Slider ============-->
<section class="slider">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="mainslide owl-carousel">
                <?php if(count($slides) > 0): ?>
                <?php foreach ($slides as $slide): ?>
                    <div class="item">
                        <img src="<?= $slide->img_path; ?>" alt="slide1">
                        <div class="carousel-caption">
                            <span><a href=""><?= $slide->tag; ?></a></span>
                            <h5><?= $slide->title; ?></h5>
                            <p><?= $slide->date; ?></p>
                        </div>
                    </div>
                <?php endforeach ?>
                <?php else: ?>
					<div class="item">
						<img src="assets/images/1800x1047.png" alt="slide1">
						<div class="carousel-caption">
							<span><a href="">Legal Adviser</a></span>
							<h5>Yesterday Morning</h5>
							<p>November 14, 2017</p>
						</div>
					</div>
					<div class="item">
						<img src="assets/images/1800x1047.png" alt="slide1">
						<div class="carousel-caption">
							<span><a href="">Legal Adviser</a></span>
							<h5>Tomorrow Morning</h5>
							<p>November 15, 2017</p>
						</div>
					</div>
					<div class="item">
						<img src="assets/images/1800x1047.png" alt="slide1">
						<div class="carousel-caption">
							<span><a href="">Legal Adviser</a></span>
							<h5>Created Today</h5>
							<p>November 16, 2017</p>
						</div>
					</div>
				</div>
                <?php endif ?>
			</div>
		</div>
	</div>
</section>
<!--============ /Slider ============-->
<!--============ Mevent ============-->
<section class="mevent">
	<div class="container">
		<div class="row">
            <?php if(count($blogs1) > 0): ?>
                <div class="col-sm-12 col-md-3 col-lg-3">
                    <div class="ipost">
                        <img src="<?= img_data($blogs1[0]->img_path); ?>" alt="post">
                        <a href="" class="button">Recent Post</a>
                    </div>
                </div>
            <?php else: ?>
                <div class="col-sm-12 col-md-3 col-lg-3">
                    <div class="ipost">
                        <img src="<?= img_data($blogs1[0]->img_path); ?>" alt="post">
                        <a href="" class="button">Recent Post</a>
                    </div>
                </div>
			<?php endif; ?>
			<div class="col-sm-12 col-md-6 col-lg-6">
				<div class="mbox">
					<div class="linebar"></div>
					<h6>Legal Events Blog Posts :)<br> My name is !!!!!</h6>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
					<a href="contact.html" class="button">Read More</a>
				</div>
			</div>
            <?php if(count($blogs1) > 1): ?>
                <div class="col-sm-12 col-md-3 col-lg-3">
                    <div class="ipost">
                        <img src="<?= img_data($blogs1[1]->img_path); ?>" alt="post">
                        <a href="#" class="button">My Instagram</a>
                    </div>
                </div>
            <?php else: ?>
                <div class="col-sm-12 col-md-3 col-lg-3">
                    <div class="ipost">
                        <img src="assets/images/1000x1322.png" alt="post">
                        <a href="#" class="button">My Instagram</a>
                    </div>
                </div>
			<?php endif; ?>
		</div>
	</div>
</section>
<!--============ /Mevent ============-->
<!--============ Blog ============-->
<div class="blog blog_two">
	<div class="container">
		<div class="row">
			<!--============ Blog-Left ============-->
			<div class="col-sm-12 col-md-8 col-lg-8 text-left">
				<div class="top_box">
                    <?php if(count($blogs2) > 2): ?>
                    <?php for($i = 0; $i < 3; $i ++): ?>
                    <div class="weekday">
                        <div class="excerpt_data">
                            <a href="blogdetail2.html" class="border"><img src="<?= img_data($blogs2[$i]->img_path); ?>" class="img-responsive" alt="blog"></a>
                            <article>
                                <div class="top">
                                    <h6><a href="blogdetail2.html"><?= $blogs2[$i]->title; ?></a></h6>
                                    <p class="category_name"><i class="fa fa-briefcase"></i>In <a href="javascript:void(0)"> Legal</a></p>
                                    <p class="category_name"><i class="fa fa-user"></i>By <a href="javascript:void(0)"> <?= $blogs2[$i]->poster; ?></a></p>
                                </div>
                                <ul class="social">
                                    <li><a href="javascript:void(0);">12 April</a></li>
                                    <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fa fa-pinterest-p"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                                <p><?= $blogs2[$i]->content; ?></p>
                                <a href="#" class="button">Read More</a>
                            </article>
                        </div>
                    </div>
                    <hr>
                    <?php endfor; ?>
                    <?php else: ?>
                    <div class="weekday">
                        <div class="excerpt_data">
                            <a href="blogdetail2.html" class="border"><img src="assets/images/800x534.png" class="img-responsive" alt="blog"></a>
                            <article>
                                <div class="top">
                                    <h6><a href="blogdetail2.html">Interpretation of exemption notification under Customs Act</a></h6>
                                    <p class="category_name"><i class="fa fa-briefcase"></i>In <a href="javascript:void(0)"> Legal</a></p>
                                    <p class="category_name"><i class="fa fa-user"></i>By <a href="javascript:void(0)"> dummy</a></p>
                                </div>
                                <ul class="social">
                                    <li><a href="javascript:void(0);">12 April</a></li>
                                    <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fa fa-pinterest-p"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                <a href="blogdetail2.html" class="button">Read More</a>
                            </article>
                        </div>
                    </div>
                    <hr>
					<div class="weekday">
						<div class="excerpt_data">
							<a href="blogdetail2.html" class="border"><img src="assets/images/800x534.png" class="img-responsive" alt="blog"></a>
							<article>
								<div class="top">
									<h6><a href="blogdetail2.html">Interpretation of exemption notification under Customs Act</a></h6>
									<p class="category_name"><i class="fa fa-briefcase"></i>In <a href="javascript:void(0)"> Legal</a></p>
									<p class="category_name"><i class="fa fa-user"></i>By <a href="javascript:void(0)"> dummy</a></p>
								</div>
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
								<a href="blogdetail2.html" class="button">Read More</a>
							</article>
						</div>
					</div>
					<hr>
					<div class="weekday">
						<div class="excerpt_data">
							<a href="blogdetail2.html" class="border"><img src="assets/images/800x534.png" class="img-responsive" alt="blog"></a>
							<article>
								<div class="top">
									<h6><a href="blogdetail2.html">Interpretation of exemption notification under Customs Act</a></h6>
									<p class="category_name"><i class="fa fa-briefcase"></i>In <a href="javascript:void(0)"> Legal</a></p>
									<p class="category_name"><i class="fa fa-user"></i>By <a href="javascript:void(0)"> dummy</a></p>
								</div>
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
								<a href="blogdetail2.html" class="button">Read More</a>
							</article>
						</div>
					</div>
					<hr>
					<?php endif; ?>
				</div>
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
						<img src="<?= img_data($_SESSION['logo']); ?>" class="aboutimg" alt="blog">
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
						<a href="about.html" class="button">Read More</a>
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
							<li><a href="javascript:void(0)">Labour Matters (13) </a></li>
							<li><a href="javascript:void(0)">Rent Act Matters (7) </a></li>
							<li><a href="javascript:void(0)">Direct Taxes Matters (12)</a></li>
							<li><a href="javascript:void(0)">Indirect Taxes Matters (15) </a></li>
							<li><a href="javascript:void(0)">Service Matters (5) </a></li>
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
                        <?php if(count($blogs2) > 2): ?>
                        <?php for($i = 0; $i < 3; $i ++): ?>
                        <div class="col-sm-12 col-lg-4 padded">
                            <a href="javascript:void(0)"><img src="<?= img_data($blogs2[$i]->img_path); ?>" class="img-responsive" alt="blog"></a>
                        </div>
                        <div class="col-sm-12 col-lg-8 text-left">
                            <a href="javascript:void(0)">Interpretation of exemption notification under Customs Act</a>
                            <span><a href="javascript:void(0)">Legal</a></span>
                            <span><?= $blogs2[$i]->date; ?></span>
                        </div>
                        <hr>
                        <?php endfor; ?>
                        <?php else: ?>
                        <div class="col-sm-12 col-lg-4 padded">
                            <a href="javascript:void(0)"><img src="assets/images/800x534.png" class="img-responsive" alt="blog"></a>
                        </div>
                        <div class="col-sm-12 col-lg-8 text-left">
                            <a href="javascript:void(0)">Interpretation of exemption notification under Customs Act</a>
                            <span><a href="javascript:void(0)">Legal</a></span>
                            <span>22.10.2017</span>
                        </div>
                        <hr>
						<div class="col-sm-12 col-lg-4 padded">
							<a href="javascript:void(0)"><img src="assets/images/800x534.png" class="img-responsive" alt="blog"></a>
						</div>
						<div class="col-sm-12 col-lg-8 text-left">
							<a href="javascript:void(0)">Interpretation of exemption notification under Customs Act</a>
							<span><a href="javascript:void(0)">Legal</a></span>
							<span>22.10.2017</span>
						</div>
						<hr>
						<div class="col-sm-12 col-lg-4 padded">
							<a href="javascript:void(0)"><img src="assets/images/800x534.png" class="img-responsive" alt="blog"></a>
						</div>
						<div class="col-sm-12 col-lg-8 text-left">
							<a href="javascript:void(0)">Interpretation of exemption notification under Customs Act</a>
							<span><a href="javascript:void(0)">Legal</a></span>
							<span>22.10.2017</span>
						</div>
						<?php endif; ?>
						<div class="clearfix"></div>
					</article>
					<article class="blogpost">
						<div class="head"><h6>Tags</h6></div>
						<ul class="tag">
							<li><a href="index.html" title="Food">Food</a></li>
							<li><a href="travel.html" title="Travelling">Travelling</a></li>
							<li><a href="photographer.html" title="Photographer">Photographer</a></li>
							<li><a href="legal.html" title="Legal" class="button">Legal</a></li>
							<li><a href="personal.html" title="Personal">Personal</a></li>
						</ul>
					</article>
					<div class="right tag_cloud">
						<a href="javascript:void(0)" class="tagimg"><img src="<?= img_data($one->img_path); ?>" alt="blog"></a>
						<div class="carousel-caption">
							<i class="icofont icofont-close-line"></i>
							<h5>Legal Book Library</h5>
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
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<h6><i class="fa fa-newspaper-o"></i>Most Liked Articles</h6>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="owl-carousel artslide">
                    <?php if(count($blogs2) > 3): ?>
                    <?php foreach($blogs2 as $blog): ?>
                    <div class="item">
                        <div class="weekday">
                            <div class="excerpt_data">
                                <a class="border" href="#"><img alt="blog" class="img-responsive" src="<?= img_data($blog->img_path); ?>"></a>
                                <p class="category_name">In <a href=""> Business</a></p>
                                <h6><a href="#"><?= $blog->title; ?></a></h6>
                                <p><?= substr($blog->content, 0, 40); ?></p>
                                <p class="category_name"><?= $blog->date; ?> | By <a href=""> <?= $blog->poster; ?></a></p>
                                <a class="button" href="">Read More</a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
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
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<h6><i class="fa fa-instagram"></i>Follow on Instagram</h6>
			</div>
		</div>
	</div>
	<div class="owl-carousel instaslide">
        <?php if(count($ads) > 5): ?>
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
<div class="callaction">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<p>Unlimited power and customization possibilities?
					<a href="" title="">Purchase Theme  <i class="fa fa-shopping-cart"></i></a>
				</p>
			</div>
		</div>
	</div>
</div>
<footer class="footer photofoot">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-lg-4">
				<a href="index.html" title="Blog Site Template"><img src="assets/images/footlogo.png" alt="Logo"></a>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
				<ul class="social mleft">
					<li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#" target="_blank"><i class="fa fa-pinterest-p"></i></a></li>
					<li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
					<li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
					<li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
				</ul>
			</div>
			<div class="col-xs-12 col-sm-6 col-lg-4">
				<h3>Other Links</h3>
				<ul class="fmenu">
					<li><a href="index.html" title="Home">Home</a></li>
					<li><a href="about.html" title="About">About</a></li>
					<li><a href="all-post.html" title="Blog">Blog</a></li>
					<li><a href="spost.html" title="Features">Features</a></li>
					<li><a href="contact.html" title="Contact">Contact</a></li>
					<li><a href="#" title="Buy Theme">Buy Theme</a></li>
				</ul>
			</div>
			<div class="col-xs-12 col-sm-6 col-lg-4">
				<h4>Address</h4>
				<address>
					301 The Greenhouse,<br>
					Custard Factory, London, E2 8DY.<br> sales@domain.com | +44 (0) 123-456-7890 
				</address>
			</div>
		</div>
	</div>
</footer>
<div class="copyright">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<p>Copyright © 2018 Pcube Blog Theme</p>
			</div>
		</div>
	</div>
</div>
<!--=========== /Footer ==========-->
<?= $this->endSection() ?>