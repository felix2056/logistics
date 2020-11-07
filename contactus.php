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

<!-- .page-title start -->
<div class="page-title-style01 page-title-negative-top pt-bkg02" style="margin-top: 116px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1><?=$title;?></h1>

                <div class="breadcrumb-container">
                    <ul class="breadcrumb clearfix">
                        <li>You are here:</li>

                        <li>
                            <a href="/">Home</a>
                        </li>

                        <li>
                            <a href="/contactus.php">Contact</a>
                        </li>
                    </ul><!-- .breadcrumb end -->
                </div><!-- .breadcrumb-container end -->
            </div><!-- .col-md-12 end -->
        </div><!-- .row end -->
    </div><!-- .container end -->
</div><!-- .page-title-style01.page-title-negative-top end -->

<div class="page-content">
    <div class="container">
        <div class="row">
            <? if($myinfo) { ?>
            <div class="col-md-6">
                <div class="custom-heading">
                    <h3>your inquiry</h3>
                </div><!-- .custom-heading.left end -->



                <p>
                    Cozy sphinx waves quart jug of bad milk. A very bad
                    quack might jinx zippy fowls. Few quips galvanized
                    the mock jury box. Quick brown dogs jump over the
                    lazy fox. The jay, pig, fox, zebra, and my wolves
                    quack! Blowzy red vixens fight for a quick jump.
                    Joaquin Phoenix was gazed by MTV for luck. A
                    wizard’s job is to vex chumps quickly in fog. Watch
                    "Jeopardy!", Alex Trebek's fun TV quiz game.
                    Woven silk pyjamas exchanged for blue quartz.
                    Brawny gods just.
                </p>

                <br>

                <div class="custom-heading">
                    <h4>company information</h4>
                </div><!-- .custom-heading end -->

                <address>
                    <?=$address;?>
                </address>

                <span class="text-big colored">
                    <?=$number;?>
                </span>
                <br>

                <a href="mailto:"><?=$email;?></a>
            </div><!-- .col-md-6 end -->

            <? } ?>

            <?php //$success;?>

            <div class="notice success" id="success">
                <p>Thanks so much for your message. We check e-mail frequently and will try our best to respond to
                    your inquiry.</p>
            </div>

            <div class="col-md-6 clearfix">
                <!-- .contact form start -->
                <form class="wpcf7">
                    <fieldset>
                        <label>
                            <span class="required">*</span> Your request:
                        </label>

                        <select class="wpcf7-form-control-wrap wpcf7-select" id="contact-inquiry">
                            <option value="I need an offer for contract logistics">I need an offer for contract
                                logistics</option>
                            <option value="I need an offer for air freight">I need an offer for air freight</option>
                            <option value="I want to become your partner">I want to become your partner</option>
                            <option value="I have some other request">I have some other request</option>
                        </select>
                    </fieldset>

                    <fieldset>
                        <label>
                            <span class="required">*</span> First Name:
                        </label>

                        <input type="text" class="wpcf7-text" id="contact-name">
                    </fieldset>

                    <fieldset>
                        <label>
                            <span class="required">*</span> Last Name:
                        </label>

                        <input type="text" class="wpcf7-text" id="contact-last-name">
                    </fieldset>

                    <fieldset>
                        <label>
                            <span class="required">*</span> Email:
                        </label>

                        <input type="url" class="wpcf7-text" id="contact-email">
                    </fieldset>

                    <fieldset>
                        <label>
                            <span class="required">*</span> Message:
                        </label>

                        <textarea rows="8" class="wpcf7-textarea" id="contact-message"></textarea>
                    </fieldset>

                    <input type="submit" class="wpcf7-submit" value="send">
                </form><!-- .wpcf7 end -->
            </div><!-- .col-md-6 end -->
        </div><!-- .row end -->
    </div><!-- .container end -->
</div><!-- .page-content end -->

<?php include __DIR__."/footer.php"; ?>