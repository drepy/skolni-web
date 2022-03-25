<?php
/*Template Name: post */
/* Template Post Type: post, page, product */
  
require_once 'functions.php';

get_header();
global $wp;

$id = get_The_ID();
$page = get_page($id);

?>

<div class="banner smaller">
    <div class="banner-item">
        <img src='<?= get_field('hlavni_obrazek', $id)['url'] ?>' alt='banner'/>
    </div>
</div>
<div class="container mt-5 pb-4">
    <div class="news-page-content">
        <div class="row">
            <div class="col-lg-8">
                <h2><?= $page->post_title ?></h2>
                <div class="default-content">
                    <p>
                        <?= $page->post_content ?>
                    </p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <?php if(is_active_sidebar('page-sidebar')): ?>
                    <?php dynamic_sidebar('page-sidebar');?>
                <?php endif;?>
            </div>
        </div>
    </div>
</div>


<?php

get_footer();

?>