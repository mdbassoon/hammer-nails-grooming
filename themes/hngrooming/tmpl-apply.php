<?php
/**
 * Template Name: Apply
 *
 * @package WordPress
 */
get_header();
?>

    <main class="overflow-hidden">

        <!-- apply-bg -->
        <!-- <div class="apply-bg">
            <img src="<?php echo get_theme_file_uri( 'assets/images/apply-bg.jpg'); ?>" alt="">
        </div> -->

        <!--================ apply-area start ================-->
        <section class="apply-area">
            <div class="join-inner">
                <div class="container">
                    <div class="apply-main">
                        <div class="apply-heading text-center">
                            <h1 class="title-xxl">Apply Today</h1>
                        </div>
                        <div class="apply-form">
                            <form action="#">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="apply-field">
                                            <select class="text-14" required>
                                                <option value="Desired Position">Desired Position*</option>
                                                <option value="Stylist">Stylist</option>
                                                <option value="Barber">Barber</option>
                                                <option value="Nail Artist">Nail Artist</option>
                                                <option value="Corporate">Corporate</option>
                                                <option value="Other">Other</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="apply-field">
                                            <select class="text-14" required>
                                                <option value="Location">Location*</option>
                                                <option value="Atlantic City, NJ - Coming Soon">Atlantic City, NJ - Coming Soon</option>
                                                <option value="Brea, CA">Brea, CA</option>
                                                <option value="Cypress, TX">Cypress, TX</option>
                                                <option value="Culver City, CA - Coming Soon">Culver City, CA - Coming Soon</option>
                                                <option value="Darien, CT">Darien, CT</option>
                                                <option value="Detroit, MI - Coming Soon">Detroit, MI - Coming Soon</option>
                                                <option value="Dublin, OH">Dublin, OH</option>
                                                <option value="Dupont Circle, Washington DC - Coming Soon">Dupont Circle, Washington DC - Coming Soon</option>
                                                <option value="Echo Park, CA">Echo Park, CA</option>
                                                <option value="Edmond, OK - Coming Soon">Edmond, OK - Coming Soon</option>
                                                <option value="El Paso, TX">El Paso, TX</option>
                                                <option value="Folsom, CA">Folsom, CA</option>
                                                <option value="Frisco, TX">Frisco, TX</option>
                                                <option value="Gainesville, VA">Gainesville, VA</option>
                                                <option value="Georgetown, Washington D.C. - Coming Soon">Georgetown, Washington D.C. - Coming Soon</option>
                                                <option value="Greenwich, CT - Coming Soon">Greenwich, CT - Coming Soon</option>
                                                <option value="Hyde Park, OH">Hyde Park, OH</option>
                                                <option value="Lakewood, OH">Lakewood, OH</option>
                                                <option value="Laguna Niguel - Ocean Ranch, CA">Laguna Niguel - Ocean Ranch, CA</option>
                                                <option value="Leawood, KS">Leawood, KS</option>
                                                <option value="Leesburg, VA">Leesburg, VA</option>
                                                <option value="Lewis Center, OH">Lewis Center, OH</option>
                                                <option value="Louisville, KY - Coming Soon">Louisville, KY - Coming Soon</option>
                                                <option value="Miami, FL - Coming Soon">Miami, FL - Coming Soon</option>
                                                <option value="Midtown Atlanta, GA">Midtown Atlanta, GA</option>
                                                <option value="Morrisville, NC - Coming Soon">Morrisville, NC - Coming Soon</option>
                                                <option value="Naples, FL">Naples, FL</option>
                                                <option value="Nashville, TN - Coming Soon">Nashville, TN - Coming Soon</option>
                                                <option value="New Albany, OH">New Albany, OH</option>
                                                <option value="Northwest Reno, NV - Coming Soon">Northwest Reno, NV - Coming Soon</option>
                                                <option value="Portland, OR - Coming Soon">Portland, OR - Coming Soon</option>
                                                <option value="Paradise Valley, AZ - Coming Soon">Paradise Valley, AZ - Coming Soon</option>
                                                <option value="Powell, OH - Coming Soon">Powell, OH - Coming Soon</option>
                                                <option value="Rancho Cucamonga, CA">Rancho Cucamonga, CA</option>
                                                <option value="Raleigh, NC - Coming Soon">Raleigh, NC - Coming Soon</option>
                                                <option value="Reston Town Center, VA">Reston Town Center, VA</option>
                                                <option value="Ridgewood, NJ - Coming Soon">Ridgewood, NJ - Coming Soon</option>
                                                <option value="Roseville, CA">Roseville, CA</option>
                                                <option value="Roswell, GA - Coming Soon">Roswell, GA - Coming Soon</option>
                                                <option value="San Antonio, TX">San Antonio, TX</option>
                                                <option value="South Bay, CA">South Bay, CA</option>
                                                <option value="South Reno, NV">South Reno, NV</option>
                                                <option value="Tampa, FL - Coming Soon">Tampa, FL - Coming Soon</option>
                                                <option value="Uniontown, OH">Uniontown, OH</option>
                                                <option value="Upper Arlington, OH">Upper Arlington, OH</option>
                                                <option value="Valencia, CA - Coming Soon">Valencia, CA - Coming Soon</option>
                                                <option value="West Chester Township, OH - Coming Soon">West Chester Township, OH - Coming Soon</option>
                                                <option value="Westerville, OH">Westerville, OH</option>
                                                <option value="West Hollywood, CA">West Hollywood, CA</option>
                                                <option value="Westport, CT">Westport, CT</option>
                                                <option value="Wheaton, IL - Coming Soon">Wheaton, IL - Coming Soon</option>
                                                <option value="Willow Glen, CA">Willow Glen, CA</option>
                                                <option value="Windermere, FL">Windermere, FL</option>
                                                <option value="Winter Garden, FL - Coming Soon">Winter Garden, FL - Coming Soon</option>
                                                <option value="Winter Park, FL - Coming Soon">Winter Park, FL - Coming Soon</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="apply-field"> 
                                            <input class="text-14" type="text" placeholder="First Name*" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="apply-field">
                                            <input class="text-14" type="text" placeholder="Last Name*" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="apply-field">
                                            <input class="text-14" type="tel" placeholder="Phone*" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="apply-field">
                                            <input class="text-14" type="email" placeholder="Email*" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="apply-field">
                                            <input class="text-14" type="text" placeholder="City*" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="apply-field">
                                            <select class="text-14" required>
                                                <option value="">State*</option>
                                                <option value="Alabama">Alabama</option>
                                                <option value="Alaska">Alaska</option>
                                                <option value="Arizona">Arizona</option>
                                                <option value="Arkansas">Arkansas</option>
                                                <option value="California">California</option>
                                                <option value="Colorado">Colorado</option>
                                                <option value="Connecticut">Connecticut</option>
                                                <option value="Delaware">Delaware</option>
                                                <option value="Florida">Florida</option>
                                                <option value="Georgia">Georgia</option>
                                                <option value="Hawaii">Hawaii</option>
                                                <option value="Idaho">Idaho</option>
                                                <option value="Illinois">Illinois</option>
                                                <option value="Indiana">Indiana</option>
                                                <option value="Iowa">Iowa</option>
                                                <option value="Kansas">Kansas</option>
                                                <option value="Kentucky">Kentucky</option>
                                                <option value="Louisiana">Louisiana</option>
                                                <option value="Maine">Maine</option>
                                                <option value="Maryland">Maryland</option>
                                                <option value="Massachusetts">Massachusetts</option>
                                                <option value="Michigan">Michigan</option>
                                                <option value="Minnesota">Minnesota</option>
                                                <option value="Mississippi">Mississippi</option>
                                                <option value="Missouri">Missouri</option>
                                                <option value="Montana">Montana</option>
                                                <option value="Nebraska">Nebraska</option>
                                                <option value="Nevada">Nevada</option>
                                                <option value="New Hampshire">New Hampshire</option>
                                                <option value="New Jersey">New Jersey</option>
                                                <option value="New Mexico">New Mexico</option>
                                                <option value="New York">New York</option>
                                                <option value="North Carolina">North Carolina</option>
                                                <option value="North Dakota">North Dakota</option>
                                                <option value="Ohio">Ohio</option>
                                                <option value="Oklahoma">Oklahoma</option>
                                                <option value="Oregon">Oregon</option>
                                                <option value="Pennsylvania">Pennsylvania</option>
                                                <option value="Rhode Island">Rhode Island</option>
                                                <option value="South Carolina">South Carolina</option>
                                                <option value="South Dakota">South Dakota</option>
                                                <option value="Tennessee">Tennessee</option>
                                                <option value="Texas">Texas</option>
                                                <option value="Utah">Utah</option>
                                                <option value="Vermont">Vermont</option>
                                                <option value="Virginia">Virginia</option>
                                                <option value="Washington">Washington</option>
                                                <option value="West Virginia">West Virginia</option>
                                                <option value="Wisconsin">Wisconsin</option>
                                                <option value="Wyoming">Wyoming</option>
                                                <option value="--">--</option>
                                                <option value="District of Columbia">District of Columbia</option>
                                                <option value="Puerto Rico">Puerto Rico</option>
                                                <option value="Guam">Guam</option>
                                                <option value="American Samoa">American Samoa</option>
                                                <option value="U.S. Virgin Islands">U.S. Virgin Islands</option>
                                                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="apply-field">
                                            <input class="text-14" type="text" placeholder="Zip Code*" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="apply-field">
                                            <select class="text-14" required>
                                                <option value="I am interested in location within*">I am interested in location within*</option>
                                                <option value="10 Miles">10 Miles</option>
                                                <option value="20 Miles">20 Miles</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="apply-border">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="apply-field">
                                            <select class="text-14" required>
                                                <option value="">How did you hear about us?*</option>
                                                <option value="Internet Search">Internet Search</option>
                                                <option value="Previous Customer">Previous Customer</option>
                                                <option value="Advertisement">Advertisement</option>
                                                <option value="Social Network">Social Network</option>
                                                <option value="Others">Others</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="upload-btn">
                                            <label class="button2 text-16">
                                                <span>Upload Resume</span>
                                                <input class="text-16" type="file" accept=".pdf,.jpg,.png,.doc,.docx" aria-required="true" aria-invalid="false">
                                            </label> 
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="radio-cnt">
                                            <p class="text-16">Have you ever been employed by Hammer & Nails?</p>
                                            <div class="radio-box">
                                                <div class="radio-item">
                                                    <input class="text-16" type="radio" name="radio-group" id="radio1">
                                                    <label for="radio1" class="text-16">Yes</label>
                                                </div>
                                                <div class="radio-item">
                                                    <input class="text-16" type="radio" name="radio-group" id="radio2">
                                                    <label for="radio2" class="text-16">No</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="apply-check">
                                            <input class="text-14" type="checkbox" id="check">
                                            <label class="text-14" for="check">By signing below, I certify that all information provided is true and complete. Any false or omitted information may disqualify me from consideration for employment and may result in my dismissal if discovered at a later date. I authorize the investigation of all statements contained in this application. I understand that this application does not create an express or implied contract of employment, nor guarantee employment. If employed, I understand that I have been hired at the will of the employer and my employment may be terminated at any time, with or without reason, and with or without notice. Under Title 1 of the Americans with Disability Act, if assistance is needed to complete the application or during any stage of the interview or employment process, please check the box and a member of human resources will reach out to you. Please note that a reasonable effort will be made to accommodate your needs in a timely manner</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="apply-field">
                                            <input class="text-14" type="text" placeholder="Applicant Signature*" required>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="apply-field">
                                            <input class="text-14 date" type="text" placeholder="Signature Date" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="apply-border mt-0">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="apply-btn d-flex align-items-center">
                                            <button class="button2" type="submit">SUBMIT</button>
                                            <button class="button2" type="button">cancel</button>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="apply-cntbtm">
                                            <p class="text-14">This site is protected by reCAPTCHA and the Google <a href="#">Privacy Policy</a> and <a href="#">Terms of Service</a> apply. </p>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
    </main>

    
    <?php
get_footer();