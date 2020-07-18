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
    <title>R&A Builders-Contact Us</title>
</head>

<body>
    <header>
        <nav id="navbar" class="navbar navbar-expand-md navbar-dark">
            <!-- Brand -->
            <a class="navbar-brand my-4 mx-5 logo" href="index.php"><img src="assets/img/logo.png" alt="logo" class="img-fluid"
                    width=""></a>

            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Navbar links -->
            <div class="collapse navbar-collapse mt-5" id="collapsibleNavbar">

                <ul class="navbar-nav ml-auto" id="navbarNav">
                    <li class="nav-item  mx-5">
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
                    <li class="last-nav active  nav-item ml-5">
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


    <!-- about us -->
    <div class="container-fluid about-section mb-5">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 mt-5">
                <h1 class="mt-4">CONTACT US</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 mt-5">
                <iframe style="width:100%; border:0;margin: 17px 0;min-height: 550px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3848.600831677981!2d73.96132231484849!3d15.289548989366672!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bbfb137723c6281%3A0x4800fc6ec5547007!2sR%26A%20Builders!5e0!3m2!1sen!2sin!4v1593965082551!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </div>

       <!-- contact us -->
       <div class="container-fluid contactUs mt-5">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-5 constacUsHome">
                <form action="contact_us.php?action=submit"  method="post" class="clearfix" style="border-right: 2px solid #999999;">
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
                    <a href="#" target="_blank" class="twitter"><img src="assets/img/twitter.png" alt=""
                            class="img-fluid"></a>
                    <a href="#" target="_blank" class="instagram"><img src="assets/img/instagram.png" alt=""
                            class="img-fluid"></a>
                    <a href="#" target="_blank" class="facebook"><img src="assets/img/facebook.png" alt=""
                            class="img-fluid"></a>
                    <a href="#" target="_blank" class="linkedin"><img src="assets/img/linkdin.png" alt=""
                            class="img-fluid"></a>
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
    function topFunction() {
        document.body.scrollTop = 0; // For Safari
        document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    }
    </script>
</body>

</html>