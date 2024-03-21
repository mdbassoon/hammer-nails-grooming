<main class="overflow-hidden comingsoon-wrapper">
<?php 
$data = get_field('coming_soon');

$coming_soon = $data['coming_soon'];
?>
<!--================= comming-area ================-->

<section class="comming-area">
    <div class="container">
        <div class="csmain-part">
            <div class="csupper-cnt text-center">
                <h6 class="text-16">Hammer and Nails - <?php echo get_the_title(); ?> </h6>
                <h1 class="title-xxl">Coming Soon</h1>
                <p class="text-16"><?php echo $coming_soon['description']; ?></p>
            </div>
            <?php echo do_shortcode($coming_soon['form']); ?>
            <div class="csupper-location">
                <div class="csupper-locationbox">
                    <img src="<?php echo get_theme_file_uri( 'assets/images/icon_loction-01.png'); ?>" alt="location-icon">
                    <a class="text-16" href="#"><?php echo get_field('address')['address']; ?></a>
                </div>
                <div class="csupper-locationbox">
                    <img src="<?php echo get_theme_file_uri( 'assets/images/icon_phone-01.png'); ?>" alt="phone-icon">
                    <a class="text-16" href="tel: <?php echo get_field('address')['phone']; ?>"><?php echo get_field('address')['phone']; ?></a>
                </div>
                <div class="csupper-locationbox">
                    <img src="<?php echo get_theme_file_uri( 'assets/images/icon_message-01.png'); ?>" alt="email-icon">
                    <a class="text-16" href="mailto: <?php echo get_field('address')['email']; ?>"><?php echo get_field('address')['email']; ?></a>
                </div>
            </div>
            <div class="cssocial-icon">
                <ul class="d-flex align-items-center justify-content-center">
                    <?php 
                        $social = get_field('social_links');
                        $social_icons = array(
                            'facebook'=>get_theme_file_uri( 'assets/images/facebook.svg'),
                            'instagram'=>get_theme_file_uri( 'assets/images/instagram.svg'),
                            'linkedin'=>get_theme_file_uri( 'assets/images/linkedin.svg'),
                        );
                        foreach($social as $social_link){ ?>
                            <li><a href="<?php echo $social_link['link']; ?>"><img class="<?php echo $social_link['name']; ?>" src="<?php echo $social_icons[$social_link['name']]; ?>" alt="<?php echo $social_link['name']; ?>"></a></li>
                        <?php
                        }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</section>

<!--================= experience-area ================-->
<?php 
$experience = $data['experience'];
?>
<section class="experince-area">
    <div class="container">
        <div class="experience-upper text-center">
            <h2 class="title-xl"><?php echo $experience['title']; ?></h2>
            <p class="text-16"><?php echo $experience['description']; ?></p>
        </div>
       <div class="experience-main">
           <div class="row">
               <?php 
                foreach($experience['gallery'] as $i=>$image){
                    ?>
                    <div class="col-6 col-md-4 d-none d-md-block">
                        <div class="experience-item <?php echo $i==1?'expmiddle':''; ?>">
                            <img src="<?php echo $image['image']; ?>" alt="<?php echo $image['image']; ?>">
                        </div>
                    </div>
                    <?php
                }
               ?>
           </div>
       </div>
    </div>
</section>

<!--================= choose-area ================-->
<?php 
$membership = $data['membership'];
?>
<section class="choose-area membership-bg">
    <div class="container">
        <div class="choose-item text-center membership-upper">
            <h2 class="title-xl"><?php echo $membership['title']; ?></h2>
            <p class="text-16"><?php echo $membership['description']; ?></p>
        </div>
        <div class="row justify-content-center membership-main">
            <?php 
            $titles = array('Classic Club','VIP Club','Club Luxe');
            $i=0;
            foreach($membership['plans'] as $plan){
                ?>
                <div class="col-md-6 col-lg-4">
                    <div class="choose-item2">
                        <div class="choose-inner">
                            <?php 
                            if($i==2){ ?>
                                <div class="choose-inner2">
                                    <h4 class="text-18">Best Experience</h4>
                                </div>
                            <?php } ?>
                        </div>
                        <h3 class="title-xl4"><?php echo $titles[$i]; ?></h3>
                        <ul>
                            <?php 
                                foreach($plan as $feature){
                                    ?>
                                    <li class="text-16"><span><img src="<?php echo get_theme_file_uri( 'assets/images/choose-icon-01.png'); ?>" alt=""></span><?php echo $feature['features']; ?></li>
                                    <?php
                                }
                            ?>
                        </ul>
                    </div>
                </div>
                <?php
                $i++;
            }
            ?>
        </div>
    </div>
    <div class="benefit-item mt-0">
        <div class="container">
            <div class="benefit-inner benefit-main">
                <h3 class="title-xl4 text-center">Membership Benefits</h3>
                <ul>
                    <?php 
                    foreach($membership['benefits'] as $benefit){
                        ?>
                    <li class="text-16"><span><img src="<?php echo get_theme_file_uri( 'assets/images/choose-icon-01.png'); ?>" alt=""></span><?php echo $benefit['benefit']; ?></li>                        
                        <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</section>

<!--================ csbottom-area start ================-->
<?php 
$contact = $data['contact'];
?>
<section class="csbottom-area">
    <div class="container">
        <div class="service-upperitem text-center">
            <h1 class="title-xl">Our Services</h1>
            <ul>
                <li><a href="/service#classic" class="button" data-scroll="#classic">CLASSIC</a></li>
                <li><a href="/service#premium" class="button" data-scroll="#premium">PREMIUM</a></li>
                <li><a href="/service#luxe-treatment" class="button" data-scroll="#luxe-treatment">LUXE TREATMENTS</a></li>
            </ul>
        </div>
        <div class="cscontact-part">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="cscontact-item">
                        <img src="<?php echo $contact['image']; ?>" alt="question_bg">
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="cscontact-cnt">
                        <h4 class="title-xl">Have Qestions? <br>Call Us At <a href="tel: <?php echo get_field('address')['phone']; ?>"><?php echo get_field('address')['phone']; ?></a></h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="csbottom-location csupper-location">
            <div class="csupper-locationbox">
                <img src="<?php echo get_theme_file_uri( 'assets/images/icon_loction-01.png'); ?>" alt="location-icon">
                <a class="text-16" href="#"><?php echo get_field('address')['address']; ?></a>
            </div>
            <div class="csupper-locationbox">
                <img src="<?php echo get_theme_file_uri( 'assets/images/icon_phone-01.png'); ?>" alt="phone-icon">
                <a class="text-16" href="tel: <?php echo get_field('address')['phone']; ?>"><?php echo get_field('address')['phone']; ?></a>
            </div>
            <div class="csupper-locationbox">
                <img src="<?php echo get_theme_file_uri( 'assets/images/icon_message-01.png'); ?>" alt="email-icon">
                <a class="text-16" href="mailto: <?php echo get_field('address')['email']; ?>"><?php echo get_field('address')['email']; ?></a>
            </div>
        </div>
    </div>
</section>

</main>