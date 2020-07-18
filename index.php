<?php
$msg='';

if (isset($_REQUEST['action'])) {
    $ubname = $_REQUEST['your-name'];
    $ubname= str_replace("'","''",$ubname);

    $uemail = $_REQUEST['your-email'];
    $uemail =	str_replace("'","''",$uemail );

    $uquery = $_REQUEST['your-message'];
    $uquery=	str_replace("'","''",$uquery);

    $body = "Dear,<br><br><b> <u>Contact details</u>:</b>";
    $body .="<br><b>Name of Person :</b> $ubname"; 
    $body .="<br><b>Email :</b> $uemail"; 
    $body .="<br><b>Message :</b> $uquery"; 

    //echo "body=".$body;

    $to =  "rosevelt24@yahoo.com";
 
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= "From: $uemail";
    $subject = "Enquiry";

    mail($to, $subject, $body, $headers);
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets\css\bootstrap.min.css">
    <link rel="stylesheet" href="assets\css\custom.css">
    <link rel="stylesheet" href="assets\css\responsive.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <title>R&A Builders</title>
</head>

<body>
    <div class="videoBg" style="display:none;">
        <video preload = "auto" id="introVideo" controls="false" preload="true" muted="muted"  poster="" >
            <source src="assets/video/sea.mp4" type="video/mp4">
        </video>
        <button class="mute-video"></button>
        <img src="assets/img/videoLogo.png" class="videoLogo"/>
    </div>

    <header>
        <nav id="navbar" class="navbar navbar-expand-md navbar-dark"  data-toggle="sticky-onscroll">
            <!-- Brand -->
            <a class="navbar-brand my-4 mx-5 logo" href="index.php"><img src="assets/img/logo.png" alt="logo" class="img-fluid"
                    width=""></a>

            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Navbar links -->
            <div class="collapse navbar-collapse mt-5" id="collapsibleNavbar">

                <ul class="navbar-nav ml-auto" id="navbarNav">
                    <li class="nav-item active mx-5">
                        <a class="nav-link" href="index.php">Home </a>
                    </li>
                    <li class="nav-item mx-5">
                        <a class="nav-link" href="about.html">About Us </a>
                    </li>
                    <li class="nav-item dropdown mx-5">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Projects
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" style="color:black" href="current_project.html">Current</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" style="color:black" href="completed_project.html">Completed</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="upcoming_project.html" style="color:black">Upcoming</a>
                        </div>
                    </li>

                    <li class="nav-item mx-5">
                        <a class="nav-link" href="testimonial.html">Testimonials</a>
                    </li>
                    <li class="last-nav  nav-item ml-5">
                        <a class="nav-link" href="contact_us.php">Contact Us</a>
                    </li>
                </ul>
            </div>
            <!-- call now option -->
            <div class="callInfo float-right mt-2 text-right">
                <div class="d-block">
                    <span style=" display: block;"><a href="tel:+91 98223 82898" class=""><img src="assets/img/call.png" alt="call" class="img-fluid mr-2"
                        width=""> Call Now </span><span style="font-size: 16pt; color: #FEE400;">+91 98223 82898</a></span>
                </div>
            </div>
        </nav>
    </header>

    <!-- slider -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        </ol>
         <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img class="d-block w-100" src="assets/img/slider2.jpg" class="img-fluid" alt="slider image">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="assets/img/slider.png" class="img-fluid" alt="slider image">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="assets/img/slider1.jpg" class="img-fluid" alt="slider image">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="assets/img/slider3.png" class="img-fluid" alt="slider image">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="assets/img/slider4.jpg" class="img-fluid" alt="slider image">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
       
    <!-- details section -->
    <div class="container-fluid">
        <div class="row intro-section">
            <div class="col-md-1"></div>
            <div class="col-md-10 px-5">
                <h1>
                    YOUR <span style="zoom: 1.3;">DREAM HOME</span> IS JUST A PHONE CALL AWAY !!
                </h1>
                <p class="my-4">
                    R&A Builders established in the year 2010 have been one of the most trusted names in the real estate
                    segment in Goa ever since.
                </p>
                <div class="my-4">
                    <a href="#" class="btn">CALL NOW !!</a>
                </div>
            </div>

        </div>
        <!-- proprietor quote section -->
        <div class="row intro-quote">
            <div class="col-md-1"></div>
            <div class="col-md-10 px-5 pt-5 text-center">
                <h1 class="mt-3 px-5">
                    <q>We strive for <strong>excellence</strong>, and exceeding <strong>customer satisfaction is our
                            goal.</strong></q>
                </h1>

                <p>- Rosevelt Valadares, Proprietor, R&A Builders</p>
            </div>
        </div>
    </div>
    <!-- project section -->
    <div class="container-fluid project-section">
        <div class="row">
            <div class="col-md-12 px-5 text-center">
                <h1>PROJECTS</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <img src="assets/img/appartment.png" alt="aparttments" class="img-fluid zoom">
                <a href="completed_project.html">Completed</a>
            </div>
            <div class="col-md-4">
                <img src="assets/img/row_houses.png" alt="row houses" class="img-fluid zoom">
                <a href="current_project.html">current</a>
            </div>
            <div class="col-md-4">
                <img src="assets/img/commercial.png" alt="commercial" class="img-fluid zoom">
                <a href="upcoming_project.html">upcoming</a>
            </div>
        </div>
    </div>
    <!-- testimonial -->
    <div class="container-fluid testimonial-section">
        <div class="row" style="background-color: #FEE400;">
            <div class="col-md-1"></div>
            <div class="col-md-10 text-center"><h1 class="mt-4 mb-2">our clients</h1></div>
        </div>
    </div>

    <div id="carouselExampleControls" class="carousel slide carouselTestimonial" data-ride="carousel" data-interval="9000" style="position: relative;">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container-fluid">
                    <div class="row testimonial-bg">
                        <div class="col-md-1"></div>
                        <div class="col-md-7">
                            <p><q>R&A Builders led by Mr. Rosevelt Valadares build truely quality residential complexes. His
                                    services are great examples of customer satisfaction</q></p>
                            <h3><b>Mr. Hemant Kumar Bankhede</b><br>Pharmaceutical Industry professional</h3>
                        </div>
                        <div class="col-md-3 profile">
                            <img src="assets/img/profile.png" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container-fluid">
                    <div class="row testimonial-bg">
                        <div class="col-md-1"></div>
                        <div class="col-md-3 profile">
                            <img src="assets/img/profile1.png" class="img-fluid">
                        </div>
                        <div class="col-md-7">
                            <p><q>He has never compromised on the quality of building material. I recommend him to anyone desiring to purchase an apartment.</q></p>
                            <h3><b>Mr. Olivio Fernandes</b></h3>
                        </div>
                    </div>
                </div>     
            </div>
            <div class="carousel-item">
                <div class="container-fluid">
                    <div class="row testimonial-bg">
                        <div class="col-md-1"></div>
                        <div class="col-md-7">
                            <p><q>I have known Rosevelt Valadares for the last 10 years. I bought an apartment from him in one of his first projects and thereafter bought another apartment from him in 2016.</q></p>
                            <h3><b>Mr. Ashok Pandey & Christine Pereira</b></h3>
                        </div>
                        <div class="col-md-3 profile">
                            <img src="assets/img/profile2.png" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container-fluid">
                    <div class="row testimonial-bg">
                        <div class="col-md-1"></div>
                        <div class="col-md-3 profile">
                            <img src="assets/img/profile3.png" class="img-fluid">
                        </div>
                        <div class="col-md-7">
                            <p><q>We were very impressed with his neat work. He has never compromised with Quality which he had promised.</q></p>
                            <h3><b>Mr. Joslino and Janim Rebello</b></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- contact us -->
    <div class="container-fluid contactUs">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h1>contact us</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-5 constacUsHome">
                <form action="index.php?action=submit"  method="post" class="clearfix" style="border-right: 2px solid #999999;">
                    <p><label> Your Name (required)</label><br />
                        <span class="your-name"><input type="text" name="your-name" id="name" value="" size="40" class="text" /></span></p>
                    <p><label> Your Email (required)</label><br />
                        <span class="your-email"><input type="email" id="email" name="your-email" value="" size="40" class="email" /></span></p>
                    <p class="mt-2"><label> Your Message</label><br />
                        <span class="your-message"><textarea name="your-message" cols="40" rows="6" class="textarea"></textarea></span> </p>
                    <p class="text-right" style="float: right;"><input onclick="return funval();" type="submit" value="Send" class="submit" /></p>
                </form>
            </div>
            <div class="col-md-3 pl-5 addressSection">
                <img src="assets/img/footer_logo.png" class="img-fluid mb-4">
                <p>Registered Office:<br />
                    <b>419/420, Fourth Floor,<br />
                    Lake Plaza<br />
                    Opp. Fatorda Stadium<br />
                    Margao - Goa</b>    
                </p>
                <p>Mobile:<br />
                    <b>+91 98223 82898</b></p>
                <p>E-mail:<br />
                    <b><a href="mailto:rosevelt24@yahoo.com" title="Mail to">rosevelt24@yahoo.com</a></b></p>
            </div>
        </div>
    </div>

    <img onclick="topFunction()" class="scrollTop" src="assets/img/scrollTop.png" class="img-fluid mb-4">
    <div class="container-fluid" style="background: #264795;">
        <div class="row footerBg">
            
        </div>
        <footer class="footer-section">
            <div class="row">
                <div class="col-md-6">
                    <div style="position: relative; width: fit-content; ">
                    <ul class="footerLinks" style="width: fit-content;">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="about.html">About Us</a>
                        </li>
                        <li>
                            <a href="current_project.html">Projects</a>
                        </li>
                        <li>
                            <a href="testimonial.html">Testimonials</a>
                        </li>
                        <li class="last">
                            <a href="contact_us.php">Contact Us</a>
                        </li>
                    </ul>
                    &copy; R&A Builders 2020 <a href="disclaimer.html" style="position: absolute; right: 0.5em; color: #FFF;">Disclaimer</a>
                    </div>
                </div>
                <div class="col-md-3 text-center socialIcons">
                    <a href="#" target="_blank" class="twitter"><img src="assets/img/twitter.png" alt="" class="img-fluid"></a>
                    <a href="#" target="_blank" class="instagram"><img src="assets/img/instagram.png" alt="" class="img-fluid"></a>
                    <a href="#" target="_blank" class="facebook"><img src="assets/img/facebook.png" alt="" class="img-fluid"></a>
                    <a href="#" target="_blank" class="linkedin"><img src="assets/img/linkdin.png" alt="" class="img-fluid"></a>
                </div>
                <div class="col-md-3 text-right">
                    <div class="designedBy"><span>Designed by</span> <a href="https://www.mgraphix.in/" target="_blank">mgraphix.in</a></div>
                </div>
            </div>
        </footer>
    </div>

    <script src="assets/js/jquery-3.2.1.slim.min.js"></script>
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script>
        $(document).ready(function() {
            

            function readCookie(name) {
                var nameEQ = name + "=";
                var ca = document.cookie.split(';');
                for (var i = 0; i < ca.length; i++) {
                    var c = ca[i];
                    while (c.charAt(0) == ' ') c = c.substring(1, c.length);
                    if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
                }
                return null;
            }

            var visited = readCookie('visited');

            if (visited == 'yes') {
                // second page load, cookie active
                $('.videoBg').remove();
            } else {
                // first page load, launch fancybox
                $('.videoBg').show();
                var video = document.getElementById("introVideo");
                video.autoplay = true;
                video.controls = false;
                video.load();

                video.onended = function() {
                    $('.videoBg').html();
                    $('.videoBg').hide();
                };

                $(".mute-video").click(function () {
                    if ($("video").prop('muted')) {
                        $("video").prop('muted', false);
                        $(this).addClass('unmute-video'); // changing icon for button

                    } else {
                        $("video").prop('muted', true);
                        $(this).removeClass('unmute-video'); // changing icon for button
                    }
                });

                var videoLogoTop= ($("#introVideo").height()/2) - ($('.videoLogo').height()/2);
                $('.videoLogo').css({"top":videoLogoTop});
            }
            var date = new Date();
            date.setTime(date.getTime()+(60*60*1000));
                document.cookie= "visited=yes;expires="+date;
        });

        function topFunction() {
            document.body.scrollTop = 0; // For Safari
            document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
        }
    </script>
</body>

</html>