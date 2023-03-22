<aside class="sidebar pb-5">
    <div class="text-primary" style="padding: 20px 10px; font-style: italic">
        <a id="title" href="<?= site_url('/'); ?>" title="PCUBE BLOG || HOME PAGE" style="font-size: 30px"><?= $_SESSION['name']; ?></a>
    </div>
    <a class="close"><i class="icofont icofont-close-line"></i></a>
    <ul>
        <?php foreach($tags as $tag): ?>
        <li><a title="<?= $tag->tag_name ?>" href="<?= site_url('/'.$tag->id) ?>"><?= $tag->tag_name ?></a></li>
        <?php endforeach; ?>
    </ul>
    <ul class="blogpost">
        <?php if(count($blogs) > 3): ?>
        <?php for($i = 0; $i < 4; $i ++): ?>
        <li class="col-sm-12 col-lg-4">
            <a href="#"><img alt="blog" class="img-responsive" src="<?= img_data($blogs[$i]->img_path); ?>"></a>
        </li>
        <li class="col-sm-12 col-lg-8 text-left">
            <a href="#"><?= $blogs[$i]->title; ?></a>
        </li>
        <?php endfor; ?>
        <?php else: ?>
        <li class="col-sm-12 col-lg-4">
            <a href="#"><img alt="blog" class="img-responsive" src="assets/images/800x534.png"></a>
        </li>
        <li class="col-sm-12 col-lg-8 text-left">
            <a href="#">How The Cloud Can Improve Business</a>
        </li>
        <li class="col-sm-12 col-lg-4">
            <a href="#"><img alt="blog" class="img-responsive" src="assets/images/800x534.png"></a>
        </li>
        <li class="col-sm-12 col-lg-8 text-left">
            <a href="#">How The Cloud Can Improve Business</a>
        </li>
        <li class="col-sm-12 col-lg-4">
            <a href="#"><img alt="blog" class="img-responsive" src="assets/images/800x534.png"></a>
        </li>
        <li class="col-sm-12 col-lg-8 text-left">
            <a href="#">How The Cloud Can Improve Business</a>
        </li>
        <?php endif; ?>
    </ul>
    <div class="tag_cloud">
        <a class="tagimg" href="#"><img alt="blog" src="<?= img_data($one->tag_img); ?>"></a>
        <div class="carousel-caption">
            <i class="icofont icofont-close-line"></i>
            <h5>Inspiration &amp; Lifestyle Category</h5>
            <a class="button" href="#">More Info</a>
        </div>
    </div>
</aside>