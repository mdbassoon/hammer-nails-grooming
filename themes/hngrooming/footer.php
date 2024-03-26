<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hngrooming
 */

?>

    <!--================ Footer area ================-->
    <footer class="footer-area">
        <div class="container">
            <div class="footer-logo text-center">
                <a href="/">
                    <img src="<?php echo get_theme_file_uri( 'assets/images/footer-logo.png'); ?>" alt="">
                </a>
            </div>
            <div class="footer-links">
                <ul class="d-flex align-items-center justify-content-center">
                    <li><a class="text-16" href="/">Home</a></li>
                    <li><a class="text-16" href="/gift-cards">Gift Cards</a></li>
                    <li><a class="text-16" href="/join-the-club">Memberships</a></li>
                    <li><a class="text-16" href="/careers">Careers</a></li>
                    <li><a class="text-16" href="https://hammerandnailsfranchise.com/">Franchise</a></li>
                    <li><a class="text-16" href="/our-locations">Locations</a></li>
                </ul>
            </div>
            <div class="download-badge">
                <ul class="d-flex align-items-center justify-content-center">
                    <li><a href="#"><img src="<?php echo get_theme_file_uri( 'assets/images/app_store_badge.png'); ?>" alt=""></a></li>
                    <li><a href="#"><img src="<?php echo get_theme_file_uri( 'assets/images/google_play_badge.png'); ?>" alt=""></a></li>
                </ul>
            </div>
            <div class="social-media">
                <ul class="d-flex align-items-center justify-content-center">
                    <li><a href="#"><img class="facebook" src="<?php echo get_theme_file_uri( 'assets/images/facebook.svg'); ?>" alt=""></a></li>
                    <li><a href="#"><img src="<?php echo get_theme_file_uri( 'assets/images/instagram.svg'); ?>" alt=""></a></li>
                    <li><a href="#"><img src="<?php echo get_theme_file_uri( 'assets/images/linkedin.svg'); ?>" alt=""></a></li>
                </ul>
            </div>

            <div class="footer-bottom d-block d-lg-flex align-items-center justify-content-between">
                <p class="text-16"><span> &copy; Copyright 2024.</span> The Hammer & Nails Salon Group, LLC.</p>
                <ul class="d-flex align-items-center">
                    <li><a href="#" class="text-16">ACCESSIBILITY</a></li>
                    <li><a href="/privacy-policy" class="text-16">Privacy Policy</a></li>
                </ul>
            </div>            
        </div>
    </footer>

	<?php wp_footer(); ?>
</body>
</html>