<?php
/**
 * Template Name: Home
 *
 * @package WordPress
 */
get_header();
?>



    <main class="overflow-hidden home-template">

        <!--================= hero-area ================-->
        <section class="hero-area">
            <div class="banner-video">
                <video src="<?php echo get_theme_file_uri( 'assets/videos/hero-video.mp4'); ?>" autoplay="" loop="" muted=""></video>
            </div>
            <div class="hero-content">
                <div class="container">
                    <h6 class="title-md">Welcome To</h6>
                    <h1 class="title-xxl">Luxury Grooming <br>Shop for Guys</h1>
                    <form action="/our-locations">
                        <div class="location-item">
                            <input class="text-16" name="zip" type="text" placeholder="Enter a zip code">
                            <button class="button" type="button">Find a Location Near You</button>
                        </div>
                    </form>                    
                    <span class="mobile-only">
                        <h1 class="title-xxl">Your Luxury Grooming Shop</h1>
                        <form action="/our-locations">
                            <div class="location-item">
                                <input class="text-16" name="zip" type="text" placeholder="Enter a zip code">
                                <button class="button" type="button">Book Now</button>
                            </div>
                        </form>     
                    </span>
                </div>
            </div>
        </section>

        <!--================= care-area ================-->
        <section class="care-area">
            <div class="care-bg">
                <img src="<?php echo get_theme_file_uri( 'assets/images/care-bg.webp' ); ?>" alt="care-bg">
            </div>
            <div class="care-content">
                <div class="container">
                    <div class="care-cnt">
                        <h2 class="title-xxl">Total. Man. Care.</h2>
                        <p class="text-18">And Palms. And today’s extraordinary man deserves a grooming experience that tends to the whole man. In a space that’s far from take-a-number haircut farms and pedicure stations that reek of acrylic fumes. It’s time to care about the care that goes into men’s grooming. And it starts at a place where men’s care is all we care about. That, and a good drink. </p>
                        <h4 class="title-md2">Your Ultimate Stop to the Total Men's Grooming Experience</h4>
                        <a href="/service" class="button">Our Customized Services</a>
                    </div>
                </div>
            </div>
        </section>

        <!--================= member-area ================-->
        <section class="member-area">
            <div class="member-bg">
                <img src="<?php echo get_theme_file_uri( 'assets/images/member.jpg' ); ?>" alt="member-bg">
            </div>
            <div class="member-content">
                <div class="container">
                    <div class="member-cnt">
                        <h3 class="title-xl">Reward yourself with Top Tier Grooming Services in a Relaxed Environment</h3>
                        <a href="/join-the-club" class="button">Become a Member</a>
                    </div>
                </div>
            </div>
        </section>

        <!--================= partner-area ================-->
        <div class="partner-area">
            <div class="container">
                <div class="partner-main d-flex align-items-center justify-content-around">
                    <div class="partner-logo">
                        <img src="<?php echo get_theme_file_uri( 'assets/images/partner-1.png' ); ?>" alt="partner-logo">
                    </div>
                    <div class="partner-logo">
                        <img src="<?php echo get_theme_file_uri( 'assets/images/partner-2.png' ); ?>" alt="partner-logo">
                    </div>
                    <div class="partner-logo">
                        <img src="<?php echo get_theme_file_uri( 'assets/images/partner-3.png' ); ?>' ); ?>" alt="partner-logo">
                    </div>
                    <div class="partner-logo">
                        <img src="<?php echo get_theme_file_uri( 'assets/images/partner-4.png' ); ?>' ); ?>" alt="partner-logo">
                    </div>
                    <div class="partner-logo">
                        <img src="<?php echo get_theme_file_uri( 'assets/images/partner-5.png' ); ?>' ); ?>" alt="partner-logo">
                    </div>
                </div>
            </div>
        </div>

        <!--=================== cuts-area =================-->
        <section class="cuts-area">
            <div class="container">
                <div class="cuts-upper text-center">
                    <h3 class="title-xxl">You Deserve to Look Your Best</h3>
                    <p class="title-md">More Than Just Haircuts </p>
                </div>
                <div class="cuts-part">
                    <div class="carts-title">
                        <h4 class="title-xl2">Hair</h4>
                        <img src="<?php echo get_theme_file_uri( 'assets/images/nail-min.png' ); ?>" alt="pin">
                    </div>
                    <div class="cuts-main">
                        <div class="cust-item">
                            <img src="<?php echo get_theme_file_uri( 'assets/images/hair-1.jpg' ); ?>" alt="hair-cut">
                        </div>
                        <div class="cust-item">
                            <img src="<?php echo get_theme_file_uri( 'assets/images/hair-2.jpg' ); ?>" alt="hair-cut">
                        </div>
                        <div class="cust-item">
                            <img src="<?php echo get_theme_file_uri( 'assets/images/hair-3.jpg' ); ?>" alt="hair-cut">
                        </div>
                    </div>
                </div>

                <div class="cuts-part">
                    <div class="carts-title">
                        <h4 class="title-xl2">Beards</h4>
                        <img src="<?php echo get_theme_file_uri( 'assets/images/nail-min.png' ); ?>" alt="pin">
                    </div>
                    <div class="cuts-main">
                        <div class="cust-item">
                            <img src="<?php echo get_theme_file_uri( 'assets/images/beard-1.webp' ); ?>" alt="beard">
                        </div>
                        <div class="cust-item">
                            <img src="<?php echo get_theme_file_uri( 'assets/images/beard-2.webp' ); ?>" alt="beard">
                        </div>
                        <div class="cust-item">
                            <img src="<?php echo get_theme_file_uri( 'assets/images/beard-3.webp' ); ?>" alt="beard">
                        </div>
                    </div>
                </div>

                <div class="cuts-part">
                    <div class="carts-title">
                        <h4 class="title-xl2">Manicures</h4>
                        <img src="<?php echo get_theme_file_uri( 'assets/images/nail-min.png' ); ?>" alt="pin">
                    </div>
                    <div class="cuts-main">
                        <div class="cust-item">
                            <img src="<?php echo get_theme_file_uri( 'assets/images/mani-1.jpg' ); ?>" alt="manicures">
                        </div>
                        <div class="cust-item">
                            <img src="<?php echo get_theme_file_uri( 'assets/images/mani-2.jpg' ); ?>" alt="manicures">
                        </div>
                        <div class="cust-item">
                            <img src="<?php echo get_theme_file_uri( 'assets/images/mani-3.jpg' ); ?>" alt="manicures">
                        </div>
                    </div>
                </div>

                <div class="cuts-part">
                    <div class="carts-title">
                        <h4 class="title-xl2">Pedicures</h4>
                        <img src="<?php echo get_theme_file_uri( 'assets/images/nail-min.png' ); ?>" alt="pin">
                    </div>
                    <div class="cuts-main">
                        <div class="cust-item">
                            <img src="<?php echo get_theme_file_uri( 'assets/images/pedi-1.jpg' ); ?>" alt="pedicures">
                        </div>
                        <div class="cust-item">
                            <img src="<?php echo get_theme_file_uri( 'assets/images/pedi-2.jpg' ); ?>" alt="pedicures">
                        </div>
                        <div class="cust-item">
                            <img src="<?php echo get_theme_file_uri( 'assets/images/pedi-3.jpg' ); ?>" alt="pedicures">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--================= service-area ================-->
        <section class="service-area">
            <div class="container">
                <div class="service-upper text-center">
                    <h3 class="title-xxl">Our Customized Services</h3>
                    <p class="text-25">Enjoy the relaxing and therapeutic services at the nation's first BarberSpa™. Hammer & Nails uses only high quality, non-toxic products for all of its services.</p>
                </div>
                <div class="service-main">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="service-box">
                                <h4 class="text-25"><strong>CLASSIC</strong> SERVICES</h4>
                                <h5 class="title-sm2">Classic Cut</h5>
                                <p class="text-16"><strong>Our most classy and stylish haircut.</strong> This service is ideal for your regular maintenance cut and includes a shampoo, conditioning scalp massage, and a lavender-infused hot towel for your face. (approx. 30 minutes)</p>
                                <h5 class="title-sm2">Classic Face Or Head Shave</h5>
                                <p class="text-16"><strong>Invoke the nostalgia of the good ol’ days. </strong> This experience incorporates warm foam, straight razor shave, hot and cold essential oil-infused towels, and a cooling massage to make you look as smooth as you feel. (approx. 30 minutes)</p>
                                <h5 class="title-sm2">Classic Face Treatment</h5>
                                <p class="text-16"><strong>Feel revived and relaxed.</strong> This renewing skin service cleanses, exfoliates and purifies. Complete pampering is delivered with aromatherapy hot towels, a mask treatment, and an extended massage for your face and scalp.(Approx. 30 mins)</p>
                                <h5 class="title-sm2">Classic Beard Grooming</h5>
                                <p class="text-16"><strong>Show your mug some extra love.</strong> Pamper your Abe Lincoln with reshaping, straight razor outlines, lavender oil-infused hot towels, beard conditioning, and styling. (approx. 30 minutes)</p>
                                <h5 class="title-sm2">Classic Grey Camo</h5>
                                <p class="text-16"><strong>Turn back the clock in minutes.</strong> Rewind time by adding subtle color and saturation into your salt and pepper blend. With a seamless grow-out, this color will gently fade to keep the camouflage undetectable. (approx. 30 minutes)</p>
                                <h5 class="title-sm2">Classic Manicure</h5>
                                <p class="text-16"><strong>First-rate hand care.</strong> This maintenance service includes a warm soak, nail care (clip, file, nip, and buff), hand and forearm massage, and our hot towel wrap. (approx. 30 minutes)</p>
                                <h5 class="title-sm2">Classic Pedicure</h5>
                                <p class="text-16"><strong>Excellent regular foot care. </strong> This service is ideal for guests who receive routine foot care. You will enjoy a warm soak, callus maintenance, nail care (clip, file, nip, and buff), foot and calf massage, and our hot towel wrap. (approx. 30 minutes)</p>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="service-box">
                                <h4 class="text-25"><strong>PREMIUM</strong> SERVICES</h4>
                                <h5 class="title-sm2">Premium Cut</h5>
                                <p class="text-16"><strong>Our ultimate cutting experience. </strong> This cut includes extra time for complex styles and finishing details. You’ll feel pampered with our straight razor outlines, warm foam, and aftershave massage. Once you love the way you look and feel, we will finish with a shampoo, conditioning scalp massage, and a lavender-infused hot towel for your face. (approx. 45 minutes)</p>
                                <h5 class="title-sm2">Premium Face or Head Shave</h5>
                                <p class="text-16"><strong>A rejuvenating skin treatment and shave. </strong> An epic combination of cleansing, exfoliation, and hydration is delivered with warm foam and a straight razor for your face or head. Our charcoal mask, facial massage, and essential oil-infused towels will put you in a trance. (approx. 60 minutes)</p>
                                <h5 class="title-sm2">Premium Beard Grooming</h5>
                                <p class="text-16"><strong>A revitalizing beard shaping and facial massage.</strong> We’ll revive your beard with a rich oil massage, reconstruct its shape with crisp razor lines, and make your skin say “ahhh”. This exfoliating cleanse uses a charcoal mask to draw out impurities and ends with a hydrating lave nder facial massage. (approx. 60 minutes)</p>
                                <h5 class="title-sm2">Premium Manicure</h5>
                                <p class="text-16"><strong>An indulgent experience with exfoliation and hydration. </strong> Enjoy a warm soak,nail care (clip, file, nip and buff), peppermint sugar scrub, massage, warm paraffin, and our hot towel wrap. (approx. 45 minutes)</p>
                                <h5 class="title-sm2">Premium Pedicure</h5>
                                <p class="text-16"><strong>A total foot renewal with ultimate relaxation.</strong> This pedicure adds deep hydration and exfoliates skin. Your feet will feel renewed after a warm soak, callus resurfacing, peppermint sugar scrub, massage, nail care (clip, file, nip and buff), warm paraffin, and hot towels. (approx. 45 minutes)</p>
                                <h5 class="title-sm2">Essential Tea Tree Pedicure</h5>
                                <p class="text-16"><strong>For feet needing extra TLC. </strong> This Premium Pedicure incorporates a tea tree oil-infused soak and sugar scrub. Additional time is allotted for a reviving foot massage, callus resurfacing, restorative nail care (clip, file, nip and buff), warm paraffin, and our hot towel wrap. (approx. 60 minutes)</p>
                                <h5 class="title-sm2">Sports Pedicure</h5>
                                <p class="text-16"><strong>Sore muscle relief for our most active guests.</strong> This specialty PremiumPedicure alternates between a series of hot and cold treatments to promote circulation and ease sore muscles. Your feet will receive a warm soak, callus resurfacing, tea tree oil-infused sugar scrub, nail care (clip, file, nip and buff), hot-stone massage, mint clay mask, hot towel wrap, and a cooling foot balm massage. (approx. 60 minutes)</p>                                
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="service-box">
                                <h4 class="text-25"><strong>PREMIUM </strong> COMBO TREATMENTS</h4>
                                <h5 class="title-sm2">The Jack Hammer Experience*</h5>
                                <p class="text-16"><strong>Rich, liquid-gold from fingers to toes.</strong> This is the ultimate Premium Manicure and Pedicure combination for whiskey fanatics. The whiskey-infused service includes warm soak, callus resurfacing, sugar scrub, massage, nail care (clip, file, nip, and buff), warm paraffin, and our hot towel wrap. (approx. 90 minutes)</p>
                                <p>*only available at select locations, call your local shop for details.</p>
                                <h5 class="title-sm2">The Hops and Cedar Experience</h5>
                                <p class="text-16"><strong>Beer-lover’s bliss.</strong> This Premium Manicure and Pedicure combination will have you walking on clouds. This service includes stout beer and cedarwood oil-infused soak, callus resurfacing, sugar scrub, massage, nail care (clip, file, nip, and buff), warm paraffin, and our hot towel wrap. (approx. 90 minutes)</p>
                                <h5 class="title-sm2">The Big Daddy Experience</h5>
                                <p class="text-16"><strong>Refresh & relax with our most popular hand & foot experience.</strong> This clarifying lemon and peppermint-infused Premium Manicure and Pedicure combination includes warm soak, callus resurfacing, sugar scrub, massage, nail care (clip, file, nip, and buff), warm paraffin, and our hot towel wrap. (approx. 90 minutes)</p>
                                <h5 class="title-sm2">The Milk and Honey</h5>
                                <p class="text-16"><strong>Saturate your skin in luxury. </strong> This is a magnificently moisturizing Premium Manicure and Pedicure combination. We incorporate a coconut milk-infused soak, callus resurfacing, honey-infused sugar scrub, massage, nail care (clip, file, nip, and buff), warm paraffin, and our hot towel wrap. (approx. 90 minutes)</p>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="service-box">
                                <h4 class="text-25"><strong>LUXE </strong> TREATMENTS</h4>
                                <h5 class="title-sm2">Luxe 24K Hand Care</h5>
                                <p class="text-16"><strong>Extraordinary hand care for extraordinary men.</strong> This French lavender and 24k gold-infused Luxe MANicure features a relaxing hot stone massage complimented by a cooling CBD massage to promote circulation. A hydrating sugar scrub, rich paraffin treatment, and oil-infused steamed towels soften hands to showcase immaculate nail care without using polish. Gold’s anti-inflammatory properties promote anti-aging and cell regeneration, delivering the crème de la crème of hand care. (approx. 60 minutes) </p>
                                <h5 class="title-sm2">Luxe 24K Foot Care</h5>
                                <p class="text-16"><strong>The relaxing scent of pure French lavender</strong> and anti-inflammatory properties of 24k gold promote cell regeneration, circulation, and relaxation. This unmistakable 60-minute premium service is the perfect reason to stop and decompress. The hallmark of this treatment is the tension relieving foot and calf hot stone massage. Rich paraffin treatment and callus resurfacing ensures your feet are year-round vacation ready. (approx. 60 minutes) </p>
                                <h5 class="title-sm2">Luxe 24K Haircut Experience </h5>
                                <p class="text-16"><strong>This luxury haircut experience you’ve been longing for isn’t just a haircut. </strong> A senior certified artist will transform you with bespoke finishing details, including a straight razor outline with warm foam, and an aftershave neck massage. Lavender-infused steamed towels and an extensive cool-tingling CBD-infused scalp massage will leave you snoring (perhaps literally) while a 24k gold mask rejuvenates your skin and gives you that post-vacation glow. Retreat from the grind of your daily life and leave ready to take on the world. (approx. 60 minutes) </p>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--================= appointment-area ================-->
        <section class="appointment-area">
            <div class="container">
                <div class="appintment-cnt text-center">
                    <h3 class="title-xxl">Ready to Look Your Best? Schedule An Appointment</h3>
                    <a href="/our-locations" class="button mx-auto">Locations</a>
                </div>
            </div>
        </section>        

    </main>

    <?php
get_footer();

