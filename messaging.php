
 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>RHYMES NA NONINI</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v7.0"></script>

</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 d-flex justify-content-between">
                        <!-- Logo Area -->
                        <div class="logo">
                            <!-- <a href="index.html" style="color: #0000A0" >  <STRONG >Njeru Nyaga & Company</STRONG>  <BR><SMALL  >&nbsp;&nbsp;&nbsp;Certified Public Accountants</SMALL>  </a> -->
                            <a href="index.html"><img src="img/core-img/logo1.png" alt=""></a>
                        </div>

                        <!-- Top Contact Info -->
                        <div class="top-contact-info d-flex align-items-center">
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="P.O Box 57319,000200, Lang'ata ,Nairobi - Kenya"><img src="img/core-img/placeholder.png" alt=""> <span>P.O Box 57319,000200, Lang'ata ,Nairobi - Kenya</span></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="info@rhymesnanonini.com"><img src="img/core-img/message.png" alt=""> <span>info@rhymesnanonini.com</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="credit-main-menu" id="sticker">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="creditNav">

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="https://www.rhymesnanonini.com/">Home</a></li>
                                    <li><a href="/about">About Us</a></li>
                                    <li><a href="/videos">Videos</a></li>
                                    <li><a href="/partners">Partners</a></li>
                                    <li><a href="https://flutterwave.com/pay/nonini">Donate Page</a></li>
                                    <li><a href="/order">Merchandise Page</a></li>
                                    <li><a href="/contact">Contact</a></li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>

                        <!-- Contact -->
                        <div class="contact">
                            <a href="https://flutterwave.com/pay/nonini" style="color: green">Click to Support Nonini</a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    



<?php 
        
        $na = $_POST['name'];
        $em = $_POST['email'];
        $subj = $_POST['subject'];
        $mess = $_POST['message'];
       
        $to = "info@rhymesnanonini.com";
        $subject = $subj;
        $message ="My Name is : ".$na." of Email: ".$em." The Following is my message: ".$mess;
        $headers ="From: ".$em;
         if(mail($to,$subject,$message,$headers)){
            
          echo "<b>Message sent successfully to Rhymes Na Nonini<b>";
}

else {
    echo "Failed";
    
}



 ?>









<!-- ##### Footer Area Start ##### -->
    <footer class="footer-area section-padding-100-0">
        <div class="container">
            <div class="row">

                

                
                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-footer-widget mb-100">
                        <h5 class="widget-title">Our Address</h5>
                        <!-- Nav -->
                        <nav>
                            <ul style="color: white">
                            <li><i class="flaticon-032-placeholder"></i>P.O Box 57319,000200, Lang'ata ,Nairobi - Kenya</li><br>
                            <li><i class="flaticon-025-arroba"></i>info@rhymesnanonini.com / rhymesnanonini@gmail.com</li>
                            <br><br>
                            <li><i class="flaticon-038-wall-clock"></i>Click to Text us on Whatsapp</li><br>
                             <a href="https://wa.me/+254798333134" class="fa fa-whatsapp" style="font-size:24px;color:green"> Whatsapp Us</a><br>
                            <li><i class="flaticon-038-wall-clock"></i>Everyday: 08:00 -18:00 pm</li>
                        </ul>
                        </nav>
                    </div>
                </div>

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-footer-widget mb-100">
                        <h5 class="widget-title">Our Facebook</h5>
                        <!-- Nav -->
                        <div class="fb-share-button" data-href="https://www.facebook.com/NoniniNewPage/" data-layout="box_count" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.facebook.com%2FNoniniNewPage%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>
                        
                            <div class="fb-page" data-href="https://www.facebook.com/NoniniNewPage/" data-tabs="timeline" data-width="400" data-height="280" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/NoniniNewPage/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/NoniniNewPage/">Nonini MgengeTrue</a></blockquote></div>
                    </div>
                </div>


                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-footer-widget mb-100">
                        <h5 class="widget-title">Our Twitter</h5>

                        <!-- Single News Area -->
                       
                    
                    <a href="https://twitter.com/Noninimgenge?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="false">Follow @Noninimgenge</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    
                          
                        <a class="twitter-timeline" data-width="400" data-height="300" data-theme="dark" href="https://twitter.com/Noninimgenge?ref_src=twsrc%5Etfw">Tweets by Noninimgenge</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
 
                  



                       

                    </div>
                </div>
            </div>
        </div>

        <!-- Copywrite Area -->
        <div class="copywrite-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="copywrite-content d-flex flex-wrap justify-content-between align-items-center">
                            <!-- Footer Logo -->
                            <div class="logo">
                            <a href="index.html"  > <h4 style="color: white"> <STRONG >RHYMES NA</STRONG>  <BR><SMALL  >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NONINI</SMALL>  </h4></a>
                        </div>

                            <!-- Copywrite Text -->
                            <p class="copywrite-text"><a href="#"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |Developed </i> By <a href="https://softwaretechn.co.ke" target="_blank">Software Technology Kenya</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>