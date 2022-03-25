<?php

/* Template Name: landing-page */

require_once 'functions.php';

get_header();
global $wp;

$id = get_The_ID();
$page = get_page($id);



?>

<?php 
                $params = array(
                    'limit' => 0, 
                    'page' => 0, 
                );
                $mypod = pods( 'slider', $params );
            ?>
            <div class="container">
                <div class="banner">
                    <div class="owl-carousel owl-theme banner_carousel">
                        <?php 
                            while ( $mypod->fetch() ) {
                    
                            ?>
                                <div class="banner-item">
                                    <img src='<?= $mypod->display( 'obrazek' ) ?>' alt='banner'/>
                                </div>
                            <?php 
                        }
                        ?>
                    </div>
                </div>
            </div>

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-8">
            <div class="posts">
                <div class="row">
                        <?php
                         if (have_posts()) {
                            while (have_posts()) {
                                the_post();
                                $title = get_the_title();
                                $content = get_the_content();
                                $permaLink = get_the_permalink();
                                $id = get_the_ID();
                                $date = get_the_date( 'd-m-Y' );
                                
                                ?>
                                <div class="col-12 mb-4">
                                    <div class="banner-posts-item">
                                        <div class="banner-posts-item-img">
                                            <img src='<?= get_field('hlavni_obrazek', $id)['url'] ?>' alt='<?= $title ?>' />
                                        </div>
                                        <div class="banner-posts-item-text">
                                            <span class="banner-posts-item-date"><?=$date?></span>
                                            <span class="banner-posts-item-heading"><?=$title?></span>
                                            <span class="banner-posts-item-content"><?= substr(strip_tags($content), 0, 250); ?></span><p>...</p>
                                            <a href='<?=$permaLink?>' class="banner-posts-items-link"><span>Více</span></a>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
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
