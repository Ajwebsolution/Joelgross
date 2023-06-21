<!DOCTYPE html>
<html lang="de">
<head>

<!-- Meta -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="keywords" content="Maler, Basel, Joel, Gross, joel gross, Kundenmaler, malen,"/>
<meta name="description" content="Joel Gross Kundenmaler"/>

<!-- Title -->
<title>Joel Gross</title>
<!-- Favicons -->
<link rel="shortcut icon" href="favicon.png">

<!-- Google Web Fonts -->
<link href="http://fonts.googleapis.com/css?family=Lato:400,700,300,100,900" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/styles.css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/animate.css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/theme.css" />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Loader -->
<div id="page-loader"></div>
<!-- Loader / End -->

<!-- Header -->
<header id="header" class="header-horizontal dark">
    <a href="<?php echo site_url();?>" class="logo pull-left margin-r-40"><img src="<?php echo wp_get_attachment_url(get_theme_mod('custom_logo'));?>" alt=""></a>
    <!-- Navigation -->
    <nav id="main-menu">
        <!-- <ul class="nav nav-main pull-left">
            <li><a href="#section01"><span>Home</span> </a>
                
            </li>
            <li>
                <a href="#section02"><span>Über uns</span></a>
            </li>
            <li>
                <a href="#section03"><span>Umwelt</span></a>
            </li>
            <li>
                <a href="#section04"><span>Referenzen</span></a>
            </li>
            <li>
                <a href="#section05"><span>Team</span></a>
            </li>
         
            <li>
                <a href="#section06"><span>Kontakt</span></a>
            </li>
            
        </ul> -->
		                                 <?php
                                            wp_nav_menu(
                                                 array(
                                              'theme_location' => 'primary-menu',
                                               'container'=>false,
                                                'menu_class'=>'nav nav-main pull-left',
                                                'menu_id'=> 'desktop_menu',
                                               )
                                                 )?>
    </nav>
    <!-- Menu Trigger -->
    <a href="#" class="pull-right margin-l-30" data-target="mobile-nav"><i class="fa fa-bars"></i></a>
</header>
<!-- Header / End -->