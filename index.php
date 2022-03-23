<?php

require_once 'functions.php';

get_header();
global $wp;

$id = get_The_ID();
$page = get_page($id);

if (is_front_page()){
    include 'homepage.php';
} else {
    include 'subpage.php';
}

get_footer();