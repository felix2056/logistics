<title>Contact Us | <?=$title;?></title>
<?php 
include __DIR__."/header.php";

if(isset($_POST["email"])){
    $mail = $_POST["email"];
    $content = sprintf("
    Query: %s\n
    User Details:
    Name: %s
    Subject: %s
    Email ID: %s\n
    ", $_POST["message"], $_POST["name"], $_POST["subject"],$mail);

    mail("sauravdhar10@gmail.com", 'Tracking Site Query', $content);
    $success = sprintf('<div class="notice">Thankyou for your message, we will try our best to respond to your inquiry.</div>');
}
?>

<section class="breadcrumbs-area parallex">
    <div class="container">
        <div class="row">
            <div class="page-title">
                <div class="col-sm-12 col-md-6 page-heading text-left">
                    <h3>any question</h3>
                    <h2>Contact Us</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =-=-=-=-=-=-= Contact Us =-=-=-=-=-=-= -->
<section id="contact-us" class="section-padding-70">
    <div class="container">
        <!-- Row -->
        <div class="row">
            <div class="col-md-12">
                <? if($myinfo) { ?> 
                <div class="col-sm-4 col-md-4 col-xs-12">
                    <div class="location-item text-center">
                        <div class="icon"><i class="icon-map"></i></div>
                        <h4 class="text-uppercase">Location</h4>
                        <p><?=$address;?></p>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4 col-xs-12">
                    <div class="location-item text-center">
                        <div class="icon"><i class="icon-phone"></i></div>
                        <h4 class="text-uppercase">Call us 24/7</h4>
                        <p><?=$number;?></p>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4 col-xs-12">
                    <div class="location-item text-center">
                        <div class="icon"><i class="icon-envelope"></i></div>
                        <h4 class="text-uppercase">Mail us</h4>
                        <p><?=$email;?></p>
                    </div>
                </div>
            <? } ?>
                
                    <?php //$success;?>
                
                <div class="notice success" id="success"><p>Thanks so much for your message. We check e-mail frequently and will try our best to respond to your inquiry.</p></div>

                <form id="contactForm" method="post">
                    <div class="col-sm-6">
                        <!-- Name -->
                        <div class="form-group">
                            <label>Name<span class="required">*</span></label>
                            <input type="text" id="name" name="name" class="form-control" required />
                        </div>
                    </div>
                    <!-- End col-sm-6 -->

                    <div class="col-sm-6">
                        <!-- Email -->
                        <div class="form-group">
                            <label for="email">Email<span class="required">*</span></label>
                            <input type="email" id="email" name="email" class="form-control" required />
                        </div>
                    </div>
                    <!-- End col-sm-6 -->

                    <div class="col-sm-12">
                        <!-- Email -->
                        <div class="form-group">
                            <label>Subject<span class="required">*</span></label>
                            <input type="text" id="subject" name="subject" class="form-control" required />
                        </div>
                    </div>
                    <!-- End col-sm-12 -->

                    <div class="col-sm-12">
                        <!-- Comment -->
                        <div class="form-group">
                            <label>Message<span class="required">*</span></label>
                            <textarea id="message" name="message" class="form-control" rows="6" required></textarea>
                        </div>
                    </div>
                    <!-- End col-sm-12 -->

                    <div class="col-sm-12 text-center">
                        <button type="submit" id="yes" class="btn btn-primary">Send Message</button>
                        <img id="loader" alt="" src="images/loader.gif" class="loader" />
                    </div>
                    <!-- End col-sm-6 -->
                </form>
            </div>

            <div class="clearfix"></div>
        </div>
        <!-- Row End -->
    </div>
    <!-- end container -->
</section>
<!-- =-=-=-=-=-=-= Contact Us End =-=-=-=-=-=-= -->

<?php include __DIR__."/footer.php"; ?>
