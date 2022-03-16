<!DOCTYPE html>
<html lang ="cs">

<head>
    <title>Gymnázium Jana Keplera</title>
    <!-- META TAGY -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, intial-scale=1">
        <meta name="Keywords" content="">
        <meta name="Description" content="">
        <meta name="Author" content="">

    <!-- STYLY -->
    <link rel="stylesheet" type="text/css" href="<?=get_stylesheet_directory_uri() ?>/style.css">
    <link rel="stylesheet" type="text/css" href="<?=get_stylesheet_directory_uri() ?>/assets/css/font.css">
</head>

<body>

    <div class="main">
        <div class="header">
            <a href='<?= site_url() ?>' title="logo" class="header-logo">
                <img src=' <?= get_stylesheet_directory_uri()?> /assets/icons/kepler_logo.png' class="logo" alt='logo' />
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
