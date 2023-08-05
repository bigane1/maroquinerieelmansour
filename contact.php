<!DOCTYPE html>
<html lang="en">

<?php
include 'shared/head.php';
?>

<body class="body-wrapper">

<?php
include 'shared/header.php';
?>

    <div class="page-banner-wrap bg-cover" style="background-image: url('assets/img/contact.png')">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="page-heading text-white">
                        <h1>Contacter Maroquinerie El Mansour</h1>
                    </div>
                    <div class="breadcrumb-wrap">
                        <nav>
                            <ol class="breadcrumb">
                              <li class="breadcrumb-item">Besoin d’une information ou d’un conseil?</li>
                             </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-us-wrapper section-padding">
        <div class="container">
            <div class="row eq-height">
                <div class="col-lg-8 col-12">
                    <div class="contact-form"> 
                        <h2>Contactez nous</h2>
                        <h3 class="form-message"></h3>
                        <form action="mail.php" method="post" class="row" id="contact-form">
                            <div class="col-md-6 col-12">
                                <div class="single-personal-info">
                                    <input name="name" type="text" id="fname" placeholder="Nom" required>
                                </div>
                            </div>                            
                            <div class="col-md-6 col-12">
                                <div class="single-personal-info">
                                    <input name="email" type="email" id="email" placeholder="Email" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="single-personal-info">
                                    <input  name="phone" type="text" id="phone" placeholder="Téléphone*" required>
                                </div>
                            </div>                                      
                            <div class="col-md-6 col-12">
                                <div class="single-personal-info">
                                    <input type="text" id="cp" name="cp"  placeholder="Code postale" required>
                                </div>
                            </div>                                      
                            <div class="col-md-12 col-12">
                                <div class="single-personal-info">
                                    <textarea id="message" name="message"  placeholder="message" required></textarea>
                                </div>
                            </div>                                      
                            <div class="col-md-12 col-12">
                                <input class="submit-btn" id="submit" type="submit" value="Envoyer votre message">
                            </div>                                      
                        </form>
                    </div>
                </div>
                <?php
                include 'information.php';
                ?>
            </div>
        </div>
    </div>
   
<!--    <div class="contact-map-wrap">
        <div id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5457.875323165521!2d144.90402300269133!3d-37.792722838344716!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad646b5d2ba4df7%3A0x4045675218ccd90!2sMelbourne%20VIC%2C%20Australia!5e0!3m2!1sen!2sbd!4v1612018663424!5m2!1sen!2sbd" frameborder="0" style="border:0; width:100%" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>-->


<?php
include 'shared/footer.php';
?>
    <!--  ALl JS Plugins
    ====================================== -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/modernizr.min.js"></script>
    <script src="assets/js/jquery.easing.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/imageload.min.js"></script>
    <script src="assets/js/scrollUp.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/magnific-popup.min.js"></script>
    <script src="assets/js/counterup.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/metismenu.js"></script>
    <script src="assets/js/ajax-mail.js"></script>
    <script src="assets/js/active.js"></script>
</body>

</html>
