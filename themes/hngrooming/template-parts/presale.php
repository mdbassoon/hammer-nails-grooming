<?php 
$presale = get_field('presale');
?>
<main class="overflow-hidden">

    <!--================ brea-section start ================-->
    <?php 
    $top = $presale['top'];
    ?>
    <section class="brea-section" id="top-section">
        <div class="container">
            <div class="row align-items-center csgreen-mainrow">
                <div class="col-xl-4 col-lg-6">
                    <div class="brea-left csopen-cnt">
                        <h1 class="title-lg"><span>Opening</span> <?php echo $top['opens']; ?></h1>
                        <p class="text-21"><?php echo $top['description']; ?></p>
                        <a href="#">
                            <img src="<?php echo $top['icon']; ?>" alt="<?php echo $top['icon']; ?>">
                        </a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="brea-midle">
                        <img src="<?php echo $top['background_image']; ?>" alt="">
                    </div>
                </div>
                <div class="col-xl-4 col-lg-12">
                    <div class="csgreen-right">
                        <div class="csgreen-upper text-center">
                            <img src="<?php echo get_theme_file_uri( 'assets/images/h-n-icon.png'); ?>" alt="">
                            <h6 class="text-16">Hammer & Nails <br><?php echo get_the_title(); ?></h6>
                            <h4 class="title-xl3"><?php echo $top['form_title']; ?></h4>
                            <p class="text-16"><?php echo $top['form_description']; ?> </p>
                        </div>
                        <?php echo do_shortcode($top['form_shortcode']); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--================ founding-area start ================-->
    <?php $memberships = $presale['memberships']; ?>
    <section class="founding-area">
        <div class="container">
            <div class="founding-upper text-center">
                <h2 class="title-xxl"><?php echo $memberships['title']; ?></h2>
                <p class="text-20"><?php echo $memberships['description']; ?></p>
            </div>
            <div class="founding-main">
                <?php 
                $membership_info = $memberships['membership_info'];
                $classes = array('founding-firstbox','founding-mdlbox','founding-lastbox');
                foreach($membership_info as $i=>$membership){
                    ?>
                    <div class="founding-box <?php echo $classes[$i]; ?>">
                        <h3 class="title-xl"><?php echo $membership['membership_type']; ?></h3>
                        <h6 class="title-sm"><del>$<?php echo $membership['full_price']; ?></del> per month</h6>
                        <h4 class="title-lg3"><small class="text-20">$</small><?php echo $membership['discount_price']; ?></h4>
                        <p class="text-20"> per month </p>
                        <ul>
                            <?php 
                            foreach($membership['features'] as $feature){
                                ?>                          
                                <li class="text-16"><?php echo $feature['feature']; ?></li>  
                                <?php
                            }
                            ?>
                        </ul>
                    </div>
                    <?php
                }
                ?>
            </div>
            <div class="founding-bottombox">
                <p class="text-20">*One time only with purchase of Founding Membership <br> **Redeemable only after first payment</p>
            </div>
        </div>
        <div class="benefit-item">
            <div class="container">
                <div class="benefit-inner csmember-greenbox">
                    <div class="benefit-inner2">
                        <h3 class="title-xl3 text-center">Membership Benefits</h3>
                        <ul>
                            <?php 
                            foreach($memberships['benefits'] as $benefit){
                                ?><li class="text-21"><span><img src="<?php echo get_theme_file_uri( 'assets/images/choose-icon-01.png'); ?>" alt=""></span><?php echo $benefit['benefit']; ?></li><?php
                            } ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="claimfree-btn text-center">
                <a href="#top-section" class="button mx-auto">Claim My Free Service</a>
            </div>
        </div>
    </section>

    <!--================= partner-area ================-->
    <div class="partner-area" style="<?php echo $presale['partners']['hide_partners'][0]=='1'?'display:none;':'';?>">
        <div class="container">
            <div class="partner-feature2 text-center">
                <h4 class="title-lg2">featured on</h4>
            </div>
            <div class="partner-main d-flex align-items-center justify-content-around">
                <div class="partner-logo">
                    <img src="<?php echo get_theme_file_uri( 'assets/images/partner-1.png'); ?>" alt="partner-logo">
                </div>
                <div class="partner-logo">
                    <img src="<?php echo get_theme_file_uri( 'assets/images/partner-2.png'); ?>" alt="partner-logo">
                </div>
                <div class="partner-logo">
                    <img src="<?php echo get_theme_file_uri( 'assets/images/partner-3.png'); ?>" alt="partner-logo">
                </div>
                <div class="partner-logo">
                    <img src="<?php echo get_theme_file_uri( 'assets/images/partner-4.png'); ?>" alt="partner-logo">
                </div>
                <div class="partner-logo">
                    <img src="<?php echo get_theme_file_uri( 'assets/images/partner-5.png'); ?>" alt="partner-logo">
                </div>
            </div>
        </div>
    </div>

    <!--================= expect-area2 ================-->
    <section class="expect-area2" style="<?php echo $presale['experience']['hide_experience'][0]=='1'?'display:none;':'';?>>
        <div class="container">
            <div class="expect-upper text-center">
                <h3 class="title-xxl">With Every Hammer & Nails <span>Experience You Can Expect</span></h3>
            </div>
            <div class="expect2-main">
                <div class="expect2-part" style="background-image: url(<?php echo get_theme_file_uri( 'assets/images/expect-desktop_1.jpg' ); ?>);">
                    <img class="d-lg-none" src="<?php echo get_theme_file_uri( 'assets/images/expect-mobile_1.jpg'); ?>" alt="expect-banner_1">
                    <div class="booking-main">
                        <div class="row">
                            <div class="col-lg-6"></div>
                            <div class="col-lg-6">
                                <div class="booking-cnt">
                                    <h3 class="title-xl">A WARM WELCOME</h3>
                                    <p class="text-18">You'll be greeted by a Member of our friendly Concierge Team that will help give you a lay of the land.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="expect2-part" style="background-image: url(<?php echo get_theme_file_uri( 'assets/images/expect-desktop_2.jpg' ); ?>);">
                    <img class="d-lg-none" src="<?php echo get_theme_file_uri( 'assets/images/expect-mobile_2.jpg'); ?>" alt="expect-banner_2">
                    <div class="booking-main">
                        <div class="row">
                            <div class="col-lg-6 ">
                                <div class="booking-cnt ps-lg-5 ms-xl-4">
                                    <h3 class="title-xl">LUXURY DETAILS WITH <br> EVERY EXPERIENCE</h3>
                                    <p class="text-18">Sink into our oversized leather chairs in our separate Hand & Foot room with noise cancelling headphones and your own TV. Enjoy luxury finishing details in our Cut & Shave room leaving you ready to tackle your day.</p>
                                </div>
                            </div>
                            <div class="col-lg-6"></div>
                        </div>
                    </div>
                </div>

                <div class="expect2-part" style="background-image: url(<?php echo get_theme_file_uri( 'assets/images/expect-desktop_3.jpg') ; ?>);">
                    <img class="d-lg-none" src="<?php echo get_theme_file_uri( 'assets/images/expect-mobile_3.jpg'); ?>" alt="expect-banner_3">
                    <div class="booking-main">
                        <div class="row">
                            <div class="col-lg-6"></div>
                            <div class="col-lg-6">
                                <div class="booking-cnt">
                                    <h3 class="title-xl">Raise a Glass</h3>
                                    <p class="text-18">We’ll have your favorite brew, spirit, or mixed drink waiting for you, with every cut, shave, manicure, or pedicure visit. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="expect2-part" style="background-image: url(<?php echo get_theme_file_uri( 'assets/images/expect-desktop_4.jpg' ); ?>);">
                    <img class="d-lg-none" src="<?php echo get_theme_file_uri( 'assets/images/expect-mobile_4.png'); ?>" alt="expect-banner_4">
                    <div class="booking-main">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="booking-cnt ps-lg-5 ms-xl-4">
                                    <h3 class="title-xl">Opulence You Can Afford</h3>
                                    <p class="text-18">We offer world-class luxury experiences, without the pretentious price tag. Relax as our dedicated artists deliver treatments infused with high grade essential oils, aromatherapeutic steamed towels, reflexology and massage. </p>
                                    <h5 class="text-18">Click below to explore our services options</h5>
                                    <a href="#" class="button mx-auto">Services</a>
                                </div>
                            </div>
                            <div class="col-lg-6"></div>
                        </div>
                    </div>
                </div>

                <div class="expect2-part" style="background-image: url(<?php echo get_theme_file_uri( 'assets/images/expect-desktop_5.jpg' ); ?>);">
                    <img class="d-lg-none" src="<?php echo get_theme_file_uri( 'assets/images/expect-mobile_5.jpg'); ?>" alt="expect-banner_5">
                    <div class="booking-main">
                        <div class="row">
                            <div class="col-lg-6"></div>
                            <div class="col-lg-6">
                                <div class="booking-cnt">
                                    <h3 class="title-xl">Quality and Craft</h3>
                                    <p class="text-18">Here you can say “goodbye” to basic. We equip our licensed Artists with advanced education and training, premium tools and products, and sanitation procedures that exceed state board standards, delivering a first-class feeling every time. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="expect2-part" style="background-image: url(<?php echo get_theme_file_uri( 'assets/images/expect-desktop_6.jpg' ); ?>);">
                    <img class="d-lg-none" src="<?php echo get_theme_file_uri( 'assets/images/expect-mobile_6.jpg'); ?>" alt="expect-banner_6">
                    <div class="booking-main">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="booking-cnt ps-lg-5 ms-xl-4">
                                    <h3 class="title-xl">Tailored Experiences</h3>
                                    <p class="text-18">We speak the language of quality. Our expertly trained Artists collaborate with you to craft a custom look, enhancing your best features while meeting the needs of your lifestyle. You will be educated on products and routines that ensure you love the way you look and feel. </p>
                                </div>
                            </div>
                            <div class="col-lg-6"></div>
                        </div>
                    </div>
                </div>

                <div class="expect2-part" style="background-image: url(<?php echo get_theme_file_uri( 'assets/images/expect-desktop_7.jpg' ); ?>);">
                    <img class="d-lg-none" src="<?php echo get_theme_file_uri( 'assets/images/expect-mobile_7.jpg'); ?>" alt="expect-banner_7">
                    <div class="booking-main">
                        <div class="row">
                            <div class="col-lg-6"></div>
                            <div class="col-lg-6">
                                <div class="booking-cnt">
                                    <h3 class="title-xl">Escape the Grind</h3>
                                    <p class="text-18">A place designed with you in mind, to recharge alone or connect with community and friends.  </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="freeserv-btn">
                    <a href="#top-section" class="button mx-auto">Claim My Free Service</a>
                </div>
            </div>  
        </div>
    </section>

    <section class="location-greenarea2">
        <div class="container">
            <div class="location2-greenupper2 text-center">
                <h3 class="title-xxl">Our Location</h3>
            </div>
            <div class="location-greenmain2">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="location-greenleft">
                            <iframe src="<?php echo get_field('google_map_iframe');  ?>" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="location-greenright">
                            <div class="brea-right p-0">
                                <h4 class="title-xl3 text-center mb-5"><?php echo get_the_title(); ?></h4>
                                <ul>
                                    <li>
                                        <div class="brea-icon">
                                            <img src="<?php echo get_theme_file_uri( 'assets/images/location.png'); ?>" alt="">
                                        </div>
                                        <a class="text-18" href="<?php echo get_field('google_maps_link'); ?>"><?php echo get_field('address')['address']; ?></a>
                                    </li>
                                    <li>
                                        <div class="brea-icon">
                                            <img src="<?php echo get_theme_file_uri( 'assets/images/tel.png'); ?>" alt="">
                                        </div>
                                        <a class="text-18" href="tel: <?php echo get_field('address')['phone']; ?>"> <?php echo get_field('address')['phone']; ?></a>
                                    </li>
                                    <li>
                                        <div class="brea-icon">
                                            <img src="<?php echo get_theme_file_uri( 'assets/images/email.png'); ?>" alt="">
                                        </div>
                                        <a class="text-18" href="mailto: <?php echo get_field('address')['email']; ?>"> <?php echo get_field('address')['email']; ?></a>
                                    </li>
                                    <li>
                                        <div class="brea-icon">
                                            <img src="<?php echo get_theme_file_uri( 'assets/images/tm-icon.png'); ?>" alt="">
                                        </div>
                                        <div class="bre-schedule">
                                            <?php foreach(get_field('hours') as $day){
                                                ?><p lang="text-18"><?php echo $day['day']; ?> <span><?php echo $day['times']; ?></span></p><?php
                                            } ?>
                                        </div>
                                    </li>    
                                </ul>
                            </div>
                            <div class="locatgreen-social d-flex">
                                <?php 
                                    $social = get_field('social_links');
                                    $social_icons = array(
                                        'facebook'=>get_theme_file_uri( 'assets/images/facebook.svg'),
                                        'instagram'=>get_theme_file_uri( 'assets/images/instagram.svg'),
                                        'linkedin'=>get_theme_file_uri( 'assets/images/linkedin.svg'),
                                    );
                                    foreach($social as $social_link){ ?>
                                        <a href="<?php echo $social_link['link']; ?>">
                                            <img class="<?php echo $social_link['name']; ?>" src="<?php echo $social_icons[$social_link['name']]; ?>" alt="<?php echo $social_link['name']; ?>">
                                        </a>
                                    <?php
                                    }
                                ?>
                            </div>
                            <div class="brea-btn">
                                <a href="#top-section" class="button mx-auto">Claim My Free Service</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>