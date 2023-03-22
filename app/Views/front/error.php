<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
<body class="errorpage">
<div class="inner_error">
	<div class="inner_data">
		<a href="<?php echo site_url('dashboard'); ?>" class="logo" title="PCUBE BLOG || HOME PAGE"><img src="images/footlogo.png" alt="logo"></a>
		<h2>404</h2>
		<p>Page Not Found</p>
		<a href="<?php echo site_url('dashboard'); ?>" class="button">Go Home</a>
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
<?= $this->endSection() ?>