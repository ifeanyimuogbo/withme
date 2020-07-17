<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title></title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://fonts.googleapis.com/css2?family=Manrope&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />
    <link rel="stylesheet" href="src/styles/owlcarousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="src/styles/owlcarousel/owl.theme.default.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/css/lightbox.min.css" />

    <link rel="stylesheet" href="src/styles/style.css" />
</head>

<body id='light'>
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-light bg-faded justify-content-between mt-1 mt-sm-2 mt-md-3">
        <a class="navbar-brand">
            <img src="assets/logo.svg" />
        </a>
        <a href="#prereg">
            <button class="btn" type="submit">
                Pre Register
            </button>
        </a>

    </nav>

    <!-- HERO -->
    <div class="vh-100 px-0 mx-0 row w-100 hero" style="position: relative;">
        <div class="signal wow animate__animated animate__zoomIn animate__slower">
            <svg width="1015" height="1206" viewBox="0 0 1015 1206" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g opacity="0.5">
                    <circle cx="412" cy="603" r="107.5" stroke="#0062F4" stroke-opacity="0.8" />
                    <circle cx="412" cy="603" r="150.5" stroke="#0062F4" stroke-opacity="0.7" />
                    <circle cx="412" cy="603" r="199.5" stroke="#0062F4" stroke-opacity="0.6" />
                    <circle cx="412" cy="603" r="260.5" stroke="#0062F4" stroke-opacity="0.5" />
                    <circle cx="412" cy="603" r="353.5" stroke="#0062F4" stroke-opacity="0.4" />
                    <circle cx="412" cy="603" r="452.5" stroke="#0062F4" stroke-opacity="0.3" />
                    <circle cx="412" cy="603" r="602.5" stroke="#0062F4" stroke-opacity="0.2" />
                </g>
                <circle cx="538.5" cy="167.5" r="10.5" fill="#0062F4" />
                <circle cx="151.5" cy="840.5" r="12.5" fill="#0062F4" />
            </svg>
        </div>
        <div class="mockup" id="mockup">
            <img src="assets/mockup.png" class="img-fluid" />
        </div>
        <div class="col-12 col-lg-3 whitehero" style="z-index: 2;"></div>
        <div class="col-12 col-lg-9 jumbo d-flex justify-content-center align-items-center mr-0" id="jumbo">
            <div class="infodiv" id="prereg">
                <!-- <div id="title-carousel" class="owl-carousel"> -->
                <h1 class="item">Get notified when your friends are near.</h1>
                <!-- <h1 class="item">With•Me helps you stay connected to pals.</h1>
                    <h1 class="item">Get connected even without an internet connection.</h1>
                </div> -->

                <p>Find out where your friends are and stay in touch with them</p>
                <form class="form-inline" method="post" action="">

                    <div class="form-group mx-sm-1 mb-2" style="z-index: 3;">
                        <input type="email" class="form-control" id="email" name="email"
                            placeholder="Enter your email address here" />
                    </div>
                    <button type="submit" class="btn btn-primary mb-2 ml-1" style="z-index: 3;">
                        Pre Register
                    </button>

                </form>

                <?php include "connection.php" ?>

                <p class="mt-4">
                    Available on
                    <i class="fa fa-android ml-3 mx-1" aria-hidden="true"></i>
                    <i class="fa fa-apple mx-1" aria-hidden="true"></i>
                </p>
            </div>
        </div>
    </div>

    <!-- Previews Section -->
    <div class="container-fluid mx-0 previews row">
        <div class="preview-pane col-12 wow animate__animated animate__fadeInUp">
            <div class="rect-28">
                <img src="assets/Rectangle28.png" class="d-block img-fluid" />
            </div>

            <div class="rect-27">
                <img src="assets/Rectangle27.png" class="d-block img-fluid" />
            </div>
            <div class="rect-29">
                <img src="assets/Rectangle29.png" class="d-block img-fluid" />
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="container-fluid px-0 mx-0 ctad py-max pos-relative">
        <div class="cta">
            <h1 class="mxw-400">
                Unique App for Awesome Friends.
            </h1>
            <div class="cta-text d-flex justify-content-end">
                <div>
                    <p class="mb-0 mb-md-n1 mxw-700">
                        Get notified when one of your contacts is present near you. Chat
                        and talk with them directly from the app.
                    </p>
                    <hr class="wow animate__animated animate__slideInLeft" />
                </div>
            </div>
        </div>
        <div class=" largecircl">
            <svg width="1136" height="1426" viewBox="0 0 1136 1426" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="713" cy="713" r="712.5" stroke="#0062F4" stroke-opacity="0.5" />
                <circle cx="998.5" cy="512.5" r="12.5" fill="#0062F4" />
            </svg>
        </div>
        <div class="smallcross wow animate__animated animate__rotateIn animate__infinite animate__slower">
            <svg width="150" height="150" viewBox="0 0 150 150" fill="none" xmlns="http://www.w3.org/2000/svg">
                <line x1="76" y1="4.37114e-08" x2="76" y2="150" stroke="#0062F4" stroke-opacity="0.5"
                    stroke-width="2" />
                <line x1="150" y1="76" x2="-8.74228e-08" y2="76" stroke="#0062F4" stroke-opacity="0.5"
                    stroke-width="2" />
            </svg>
        </div>
        <div class="smallccl wow animate__animated animate__heartBeat animate__infinite animate__slow">
            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="20" cy="20" r="20" fill="#0062F4" />
            </svg>
        </div>
    </div>

    <!-- Gallery Section -->
    <div class="container-fluid mx-0 row gal py-max pb-200 pr-0 pl-100">
        <div class="col pr-0">
            <h1>Gallery</h1>
            <div id="carousel" class="owl-carousel mt-4">
                <div class="item" id="splash-gal">
                    <a href="https://withmeapp.herokuapp.com/assets/preview-splash.png" data-lightbox="gallery">
                        <img src="assets/preview-splash.png" class="img-fluid d-block" /></a>
                </div>
                <div class="item" id="login-gal">
                    <a href="https://withmeapp.herokuapp.com/assets/preview-login.png" data-lightbox="gallery">
                        <img src="assets/preview-login.png" class="img-fluid d-block" /></a>
                </div>
                <div class="item" id="home-gal">
                    <a href="https://withmeapp.herokuapp.com/assets/preview-home.png" data-lightbox="gallery">
                        <img src="assets/preview-home.png" class="img-fluid d-block" /></a>
                </div>

                <div class="item" id="settings-gal">
                    <a href="https://withmeapp.herokuapp.com/assets/preview-settings.png" data-lightbox="gallery">
                        <img src="assets/preview-settings.png" class="img-fluid d-block" /></a>
                </div>
                <div class="item" id="profile-gal">
                    <a href="https://withmeapp.herokuapp.com/assets/preview-settingsprofile.png"
                        data-lightbox="gallery">
                        <img src="assets/preview-settingsprofile.png" class="img-fluid d-block" /></a>
                </div>
                <div class="item" id="notifications-gal">
                    <a href="https://withmeapp.herokuapp.com/assets/preview-notifications.png" data-lightbox="gallery">
                        <img src="assets/preview-notifications.png" class="img-fluid d-block" /></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Section -->
    <footer class="container-fluid mx-0 px-0">
        <input type="checkbox" id="lightmode" onclick="toggleLight()" onchange="handleToggle()" checked
            data-toggle="toggle" data-on="<i class='fa fa-lightbulb-o'></i>  Light"
            data-off="<i class='fa fa-lightbulb-o'></i>  Dark" data-onstyle="light" data-offstyle="dark" data-size="sm"
            data-style="ios" />
        <div class="d-flex flex-column flex-md-row justify-content-md-between foot py-max px-foot" id="footer">
            <h1>Seems interesting?</h1>
            <form id="prereg" class="form-inline" method="post" action="">

                <div class="form-group mx-sm-1 mb-2">
                    <input type="email" class="form-control" id="email" name="email"
                        placeholder="Enter your email address here" />
                </div>
                <button type="submit" class="btn btn-primary mb-2 ml-1" style="z-index: 3;">
                    Pre Register
                </button>

            </form>
        </div>
        <div class="d-flex justify-content-center copyrights py-3" id="copyrights">
            Copyright 2020 © with me
        </div>
    </footer>
    <script>
    function toggleLight() {
        // Get the checkbox
        var checkBox = document.getElementById('lightmode');
        // Get the output text
        var text = document.getElementById('text');

        // If the checkbox is checked, display the output text
        if (checkBox.checked == false) {
            document.getElementById('light').style.background = '#F27F7FE';

            document.getElementById('mockup').innerHTML = '<img src="assets/mockup.png" class="img-fluid" />'
            document.getElementById('light').style.color = '#18345f';
            document.getElementById('jumbo').style.background = '#e5effe';
            document.getElementById('footer').style.background = '#e5effe';
            document.getElementById('copyrights').style.background = '#18345f';
            // document.getElementById('mockup').innerHTML = "<img src='assets/dark-mockup.png' class='img-fluid'/>"
            document.getElementById('splash-gal').innerHTML =
                "<a href='https://withmeapp.herokuapp.com/assets/preview-settings.png' data-lightbox='gallery'>" +
                "<img src = 'assets/preview-settings.png' class = 'img-fluid d-block' / > " + " < /a>"
            document.getElementById('login-gal').innerHTML =
                "<a href='https://withmeapp.herokuapp.com/assets/preview-login.png' data-lightbox='gallery'>" +
                "<img src = 'assets/preview-login.png' class = 'img-fluid d-block' / > " + " < /a>"
            document.getElementById('home-gal').innerHTML =
                "<a href='https://withmeapp.herokuapp.com/assets/preview-home.png' data-lightbox='gallery'>" +
                "<img src = 'assets/preview-home.png' class = 'img-fluid d-block' / > " + " < /a>"
            document.getElementById('settings-gal').innerHTML =
                "<a href='https://withmeapp.herokuapp.com/preview-settings.png' data-lightbox='gallery'>" +
                "<img src = 'assets/preview-settings.png' class = 'img-fluid d-block' / > " + " < /a>"
            document.getElementById('profile-gal').innerHTML =
                "<a href='https://withmeapp.herokuapp.com/assets/preview-settingsprofile.png' data-lightbox='gallery'>" +
                "<img src = 'assets/preview-settingsprofile.png' class = 'img-fluid d-block' / > " + " < /a>"
            document.getElementById('notifications-gal').innerHTML =
                "<a href='https://withmeapp.herokuapp.com/preview-notifications.png' data-lightbox='gallery'>" +
                "<img src = 'assets/preview-notifications.png' class = 'img-fluid d-block' / > " + " < /a>"
        } else if (checkBox.checked == true) {
            document.getElementById('mockup').innerHTML = '<img src="assets/dark-mockup.png" class="img-fluid" />'
            document.getElementById('light').style.background = '#0C0C0D';
            document.getElementById('light').style.color = '#fff';
            document.getElementById('jumbo').style.background = '#080808';
            document.getElementById('footer').style.background = '#080808';
            document.getElementById('copyrights').style.background = '#080808';
            // document.getElementById('mockup').innerHTML = "<img src='assets/dark-mockup.png' class='img-fluid'/>"
            document.getElementById('splash-gal').innerHTML =
                "<a href='https://withmeapp.herokuapp.com/assets/dark-notifications.png' data-lightbox='gallery'>" +
                "<img src = 'assets/dark-notifications.png' class = 'img-fluid d-block' / > " + " < /a>"
            document.getElementById('login-gal').innerHTML =
                "<a href='https://withmeapp.herokuapp.com/assets/dark-login.png' data-lightbox='gallery'>" +
                "<img src = 'assets/dark-login.png' class = 'img-fluid d-block' / > " + " < /a>"
            document.getElementById('home-gal').innerHTML =
                "<a href='https://withmeapp.herokuapp.com/assets/dark-home.png' data-lightbox='gallery'>" +
                "<img src = 'assets/dark-home.png' class = 'img-fluid d-block' / > " + " < /a>"
            document.getElementById('settings-gal').innerHTML =
                "<a href='https://withmeapp.herokuapp.com/assetsdark-settings.png' data-lightbox='gallery'>" +
                "<img src = 'assets/dark-settings.png' class = 'img-fluid d-block' / > " + " < /a>"
            document.getElementById('profile-gal').innerHTML =
                "<a href='https://withmeapp.herokuapp.com/assets/dark-settingsprofile.png' data-lightbox='gallery'>" +
                "<img src = 'assets/dark-settingsprofile.png' class = 'img-fluid d-block' / > " + " < /a>"
            document.getElementById('notifications-gal').innerHTML =
                "<a href='https://withmeapp.herokuapp.com/assetsdark-notifications.png' data-lightbox='gallery'>" +
                "<img src = 'assets/dark-notifications.png' class = 'img-fluid d-block' / > " + " < /a>"
        }
    }
    </script>
    <script src="src/js/index.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
    <!-- WOW JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"
        integrity="sha256-z6FznuNG1jo9PP3/jBjL6P3tvLMtSwiVAowZPOgo56U=" crossorigin="anonymous"></script>
    <script>
    new WOW().init();
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.0/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.14.2/TweenMax.min.js"></script>
    <script src="src/js/owlcarousel/jquery.min.js"></script>
    <script src="src/js/owlcarousel/owl.carousel.js"></script>
    <script>
    $(document).ready(function() {
        jQuery('#carousel').owlCarousel({
            autoplay: false,
            lazyLoad: true,
            loop: false,
            margin: 10,

            animateOut: 'slideOutDown',
            animateIn: 'flipInX',
            stagePadding: '15',
            responsiveClass: true,
            autoHeight: true,
            autoplayTimeout: 3000,
            smartSpeed: 450,
            nav: false,
            responsive: {
                0: {
                    items: 1,
                },

                600: {
                    items: 2,
                },

                1024: {
                    items: 3,
                },

                1366: {
                    items: 3,
                },
            },
        });
    });
    </script>
    <script>
    $(document).ready(function() {
        jQuery('#title-carousel').owlCarousel({
            autoplay: true,
            loop: true,
            // animateOut: 'slideOutDown',
            // animateIn: 'flipInX',
            responsiveClass: true,
            autoHeight: true,
            autoplayTimeout: 3000,
            smartSpeed: 450,
            nav: false,
            responsive: {
                0: {
                    items: 1,
                },

                600: {
                    items: 1,
                },

                1024: {
                    items: 1,
                },

                1366: {
                    items: 1,
                },
            },
        });
    });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/js/lightbox.min.js">
    </script>


</body>

</html>