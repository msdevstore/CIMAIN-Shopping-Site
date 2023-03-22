<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
<body class="commingpage">
<div class="soonbox">
	<div class="soondata">
        <a href="<?php echo site_url('dashboard'); ?>"><img src="assets/images/footlogo.png" alt="pcube shop"></a>
        <h2>Comming Soon</h2>
        <ul id="clockdiv">
            <li>
                <label class="days"></label>
                <span>Days</span>
            </li>
            <li>
                <label class="hours"></label>
                <span>Hours</span>
            </li>
            <li>
                <label class="minutes"></label>
                <span>Minutes</span>
            </li>
            <li>
                <label class="seconds"></label>
                <span>Seconds</span>
            </li>
        </ul>
        <p>Our website is under construction. We`ll be here soon with our new awesome site,<br> subscribe to be notified.</p>
       	<div class="foot">
            <div class="icon">
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
            <p>© 2018 PCUBEBLOG - All Rights Reserved.</p>
    	</div>
	</div>
	<div class="overlay"></div> 
</div> 
<?= $this->endSection() ?>