<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Your description">
    <meta name="author" content="Your name">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
    <meta property="og:site_name" content="" /> <!-- website name -->
    <meta property="og:site" content="" /> <!-- website link -->
    <meta property="og:title" content="" /> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
    <meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->

    <!-- Webpage Title -->
    <title>Pavo Webpage Title</title>

    <!-- Styles -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <link href="/template-styling/css/bootstrap.css" rel="stylesheet">
    <link href="/template-styling/css/fontawesome-all.css" rel="stylesheet">
    <link href="/template-styling/css/swiper.css" rel="stylesheet">
    <link href="/template-styling/css/magnific-popup.css" rel="stylesheet">
    <link href="/template-styling/css/styles.css" rel="stylesheet">

    <!-- Favicon  -->
    <link rel="icon" href="images/favicon.png">
    <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
</head>

<body data-spy="scroll" data-target=".fixed-top">




    <br><br>
    <section>
        <?= $this->include('templates/navbar'); ?>
        <lottie-player src="https://assets7.lottiefiles.com/private_files/lf30_qnpfavmd.json" background="transparent" speed="1" class="whatsapp-icon" loop autoplay></lottie-player>
        <?= $this->renderSection('content'); ?>

        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h3 class="mt-2 mb-5">Our Location</h3>
                </div>
                <div class="col-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.4961615164125!2d106.07979141436161!3d-6.329698163695517!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e423cb11f3dd239%3A0x31439ef1fb56c994!2sBengkel%20Mobil%20KSC!5e0!3m2!1sen!2sid!4v1637973619622!5m2!1sen!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h4>" Merawat Kendaraan Jadi Mudah " <br> 0811 1206 027 </h4>
                        <div class="social-container">
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-facebook-f fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-twitter fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-pinterest-p fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-instagram fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-youtube fa-stack-1x"></i>
                                </a>
                            </span>
                        </div> <!-- end of social-container -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of footer -->
        <!-- end of footer -->

        <!-- Copyright -->
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="list-unstyled li-space-lg p-small">
                            <li><a href="article.html">Article Details</a></li>
                            <li><a href="terms.html">Terms & Conditions</a></li>
                            <li><a href="privacy.html">Privacy Policy</a></li>
                        </ul>
                    </div> <!-- end of col -->
                    <div class="col-lg-6">
                        <p class="p-small statement">Developed by <a href="#your-link">Mohamad Faid Fadjri</a></p>
                    </div> <!-- end of col -->
                </div> <!-- enf of row -->
            </div> <!-- end of container -->
        </div> <!-- end of copyright -->
        <!-- end of copyright -->
    </section>
    <link rel="stylesheet" href="/css/style.css">

    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

    <!-- Scripts -->
    <script src="/template-styling/js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="/template-styling/js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="/template-styling/js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="/template-styling/js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="/template-styling/js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="/template-styling/js/scripts.js"></script> <!-- Custom scripts -->
</body>

</html>