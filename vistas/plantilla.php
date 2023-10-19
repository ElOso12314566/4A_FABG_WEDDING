<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="NextGenerationDev">
    <title>Wedding, Wedding Planer & Event HTML Template</title>
    <!--Favicon img-->
    <link rel="shortcut icon" href="assets/img/favicon/favicon.png">
    <!--Bootstarp min css-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--Bootstarp map css-->
    <link rel="stylesheet" href="assets/css/bootstrap.css.map">
    <!--Owl Carousel css-->
    <link rel="stylesheet" href="assets/css/owl.min.css">
    <!--Owl Carousel Theme css-->
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <!--All min css-->
    <link rel="stylesheet" href="assets/css/all.min.css">
    <!--Animate css-->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!--Magnific popup css-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!--Swiper min css-->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <!--main css-->
    <link rel="stylesheet" href="assets/css/main.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://kit.fontawesome.com/e2ad21b169.js" crossorigin="anonymous"></script>


</head>

<body>

    <!--==== Header Section Here ======= -->
    <header class="header-section">
        <div class="container">
            <div class="header-wrapper">
                <?php if (isset($_GET["pagina"])): ?>
                    <div class="logo-menu">
                        <?php if ($_GET["pagina"] == "inicio"): ?>
                            <a href="index.php?pagina=inicio" class="logo">
                                <img src="assets/img/logo/logo1.png" alt="img">
                            </a>
                        <?php else: ?>
                            <a href="index.php?pagina=inicio" class="logo">
                                <img src="assets/img/logo/logo1.png" alt="img">
                            </a>
                        <?php endif ?>
                    </div>

                    <div class="header-bar d-lg-none">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <ul class="main-menu">
                    <?php if ($_GET["pagina"] == "login"): ?>
                            <li class="active">
                                <a href="index.php?pagina=login">Login</a>
                            </li>
                        <?php else: ?>
                            <li class="active">
                                <a href="index.php?pagina=login">Login</a>
                            </li>
                        <?php endif ?>

                        <?php if ($_GET["pagina"] == "register"): ?>
                            <li class="active">
                                <a href="index.php?pagina=register">Register</a>
                            </li>
                        <?php else: ?>
                            <li class="active">
                                <a href="index.php?pagina=register">Register</a>
                            </li>
                        <?php endif ?>
                        <?php if ($_GET["pagina"] == "inicio"): ?>
                            <li class="active">
                                <a href="index.php?pagina=inicio">Home</a>
                            </li>
                        <?php else: ?>
                            <li class="active">
                                <a href="index.php?pagina=inicio">Home</a>
                            </li>
                        <?php endif ?>

                        <?php if ($_GET["pagina"] == "about"): ?>
                            <li>
                                <a href="index.php?pagina=about">About</a>
                            </li>

                        <?php else: ?>
                            <li>
                                <a href="index.php?pagina=about">About</a>
                            </li>

                        <?php endif ?>

                        <li>
                            <a href="#0">Service <i class="fas fa-chevron-down"></i></a>
                            <ul class="sub-menu">

                                <?php if ($_GET["pagina"] == "service"): ?>
                                    <li class="subtwohober">
                                        <a href="index.php?pagina=service">
                                            <span>Service</span>
                                        </a>
                                    </li>
                                <?php else: ?>
                                    <li class="active">
                                        <a href="index.php?pagina=service">Service</a>
                                    </li>
                                <?php endif ?>

                                <?php if ($_GET["pagina"] == "service-single"): ?>
                                    <li class="subtwohober">
                                        <a href="index.php?pagina=service-single">
                                            <span>Service Single</span>
                                        </a>
                                    </li>
                                <?php else: ?>
                                    <li class="active">
                                        <a href="index.php?pagina=service-single">Service Single</a>
                                    </li>
                                <?php endif ?>
                            </ul>
                        </li>
                        <?php if ($_GET["pagina"] == "story"): ?>
                            <li>
                                <a href="index.php?pagina=story">Our story</a>
                            </li>
                        <?php else: ?>
                            <li class="active">
                                <a href="index.php?pagina=story">Our story</a>
                            </li>
                        <?php endif ?>
                        <li>
                            <a href="#0">Pages <i class="fas fa-chevron-down"></i></a>
                            <ul class="sub-menu">
                                <?php if ($_GET["pagina"] == "event"): ?>
                                    <li class="subtwohober">
                                        <a href="index.php?pagina=event">
                                            <span>Our event</span>
                                        </a>
                                    </li>
                                <?php else: ?>
                                    <li class="active">
                                        <a href="index.php?pagina=event">Our event</a>
                                    </li>
                                <?php endif ?>

                                <?php if ($_GET["pagina"] == "gallery"): ?>
                                    <li class="subtwohober">
                                        <a href="index.php?pagina=gallery">
                                            <span>Gallery</span>
                                        </a>
                                    </li>
                                <?php else: ?>
                                    <li class="active">
                                        <a href="index.php?pagina=gallery">
                                            Gallery
                                        </a>
                                    </li>
                                <?php endif ?>

                                <?php if ($_GET["pagina"] == "error"): ?>
                                    <li class="subtwohober">
                                        <a href="index.php?pagina=error">
                                            <span>Error 404</span>
                                        </a>
                                    </li>
                                <?php else: ?>
                                    <li class="active">
                                        <a href="index.php?pagina=error">
                                            <span>Error 404</span>
                                        </a>
                                    </li>
                                <?php endif ?>

        
                            </ul>
                        </li>
                        <li>
                            <a href="#0">Blog <i class="fas fa-chevron-down"></i></a>
                            <ul class="sub-menu">
                                <?php if ($_GET["pagina"] == "blog"): ?>
                                    <li class="subtwohober">
                                        <a href="index.php?pagina=blog">
                                            <span>Blog</span>
                                        </a>
                                    </li>
                                <?php else: ?>
                                    <li class="active">
                                        <a href="index.php?pagina=blog">
                                            <span>Blog</span>
                                        </a>
                                    </li>
                                <?php endif ?>

                                <?php if ($_GET["pagina"] == "blog-single"): ?>
                                    <li class="subtwohober">
                                        <a href="index.php?pagina=blog-single">
                                            <span>Blog Single</span>
                                        </a>
                                    </li>
                                <?php else: ?>
                                    <li class="active">
                                        <a href="index.php?pagina=blog-single">
                                            <span>Blog Single</span>
                                        </a>
                                    </li>
                                <?php endif ?>
                            </ul>
                        </li>

                        <?php if ($_GET["pagina"] == "invitados"): ?>
                                    <li class="subtwohober">
                                        <a href="index.php?pagina=invitados">
                                            <span>Edit</span>
                                        </a>
                                    </li>
                                <?php else: ?>
                                    <li class="active">
                                        <a href="index.php?pagina=invitados">
                                            <span>Edit</span>
                                        </a>
                                    </li>
                                <?php endif ?>  
                                <?php if ($_GET["pagina"] == "blog-single"): ?>
                            <li>
                                <a href="index.php?pagina=contact">Salir</a>
                            </li>
                        <?php else: ?>
                            <li class="active">
                                <a href="index.php?pagina=contact">
                                    <span>Salir</span>
                                </a>
                            </li>
                        <?php endif ?> 
                    </ul>
                <?php else: ?>
                    <ul class="main-menu">
                        <li class="active">
                            <a href="index.php?pagina=inicio">Home</a>
                        </li>
                        <li>
                            <a href="index.php?pagina=about">About</a>
                        </li>
                        <li>
                            <a href="#0">Service <i class="fas fa-chevron-down"></i></a>
                            <ul class="sub-menu">
                                <li class="subtwohober">
                                    <a href="index.php?pagina=service">
                                        <span>Service</span>
                                    </a>
                                </li>
                                <li class="subtwohober">
                                    <a href="index.php?pagina=service-single">
                                        <span>Service Single</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="story.html">Our story</a>
                        </li>
                        <li>
                            <a href="#0">Pages <i class="fas fa-chevron-down"></i></a>
                            <ul class="sub-menu">
                                <li class="subtwohober">
                                    <a href="index.php?pagina=event">
                                        <span>Our event</span>
                                    </a>
                                </li>
                                <li class="subtwohober">
                                    <a href="index.php?pagina=gallery">
                                        <span>Gallery</span>
                                    </a>
                                </li>
                                <li class="subtwohober">
                                    <a href="index.php?pagina=error">
                                        <span>Error 404</span>
                                    </a>
                                </li>
                                <li class="subtwohober">
                                    <a href="index.php?pagina=invitados">
                                        <span>Guests</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#0">Blog <i class="fas fa-chevron-down"></i></a>
                            <ul class="sub-menu">
                                <li class="subtwohober">
                                    <a href="index.php?pagina=blog">
                                        <span>Blog</span>
                                    </a>
                                </li>
                                <li class="subtwohober">
                                    <a href="index.php?pagina=blog-single">
                                        <span>Blog Single</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="index.php?pagina=contact">Contact</a>
                        </li>
                        <li>
                            <a href="index.php?pagina=login">Login</a>
                        </li>
                    </ul>

                <?php endif ?>
            </div>
        </div>
    </header>
    <!--==== Header Section End ======= -->



    <!--==== Scroll-Up Section Here ======= -->
    <div class="scroll-up">
        <svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!--==== Scroll-Up Section End ======= -->

    <div>

        <?php
        if (isset($_GET["pagina"])) {
            // Lista de páginas permitidas
            if (
                $_GET["pagina"] == "inicio" ||
                $_GET["pagina"] == "about" ||
                $_GET["pagina"] == "service" ||
                $_GET["pagina"] == "story" ||
                $_GET["pagina"] == "gallery" ||
                $_GET["pagina"] == "blog" ||
                $_GET["pagina"] == "contact" ||
                $_GET["pagina"] == "service-single" ||
                $_GET["pagina"] == "event" ||
                $_GET["pagina"] == "error" ||
                $_GET["pagina"] == "blog-single" ||
                $_GET["pagina"] == "login" ||
                $_GET["pagina"] == "register" ||
                $_GET["pagina"] == "invitados" ||
                $_GET["pagina"] == "editar"
            ) {
                $p = $_GET["pagina"];
                include "paginas/" . $p . ".php";
            } else {
                // Cargar página de error 404
                include "paginas/error.php";
            }
        } else {
            include "paginas/inicio.php";
        }
        ?>
    </div>


    <!--=========== Footer Section Here ========= -->
    <div class="footer__section">
        <div class="container">
            <div class="border__area">
                <div class="container">
                    <div class="footer__logo center">
                        <a href="index.php?pagina=inicio">
                            <img src="assets/img/logo/logo.png" alt="footer__logo">
                        </a>
                    </div>
                    <div class="footer__bottom center">
                        <p>© 2023 All Rights Reserved. Designed by <a href="#0"
                                class="text-base-2">NextGenerationDev</a></p>
                        <ul class="footer__icon">
                            <li>
                                <a href="#0"><i class="fa-brands fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="#0"><i class="fa-brands fa-twitter"></i></a>
                            </li>
                            <li class="active">
                                <a href="#0"><i class="fa-brands fa-linkedin-in"></i></a>
                            </li>
                            <li>
                                <a href="#0"><i class="fa-brands fa-whatsapp"></i></a>
                            </li>
                            <li class="mr-none">
                                <a href="#0"><i class="fa-brands fa-instagram"></i></a>
                            </li>
                        </ul>
                        <ul class="footer__menu">
                            <li><a href="index.php?pagina=inicio">home</a></li>
                            <li><a href="index.php?pagina=about">about</a></li>
                            <li><a href="index.php?pagina=service">service</a></li>
                            <li><a href="index.php?pagina=story">Story</a></li>
                            <li><a href="index.php?pagina=gallery">gallery</a></li>
                            <li><a href="index.php?pagina=blog">blog</a></li>
                            <li class="mr-none"><a href="index.php?pagina=contact">contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=========== Footer Section End ========= -->



    <!--Jquery 3 6 0 Min Js-->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <!--Bootstrap bundle Js-->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!--Viewport Jquery Js-->
    <script src="assets/js/viewport.jquery.js"></script>
    <!--Wow min Js-->
    <script src="assets/js/wow.min.js"></script>
    <!--Owl Carousel min Js-->
    <script src="assets/js/owl.min.js"></script>
    <!--Swiper min Js-->
    <script src="assets/js/swiper-bundle.min.js"></script>
    <!--Magnific popup min Js-->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!--main Js-->
    <script src="assets/js/main.js"></script>
</body>

</html>