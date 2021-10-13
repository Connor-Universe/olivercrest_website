
    <?php include "include/nav.php";?>
    <?php include "include/contact_form.php";?>



    <!-- ========Feature-Section Starts Here ========-->
<section class="page-header">
    <div class="elepsis header-trop">
        <img src="assets/templates/minimul/images/profit/elepsis.html" alt="profit">
    </div>
    <div class="circle-2 header-trop" data-paroller-factor="-0.30" data-paroller-factor-lg="0.60"
         data-paroller-type="foreground" data-paroller-direction="horizontal">
        <img src="assets/images/frontend/animation/05.png" alt="shape">
    </div>
    <div class="circle-3 header-trop" data-paroller-factor="0.10" data-paroller-factor-lg="-0.30"
         data-paroller-type="foreground" data-paroller-direction="horizontal">
        <img src="assets/images/frontend/animation/08.png" alt="shape">
    </div>
    <div class="star-4 header-trop">
        <img src="assets/images/frontend/animation/07.png" alt="shape">
    </div>
    <div class="star-4 two header-trop">
        <img src="assets/images/frontend/animation/07.png" alt="shape">
    </div>
    <div class="star-5 header-trop">
        <img src="assets/images/frontend/animation/07.png" alt="shape">
    </div>
    <div class="circle-1 two header-trop">
        <img src="assets/images/frontend/animation/10.png" alt="shape">
    </div>
    <div class="trop-4 header-trop">
        <img src="assets/images/frontend/animation/14.png" alt="animation">
    </div>
    <div class="trop-3 header-trop">
        <img src="assets/images/frontend/animation/13.png" alt="animation">
    </div>
    <div class="circle-1 three header-trop">
        <img src="assets/images/frontend/animation/12.png" alt="animation">
    </div>
    <div class="circle-2 header-trop" data-paroller-factor="-0.30" data-paroller-factor-lg="0.60"
         data-paroller-type="foreground" data-paroller-direction="horizontal">
        <img src="assets/images/frontend/animation/05.png" alt="shape">
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-header-content">
                    <h2 class="title">Contact Us</h2>
                    <ul class="breadcrumb">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            Contact Us
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="page-header-thumb wow slideInDown">
                    <img src="assets/images/frontend/breadcrumb/page-header-01.png" alt="page-header">
                    <div class="coin wow bounceInDown" data-wow-delay=".5s">
                        <img src="assets/images/frontend/breadcrumb/coin.png" alt="page-header">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ========Feature-Section Eventes Here ========-->


    <!-- ========Contact-Section Starts Here ========-->
    <section class="contact-section padding-bottom padding-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-none d-lg-block">
                    <div class="contact-thumb">
                        <img src="assets/templates/minimul/images/contact/contact01.png" alt="faq">
                        <div class="mes1 wow slideInLeft">
                            <img src="assets/templates/minimul/images/contact/mes1.png" alt="faq">
                        </div>
                        <div class="mes2 wow slideInDown">
                            <img src="assets/templates/minimul/images/contact/mes2.png" alt="faq">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-header">
                        <span>Contact Us</span>
                        <h4 class="title">Get in touch</h4>
                    </div>

                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="contact-form">
                        <?php echo"$fail";?>
                        <?php echo"$success";?>
                        <?php echo"$first_name_err";?>
                        <div class="form-group">
                            <input name="first_name" type="text" placeholder="Your Name" value="" required>
                        </div>
                       
                        <div class="form-group">
                            <input name="phone" type="text" placeholder="Contact Number"  value="" required>
                        </div>
                        <?php echo"$email_err";?>
                        <div class="form-group">
                            <input name="email" type="text" placeholder="Enter E-Mail Address"  value="" required>
                        </div>
                        <?php echo"$subject_err";?>
                        <div class="form-group">
                            <input name="subject" type="text" placeholder="Write your subject"  value="" required>
                        </div>

                        <?php echo"$message_err";?>
                        <div class="form-group w-100">
                            <textarea name="message" wrap="off" placeholder="Write your message" ></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Send message">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- ========Contact-Section Ends Here ========-->

    <!-- ========Contact-Section Stars Here ========-->
    <div class="map-section padding-bottom">
        <div class="container mw-lg-100 p-lg-0">
            <div class="overview-area">
                <div class="overview-left">
                    <div class="address-area">
                        <div class="addr-item">
                            <div class="thumb">
                                <img src="assets/templates/minimul/images/contact/addr1.png" alt="contact">
                            </div>
                            <div class="content">
                                <h6 class="title">Office Address</h6>
                                <ul>
                                    <li>
                                        <?php echo"$location123";?>                               </li>
                                </ul>
                            </div>
                        </div>
                        <div class="addr-item">
                            <div class="thumb">
                                <img src="assets/templates/minimul/images/contact/addr2.png" alt="contact">
                            </div>
                            <div class="content">
                                <h6 class="title">Email Address</h6>
                                <ul>
                                    <li>
                                       <?php echo"$email_admin1";?>                                  </li>
                                </ul>
                            </div>
                        </div>
                        <div class="addr-item">
                            <div class="thumb">
                                <img src="assets/templates/minimul/images/contact/addr3.png" alt="contact">
                            </div>
                            <div class="content">
                                <h6 class="title">Contact Number</h6>
                                <ul>
                                    <li><?php echo"$phone123";?>                                   </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="maps" id="data-maps" data-latitude="23.8715532" data-longitude="90.3793906"></div>
            </div>
        </div>
    </div>
    <!-- ========Contact-Section Ends Here ========-->



    <!-- ========Footer-Section Starts Here ========-->
<?php include "include/footer.php";?>
<!-- ========Footer-Section Ends Here ========-->

