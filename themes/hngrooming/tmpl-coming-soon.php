<?php
/**
 * Template Name: Coming Soon
 *
 * @package WordPress
 */
get_header();
?>

    <main class="overflow-hidden comingsoon-wrapper">

        <!--================= comming-area ================-->
        <section class="comming-area">
            <div class="container">
                <div class="csmain-part">
                    <div class="csupper-cnt text-center">
                        <h6 class="text-16">Hammer and Nails - Valencia, CA </h6>
                        <h1 class="title-xxl">Coming Soon</h1>
                        <p class="text-16">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    </div>
                    <form action="#">
                        <div class="csupper-item">
                            <input class="text-16" type="email" placeholder="Enter Your Email Address" required>
                            <button class="button" type="submit">Notify Me</button>
                        </div>
                    </form>
                    <div class="csupper-location">
                        <div class="csupper-locationbox">
                            <img src="<?php echo get_theme_file_uri( 'assets/images/icon_loction-01.png'); ?>" alt="location-icon">
                            <a class="text-16" href="#">4750 The Grove Dr, Suite 132 Windermere, FL 34786</a>
                        </div>
                        <div class="csupper-locationbox">
                            <img src="<?php echo get_theme_file_uri( 'assets/images/icon_phone-01.png'); ?>" alt="phone-icon">
                            <a class="text-16" href="tel: (407) 917-8682">(407) 917-8682</a>
                        </div>
                        <div class="csupper-locationbox">
                            <img src="<?php echo get_theme_file_uri( 'assets/images/icon_message-01.png'); ?>" alt="email-icon">
                            <a class="text-16" href="mailto: windermere@hngrooming.com">windermere@hngrooming.com</a>
                        </div>
                    </div>
                    <div class="cssocial-icon">
                        <ul class="d-flex align-items-center justify-content-center">
                            <li><a href="#"><img class="facebook" src="<?php echo get_theme_file_uri( 'assets/images/facebook.svg'); ?>" alt="facebook"></a></li>
                            <li><a href="#"><img class="instagram" src="<?php echo get_theme_file_uri( 'assets/images/instagram.svg'); ?>" alt="instagram"></a></li>
                            <li><a href="#"><img class="linkedin" src="<?php echo get_theme_file_uri( 'assets/images/linkedin.svg'); ?>" alt="linkedin"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!--================= experince-area ================-->
        <section class="experince-area">
            <div class="container">
                <div class="experience-upper text-center">
                    <h2 class="title-xl"> Welcome to the <span>Hammer and Nails Experience</span></h2>
                    <p class="text-16">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
               <div class="experience-main">
                   <div class="row">
                       <div class="col-6 col-md-4 d-none d-md-block">
                           <div class="experience-item">
                               <img src="<?php echo get_theme_file_uri( 'assets/images/experience_01.png'); ?>" alt="experience_01">
                           </div>
                       </div>
                       <div class="col-6 col-md-4">
                           <div class="experience-item expmiddle">
                               <img src="<?php echo get_theme_file_uri( 'assets/images/experience_02.png'); ?>" alt="experience_02">
                           </div>
                       </div>
                       <div class="col-6 col-md-4">
                           <div class="experience-item">
                               <img src="<?php echo get_theme_file_uri( 'assets/images/experience_03.png'); ?>" alt="experience_03">
                           </div>
                       </div>
                   </div>
               </div>
            </div>
        </section>

        <!--================= choose-area ================-->
        <section class="choose-area membership-bg">
            <div class="container">
                <div class="choose-item text-center membership-upper">
                    <h2 class="title-xl">Membership <span>Opporunities</span></h2>
                    <p class="text-16">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
                <div class="row justify-content-center membership-main">
                    <div class="col-md-6 col-lg-4">
                        <div class="choose-item2">
                            <div class="choose-inner">
                            </div>
                            <h3 class="title-xl4">Classic Club</h3>
                            <ul>
                                <li class="text-16"><span><img src="<?php echo get_theme_file_uri( 'assets/images/choose-icon-01.png'); ?>" alt=""></span>Two Classic Services per Month</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="choose-item3">
                            <div class="choose-inner">                                
                            </div>
                            <h3 class="title-xl4">VIP Club</h3>
                            <ul>
                                <li class="text-16"><span><img src="<?php echo get_theme_file_uri( 'assets/images/choose-icon-01.png'); ?>" alt=""></span>Three Premium Services per Month</li>
                                <li class="text-16"><span><img src="<?php echo get_theme_file_uri( 'assets/images/choose-icon-01.png'); ?>" alt=""></span>One Free Add-On per Month</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="choose-item3 mt-5 mt-md-0">
                            <div class="choose-inner">
                                <div class="choose-inner2">
                                    <h4 class="text-18">Best Experience</h4>
                                </div>
                            </div>
                            <h3 class="title-xl4">Club Luxe</h3>
                            <ul>
                                <li class="text-16"><span><img src="<?php echo get_theme_file_uri( 'assets/images/choose-icon-01.png'); ?>" alt=""></span>Unlimited Services for Member </li>
                                <li class="text-16"><span><img src="<?php echo get_theme_file_uri( 'assets/images/choose-icon-01.png'); ?>" alt=""></span>One free guest pass per month</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="benefit-item mt-0">
                <div class="container">
                    <div class="benefit-inner benefit-main">
                        <h3 class="title-xl4 text-center">Membership Benefits</h3>
                        <ul>
                            <li class="text-16"><span><img src="<?php echo get_theme_file_uri( 'assets/images/choose-icon-01.png'); ?>" alt=""></span> No commitment, cancel anytime </li>
                            <li class="text-16"><span><img src="<?php echo get_theme_file_uri( 'assets/images/choose-icon-01.png'); ?>" alt=""></span>Premium & Classic Services roll over</li>
                            <li class="text-16"><span><img src="<?php echo get_theme_file_uri( 'assets/images/choose-icon-01.png'); ?>" alt=""></span>Share services with family & friends</li>
                            <li class="text-16"><span><img src="<?php echo get_theme_file_uri( 'assets/images/choose-icon-01.png'); ?>" alt=""></span>Combine services to upgrade experience</li>
                            <li class="text-16"><span><img src="<?php echo get_theme_file_uri( 'assets/images/choose-icon-01.png'); ?>" alt=""></span>Complimentary beverage</li>
                            <li class="text-16"><span><img src="<?php echo get_theme_file_uri( 'assets/images/choose-icon-01.png'); ?>" alt=""></span>20-40%+ on retail and services</li>
                            <li class="text-16"><span><img src="<?php echo get_theme_file_uri( 'assets/images/choose-icon-01.png'); ?>" alt=""></span>Complimentary upgrade days</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!--================ csbottom-area start ================-->
        <section class="csbottom-area">
            <div class="container">
                <div class="service-upperitem text-center">
                    <h1 class="title-xl">Our Services</h1>
                    <ul>
                        <li><a href="service.html#classic" class="button" data-scroll="#classic">CLASSIC</a></li>
                        <li><a href="service.html#premium" class="button" data-scroll="#premium">PREMIUM</a></li>
                        <li><a href="service.html#luxe-treatment" class="button" data-scroll="#luxe-treatment">LUXE TREATMENTS</a></li>
                    </ul>
                </div>
                <div class="cscontact-part">
                    <div class="row align-items-center">
                        <div class="col-lg-7">
                            <div class="cscontact-item">
                                <img src="<?php echo get_theme_file_uri( 'assets/images/question_bg.jpg'); ?>" alt="question_bg">
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="cscontact-cnt">
                                <h4 class="title-xl">Have Qestions? <br>Call Us At <a href="tel: (407) 917-8682">[407] 917-8682</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="csbottom-location csupper-location">
                    <div class="csupper-locationbox">
                        <img src="<?php echo get_theme_file_uri( 'assets/images/icon_loction-01.png'); ?>" alt="location-icon">
                        <a class="text-16" href="#">4750 The Grove Dr, Suite 132 Windermere, FL 34786</a>
                    </div>
                    <div class="csupper-locationbox">
                        <img src="<?php echo get_theme_file_uri( 'assets/images/icon_phone-01.png'); ?>" alt="phone-icon">
                        <a class="text-16" href="tel: (407) 917-8682">(407) 917-8682</a>
                    </div>
                    <div class="csupper-locationbox">
                        <img src="<?php echo get_theme_file_uri( 'assets/images/icon_message-01.png'); ?>" alt="email-icon">
                        <a class="text-16" href="mailto: windermere@hngrooming.com">windermere@hngrooming.com</a>
                    </div>
                </div>
            </div>
        </section>

    </main>

    
    <?php
get_footer();