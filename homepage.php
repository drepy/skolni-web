<?php

/* Template Name: landing-page */

require_once 'functions.php';

get_header();
global $wp;

$id = get_The_ID();
$page = get_page($id);


$args = array(
    'numberposts' => 4,
    'post_type'   => 'post'
);
$posts = get_posts($args);
?>

<div class="posts">
    <div class="row">
        <?php
            foreach($posts as $key => $post){
                ?>
                    <div class="col-12">
                        <div class="banner-posts-item">
                            <img src='<?= get_field('hlavni_obrazek', $post->ID)['url'] ?>' alt='<?= $post->post_title ?>' />
                            <div class="banner-posts-item-text">
                                <span class="banner-posts-item-date"><?= $post->post_date_gmt ?></span>
                                <span class="banner-posts-item-heading"><?= $post->post_title ?></span>
                                <span class="banner-posts-item-content"><?= $post->post_text ?></span>
                                <a href='<?= $post->guid ?>' class="banner-posts-items-link"><span>Více</span></a>
                            </div>
                        </div>
                    </div>
                <?php
            }
        ?>
    </div>
</div>

<?php

get_footer();

?>
