
<!DOCTYPE html>
<html lang="en">
<!-- /**
*Created with PHP STORM
* Created by @Sridhar,@Nikunj
* Created on 19st November 2020
* Time : 11:00PM
**/ -->
<head>
    <title>Crop Prediction Console</title>
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!--// Meta tag Keywords -->
    <!-- css files -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Bootstrap-css -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <!-- Style-css -->
    <link rel="stylesheet" href="css/font-awesome.css">
    <!-- Font-Awesome-Icons-css -->
    <link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Popup css (for Video Popup) -->
    <link rel="stylesheet" href="css/lightbox.css" type="text/css" media="all">
    <!-- Lightbox css (for Projects) -->
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
    <!-- Flexslider css (for Testimonials) -->
    <!-- //css files -->
    <!-- web-fonts -->
    <link href="//fonts.googleapis.com/css?family=Economica:400,400i,700,700i&amp;subset=latin-ext" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Rasa:300,400,500,600,700" rel="stylesheet">
    <!-- //web-fonts -->
</head>

<body>
<div class="main-agile">
    <!-- banner -->
    <div class="agile-top">
        <div class="col-xs-4 logo">
            <h1>
                <a href="index.html">
                    <span>C</span>rop
                    <span>P</span>rediction
                    <span>C</span>onsole
                </a>
            </h1>
        </div>
        <div class="col-xs-6 header-w3l">
            <ul>
                <li>
                    <a href="#" data-toggle="modal" data-target="#myModal1">
                        <span class="fa fa-unlock-alt" aria-hidden="true"></span> Sign In </a>
                </li>
                <li>
                    <a href="#" data-toggle="modal" data-target="#myModal2">
                        <span class="fa fa-pencil-square-o" aria-hidden="true"></span> Sign Up </a>
                </li>
            </ul>
        </div>
        <!-- navigation -->
        <div class="col-xs-2 menu">
            <a href="" id="menuToggle">
                <span class="navClosed"></span>
            </a>
            <nav>
                <a href="index.html">Home</a>
                <a href="#services" class="scroll">Services</a>
                <a href="#team" class="scroll">Team</a>
                <a href="#contact" class="scroll">Contact Us</a>
            </nav>
        </div>
        <!-- //navigation -->
    </div>
</div>

<!-- signin Model -->
<!-- Modal1 -->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body modal-body-sub_agile">
                <div class="main-mailposi">
                    <span class="fa fa-envelope-o" aria-hidden="true"></span>
                </div>
                <div class="modal_body_left modal_body_left1">
                    <h3 class="agileinfo_sign">Sign In </h3>
                    <p>
                        Sign In now, Let's start your crop prediction. Don't have an account?
                        <a href="#" data-toggle="modal" data-target="#myModal2">
                            Sign Up Now</a>
                    </p>
                    <form action="login_action.php" method = "post">
                        <div class="styled-input agile-styled-input-top">
                            <input type="text" placeholder="User Name" name="username" >
                        </div>
                        <div class="styled-input">
                            <input type="password" placeholder="Password" name="password">
                        </div>
                        <input type="submit" value="Sign In">
                    </form>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- //Modal content-->
    </div>
</div>
<!-- //Modal1 -->
<!-- //signin Model -->
<!-- signup Model -->
<!-- Modal2 -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body modal-body-sub_agile">
                <div class="main-mailposi">
                    <span class="fa fa-envelope-o" aria-hidden="true"></span>
                </div>
                <div class="modal_body_left modal_body_left1">
                    <h3 class="agileinfo_sign">Sign Up</h3>
                    <p>
                        Come join the Us! Let's set up your Account.
                    </p>
                    <form action="register_action.php" method="post">
                        <div class="styled-input">
                            <input type="text" placeholder="Username" name="User" id="CreateUsername">
                        </div>
                        <div class="styled-input">
                            <input type="password" placeholder="Password" name="Createpassword" id="password1">
                        </div>
                        <div class="styled-input">
                            <input type="password" placeholder="Confirm Password" name="ConfirmPassword" id="password2">
                        </div>
                        <input type="submit" value="Sign Up" onsubmit="validatePassword()">
                    </form>
                    <p>
                        <a href="#">By clicking register, I agree to your terms</a>
                    </p>
                </div>
            </div>
        </div>
        <!-- //Modal content-->
    </div>
</div>

<!-- banner-text -->
<div class="slider">
    <div class="callbacks_container">
        <ul class="rslides callbacks callbacks1" id="slider4">
            <li>
                <div class="w3layouts-banner-top banner">
                    <div class="container">
                        <div class="agileits-banner-info">
                            <h3>Save The Food</h3>
                            <p>Farming
                                <i class="fa fa-tree" aria-hidden="true"></i> is a profession of hope.</p>
                            <div class="video-pop-wthree">
                                <div id="small-dialog1" class="mfp-hide w3ls_small_dialog wthree_pop">
                                    <iframe src="https://player.vimeo.com/video/19251347"></iframe>
                                </div>
                            </div>
                            <div class="thim-click-to-bottom">
                                <a href="#about" class="scroll">
                                    <i class="fa  fa-chevron-down"></i>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="w3layouts-banner-top banner-2">
                    <div class="container">
                        <div class="agileits-banner-info">
                            <h3>Save The World</h3>
                            <p>Farming
                                <i class="fa fa-tree" aria-hidden="true"></i> is a profession of hope.</p>
                            <div class="video-pop-wthree">
                                <div id="small-dialog2" class="mfp-hide w3ls_small_dialog wthree_pop">
                                    <iframe src="https://player.vimeo.com/video/19251347"></iframe>
                                </div>
                            </div>
                            <div class="thim-click-to-bottom">
                                <a href="#about" class="scroll">
                                    <i class="fa  fa-chevron-down"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="w3layouts-banner-top banner-3">
                    <div class="container">
                        <div class="agileits-banner-info">
                            <h3>Save The Life</h3>
                            <p>Farming
                                <i class="fa fa-tree" aria-hidden="true"></i> is a profession of hope.</p>
                            <div class="video-pop-wthree">
                                <div id="small-dialog3" class="mfp-hide w3ls_small_dialog wthree_pop">
                                    <iframe src="https://player.vimeo.com/video/19251347"></iframe>
                                </div>
                            </div>
                            <div class="thim-click-to-bottom">
                                <a href="#about" class="scroll">
                                    <i class="fa  fa-chevron-down"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <div class="clearfix"> </div>
    <!-- //banner-text -->
</div>
<!-- //banner -->

<!-- services -->
<div class="agileits-services" id="services">
    <div class="container">
        <div class="title-div">
            <h3 class="tittle">
                <span>S</span>ervices
            </h3>
            <div class="tittle-style">
            </div>
        </div>
        <div class="agileits-services-row">
            <div class="col-md-4 col-xs-6 agileits-services-grids">
                <div class="col-xs-3 wthree-ser">
                    <i class="fa fa-tint" aria-hidden="true"></i>
                </div>
                <div class="col-xs-9 wthree-heading">
                    <h4>Insert</h4>
                </div>
                <div class="clearfix"></div>
                <p>You can insert the data into the database</p>
                <a href="insert.php" target="_blank" class="w3-buttons">Insert</a>
            </div>
            <div class="col-md-4 col-xs-6 agileits-services-grids">
                <div class="col-xs-3 wthree-ser">
                    <i class="fa fa-recycle" aria-hidden="true"></i>
                </div>
                <div class="col-xs-9 wthree-heading">
                    <h4>Select</h4>
                </div>
                <div class="clearfix"></div>
                <p>You can select something from the database.</p>
                <a href="#" data-toggle="modal" data-target="#myModal1" class="w3-buttons">Read More</a>
            </div>
            <div class="col-md-4 col-xs-6 agileits-services-grids">
                <div class="col-xs-3 wthree-ser">
                    <i class="fa fa-tree" aria-hidden="true"></i>
                </div>
                <div class="col-xs-9 wthree-heading">
                    <h4>Save Forests</h4>
                </div>
                <div class="clearfix"></div>
                <p>Itaque earum rerum hic tenetur a sapiente delectus reiciendis maiores alias consequatur aut</p>
                <a href="#" data-toggle="modal" data-target="#myModal1" class="w3-buttons">Read More</a>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="agileits-services-row-2">
            <div class="col-md-4 col-xs-6 agileits-services-grids">
                <div class="col-xs-3 wthree-ser">
                    <i class="fa fa-envira" aria-hidden="true"></i>
                </div>
                <div class="col-xs-9 wthree-heading">
                    <h4>Planting</h4>
                </div>
                <div class="clearfix"></div>
                <p>Itaque earum rerum hic tenetur a sapiente delectus reiciendis maiores alias consequatur aut</p>
                <a href="#" data-toggle="modal" data-target="#myModal1" class="w3-buttons">Read More</a>
            </div>
            <div class="col-md-4 col-xs-6 agileits-services-grids">
                <div class="col-xs-3 wthree-ser">
                    <i class="fa fa-globe" aria-hidden="true"></i>
                </div>
                <div class="col-xs-9 wthree-heading">
                    <h4>Awareness</h4>
                </div>
                <div class="clearfix"></div>
                <p>Itaque earum rerum hic tenetur a sapiente delectus reiciendis maiores alias consequatur aut</p>
                <a href="#" data-toggle="modal" data-target="#myModal1" class="w3-buttons">Read More</a>
            </div>
            <div class="col-md-4 col-xs-6 agileits-services-grids">
                <div class="col-xs-3 wthree-ser">
                    <i class="fa fa-pagelines" aria-hidden="true"></i>
                </div>
                <div class="col-xs-9 wthree-heading">
                    <h4>Plantation</h4>
                </div>
                <div class="clearfix"></div>
                <p>Itaque earum rerum hic tenetur a sapiente delectus reiciendis maiores alias consequatur aut</p>
                <a href="#" data-toggle="modal" data-target="#myModal1" class="w3-buttons">Read More</a>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //services -->

<!-- team -->
<div class="team" id="team">
    <div class="container">
        <div class="title-div">
            <h3 class="tittle">
                <span>M</span>eet Our Team
            </h3>
            <div class="tittle-style">
            </div>
        </div>
        <div class="agileits-team-grids">
            <div class="col-sm-3 col-xs-6 agileits-team-grid">
                <div class="team-info">
                    <img src="images/me.jpeg" alt="">
                    <div class="team-caption">
                        <h4>Nikunj Kunduru</h4>
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-rss"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-xs-6 agileits-team-grid">
                <div class="team-info">
                    <img src="images/sri.jpg" alt="">
                    <div class="team-caption">
                        <h4>Venkata Sridhar</h4>
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-rss"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-xs-6 agileits-team-grid">
                <div class="team-info">
                    <img src="images/adi.jpeg" alt="">
                    <div class="team-caption">
                        <h4>Aditya Adiraju</h4>
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-rss"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-xs-6 agileits-team-grid">
                <div class="team-info">
                    <img src="images/srik.jpeg" alt="">
                    <div class="team-caption">
                        <h4>Srikar</h4>
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-rss"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-xs-6 agileits-team-grid" style="">
                <div class="team-info">
                    <img src="images/har.jpeg" alt="">
                    <div class="team-caption">
                        <h4>Srikar</h4>
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-rss"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //team -->

<!-- contact -->
<div class="contact" id="contact">
    <div class="title-div">
        <h3 class="tittle">
            <span>C</span>ontact Us
        </h3>
        <div class="tittle-style">
        </div>
    </div>
    <div class="col-md-6 map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3917.8015104601345!2d76.89843385081231!3d10.902684359792666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba85c95d3e828eb%3A0x2785cb4510629029!2sAmrita%20Vishwa%20Vidyapeetham%20University!5e0!3m2!1sen!2sin!4v1605344210072!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    <div class="col-md-6 contact_grids_info">
        <h5 class="small-title">Visit Us</h5>
        <div class="col-xs-4 contact_grid">
            <div class="contact_grid_right">
                <h4> OFFICE 1</h4>
                <p>Amritanagar,</p>
                <p> Ettimadai, Tamil Nadu 641112</p>
            </div>
            <div class="address-row">
                <h5>Mail Us</h5>
                <p>
                    <a href="mailto:feedback@me.com"> sri@gmail.com </a>
                </p>
            </div>
            <div class="address-row">
                <h5>Call Us</h5>
                <p>+91-22233-74444</p>
            </div>
        </div>
        <div class="col-xs-4 contact_grid">
            <div class="contact_grid_right">
                <h4> OFFICE 2</h4>
                <p>Choodasandra,</p>
                <p> Karnataka 560035</p>
            </div>
            <div class="address-row">
                <h5>Mail Us</h5>
                <p>
                    <a href="mailto:feedback@me.com"> nike@gmail.com </a>
                </p>
            </div>
            <div class="address-row">
                <h5>Call Us</h5>
                <p>+91-22333-64444</p>
            </div>
        </div>
        <div class="col-xs-4 contact_grid">
            <div class="contact_grid_right">
                <h4>OFFICE 3</h4>
                <p>Clappana P.O Amritapuri,</p>
                <p> Kerala 690525.</p>
            </div>
            <div class="address-row">
                <h5>Mail Us</h5>
                <p>
                    <a href="mailto:feedback@me.com"> adi@gmail.com </a>
                </p>
            </div>
            <div class="address-row">
                <h5>Call Us</h5>
                <p>+91-22333-54444</p>
            </div>
        </div>
    </div>
    <div class="clearfix"> </div>
</div>
<div class="second-contact-agile">
    <div class="col-md-6 form-bg">
        <form action="#" method="post">
            <div class="contact-fields">
                <input type="text" name="HEllo" placeholder="Name" required="">
            </div>
            <div class="contact-fields">
                <input type="email" name="Email" placeholder="Email" required="">
            </div>
            <div class="contact-fields">
                <input type="text" name="Subject" placeholder="Subject" required="">
            </div>
            <div class="contact-fields">
                <textarea name="Message" placeholder="Message" required=""></textarea>
            </div>
            <input type="submit" value="Submit">
        </form>
    </div>
    <div class="col-md-6 address-left-second">
        <div class="address-grid">
            <h5 class="small-title">Contact Info</h5>
            <div class="address-grids">
                <span class="fa fa-volume-control-phone" aria-hidden="true"></span>
                <div class="contact-right">
                    <p>Telephone </p>
                    <span>+91-98728-6789</span>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="address-grids">
                <span class="fa fa-envelope-o" aria-hidden="true"></span>
                <div class="contact-right">
                    <p>Mail </p>
                    <a href="mailto:info@example.com">sridhar@hotmail.com</a>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="address-grids">
                <span class="fa fa-map-marker" aria-hidden="true"></span>
                <div class="contact-right">
                    <p>Location</p>
                    <span>Amritanagar, Ettimadai, Tamil Nadu 641112</span>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="address-grids">
                <span class="fa fa-calendar" aria-hidden="true"></span>
                <div class="contact-right">
                    <p>Working Hours</p>
                    <span>Mon - Sat : 8:00 am to 10:30 pm</span>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
<!-- //contact -->

<!-- footer -->
<div class="footer-bot">
    <div class="w3layouts-newsletter">
        <div class="col-md-7 agileinfo-newsletter">
            <h3>
        </div>
        <div class="clearfix"> </div>
    </div>
    <div class="container">
        <div class="col-xs-3 logo2">
            <h2>
                <a href="index.html">
                    <span>C</span>rop
                    <span>P</span>rediction
                    <span>C</span>onsole
                </a>
            </h2>
        </div>
        <div class="col-xs-9 ftr-menu">
            <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>
                    <a class="scroll" href="#services">Services</a>
                </li>
                <li>
                    <a class="scroll" href="#team">Team</a>
                </li>
                <li>
                    <a class="scroll" href="#contact">Contact Us</a>
                </li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- //footer -->


<!-- js-scripts -->

<!-- jquery -->
<script src="js/jquery-2.1.4.min.js"></script>
<!-- //jquery -->

<script src="js/bootstrap.js"></script>
<!-- Necessary-JavaScript-File-For-Bootstrap -->

<!--  light box js -->
<script src="js/lightbox-plus-jquery.min.js"></script>
<!-- //light box js-->

<!-- stats numscroller-js-file -->
<script src="js/numscroller-1.0.js"></script>
<!-- //stats numscroller-js-file -->

<!-- Baneer-js -->
<script src="js/responsiveslides.min.js"></script>
<script>
    // You can also use "$(window).load(function() {"
    $(function () {
        // Slideshow 4
        $("#slider4").responsiveSlides({
            auto: true,
            pager: true,
            nav: false,
            speed: 500,
            namespace: "callbacks",
            before: function () {
                $('.events').append("<li>before event fired.</li>");
            },
            after: function () {
                $('.events').append("<li>after event fired.</li>");
            }
        });

    });
</script>
<!-- //Baneer-js -->

<!-- navigation -->
<script>
    (function ($) {
        // Menu Functions
        $(document).ready(function () {
            $('#menuToggle').click(function (e) {
                var $parent = $(this).parent('.menu');
                $parent.toggleClass("open");
                var navState = $parent.hasClass('open') ? "hide" : "show";
                $(this).attr("title", navState + " navigation");
                // Set the timeout to the animation length in the CSS.
                setTimeout(function () {
                    console.log("timeout set");
                    $('#menuToggle > span').toggleClass("navClosed").toggleClass("navOpen");
                }, 200);
                e.preventDefault();
            });
        });
    })(jQuery);
</script>
<!-- //navigation -->

<!-- pop-up(for video popup)-->
<script src="js/jquery.magnific-popup.js"></script>
<script>
    $(document).ready(function () {
        $('.popup-with-zoom-anim').magnificPopup({
            type: 'inline',
            fixedContentPos: false,
            fixedBgPos: true,
            overflowY: 'auto',
            closeBtnInside: true,
            preloader: false,
            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-zoom-in'
        });

    });
</script>
<!-- //pop-up-box (syllabus section video)-->

<!-- video js (background) -->
<script src="js/jquery.vide.min.js"></script>
<!-- //video js (background) -->

<!-- smoothscroll -->
<script src="js/SmoothScroll.min.js"></script>
<!-- //smoothscroll -->

<!-- password-script -->
<script>
    window.onload = function () {
        document.getElementById("password1").onchange = validatePassword;
        document.getElementById("password2").onchange = validatePassword;
    }

    function validatePassword() {
        var pass2 = document.getElementById("password2").value;
        var pass1 = document.getElementById("password1").value;
        if (pass1 != pass2)
            document.getElementById("password2").setCustomValidity("Passwords Don't Match");
        else
            document.getElementById("password2").setCustomValidity('');
        //empty string means no validation error
    }
</script>
<!-- //password-script -->

<!-- start-smooth-scrolling -->
<script src="js/move-top.js"></script>
<script src="js/easing.js"></script>
<script>
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();

            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 1000);
        });
    });
</script>
<!-- //end-smooth-scrolling -->

<!-- smooth scrolling-bottom-to-top -->
<script>
    $(document).ready(function () {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
        */
        $().UItoTop({
            easingType: 'easeOutQuart'
        });
    });
</script>
<a href="#" id="toTop" style="display: block;">
    <span id="toTopHover" style="opacity: 1;"> </span>
</a>
<!-- //smooth scrolling-bottom-to-top -->

<!-- flexSlider (for testimonials) -->
<script defer src="js/jquery.flexslider.js"></script>
<script>
    $(window).load(function () {
        $('.flexslider').flexslider({
            animation: "slide",
            start: function (slider) {
                $('body').removeClass('loading');
            }
        });
    });
</script>
<!-- //flexSlider (for testimonials) -->

<!-- //js-scripts -->

</body>

</html>
