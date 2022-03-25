<?php

/* Template Name: Galerie */

require_once 'functions.php';

get_header();
global $wp;

$id = get_The_ID();
$page = get_page($id);


$post = get_post($id); 
$content = apply_filters('the_content', $post->post_content); 
?>

<div class="container">
    <div class="row">
        <div class="col-12 mt-5">
            <div class="galerie">
                <h2><?=the_title()?></h2>
                <?php 
                $params = array(
                    'limit' => 0, 
                    'page' => 0, 
                );
                $mypod = pods( 'galerie', $params );
            ?>
            <div class="container">
                <div class="banner">
                    <div class="subpage-galerie">
                        <?php 
                            while ( $mypod->fetch() ) {
                    
                            ?>
                                <h2 class="galerie_category"><?= $mypod->display('kategorie')?></h2>
                                <?php echo $content; ?>
                                <div class="banner-item">
                                    <?= $mypod->display( 'obrazek' ) ?>
                                </div>
                            <?php 
                        }
                        ?>
                    </div>
                </div>
            </div>
            </div>    
        </div>    
    </div>    
</div>



<?php
    get_footer();
?>