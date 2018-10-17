<?php include "header.php" ?>
        <!-- Page title -->
        <section id="page-title" data-parallax-image="images/innerbanner.jpg">
            <div class="container">
                <div class="breadcrumb">
                    <!-- <ul>
                         <li><a href="index.php">Home</a> </li>
                        <li class="active"><a href="#">Contact Us</a> </li>
                    </ul> -->
                </div>
                <div class="page-title">
                     <h1>Contact Us</h1>
                </div>
            </div>
        </section>
        <!-- end: Page title -->
        <!-- CONTENT -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h3 class="text-uppercase">Get In Touch</h3>
                        <p>We are available 24/7 by fax, e-mail or by phone. You can also use the quick contact form to ask a question about our services and products. We would be pleased to answer your questions or offer any help.</p>


                        <div class="row m-t-40">
                            <div class="col-lg-6">
                                <address>
                                	<strong>Kohinoor Seeds</strong><br>Kansal Sadan, AB 26, <br>Shalimar Bagh,<br>New Delhi - 110088 <br>
India
			</address>
                            </div>
                            <div class="col-lg-6">
                                <address>
			  Phone: 011-27473500<br>
			  Mobile: +91-93508 88012<br>
			  Email: info@kohinoorseeds.com <br>
			  Customer Care No: 9540005386​
			</address>
                            </div>
                        </div>




                        <!-- <div class="social-icons m-t-30 social-icons-colored">
                            <ul>
                                <li class="social-facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="social-twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li class="social-google"><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                <li class="social-pinterest"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                <li class="social-vimeo"><a href="#"><i class="fab fa-vimeo"></i></a></li>
                                <li class="social-linkedin"><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div> -->
                    </div>

                    <div class="col-lg-6">
                        <form class="widget-contact-form" action="include/contact-form.php" role="form" method="post">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="name">Name</label>
                                    <input type="text" aria-required="true" name="widget-contact-form-name" class="form-control required name" placeholder="Enter your Name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email">Email</label>
                                    <input type="email" aria-required="true" name="widget-contact-form-email" class="form-control required email" placeholder="Enter your Email">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="subject">Your Subject</label>
                                    <input type="text" name="widget-contact-form-subject" class="form-control required" placeholder="Subject...">
                                </div>
                            </div>                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea type="text" name="widget-contact-form-message" rows="5" class="form-control required" placeholder="Enter your Message"></textarea>
                                </div>

                                 <div class="form-group">
                                      <script src='https://www.google.com/recaptcha/api.js'></script>
                                    <div class="g-recaptcha" data-sitekey="6LddCxAUAAAAAKOg0-U6IprqOZ7vTfiMNSyQT2-M"></div>
                                </div>
                            <button class="btn" type="submit" id="form-submit"><i class="fa fa-paper-plane"></i>&nbsp;Send message</button>
                        </form>
                        
                    </div>

                </div>
            </div>
        </section>
        <!-- end: CONTENT -->

        <!-- MAP -->
        <section class="no-padding">
            <!-- Google map sensor -->
             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3499.4512549349056!2d77.16700241508431!3d28.706057282388773!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjjCsDQyJzIxLjgiTiA3N8KwMTAnMDkuMSJF!5e0!3m2!1sen!2sin!4v1538545058087" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </section>
        <!-- end: MAP -->
<?php include "footer.php" ?>