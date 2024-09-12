<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>1WayDev</title>
    <meta name="robots" content="noindex, follow">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/assetsfront/images/1waydev_logo.png">

    <!-- CSS (Font, Vendor, Icon, Plugins & Style CSS files) -->

    <!-- Font CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Epilogue:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">

    <!-- Vendor CSS (Bootstrap & Icon Font) -->
    <link rel="stylesheet" href="/assetsfront/css/bootstrap.min.css">

    <!-- Font Awesome icon -->
    <link rel="stylesheet" href="/assetsfront/css/font-awesome.min.css">

    <!-- Remixicon icon -->
    <link rel="stylesheet" href="/assetsfront/css/remixicon.css">

    <!-- Animation Css -->
    <link rel="stylesheet" href="/assetsfront/css/animation.css">

    <!-- Odometer Counter Css -->
    <link rel="stylesheet" href="/assetsfront/css/odometer.min.css">

    <!-- Skeletabs Tab Css -->
    <link rel="stylesheet" href="/assetsfront/css/skeletabs.css">

    <!-- Slick Slider Css -->
    <link rel="stylesheet" href="/assetsfront/css/slick.css">

    <!-- Owl Carousel Slider Css -->
    <link rel="stylesheet" href="/assetsfront/css/owl.carousel.css">

    <!-- Magnific video & image Popup Css -->
    <link rel="stylesheet" href="/assetsfront/css/magnific-popup.css">

    <!-- Rs Layouts Css -->
    <link rel="stylesheet" href="/assetsfront/css/rs-layouts.css">

    <!-- Style CSS -->
    <link rel="stylesheet" href="/assetsfront/css/style.css">
</head>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

@if(session('success'))
<div id="alert-message" class="hidden">
    <script>
        $(document).ready(function() {
            toastr.options = {
                "positionClass": "toast-top-center",
                "progressBar": true,
                "timeOut": 4000
            };
            toastr.success('{{ session('success') }}');
        });
    </script>
</div>
@endif


<body class="home-2">

    <!--===== Header 2 Start =====-->
    <header class="rs-header rs-header-2" id="rs-header">
        <div class="rs-header__main-box">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="rs-header__main">
                            <div class="rs-logo-area">
                                <a href="index-3.html"><img src="/assetsfront/images/1waydev_logo.png" alt=""></a>
                            </div>
                            <div class="rs-header-rightside">
                                <div class="main-menu hidden-md">
                                    <ul class="nav-menu">
                                        <li><a href="/">Acceuil</a></li>
                                        <li><a href="/login">Se connecter</a> </li>
                                        
                                        <li><a href="/contact">Contacter nous</a> </li>
                                    </ul> <!-- //.nav-menu -->
                                </div>
                              
                               
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--===== Header 2 Ends =====-->


    <!--===== OFF CANVAS WRAP 2 Start =====-->
    <div class="off-canvas-wrap off-canvas-wrap-2">
        <div class="overly"></div>
        <div class="off-canvas-widget">
            <a href="#" class="off-canvas-close"><i class="ri-close-line"></i></a>
            <div class="widget about-widget">
                <a href="index-3.html"><img src="/assetsfront/images/logo-2.png" alt=""></a>
                <p class="mt-20 mb-20">When we go to the office every day, we carry on a time-honored tradition of getting to know our clients on a first-name basis, and personally meeting their insurance needs. It's a tradition</p>
            </div>
            <div class="off-canvas-menu">
                <ul class="nav-menu">
                <li><a href="/">Acceuil</a></li>
                                        <li><a href="/login">Se connecter</a> </li>
                                        <li><a href="/register">Espace assureur</a></li>
                                        
                                        <li><a href="/contact">Contacter nous</a> </li>
                </ul> <!-- //.nav-menu -->
            </div>
            <div class="widget gallery-widget">
                <div class="rs-gallery-item">
                    <img src="/assetsfront/images/galley-thumb-1.jpg" alt="">
                </div>
                <div class="rs-gallery-item">
                    <img src="/assetsfront/images/galley-thumb-2.jpg" alt="">
                </div>
                <div class="rs-gallery-item">
                    <img src="/assetsfront/images/galley-thumb-3.jpg" alt="">
                </div>
                <div class="rs-gallery-item">
                    <img src="/assetsfront/images/galley-thumb-4.jpg" alt="">
                </div>
                <div class="rs-gallery-item">
                    <img src="/assetsfront/images/galley-thumb-5.jpg" alt="">
                </div>
                <div class="rs-gallery-item">
                    <img src="/assetsfront/images/galley-thumb-6.jpg" alt="">
                </div>
            </div>
            <div class="widget contact-widget">
                <ul>
                    <li>
                        <i class="ri-map-pin-2-line"></i>
                        305 Royal Track Suite 019, USA
                    </li>
                    <li>
                        <i class="ri-phone-line"></i>
                        <a href="tel:+10910910920">+10910-910920</a>
                    </li>
                    <li>
                        <i class="ri-mail-send-line"></i>
                        <a href="mailto:info@company.com">info@company.com</a>
                    </li>
                    <li>
                        <i class="ri-time-line"></i>
                        10:00 - 19:00
                    </li>
                </ul>
            </div>
            <div class="widget social-widget">
                <ul>
                    <li>
                        <a href="#"><i class="ri-facebook-fill"></i></a>
                        <a href="#"><i class="ri-twitter-x-fill"></i></a>
                        <a href="#"><i class="ri-linkedin-line"></i></a>
                        <a href="#"><i class="ri-instagram-line"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--===== OFF CANVAS WRAP 2 Ends =====-->


    <!--===== Scroll up and prograss Start =====-->
    <div id="scrollUp" class="scroll-up-2">
        <svg class="arrowup" viewBox="0 0 24 24" width="18" height="18">
            <path d="M13 7.828V20h-2V7.828l-5.364 5.364-1.414-1.414L12 4l7.778 7.778-1.414 1.414L13 7.828z" fill="#fff"></path>
        </svg>
        <svg class="scrollprogress" width="40" height="40">
            <circle class="progress-circle" cx="20" cy="20" r="18" stroke-width="2" fill="none" stroke="#fff" stroke-dasharray="113.1" stroke-dashoffset="113.1"></circle>
        </svg>
    </div>
    <!--===== Scroll up and prograss Ends =====-->

    <!-- ==== Preloader area start here ==== -->
    <div id="pre-load">
        <div id="loader" class="loader">
            <div class="loader-container">
                <div class='loader-icon'><img src="/assetsfront/images/fav.png" alt=""></div>
            </div>
        </div>
    </div>
    <!-- ==== Preloader area end here ==== -->

    <!-- ==== banner 2 Section Start ==== -->
    <section class="rs-banner rs-banner-2 pt-150 pb-160 mt-135">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="rs-banner__content">
                        <div class="top-heading wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0s">
                            <span> 1WayDev Assurance  </span>
                        </div>
                        <h1 class="title wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.4s">la tranquillité d'esprit pour tous nos   <span>employés</span></h1>
                        <!-- <a id="popup" class="main-btn wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.8s" href="#" o>En savoir plus <i class="ri-arrow-right-line"></i></a>                    </div> -->
                </div>
            </div>
        </div>
        <div class="rs-banner-thumb wow slideInUp" data-wow-duration="1.5s" data-wow-delay="0s">
            <img src="/assetsfront/images/bnr-h2-img1.png" alt="">
        </div>
    </section>
    <!-- ==== banner 2 Section Ends ==== -->
    <section class="rs-about-featured-2 pt-120" style="    padding-top: 50px;
    ">
        @yield('content')
    </section>
    <!-- ==== About Fetaured Section Start ==== -->

    <section class="rs-about-featured-2 pt-120">
    </section>
    <!-- ==== Footer 2 Section Start ==== -->
    <footer class="rs-footer rs-footer-2 pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="rs-footer__about">
                        <a href="index-2.html"><img src="/assetsfront/images/1waydev_logo.png" alt=""></a>
                        <p class="desc">"Protégez votre avenir avec 1WayDev - votre partenaire de confiance pour une assurance complète et fiable. Ensemble, nous garantissons votre tranquillité d'esprit."</p>
                        <ul>
                            <li><a href="#"><i class="ri-facebook-fill"></i></a></li>
                            <li><a href="#"><i class="ri-twitter-x-fill"></i></a></li>
                            <li><a href="#"><i class="ri-linkedin-fill"></i></a></li>
                            <li><a href="#"><i class="ri-instagram-line"></i></a></li>
                        </ul>
                    </div>
                </div>
               
                
                <div class="col-lg-3 col-md-6 ">
                    <div class="rs-footer__contact ">
                        <h4 class="title">Contacter nous</h4>
                        <ul>
                           <!-- <li>
                                <div class="rs-icon">
                                    <i class="ri-map-2-line"></i>
                                </div>
                                <span>************ </span>
                            </li>-->
                            <li>
                                <div class="rs-icon">
                                    <i class="ri-phone-line"></i>
                                </div>
                                <a href="tel:+880155-69569">71 690 388</a>
                            </li>
                            <li>
                                <div class="rs-icon">
                                    <i class="ri-mail-send-line"></i>
                                </div>
                                <a href="mailto:isurigo@gmail">contact@1waydev.com</a>
                            </li>
                            <li>
                                <div class="rs-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <a href="mailto:isurigo@gmail">61, bis av. De l’UMA imm ENNESRINE 1er étage La Soukra 2036 Ariana</a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="rs-footer__bottom">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="rs-footer__copyright-text">
                                    <p></a></p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="rs-footer__bottom-link">
                                    <ul>
                                        <li><a href="#">Sitemap</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Terms of use</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ==== Footer 2 Section Ends ==== -->

    <!-- JS Vendor, Plugins & Activation Script Files -->

    <!-- bootstrap JS -->
    <script src="/assetsfront/js/bootstrap.bundle.min.js"></script>

    <!-- Jquery JS -->
    <script src="/assetsfront/js/jquery.min.js"></script>

    <!-- Odometer Counter JS -->
    <script src="/assetsfront/js/odometer.min.js"></script>
    <script src="/assetsfront/js/jquery.appear.min.js"></script>

    <!-- Ajax Active JS -->
    <script src="/assetsfront/js/ajax-contact.js"></script>

    <!-- wow Animation JS -->
    <script src="/assetsfront/js/wow.min.js"></script>

    <!-- PageScroll2id onepage JS -->
    <script src="/assetsfront/js/jquery.malihu.PageScroll2id.min.js"></script>

    <!-- skeletabs Tab JS -->
    <script src="/assetsfront/js/skeletabs.js"></script>

    <!-- Marquee Items JS -->
    <script src="/assetsfront/js/jquery.marquee.min.js"></script>

    <!-- skill Progress JS -->
    <script src="/assetsfront/js/waypoint.min.js"></script>
    <script src="/assetsfront/js/skill.bars.jquery.js"></script>

    <!-- Owl Carousel Slider JS -->
    <script src="/assetsfront/js/owl.carousel.min.js"></script>

    <!-- slick Slider JS -->
    <script src="/assetsfront/js/slick.min.js"></script>

    <!-- Magnific video & image Popup JS -->
    <script src="/assetsfront/js/jquery.magnific-popup.min.js"></script>

    <!-- Activation JS -->
    <script src="/assetsfront/js/main.js"></script>

</body>

</html>