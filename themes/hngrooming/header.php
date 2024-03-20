<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hngrooming
 */
global $wp;

$id = $wp_query->post->ID;
$status = get_field('location_status',$id);
if($status){
    $url_dir = $wp->request;
    if($status['is_it_live'][0]!='1'&&$status['presale'][0]!='1'){
        wp_redirect(home_url());
    } else if(str_contains($url_dir,'coming-soon')){
        if($status['presale'][0]!='1'){
            wp_redirect( get_permalink($id) );
        }
    } else {
        if($status['is_it_live'][0]!='1'&&$status['presale'][0]=='1'){
            wp_redirect( str_replace('location','coming-soon',get_permalink($id)) );
        }  
    }
}

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">



    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, initial-scale=1">

    <!-- title -->
    <title>Hammer &amp; Nails - Luxury Grooming Shop for Guys</title>

    <!-- favicon -->
    <link href="<?php echo get_theme_file_uri( 'assets/images/favicon.ico' ); ?>" type="image/png" rel="icon">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>
<body>
    
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader3">
            <img src="<?php echo get_theme_file_uri( 'assets/images/pre-load.png' ); ?>" alt="">
        </div>
    </div>

    <!--============== Header area start ================-->
    <header class="header-area">
        <div class="container">
            <div class="header-main d-flex align-items-center justify-content-between">
                <div class="menu-item d-none d-lg-block">
                    <ul class="d-flex align-items-center">
                        <li><a href="/service" class="text-16">Services</a></li>
                        <li><a href="/join-the-club" class="text-16">Memberships</a></li>
                        <li><a href="/gift-cards" class="text-16">Gift Cards</a></li>
                    </ul>
                </div>
                <div class="logo-item">
                    <a href="/">
                        <img src="<?php echo get_theme_file_uri( 'assets/images/logo.png '); ?>" alt="logo">
                    </a>
                </div>
                <div class="menu-item d-none d-lg-block">
                    <ul class="d-flex align-items-center">
                        <li><a href="/our-locations" class="text-16">Locations</a></li>
                        <li><a href="/careers" class="text-16">Careers</a></li>
                        <li><a href="https://hammerandnailsfranchise.com/" class="text-16">Franchise</a></li>
                    </ul>
                </div>
                <!-- menu toggler -->
                <div class="hamburger-menu d-lg-none">
                    <span class="line-top"></span>
                    <span class="line-center"></span>
                    <span class="line-bottom"></span>
                </div>
            </div>
        </div>
        <!-- Ofcanvas-menu -->
        <div class="ofcavas-menu d-lg-none">
           <div class="container">
                <ul>
                    <li><a class="text-16" href="/service">Services</a></li>
                    <li><a class="text-16" href="/join-the-club">Memberships</a></li>
                    <li><a class="text-16" href="/gift-cards">Gift Cards</a></li>
                    <li><a class="text-16" href="/our-locations">Locations</a></li>
                    <li><a class="text-16" href="/careers">Careers</a></li>
                    <li><a class="text-16" href="/franchise">Franchise</a></li>
                </ul>
           </div>
        </div>
    </header>