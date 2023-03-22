<div class="menu">
    <a class="baricon"><span>Menu</span><i class="fa fa-bars"></i></a>
    <ul>
        <li><a title="Side Menu" href="javascript:void(0);"><i class="fa fa-bars menuclick"></i></a></li>
        <?php foreach($tags as $tag): ?>
        <li><a title="<?= $tag->tag_name; ?>" href="<?php echo site_url('/'.$tag->id); ?>"><?= $tag->tag_name; ?></a></li>
        <?php endforeach; ?>
        <?php if (isset($_SESSION['auth'])) : ?>
            <?php if($_SESSION['auth']->role == 1): ?>
            <li><a title="Manage" href="<?php echo site_url('admin'); ?>">Manage</a></li>
            <?php endif;?>
        <?php endif; ?>
    </ul>
</div>