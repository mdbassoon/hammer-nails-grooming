<?php
/**
 * Template Name: Careers
 *
 * @package WordPress
 */
get_header();
?>


    <main class="overflow-hidden">

        <!--================ career-section start ================-->
        <!-- <div class="career-section">
            <div class="career-overlay">
                <div class="container">
                    <div class="career-btn text-center">
                        <a href="#" class="button mx-auto">Join Our Team</a>
                    </div>
                </div>
            </div>
        </div> -->

        <!--================ join-area start ================-->
        <section class="join-area">
            <div class="join-inner">
                <div class="container">
                    <div class="join-upper text-center">
                        <h6 class="title-lg4">Hammer & Nails Is Where Artists Provide The Best Services In The Ultimate Environment.</h6>
                        <h1 class="title-xxl">Join Our Team</h1>
                    </div>
                    <div class="join-cnt">
                        <p class="text-16">At Hammer & Nails, we are proud of our culture and world-class environment that we have designed for you and our customers. We know that the ultimate customer experience can only be accomplished by attracting and retaining the very best talent. With that in mind, we provide a comfortable environment with the best tools and supplies to use at our shop for all our Artists.</p>
                        <div class="row">
                            <div class="col-md-6">
                                <ul>
                                    <li class="text-16">Competitive Compensation & Commissions</li>
                                    <li class="text-16">Room for Growth & Relocation</li>
                                    <li class="text-16">Flexible Work Schedule</li>
                                    <li class="text-16">Ongoing Training & Development</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul>
                                    <li class="text-16">All Tools & Products are provided for your use in the shop</li>
                                    <li class="text-16">Our Exclusive Hattori Hanzo Partnership</li>
                                    <li class="text-16">Steady Client Base</li>
                                </ul>
                            </div>
                        </div>
                        <div class="join-btn pt-5 mt-3">
                            <a href="#" class="button mx-auto">Apply Today</a>
                        </div>
                        <div class="apply-form">
                            <?php echo do_shortcode('[gravityform id="4"]'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--================ win-area start ================-->
        <section class="win-area">
            <div class="container">
                <div class="win-upper text-center">
                    <h6 class="title-lg4">HAMMER & NAILS</h6>
                    <h3 class="title-xxl">Where You Win</h3>
                </div>
                <div class="win-main">
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="win-item text-center">
                                <img src="<?php echo get_theme_file_uri( 'assets/images/win-1.png'); ?>" alt="">
                                <h4 class="text-20">PEOPLE</h4>
                                <p class="text-16"> People always come first at Hammer & Nails. Each member of our team is integral to our success. </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="win-item text-center">
                                <img src="<?php echo get_theme_file_uri( 'assets/images/win-2.png'); ?>" alt="">
                                <h4 class="text-20">CULTURE</h4>
                                <p class="text-16"> We have designed a world class environment where you can grow. Only the best will do for our team members and customers. </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="win-item text-center">
                                <img src="<?php echo get_theme_file_uri( 'assets/images/win-3.png'); ?>" alt="">
                                <h4 class="text-20">SKILL</h4>
                                <p class="text-16"> We offer unparalleled continuing development and access to the world’s best Hattori Hanzo tools. This support allows you to grow as a person while you hone your craft. </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="win-item text-center">
                                <img src="<?php echo get_theme_file_uri( 'assets/images/win-4.png'); ?>" alt="">
                                <h4 class="text-20">SELF-CARE</h4>
                                <p class="text-16"> We are a self-care focused brand. Every member of our team is a self-care advocate who creates a world-class environment. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="win-box text-center">
                    <h4 class="title-xxl">Where Will You Take Us?</h4>
                    <p class="text-18"> If you love to connect with and care for people, then we are looking for YOU!</p>
                    <a href="#" class="button mx-auto">Apply</a>
                </div>
            </div>
        </section>
        
    </main>

<?php
get_footer();

