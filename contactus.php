<?php
include ("includes/contactheader.php")
    ?>

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<?php
include ("includes/contactdatabase.php")
    ?>

<link rel="stylesheet" href="css/contactus.css">

<div class="container-fluid contact-wholebody">
    <div class="row">
        <div class="col-12 mt-3">
            <a class="navbar-brand ms-3" href="#">
                <!-- <img src="img/Cybex.png" alt="" width="140px" height="50px"> -->
                <img src="img/soft-logo-blue.png" alt="" width="160px" height="60px">
            </a>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-lg-3 me-3">
            <div class="row foristmargin">
                <div class="col-12 col-sm-6 col-md-3 col-lg-12 col-xlg-12">
                    <div class="ist-list mt-2">
                        <div class="istlist-image ms-3">
                            <img src="img/icon-briefcase.svg" width="24" height="25" alt="">
                        </div>
                        <div class="ist-list-description">
                            <div class="ist-list-description-title">
                                <p class="ist-list-description-t">34 years in IT</p>
                            </div>
                            <div class="ist-list-description-para">
                                <p class="ist-list-description-t"> to deliver value that lasts</p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 col-lg-12 col-xlg-12">
                    <div class="ist-list mt-2">
                        <div class="istlist-image ms-4">
                            <img src="img/icon-award.svg" width="24" height="25" alt="">
                        </div>

                        <div class="ist-list-description">
                            <div class="ist-list-description-title">
                                <p class="ist-list-description-t">Over 3,600 success stories</p>
                            </div>
                            <div class="ist-list-description-para">
                                <p class="ist-list-description-t">including projects for Walmart, eBay, NASA JPL,
                                    Baxter,
                                    IBM</p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 col-lg-12 col-xlg-12">
                    <div class="ist-list mt-2">
                        <div class="istlist-image ms-3">
                            <img src="img/icon-employees.svg" width="24" height="25" alt="">
                        </div>
                        <div class="ist-list-description">
                            <div class="ist-list-description-title">
                                <p class="ist-list-description-t">Over 750 specialists</p>
                            </div>
                            <div class="ist-list-description-para">
                                <p class="ist-list-description-t">who love what they do</p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 col-lg-12 col-xlg-12">
                    <div class="ist-list mt-2">
                        <div class="istlist-image ms-4">
                            <img src="img/icon-document.svg" width="24" height="25" alt="">
                        </div>
                        <div class="ist-list-description">
                            <div class="ist-list-description-title">
                                <p class="ist-list-description-t">ISO 9001 and ISO 27001-certified</p>
                            </div>
                            <div class="ist-list-description-para">
                                <p class="ist-list-description-t">to guarantee service quality and customer data
                                    security
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-8 forcontactmargin">
            <div class="row">

                <div class="col-md-8 contactform">
                    <div class="container">

                        <form action="contactus.php" method="POST" class="form needs-validation" novalidate>

                            <div class="row">
                                <div class="col-6 mt-4 contact-form-description">
                                    <h2> Let's talk</h2>
                                    <?php
                                    if ($insert == true) {
                                        echo "<p class='submitMsg'>Thanks for submitting your form.</p>";
                                        // header('location: ./contactus.php');
                                    }
                                    ?>
                                </div>
                                <div class="col-6 mt-4 form-seal" style=" justify-content: end;
                                  align-items: end;text-align: end;">
                                    <img style="cursor:pointer;cursor:hand;" src="img/siteseal.gif" alt="">
                                </div>
                            </div>
                            <div class="row mt-2 g-3">
                                <div class="col">
                                    <input type="textarea" class="form-control" placeholder="How can we help you?"
                                        id="validationCustomUsername" required class="form-control" name="message"
                                        aria-label="How can we help you?" style="height:100px; padding-bottom: 65px">

                                </div>
                            </div>
                            <div class="row mt-2 g-3">
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" placeholder="Full Name" name="fullname"
                                        aria-label="Full name">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="company" placeholder="Company"
                                        aria-label="Company">
                                </div>
                            </div>
                            <div class="row mt-2 g-3">
                                <div class="col-sm-6">
                                    <input type="email" class="form-control" name="workemail" placeholder="Work Email"
                                        aria-label="Work Email">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="phoneno" placeholder="Phone no#"
                                        aria-label="Phoneno">
                                </div>
                            </div>
                            <div class="contact-button">
                                <button name="submit" class="mt-3 mb-2"
                                    style="background-color: linear-gradient(90deg,#ffe17a,#f5bd00); margin:auto">Send</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-4 contactform-side">
                    <div class="row">
                        <div class="col-12 mt-5">
                            <div class="ms-3">
                                <h5>Get in touch easily</h5>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-12  tel-email-wats  mt-1">
                            <i class=" ms-3 fa-solid fa-phone"></i>
                            <a itemprop="telephone" href="tel:+1-212-456-7890" dir="ltr"> Call us </a>
                        </div>
                    </div>
                    <div class="row  mt-1">
                        <div class="col-12  tel-email-wats  mt-1">
                            <i class="ms-3 fa-solid fa-envelope"></i>
                            <a itemprop="email" dir="ltr" class="underline" href="mailto:info@computech.com.usa">
                                Email us
                            </a>
                        </div>
                    </div>
                    <div class="row  mt-1 mb-2">
                        <div class="col-12  tel-email-wats  mt-1">
                            <i class="ms-3 fa-brands fa-whatsapp"></i>
                            <a href="https://api.whatsapp.com/" target="_blank">Whatsapp
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row mt-4 py-4" style="background-color: #f0f9ff;">
        <div class="col-md-5">
            <div class="long-wrapper">
                <div class="long-wrapper2">
                    <img src="img/financial-times-badge-dark-combined-svg.png" alt="" style="width:150px">
                </div>
                <div class="long-wrapper2">
                    <img src="img\sciencesoft-90933001.png" alt="" style="width:100px">
                </div>
                <div class="long-wrapper2">
                    <img src="img\shield-tier-v-sm-2x.png" alt="" style="width:100px">
                </div>
            </div>
        </div>

        <div class="col-md-7">
            <div class="long-wrapper3 mt-3">
                <div>
                    <b style="color: #2b2826; font-size: 24px; font-weight: 700 line-height: normal; margin-bottom: 0;">
                        In the Spotlight of the IT Industry</b>
                </div>
                <div>
                    <p>CompuTech's commitment to service quality and clients' success is highly praised.</p>
                </div>
            </div>
        </div>
    </div>

</div>



<?php
include ("includes/footer.php")

    ?>