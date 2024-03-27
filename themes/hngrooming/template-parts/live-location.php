<?php 
$template = get_field('template');
?>
<main class="overflow-hidden">
    <!--================ brea-section start ================-->
    <section class="brea-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="brea-left">
                        <img src="<?php echo get_theme_file_uri( 'assets/images/h-n-icon.png'); ?>" alt="h-n-icon">
                        <h6 class="text-19">WELCOME TO HAMMER & NAILS</h6>
                        <h1 class="title-xxl2"><?php echo $template['title']; ?></h1>
                        <p class="text-21"><?php echo $template['description']; ?></p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="brea-midle">
                        <img src="<?php echo get_theme_file_uri( 'assets/images/designed.png'); ?>" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="brea-right">
                        <h4 class="title-lg2"><?php echo get_the_title(); ?></h4>
                        <ul>
                            <li>
                                <div class="brea-icon">
                                    <img src="<?php echo get_theme_file_uri( 'assets/images/location.png'); ?>" alt="">
                                </div>
                                <a class="text-18" href="<?php echo get_field('google_map_link'); ?>"><?php echo get_field('address')['address']; ?></a>
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
                                    <?php 
                                    foreach(get_field('hours') as $day){
                                        ?><p lang="text-18"><?php echo $day['day']; ?> <span><?php echo $day['times']; ?></span></p><?php
                                    }
                                    ?>
                                </div>
                            </li>    
                        </ul>
                    </div>
                    <div class="brea-btn">
                        <a href="<?php echo get_field('booking_link'); ?>" class="button">Book Now</a>
                        <a href="<?php echo get_field('membership_link'); ?>" class="button">Purchase a Membership</a>
                        <a href="<?php echo get_field('gift_card_link'); ?>" class="button">Buy a Gift Card</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--================= partner-area ================-->
    <div class="partner-area" style="<?php echo $template['hide_partners'][0]=='1'?'display:none;':'';?>">
        <div class="container">
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

    <!--================= booking-area start ================-->
    <section class="booking-area" style="background-image: url(<?php echo get_theme_file_uri( 'assets/images/booking-banner_1.jpeg' ); ?>);" >
        <img class="d-lg-none" src="<?php echo get_theme_file_uri( 'assets/images/bookbanner-mobile-1.jpg'); ?>" alt="booking-banner_1">
        <div class="booking-main">
            <div class="row">
                <div class="col-lg-6"></div>
                <div class="col-lg-6">
                    <div class="booking-cnt">
                        <h3 class="title-xl">With every experience <br> you can expect….</h3>
                        <p class="text-18">To be greeted by our friendly Member of our concierge team. They will navigate our service offerings with you to design a personalized experience that meets all your grooming needs. </p>
                        <a class="button" href="<?php echo get_field('booking_link'); ?>">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--================= booking-area start ================-->
    <section class="booking-area" style="background-image: url(<?php echo get_theme_file_uri( 'assets/images/booking-banner_2.jpg' ); ?>);">
        <img class="d-lg-none" src="<?php echo get_theme_file_uri( 'assets/images/bookbanner-mobile-2.png'); ?>" alt="booking-banner_2">
        <div class="booking-main">
            <div class="row">
                <div class="col-lg-6"></div>
                <div class="col-lg-6">
                    <div class="booking-cnt">
                        <h3 class="title-xl">Luxury and Discretion</h3>
                        <p class="text-18">Your privacy is our priority. You will receive your own oversized leather chair, big screen tv, and noise cancelling headphones so you can plug in and relax. </p>
                        <a class="button" href="<?php echo get_field('booking_link'); ?>">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--================= booking-area start ================-->
    <section class="booking-area" style="background-image: url(<?php echo get_theme_file_uri( 'assets/images/booking-banner_3.jpg' ); ?>);">
        <img class="d-lg-none" src="<?php echo get_theme_file_uri( 'assets/images/bookbanner-mobile-3.jpg'); ?>" alt="booking-banner_3">
        <div class="booking-main">
            <div class="row">
                <div class="col-lg-6"></div>
                <div class="col-lg-6">
                    <div class="booking-cnt">
                        <h3 class="title-xl">Raise a Glass</h3>
                        <p class="text-18">We’ll have your favorite brew, spirit, or mixed drink waiting for you, with every cut, shave, manicure, or pedicure visit. </p>
                        <a class="button" href="<?php echo get_field('booking_link'); ?>">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--================= booking-area start ================-->
    <section class="booking-area" style="background-image: url(<?php echo get_theme_file_uri( 'assets/images/booking-banner_4.jpg' ); ?>);">
        <img class="d-lg-none" src="<?php echo get_theme_file_uri( 'assets/images/bookbanner-mobile-4.png'); ?>" alt="booking-banner_4">
        <div class="booking-main">
            <div class="row">
                <div class="col-lg-6"></div>
                <div class="col-lg-6">
                    <div class="booking-cnt">
                        <h3 class="title-xl">Opulence You Can Afford </h3>
                        <p class="text-18">We offer world-class luxury experiences, without the pretentious price tag. Relax as our dedicated artists deliver treatments infused with high grade essential oils, aromatherapeutic steamed towels, reflexology and massage. </p>
                        <a class="button" href="<?php echo get_field('booking_link'); ?>">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--================= booking-area start ================-->
    <section class="booking-area" style="background-image: url(<?php echo get_theme_file_uri( 'assets/images/booking-banner_5.jpg' ); ?>);">
        <img class="d-lg-none" src="<?php echo get_theme_file_uri( 'assets/images/bookbanner-mobile-5.png'); ?>" alt="booking-banner_5">
        <div class="booking-main">
            <div class="row">
                <div class="col-lg-6"></div>
                <div class="col-lg-6">
                    <div class="booking-cnt">
                        <h3 class="title-xl">Quality and Craft</h3>
                        <p class="text-18">Here you can say “goodbye” to basic. We equip our licensed artists with advanced education and training, premium tools and products, and sanitation procedures that exceed state board standards, delivering a first-class feeling every time. </p>
                        <a class="button" href="<?php echo get_field('booking_link'); ?>">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--================= booking-area start ================-->
    <section class="booking-area" style="background-image: url(<?php echo get_theme_file_uri( 'assets/images/booking-banner_6.jpg' ); ?>);">
        <img class="d-lg-none" src="<?php echo get_theme_file_uri( 'assets/images/bookbanner-mobile-6.png'); ?>" alt="booking-banner_6">
        <div class="booking-main">
            <div class="row">
                <div class="col-lg-6"></div>
                <div class="col-lg-6">
                    <div class="booking-cnt">
                        <h3 class="title-xl">Tailored Experiences</h3>
                        <p class="text-18">We speak the language of quality. Our expertly trained artists collaborate with you to craft a custom look, enhancing your best features while meeting the needs of your lifestyle. You will be educated on products and routines that ensure you love the way you look and feel. </p>
                        <a class="button" href="<?php echo get_field('booking_link'); ?>">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--================= booking-area start ================-->
    <section class="booking-area" style="background-image: url(<?php echo get_theme_file_uri( 'assets/images/booking-banner_7.jpeg' ); ?>);">
        <img class="d-lg-none" src="<?php echo get_theme_file_uri( 'assets/images/bookbanner-mobile-7.png'); ?>" alt="booking-banner_7">
        <div class="booking-main">
            <div class="row">
                <div class="col-lg-6"></div>
                <div class="col-lg-6">
                    <div class="booking-cnt">
                        <h3 class="title-xl">Escape the Grind</h3>
                        <p class="text-18">A place designed with you in mind, to recharge alone or connect with community and friends. </p>
                        <a class="button" href="<?php echo get_field('booking_link'); ?>">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--================= client-area start ================-->
    <section class="client-area">
        <div class="container">
            <div class="client-heading text-center">
                <h3 class="title-xxl text-center">What Your Buddies Are Saying About Us</h3>
            </div>
            <div class="client-main">
                <div class="owl-carousel carousel1">
                    <div class="client-item">
                        <div class="review-box">
                            <ul class="d-flex align-items-center">
                                <li><img src="<?php echo get_theme_file_uri( 'assets/images/star.svg'); ?>" alt="star"></li>
                                <li><img src="<?php echo get_theme_file_uri( 'assets/images/star.svg'); ?>" alt="star"></li>
                                <li><img src="<?php echo get_theme_file_uri( 'assets/images/star.svg'); ?>" alt="star"></li>
                                <li><img src="<?php echo get_theme_file_uri( 'assets/images/star.svg'); ?>" alt="star"></li>
                                <li><img src="<?php echo get_theme_file_uri( 'assets/images/star.svg'); ?>" alt="star"></li>
                            </ul>
                            <p class="text-16">“I just moved here and found this place on Google. I read a few reviews and decided to take the chance. I'm glad I did! The staff is extremely professional and skilled. There is no doubt that they take customer satisfaction to the upper limit. I HIGHLY RECOMMEND THIS PLACE. I'm picky about my hair and brows, and I'll never worry about that again as long as I keep coming here. WORTH EVERY PENNY.”</p>
                        </div>
                        <div class="client-bottom d-flex align-items-center">
                            <div class="client-profile">
                                <img src="<?php echo get_theme_file_uri( 'assets/images/client-1.png'); ?>" alt="">
                            </div>
                            <p class="text-20">Nick </p>
                        </div>
                    </div>
                    <div class="client-item">
                        <div class="review-box">
                            <ul class="d-flex align-items-center">
                                <li><img src="<?php echo get_theme_file_uri( 'assets/images/star.svg'); ?>" alt="star"></li>
                                <li><img src="<?php echo get_theme_file_uri( 'assets/images/star.svg'); ?>" alt="star"></li>
                                <li><img src="<?php echo get_theme_file_uri( 'assets/images/star.svg'); ?>" alt="star"></li>
                                <li><img src="<?php echo get_theme_file_uri( 'assets/images/star.svg'); ?>" alt="star"></li>
                                <li><img src="<?php echo get_theme_file_uri( 'assets/images/star.svg'); ?>" alt="star"></li>
                            </ul>
                            <p class="text-16">“I loved this place. First time ever going. I never had a manicure before but decided to give it a try. It's now in the monthly budget. I can't wait to go back. Definitely recommend!”</p>
                        </div>
                        <div class="client-bottom d-flex align-items-center">
                            <div class="client-profile">
                                <img src="<?php echo get_theme_file_uri( 'assets/images/client-2.png'); ?>" alt="">
                            </div>
                            <p class="text-20">Cory  </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--================= specialist-area start ================-->
    <section class="specialist-area">
        <div class="container">
            <div class="specialist-heading text-center pb-3">
                <h3 class="title-xxl text-center">Our Specialties</h3>
            </div>
            <div class="carts-title">
                <h4 class="title-xl2">Cut & Shave</h4>
                <img src="<?php echo get_theme_file_uri( 'assets/images/nail-min.png'); ?>" alt="pin">
            </div>
            <div class="specialist-main">
                <div class="gallery-left">
                    <div class="gallery-item1">
                        <a href="images/gallery-1.webp" data-fancybox="gallery" data-caption="gallery #1">
                            <img src="<?php echo get_theme_file_uri( 'assets/images/gallery-1.jpg'); ?>" alt="gallery">
                        </a>
                    </div>
                    <div class="gallery-item2">
                        <a href="images/gallery-2.webp" data-fancybox="gallery" data-caption="gallery #2">
                            <img src="<?php echo get_theme_file_uri( 'assets/images/gallery-2.png'); ?>" alt="gallery">
                        </a>
                    </div>
                </div>
                <div class="gallery-right">
                    <div class="gallery-rightinner">
                        <div class="gallery-item3">
                            <a href="images/gallery-3.webp" data-fancybox="gallery" data-caption="gallery #3">
                                <img src="<?php echo get_theme_file_uri( 'assets/images/gallery-3.jpg'); ?>" alt="gallery">
                            </a>
                        </div>
                        <div class="gallery-item4">
                            <a href="images/gallery-4.webp" data-fancybox="gallery" data-caption="gallery #4">
                                    <img src="<?php echo get_theme_file_uri( 'assets/images/gallery-4.png'); ?>" alt="gallery">
                            </a>
                        </div>
                        <div class="gallery-item7">
                            <a href="images/gallery-5.webp" data-fancybox="gallery" data-caption="gallery #5">
                                <img src="<?php echo get_theme_file_uri( 'assets/images/gallery-7.jpg'); ?>" alt="gallery">
                            </a>
                        </div>
                    </div>
                    <div class="gallery-rightinner2">
                        <div class="gallery-rightinner3">
                            <div class="gallery-item5">
                                <a href="images/gallery-6.webp" data-fancybox="gallery" data-caption="gallery #6">
                                    <img src="<?php echo get_theme_file_uri( 'assets/images/gallery-5.jpg'); ?>" alt="gallery">
                                </a>
                            </div>
                            <div class="gallery-item6">
                                <a href="images/gallery-7.webp" data-fancybox="gallery" data-caption="gallery #7">
                                    <img src="<?php echo get_theme_file_uri( 'assets/images/gallery-6.png'); ?>" alt="gallery">
                                </a>
                            </div>
                        </div> 
                        <div class="gallery-rightinner4">
                            <div class="gallery-item8">
                                <a href="images/gallery-8.webp" data-fancybox="gallery" data-caption="gallery #8">
                                    <img src="<?php echo get_theme_file_uri( 'assets/images/gallery-8.png'); ?>" alt="gallery">
                                </a>                                    
                            </div>
                            <div class="gallery-item9">
                                <a href="images/gallery-9.webp" data-fancybox="gallery" data-caption="gallery #9">
                                    <img src="<?php echo get_theme_file_uri( 'assets/images/gallery-9.jpg'); ?>" alt="gallery">
                                </a>                                    
                            </div>
                        </div>
                    </div>    
                </div>                    
            </div>
            <div class="carts-title">
                <h4 class="title-xl2">Hand & Foot Grooming</h4>
                <img src="<?php echo get_theme_file_uri( 'assets/images/nail-min.png'); ?>" alt="pin">
            </div>
            <div class="specialist-main2">
                <div class="gallery2-left">
                    <div class="gallery2-leftinner1">
                        <div class="gallery2-item1">
                            <a href="images/gallery2-1.webp" data-fancybox="gallery2" data-caption="gallery #1">
                                <img src="<?php echo get_theme_file_uri( 'assets/images/gallery2-1.jpg'); ?>" alt="gallery">
                            </a>
                        </div>
                        <div class="gallery2-item2">
                            <a href="images/gallery2-2.webp" data-fancybox="gallery2" data-caption="gallery #2">
                                <img src="<?php echo get_theme_file_uri( 'assets/images/gallery2-2.jpg'); ?>" alt="gallery">
                            </a>
                        </div>
                    </div>
                    <div class="gallery2-leftinner2">
                        <div class="gallery2-item3">
                            <a href="images/gallery2-3.webp" data-fancybox="gallery2" data-caption="gallery #3">
                                <img src="<?php echo get_theme_file_uri( 'assets/images/gallery2-3.jpg'); ?>" alt="gallery">
                            </a>
                        </div>
                        <div class="gallery2-item4">
                            <a href="images/gallery2-4.webp" data-fancybox="gallery2" data-caption="gallery #4">
                                    <img src="<?php echo get_theme_file_uri( 'assets/images/gallery2-4.jpg'); ?>" alt="gallery">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="gallery2-right">
                    <div class="gallery2-rightinner1">
                        <div class="gallery2-item5">
                            <a href="images/gallery2-5.webp" data-fancybox="gallery2" data-caption="gallery #5">
                                <img src="<?php echo get_theme_file_uri( 'assets/images/gallery2-5.png'); ?>" alt="gallery">
                            </a>
                        </div>
                        <div class="gallery2-item6">
                            <a href="images/gallery2-6.webp" data-fancybox="gallery2" data-caption="gallery #6">
                                <img src="<?php echo get_theme_file_uri( 'assets/images/gallery2-6.jpg'); ?>" alt="gallery">
                            </a>
                        </div>
                    </div>
                    <div class="gallery2-rightinner2">
                        <div class="gallery2-rightinner3">
                            <div class="gallery2-item7">
                                <a href="images/gallery2-7.webp" data-fancybox="gallery2" data-caption="gallery #7">
                                    <img src="<?php echo get_theme_file_uri( 'assets/images/gallery2-7.jpg'); ?>" alt="gallery">
                                </a>
                            </div>
                            <div class="gallery2-item8">
                                <a href="images/gallery2-8.webp" data-fancybox="gallery2" data-caption="gallery #8">
                                    <img src="<?php echo get_theme_file_uri( 'assets/images/gallery2-8.png'); ?>" alt="gallery">
                                </a>                                    
                            </div>
                        </div> 
                        <div class="gallery2-rightinner4">
                            <div class="gallery2-item9">
                                <a href="images/gallery2-9.webp" data-fancybox="gallery2" data-caption="gallery #9">
                                    <img src="<?php echo get_theme_file_uri( 'assets/images/gallery2-9.png'); ?>" alt="gallery">
                                </a>                                    
                            </div>
                        </div>
                    </div>    
                </div>                    
            </div>
        </div>
    </section>

    <!--================= faq-area start ================-->
    <section class="faq-area">
        <div class="container">
            <div class="faq-heading text-center">
                <h3 class="title-xxl text-center">Frequently Asked Questions</h3>
            </div>
            <div class="faq-main">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="faq-left">
                            <img src="<?php echo get_theme_file_uri( 'assets/images/faq-brush.png'); ?>" alt="faq-brush" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="faq-right">
                            <div class="accordion-item">
                                <div class="accordion-title">
                                    <h4 class="text-21">DO I NEED AN APPOINTMENT? </h4>
                                    <img class="plus" src="<?php echo get_theme_file_uri( 'assets/images/plus-solid.svg'); ?>" alt="plus-icon">
                                    <img class="minus" src="<?php echo get_theme_file_uri( 'assets/images/minus-solid.svg'); ?>" alt="minus-icon">
                                </div>
                                <div class="accordion-inner">
                                    <p class="text-16">Appointments are not required to receive services, but they are highly recommended. Walk-ins are always welcomed where our schedule allows, but we cannot guarantee availability without an appointment. We recommend calling ahead to ensure we can see at your ideal time and book you for the services that best fit your needs.</p>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-title">
                                    <h4 class="text-21">DO I HAVE TO BE A MEMBER OF THE GROOMING CLUB TO COME IN? </h4>
                                    <img class="plus" src="<?php echo get_theme_file_uri( 'assets/images/plus-solid.svg'); ?>" alt="plus-icon">
                                    <img class="minus" src="<?php echo get_theme_file_uri( 'assets/images/minus-solid.svg'); ?>" alt="minus-icon">
                                </div>
                                <div class="accordion-inner">
                                    <p class="text-16">You do not need to be a member to receive our services. Many of our guests choose to become members because they save money while enjoying exclusive perks and discounts on services, products, and more. Click Here to learn more about the benefits of being part of the club.</p>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-title">
                                    <h4 class="text-21">WHY DO I NEED TO SUBMIT A CREDIT CARD TO RESERVE AN APPOINTMENT? </h4>
                                    <img class="plus" src="<?php echo get_theme_file_uri( 'assets/images/plus-solid.svg'); ?>" alt="plus-icon">
                                    <img class="minus" src="<?php echo get_theme_file_uri( 'assets/images/minus-solid.svg'); ?>" alt="minus-icon">
                                </div>
                                <div class="accordion-inner">
                                    <p class="text-16">You will not be charged for a service at the time of booking an appointment. We require a card on file in our secure encrypted system per our cancellation policy. We understand life happens and it can sometimes be tricky to plan your schedule in advance. </p>
                                    <p class="text-16">We will always confirm your future appointments the day before your service to ensure you still wish to receive this appointment. If you can no longer keep your original appointment time, we ask that you cancel at least 8 hours before your appointment, to prevent a cancellation fee of up to 50%.  </p>
                                    <p class="text-16">Appointments that are missed with no notice, may be charged up to 100% of the service price. Because our concept is appointment based, our cancellation policy helps us better respect your time and that of our other guests. </p>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-title">
                                    <h4 class="text-21">IS AN ALCOHOLIC BEVERAGE INCLUDED WITH EACH SERVICE? </h4>
                                    <img class="plus" src="<?php echo get_theme_file_uri( 'assets/images/plus-solid.svg'); ?>" alt="plus-icon">
                                    <img class="minus" src="<?php echo get_theme_file_uri( 'assets/images/minus-solid.svg'); ?>" alt="minus-icon">
                                </div>
                                <div class="accordion-inner">
                                    <p class="text-16">We offer refreshments to all our guests. A complimentary alcoholic beverage is included with every visit only for our members and first-time guests. In some locations, additional alcoholic beverages may be available for purchase, however it is subject to state laws and may vary by location. Please contact your local Hammer & Nails for specific policies.</p>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-title">
                                    <h4 class="text-21">WHO IS WELCOME IN THE SHOP? </h4>
                                    <img class="plus" src="<?php echo get_theme_file_uri( 'assets/images/plus-solid.svg'); ?>" alt="plus-icon">
                                    <img class="minus" src="<?php echo get_theme_file_uri( 'assets/images/minus-solid.svg'); ?>" alt="minus-icon">
                                </div>
                                <div class="accordion-inner">
                                    <p class="text-16">We are proud to serve all members of our community. Our concept was founded with men in mind, but everyone is welcome in our shop. Please be aware that we only offer natural nail services and do not offer nail polish or enhancements.</p>
                                </div>
                            </div>                             
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--================= service-area2 start ================-->
    <section class="service-area service-area2">
        <div class="container">
            <div class="service-upperitem text-center">
                <h3 class="title-xxl">Our Services</h3>
            </div>
            <?php 

 
            $cats = get_categories(array(
                'taxonomy' => 'service_types',
                'orderby'        => 'ID',
                'order'   => 'ASC'
            ));

            $title_arr = array(
                'classic-services'=>'THE CLASSIC',
                'luxe-treatments'=>'Luxe Treatments',
                'premium-combo-treatments'=>'PREMIUM COMBO TREATMENTS',
                'premium-services'=>'THE PREMIUM',
            );

            $service_pricing = get_field('location_services');
            $price_by_id = array();

            foreach($service_pricing as $pricing){
                $price_by_id[(int)$pricing['service_id']] = $pricing;
            }

            foreach($cats as $cat){
                $cat_services = get_posts(array(
                    'post_type'=>'service',
                    'post_status'=>'published',
                    'posts_per_page'=>-1,
                    'orderby' => 'publish_date',
                    'order' => 'ASC',
                    'tax_query' => array(
                        array (
                            'taxonomy'=>'service_types',
                            'field' => 'slug',
                            'terms' => $cat->slug,
                        )
                    ),
                ));
                ?>
                <div class="service-wrappart">
                    <div class="carts-title mt-0">
                        <h4 class="title-xl2 "><?php echo $title_arr[$cat->slug]; ?></h4>
                        <img src="<?php echo get_theme_file_uri( 'assets/images/nail-min.png'); ?>" alt="">
                    </div>
                    <?php if($cat->slug=='premium-combo-treatments'){ ?>
                        <div class="premium-subtitle">
                            <p class="text-16">All Premium Treatments include a MANicure & Pedicure*</p>
                        </div>
                    <?php } ?>
                    <div class="service-wraprow">
                        <?php 
                        foreach($cat_services as $service){
                            
                            
                            ?>  
                            <div class="service-wrapbox">
                                <h4 class="title-lg3"><?php echo $service->post_title; ?></h4>
                                <h5 class="text-17">Non-Member $<?php echo $price_by_id[$service->ID]['non_member_price']; ?> <i>|</i> <span>Member $<?php echo $price_by_id[$service->ID]['member_price']; ?></span></h5>
                                <?php echo $service->post_content; ?>
                            </div>
                            <?php 
                        }
                        
                        ?>
                    </div>
                </div>
                <?php
            }
            ?>               
        </div>
    </section>

</main>