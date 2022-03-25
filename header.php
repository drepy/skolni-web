<!DOCTYPE html>
<html lang ="cs">

<head>
    <title>Gymnázium Jana Keplera | <?=the_title()?></title>
    <!-- META TAGY -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=no;">
        <meta name="Keywords" content="">
        <meta name="Description" content="">
        <meta name="Author" content="">

    <!-- STYLY -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?=get_stylesheet_directory_uri() ?>/style.css">
    <link rel="stylesheet" type="text/css" href="<?=get_stylesheet_directory_uri() ?>/assets/css/font.css">

    <!-- OWL CAROUSEL -->
    <link rel="stylesheet" type="text/css" href="<?= get_stylesheet_directory_uri() ?>/assets/owlcarousel/dist/assets/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="<?= get_stylesheet_directory_uri() ?>/assets/owlcarousel/dist/assets/owl.theme.default.min.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
</head>

<body>

    <div class="main">
        <div class="header">
            <a href='<?= site_url() ?>' title="logo" class="header-logo">
                <img src=' <?= get_stylesheet_directory_uri()?>/assets/icons/kepler_logo.png' class="logo" alt='logo' />
                <div class="header-text">
                    <h1 class="header-text-main">GYMNÁZIUM<br>JANA KEPLERA</h1>
                </div>
            </a>
            <button class="navbar-toggler first-button" type="button">
					<div class="animated-icon1"><span></span><span></span><span></span></div>
			</button>
            <ul class="header-menu">
                <?=get_wp_nav_menu()?>
            </ul>    
        </div>
