<?php
include "includes/header.php";
?>

<!--  main header in all Page  START  -->  
    <section dov class=" main_page_head">
        <div class="contact_bg main_pag_bg">
            <div class="titleText">
                <h3> Contact us </h3>
                <ol class="list-inline text-center text-black ">
                    <li><a href="index.php"> Home</a></li>
                    <li class="active "> Contact us  </li>
                </ol>
            </div>
        </div>
    </section>
<!--  main header in all Page  END  -->
    
<!--  Contact us  START  -->
    <section class="contact_info">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="contact-head text-center">
                        <h3> contact us </h3>
                        <p>  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla varius consequat magna, 
                            id molestie ipsum volutpat quis. Suspendisse consectetur fringilla suctus. </p>
                    </div>
                </div>
            </div>
            <div class="row main_contact_00">
                <div class="col-md-10 col-md-offset-1 ">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="contact-info-item addres_border text-center">
                                <div class="contact_details_icon">
                                    <img src="img/map-m.png" class="img-responsive" alt="">
                                </div>
                                <div class="contact_details_p text-center">
                                    <h3> Adress </h3>
                                    <p> Nasr City, Cairo, Egypt. </p>
                                    <p> Nasr City, Cairo, Egypt. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="contact-info-item phone_border text-center">
                                <div class="contact_details_icon">
                                    <img src="img/phone.png" class="img-responsive" alt="">
                                </div>
                                <div class="contact_details_p text-center">
                                    <h3> Phone </h3>
                                    <p> +20 101 23 45 678 </p>
                                    <p> +20 101 23 45 678 </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="contact-info-item email_border text-center">
                                <div class="contact_details_icon">
                                    <img src="img/email.png" class="img-responsive" alt="">
                                </div>
                                <div class="contact_details_p text-center">
                                    <h3> Email </h3>
                                    <p> info@btl.com </p>
                                    <p> hr@btl.com </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--  Contact us   END  -->
    
<!--  Contact Form   START  -->
<section class="contact-form">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-push-2">
                <div class="all_form">
                    <div class="form-01">
                        <label> Your Name <br>
                            <div class="input_form input-group">
                                <input type="text" name="name" value="" size="100%" aria-required="true" aria-invalid="false">
                            </div> 
                        </label>
                    </div>
                    <div class="form-01">
                        <label> Your Email <br>
                            <div class="input_form input-group">
                                <input type="text" name="your-email" value="" size="100%" aria-required="true" aria-invalid="false">
                            </div> 
                        </label>
                    </div>
                    <div class="form-01">
                        <label> Subject <br>
                            <div class="input_form input-group">
                                <input type="text" name="Subject" value="" size="100%" aria-required="true" aria-invalid="false">
                            </div> 
                        </label>
                    </div>
                    <div class="form-01">
                        <label> Your Message <br>
                            <div class="input_form">
                                <textarea name="your-message" cols="100%" rows="10" aria-invalid="false"></textarea>
                            </div> 
                        </label>
                    </div>

                    <div class="form-01">
                        <button type="button" class="btn btn-info"> <i class="fa fa-paper-plane" aria-hidden="true"></i>
                        Send </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  Contact Form   END  -->
<?php
include "includes/footer.php";
?>