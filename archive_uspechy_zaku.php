<?php

/* Template Name: archive_uspechy_zaku */

require_once 'functions.php';

get_header();
global $wp;

$id = get_The_ID();
$page = get_page($id);


$args = array(
    'numberposts' => 5,
    'post_type'   => 'post',
    'category_name' => 'uspechy-zaku'
    
);
$posts = get_posts($args);
?>

<div class="container mt-5">
<div class="row">
    <div class="col-lg-8">
        <div class="posts">
            <div class="row">
                <?php
                    foreach($posts as $key => $post){
                        ?>
                            <div class="col-12 mb-4">
                                <div class="banner-posts-item">
                                    <div class="banner-posts-item-img">
                                        <img src='<?= get_field('hlavni_obrazek', $post->ID)['url'] ?>' alt='<?= $post->post_title ?>' />
                                    </div>
                                    <div class="banner-posts-item-text">
                                        <span class="banner-posts-item-date"><?= $post->post_date_gmt ?></span>
                                        <span class="banner-posts-item-heading"><?= $post->post_title ?></span>
                                        <span class="banner-posts-item-content"><?= substr(strip_tags($post->post_content), 0, 250); ?></span><p>...</p>
                                        <a href='<?= $post->guid ?>' class="banner-posts-items-link"><span>Více</span></a>
                                    </div>
                                </div>
                            </div>
                        <?php
                    }
                ?>
            </div>
        </div>
    </div>
        <div class="col-lg-4 mb-4">
            <?php if(is_active_sidebar('page-sidebar')): ?>
                <?php dynamic_sidebar('page-sidebar');?>
            <?php endif;?>
        </div>
</div>
</div>

<?php

get_footer();

?>
