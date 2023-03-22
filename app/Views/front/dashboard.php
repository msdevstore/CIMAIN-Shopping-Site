<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
<body onload="loader()">
<!--======== Loader  =================-->
<?= $this->include('includes/loader') ?>
<!--======== /Loader  =================-->
<div id="main_div">
<header class="header">
    <?= $this->include('includes/headtop') ?>
    <div class="headmenu" data-spy="affix" data-offset-top="60" data-offset-bottom="200">
        <div class="container">
            <div class="row" style="display: flex; align-items: center;">
                <div class="col-xs-12 col-sm-3 col-lg-4">
                    <a id="title" href="<?= site_url('/'); ?>" class="logo" title="PCUBE BLOG || HOME PAGE" style="font-size: 35px"><?= $_SESSION['name']; ?></a>
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
	<div class="mainslide owl-carousel">
        <?php if(count($slides) > 0): ?>
        <?php foreach ($slides as $slide): ?>
            <div class="item">
                <img src="<?= $slide->img_path; ?>" alt="slide">
                <div class="carousel-caption">
                    <span>
                        <a href="#">
                            <?php $found_key = array_search($slide->tag, array_column($tags, 'id'));
                            echo $tags[$found_key]->tag_name; ?>
                        </a>
                    </span>
                    <h5><?= $slide->title; ?></h5>
                    <p><?= $slide->date; ?></p>
                </div>
            </div>
        <?php endforeach; ?>
        <?php else: ?>
		<div class="item">
			<img src="assets/images/1800x1047.png" alt="slide1">
			<div class="carousel-caption">
				<span><a href="">fooooo</a></span>
				<h5>Healthy, Happy Life</h5>
				<p>November 14, 2017</p>
			</div>
		</div>
		<div class="item">
			<img src="assets/images/1800x1047.png" alt="slide1">
			<div class="carousel-caption">
				<span><a href="">Food</a></span>
				<h5>The First Mess</h5>
				<p>November 15, 2017</p>
			</div>
		</div>
		<div class="item">
			<img src="assets/images/1800x1047.png" alt="slide1">
			<div class="carousel-caption">
				<span><a href="">Food</a></span>
				<h5>Created Today</h5>
				<p>November 16, 2017</p>
			</div>
		</div>
        <?php endif ?>
	</div>
</section>
<!--============ /Slider ============-->
<!--============ Blog ============-->
<div class="blog">
	<div class="container">
		<div class="row">
			<!--============ Blog-Left ============-->
			<div class="col-sm-12 col-md-8 col-lg-8">
				<div class="weekday">
					<ul class="social">
						<li><a href="javascript:void(0)">12 April</a></li>
						<li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
						<li><a href="#" target="_blank"><i class="fa fa-pinterest-p"></i></a></li>
						<li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
					</ul>
                    <?php if(count($blogs) > 0): ?>
                    <div class="excerpt_data">
                        <a href="#" class="border"><img src="<?= $blogs[0]->img_path; ?>" class="img-responsive" alt="blog"></a>
                        <article>
                            <p class="category_name">In <a href="javascript:void(0)"><?php $found_key = array_search($blogs[0]->tag, array_column($tags, 'id'));
                                    echo $tags[$found_key]->tag_name; ?></a></p>
                            <h6><a href="#"><?= $blogs[0]->title; ?></a></h6>
                            <p class="category_name">By <a href="javascript:void(0)"> <?= $blogs[0]->poster; ?></a></p>
                            <p> <?= substr($blogs[0]->content, 0, 280); ?>...</p>
                            <a href="#" class="button">Read More</a>
                        </article>
                    </div>
                    <?php else: ?>
                    <div class="excerpt_data">
                        <a href="#" class="border"><img src="assets/images/800x534.png" class="img-responsive" alt="blog"></a>
                        <article>
                            <p class="category_name">In <a href="javascript:void(0)"> Food</a></p>
                            <h6><a href="blogdetail2.html">Twas The Night Before The Christmas Party</a></h6>
                            <p class="category_name">By <a href="javascript:void(0)"> dummy</a></p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                            <a href="blogdetail2.html" class="button">Read More</a>
                        </article>
                    </div>
                    <?php endif ?>
				</div>
                <?php if(count($blogs) > 2): ?>
                <?php for($i = 1; $i < 3; $i ++): ?>
                <div class="col-sm-12 col-md-6 col-lg-6 Lpadded text-center">
                    <a href="#" class="border"><img src="<?= $blogs[$i]->img_path; ?>" alt="blog" class="img-responsive"></a>
                    <article>
                        <p class="category_name">In <a href="javascript:void(0)"> <?php $found_key = array_search($blogs[$i]->tag, array_column($tags, 'id'));
                                echo $tags[$found_key]->tag_name; ?></a></p>
                        <h6><a href="#"><?= $blogs[$i]->title; ?></a></h6>
                        <p class="category_name"><?= $blogs[$i]->date; ?> | By<a href="javascript:void(0)"> <?= $blogs[$i]->poster; ?></a></p>
                        <p><?= substr($blogs[$i]->content, 0, 150); ?>...</p>
                        <ul class="social meta-share">
                            <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-pinterest-p"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                        <a href="#" class="button">Read More</a>
                    </article>
                </div>
                <?php endfor; ?>
                <?php else: ?>
                <div class="col-sm-12 col-md-6 col-lg-6 Lpadded text-center">
                    <a href="blogdetail2.html" class="border"><img src="assets/images/800x534.png" alt="blog" class="img-responsive"></a>
                    <article>
                        <p class="category_name">In <a href="javascript:void(0)"> Food</a></p>
                        <h6><a href="blogdetail2.html">Twas The Night Before The Christmas Party</a></h6>
                        <p class="category_name">12 April | By<a href="javascript:void(0)"> dummy</a></p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley .</p>
                        <ul class="social meta-share">
                            <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-pinterest-p"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                        <a href="blogdetail2.html" class="button">Read More</a>
                    </article>
                </div>
				<div class="col-sm-12 col-md-6 col-lg-6 Rpadded text-center">
					<a href="blogdetail2.html" class="border"><img src="assets/images/800x534.png" alt="blog" class="img-responsive"></a>
					<article>
						<p class="category_name">In <a href="javascript:void(0)"> Food</a></p>
						<h6><a href="blogdetail2.html">Twas The Night Before The Christmas Party</a></h6>
						<p class="category_name">12 April | By <a href="javascript:void(0)"> dummy</a></p>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley .</p>
						<ul class="social meta-share">
							<li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#" target="_blank"><i class="fa fa-pinterest-p"></i></a></li>
							<li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
						</ul>
						<a href="blogdetail2.html" class="button">Read More</a>
					</article>
				</div>
                <?php endif ?>
				<hr>
				<div class="weekday">
					<ul class="social">
						<li><a href="javascript:void(0)">12 April</a></li>
						<li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
						<li><a href="#" target="_blank"><i class="fa fa-pinterest-p"></i></a></li>
						<li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
					</ul>
                    <?php if(count($blogs) > 3): ?>
                    <div class="excerpt_data">
                        <a href="#" class="border"><img src="<?= $blogs[4]->img_path; ?>" class="img-responsive" alt="blog"></a>
                        <article>
                            <p class="category_name">In <a href="javascript:void(0)"> <?php $found_key = array_search($blogs[4]->tag, array_column($tags, 'id'));
                                    echo $tags[$found_key]->tag_name; ?></a></p>
                            <h6><a href="#"><?= $blogs[0]->title; ?></a></h6>
                            <p class="category_name">By <a href="javascript:void(0)"> <?= $blogs[4]->poster; ?></a></p>
                            <p><?= substr($blogs[4]->content, 0, 280); ?>...</p>
                            <a href="#" class="button">Read More</a>
                        </article>
                    </div>
                    <?php else: ?>
                    <div class="excerpt_data">
                        <a href="blogdetail2.html" class="border"><img src="assets/images/800x534.png" class="img-responsive" alt="blog"></a>
                        <article>
                            <p class="category_name">In <a href="javascript:void(0)"> Food</a></p>
                            <h6><a href="blogdetail2.html">Twas The Night Before The Christmas Party</a></h6>
                            <p class="category_name">By <a href="javascript:void(0)"> dummy</a></p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                            <a href="blogdetail2.html" class="button">Read More</a>
                        </article>
                    </div>
                    <?php endif ?>
				</div>
                <?php if(count($blogs) > 5): ?>
                <?php for($i = 4; $i < 6; $i ++): ?>
                <div class="col-sm-12 col-md-6 col-lg-6 Lpadded text-center">
                    <a href="#" class="border"><img src="<?= $blogs[$i]->img_path; ?>" alt="blog" class="img-responsive"></a>
                    <article>
                        <p class="category_name">In <a href="javascript:void(0)"> <?php $found_key = array_search($blogs[$i]->tag, array_column($tags, 'id'));
                                echo $tags[$found_key]->tag_name; ?></a></p>
                        <h6><a href="#"><?= $blogs[$i]->title; ?></a></h6>
                        <p class="category_name"><?= $blogs[$i]->date; ?> | By <a href="javascript:void(0)"> <?= $blogs[$i]->poster; ?></a></p>
                        <p> <?= substr($blogs[$i]->content, 0, 150); ?>...</p>
                        <ul class="social meta-share">
                            <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-pinterest-p"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                        <a href="#" class="button">Read More</a>
                    </article>
                </div>
                <?php endfor ?>
                <?php else: ?>
                <div class="col-sm-12 col-md-6 col-lg-6 Lpadded text-center">
                    <a href="blogdetail2.html" class="border"><img src="assets/images/800x534.png" alt="blog" class="img-responsive"></a>
                    <article>
                        <p class="category_name">In <a href="javascript:void(0)"> Food</a></p>
                        <h6><a href="blogdetail2.html">Twas The Night Before The Christmas Party</a></h6>
                        <p class="category_name">12 April | By <a href="javascript:void(0)"> dummy</a></p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley .</p>
                        <ul class="social meta-share">
                            <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-pinterest-p"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                        <a href="blogdetail2.html" class="button">Read More</a>
                    </article>
                </div>
				<div class="col-sm-12 col-md-6 col-lg-6 Rpadded text-center">
					<a href="blogdetail2.html" class="border"><img src="assets/images/800x534.png" alt="blog" class="img-responsive"></a>
					<article>
						<p class="category_name">In <a href="javascript:void(0)"> Food</a></p>
						<h6><a href="blogdetail2.html">Twas The Night Before The Christmas Party</a></h6>
						<p class="category_name">12 April | By <a href="javascript:void(0)"> dummy</a></p>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley .</p>
						<ul class="social meta-share">
							<li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#" target="_blank"><i class="fa fa-pinterest-p"></i></a></li>
							<li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
						</ul>
						<a href="blogdetail2.html" class="button">Read More</a>
					</article>
				</div>
                <?php endif ?>
				<hr>
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
						<p><?= substr($_SESSION['description'], 0, 200); ?>...</p>
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
							<li><a href="javascript:void(0)">Vegetables (13) </a></li>
							<li><a href="javascript:void(0)">Protein (7) </a></li>
							<li><a href="javascript:void(0)">Grains (12)</a></li>
							<li><a href="javascript:void(0)">Fruits (15) </a></li>
							<li><a href="javascript:void(0)">Oils (5) </a></li>
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
                            <a href="javascript:void(0)"><img src="<?= $blogs[$i]->img_path; ?>" class="img-responsive" alt="blog"></a>
                        </div>
                        <div class="col-sm-12 col-lg-8 text-left">
                            <a href="javascript:void(0)"><?= $blogs[$i]->title; ?></a>
                            <span><a href="javascript:void(0)"><?php $found_key = array_search($blogs[$i]->tag, array_column($tags, 'id'));
                                    echo $tags[$found_key]->tag_name; ?></a></span>
                            <span><?= $blogs[$i]->date; ?></span>
                        </div>
                        <hr>
                        <?php endfor; ?>
                        <?php else: ?>
                        <div class="col-sm-12 col-lg-4 padded">
                            <a href="javascript:void(0)"><img src="assets/images/800x534.png" class="img-responsive" alt="blog"></a>
                        </div>
                        <div class="col-sm-12 col-lg-8 text-left">
                            <a href="javascript:void(0)">Twas The Night Before The Christmas Party</a>
                            <span><a href="javascript:void(0)">Food</a></span>
                            <span>22.10.2017</span>
                        </div>
                        <hr>
						<div class="col-sm-12 col-lg-4 padded">
							<a href="javascript:void(0)"><img src="assets/images/800x534.png" class="img-responsive" alt="blog"></a>
						</div>
						<div class="col-sm-12 col-lg-8 text-left">
							<a href="javascript:void(0)">Twas The Night Before The Christmas Party</a>
							<span><a href="javascript:void(0)">Food</a></span>
							<span>22.10.2017</span>
						</div>
						<hr>
						<div class="col-sm-12 col-lg-4 padded">
							<a href="javascript:void(0)"><img src="assets/images/800x534.png" class="img-responsive" alt="blog"></a>
						</div>
						<div class="col-sm-12 col-lg-8 text-left">
							<a href="javascript:void(0)">Twas The Night Before The Christmas Party</a>
							<span><a href="javascript:void(0)">Food</a></span>
							<span>22.10.2017</span>
						</div>
						<hr>
						<div class="col-sm-12 col-lg-4 padded">
							<a href="javascript:void(0)"><img src="assets/images/800x534.png" class="img-responsive" alt="blog"></a>
						</div>
						<div class="col-sm-12 col-lg-8 text-left">
							<a href="javascript:void(0)">Twas The Night Before The Christmas Party</a>
							<span><a href="javascript:void(0)">Food</a></span>
							<span>22.10.2017</span>
						</div>
                        <?php endif ?>
						<div class="clearfix"></div>
					</article>
					<article class="blogpost">
						<div class="head"><h6>Tags</h6></div>
						<ul class="tag">
							<li><a href="<?php echo site_url('dashboard'); ?>" title="Food" class="button">Food</a></li>
							<li><a href="<?php echo site_url('travel'); ?>" title="Travelling">Travelling</a></li>
							<li><a href="<?php echo site_url('photographer'); ?>" title="Photographer">Photographer</a></li>
							<li><a href="<?php echo site_url('legal'); ?>" title="Legal">Legal</a></li>
							<li><a href="<?php echo site_url('personal'); ?>" title="Personal">Personal</a></li>
						</ul>
					</article>
					<div class="right tag_cloud">
						<a href="javascript:void(0)" class="tagimg"><img src="<?= $one->tag_img; ?>" alt="blog"></a>
						<div class="carousel-caption">
							<i class="icofont icofont-close-line"></i>
							<h5>Inspiration & Lifestyle Category</h5></h5>
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
                    <?php if(count($blogs) > 3): ?>
                    <?php foreach ($blogs as $blog): ?>
                    <div class="item">
                        <div class="weekday">
                            <div class="excerpt_data">
                                <a class="border" href="#"><img alt="blog" class="img-responsive" src="<?= $blog->img_path; ?>"></a>
                                <p class="category_name">In <a href=""> <?php $found_key = array_search($blog->tag, array_column($tags, 'id'));
                                        echo $tags[$found_key]->tag_name; ?></a></p>
                                <h6><a href="#"><?= substr($blog->title, 0, 30); ?>...</a></h6>
                                <p><?= substr($blog->content, 0, 100); ?>...</p>
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
                    <?php endif ?>
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
        <?php endif ?>
	</div>
</div>
<!--=========== /Instagram ==========-->
<!--=========== Footer ==========-->
<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<a href="index.html" title="Blog Site Template"><img src="assets/images/footlogo.png" alt="Logo"></a>
				<ul class="social">
					<li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#" target="_blank"><i class="fa fa-pinterest-p"></i></a></li>
					<li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
					<li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
					<li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
				</ul>
				<ul class="fmenu">
					<li><a href="index.html" title="Home">Home</a></li>
					<li><a href="about.html" title="About">About</a></li>
					<li><a href="all-post.html" title="Blog">Blog</a></li>
					<li><a href="spost.html" title="Features">Features</a></li>
					<li><a href="contact.html" title="Contact">Contact</a></li>
					<li><a href="#" title="Buy Theme">Buy Theme</a></li>
				</ul>
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
<?= $this->endSection() ?>
