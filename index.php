<?php
    session_start();
    if(isset($_SESSION['username'])){
    
        /* echo"   <script type='text/javascript'>
            let signin=document.getElementsById('signin_text');
            let team =document.getElementsById('team_text');
            let register =document.getElementsById('register_text');
            signin.innerHTML='Logout';
            
            register.innerHTML='Registered';
            register.disabled=true;

        </script>";*/
       
        //echo "document.getElementsById('team_text').textContent = '" . $_SESSION['username'] . "';";
        //signin.innerHTML=$_SESSION['username'];
       // echo $_SESSION['username'];
        
    }



   if(isset($_GET['logout'])){
        session_destroy();
        session_unset();
        header("location:registration.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <link rel="shortcut icon" type="image/x-icon" href="assets/smartinternz.ico">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    '../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-TV4Q7TH');</script>
    <!-- End Google Tag Manager -->

<!-- Facebook Pixel Code -->
<script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window,document,'script',
    '../connect.facebook.net/en_US/fbevents.js');
    fbq('init', '356991988979960'); 
    fbq('track', 'PageView');
    </script>
    <noscript>
    <img height="1" width="1" 
    src="https://www.facebook.com/tr?id=356991988979960&amp;ev=PageView%20%20%20%20&amp;noscript=1"/>
    </noscript>
    <!-- End Facebook Pixel Code -->


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-161189280-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-161189280-1');
    </script>

    <!-- Hotjar Tracking Code for https://smartinternz.com/ -->
    <script>
        (function(h,o,t,j,a,r){
            h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
            h._hjSettings={hjid:1735161,hjsv:6};
            a=o.getElementsByTagName('head')[0];
            r=o.createElement('script');r.async=1;
            r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
            a.appendChild(r);
        })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
    </script>


    <meta charset="UTF-8">
     <!-- Title -->
    <title>hackerverse</title>
    <meta property="og:title" content="hackerverse" />
    <meta property="og:description" content="Kristu Jayanti College Hackathon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="assets/vps/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/vps/vps/style.css">	

    <!-- Responsive Stylesheet -->
    <link rel="stylesheet" href="assets/vps/vps/responsive.css">
	<style>
	.footer-logo img{
	    width: 200px;
	}
	.classy-nav-container{
	    background-color: #fff0 !important;
	
	}
	.header_tabs{
        cursor:pointer;
    }
	.header-area.sticky{
        background-color: #01040a !important;
    }
    .header-area.sticky .light.classy-nav-container a{
        color: #fff !important;
    }
	</style>

    <!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  '../connect.facebook.net/en_US/fbevents.js');
  fbq('init', '2792334074148863');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=2792334074148863&amp;ev=PageView&amp;noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
<script src="index.js" defer></script>
</head>

<body class="light-version">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TV4Q7TH"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- ##### Header Area Start ##### -->
    <header class="header-area fadeInDown" data-wow-delay="0.2s">
        <div class="classy-nav-container light breakpoint-off">
            <div class="container">
                <!-- Classy Menu -->
                <nav class="classy-navbar light justify-content-between" id="dreamNav">

                    <!-- Logo -->
                    <a class="nav-brand light smartbridge_logo" href="index.html"><img src="assets/logo/kjclogo.png" alt="logo"
                            style="width: 200px;"> </a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler demo">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>
                    <!-- Menu -->
                    <div class="classy-menu">
                        <!-- close btn -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>
                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul id="nav">
                                <li class="nav-item dropdown">
                                    <a class="dropdown-toggle header_tabs" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Project Experience</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="guided-projects.html" style="color:#191617 !important">Guided Projects</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="dropdown-toggle header_tabs" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Challenges</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="challenges.html"  style="color:#191617 !important" >Challenges</a></li>
                                        <li><a class="dropdown-item" href="godaddy-web-build-a-thon.html" style="color:#191617 !important">GoDaddy
                                                Build-a-Thon</a></li>
                                        <li><a class="dropdown-item" href="rpa-build-a-thon.html" style="color:#191617 !important">RPA Build-a-Thon</a></li>
                                    </ul>
                                </li>
								<!--<li class="nav-item ">
                                    <a class="header_tabs" href="index.php?logout='1'">
                                    Logout
                                    </a>
                                </li>-->

                            <?php
                                if(isset($_SESSION['username'])){
                                       echo " <li class='nav-item dropdown'>";
                                        echo " <a class='dropdown-toggle header_tabs' href='#' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>"."Hi, ".$_SESSION['username']."</a>";
                                         echo "   <ul class='dropdown-menu'>";
                                            echo " <li><a class='dropdown-item' href='index.php'  style='color:#191617 !important' >Dashboard</a></li>";
                                            echo " <li><a class='dropdown-item' href='index.php?logout='1''  style='color:#191617 !important' >Logout</a></li>";
                                           echo " </ul>";
                                        echo "</li>";
                                }  
                                else{    
									echo " <li class='nav-item '>";
                                
									echo "<a  href='registration.php' name='signin' > Sign In</a>";
                                        
                                        echo "</li>";
                                }
                                ?> 
                            </ul>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->
    <script src="../ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" href="assets/vps/vps/ibm_style.css">
<link rel="stylesheet" href="assets/vps/css/fontawesome-all.min.css">
<link rel="stylesheet" href="assets/gurucool/css/internship.css">
<link rel="stylesheet" href="index.css">
 <!-- Responsive Stylesheet --> 
 <style>
	.footer-logo img{
	    width: 200px;
	}
	.classy-nav-container{
	    background-color: #fff0 !important;
	}
	.header_tabs{
        cursor:pointer;
    }
	.header-area.sticky{
        background-color: #01040a !important;
    }
    .header-area.sticky .light.classy-nav-container a{
        color: #fff !important;
    }
    .right_float{
        float: right;
        display:none;
    }
    .hight_buils{
        background-color: #49969b;
        color: #fff;
        padding: 10px 20px;
        border-radius: 10px;
    }
    .blog_higs{
        background-image: linear-gradient(to right, #49989e 0%, #4a969b 100%);
        padding: 10px 20px;
        color: #ffff;
        font-weight: 500;
        font-size: 20px;
        margin-top: 15px;
    }
    .blog_inners{
        background-color: #4a969b17;
        padding: 30px 35px;
        min-height: 200px;
        font-weight: 500;
    }
</style>
<style>
.cus_tables{
    color:#000;
    font-size: 12px;
    font-weight:500;
    overflow: scroll;
    word-break: break-word;
}
.tech_partners{
    float: right;
    margin-bottom: 21px;
    color: #ffff;
    font-size: 15px;
    font-weight: 500;
}
.img_mobi1{
    margin-right: 22px;
}
.internship_title{
    height: 70px;
}
.skill_badges_divs{
    height: 20px !important;
}
.btn-km{
    background-color: #4a969b !important;
}
#st-2.st-left{
    right: 0px !important;
    left: auto !important;
}
#st-2 .st-toggle{
    left: 0px !important;
}
.or_in_img{
    box-shadow: 1px 1px 3px 1px #ccc;
    width: 100%;
    text-align: center;
    border: 0px;
    border-radius: 5px;
}
.img_div{
    width:100%;
    text-align: center;
}
.supp_css{
    font-size: 22px;
    font-weight: 600;
    margin-bottom: 35px;
    text-align: left !important;
}
.btn-danger {
    color: #fff !important;
    background-color: #dc3545 !important;
    border-color: #dc3545 !important;
}

.starts_msg{
    font-size: 16px !important;
    color: #e83c3c;
    font-weight: 600;
}
.modal-body{
    padding: 0px 1px;
}
</style>

<script>
    $(document).ready(function () {
        $("#flip").click(function () {
            $("#panel").slideToggle("fast");
        });
    });  
</script>
<section  class="section11" >
	
    </section>
    
    <section class="section2 ibm_cool">
        <div class="ibm-clr" >
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="ibm_titles">
                            <h3 class="mt-5" style="font-family: 'Press Start 2P', cursive; font-size: 2.5em;">
                                HackerVerse</h3>

                                 <p >Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                                
                            <br>
                                <?php
                                    if(isset($_SESSION['username'])){
                                    echo " <a class='btn btn-danger btn-ibm2 mt-4' target='_blank' id='register_text' >Registerd</a>";
                                    }
                                    else{
                                        echo " <a href='signup.php' class='btn btn-danger btn-ibm2 mt-4' target='_blank' id='register_text' >Register Now</a>";
                                       // echo "<p id='team_text'>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>";
                                        //echo "<br>";
                                    }
                                 ?>   
                            
                            
                            <?php
                                if(isset($_SESSION['username'])){    
                                    echo "<span class='ibm-frees mt-4'><b>Registration fees</b>Status</span>";
                                }   
                                else{   
                                    echo "<span class='ibm-frees mt-4'><b>14th March 2021</b>(Last Date)</span>";
                                } 
                                ?>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="ibm-cool-rt">
                                <span class="tech_partners">Technology Partner</span><br><br>
                                <img class="d-none d-sm-block d-sm-none d-md-block img_mobi1" src="assets/logo/kjclogo.png" class="ibm-img1">
                            </div> 
                        </div>
                    </div>
                </div>
                <div class="timer">
                    <h3 id="timerdata"></h3>
                </div>
            </div>
        
    </section>
    <section>
        <div class="ibm-links text-center">
            <div class="col-md-4 border-right"><p><a href="https://developer.ibm.com/" target="_blank"> IBM <b>Developer</b></p></a></div>
            <div class="col-md-4 border-right"><p><a href="https://www.ibm.com/in-en/services/careereducation"  target="_blank"> IBM <b>Career Education</b></p></a></div>
            <div class="col-md-4"><p><a href="https://www.research.ibm.com/university/"  target="_blank"> IBM <b>University Relations</b></p></a></div>
        </div>
    </section>
    <div class="internship_displ py-4">
        <div class="container">
        <h4 class="mt-5 text-center supp_css">Supporting Organisations & Institutions</h4><br>
            <div class="row">
                <div class="col-sm-2 col-4">
                     <div class="img_div">
                        <img src="assets/gurucool/blue.png" class="or_in_img">
                     </div>       
                </div>
              
                <div class="col-sm-2  col-4">
                    <div class="img_div">
                        <img src="assets/gurucool/green.png" class="or_in_img">
                     </div>  
                     </div>
               
                <div class="col-sm-2 col-4">
                   <div class="img_div">
                        <img src="assets/gurucool/red.png" class="or_in_img">
                     </div>  
                </div>

                <div class="col-sm-2 col-4">
                   <div class="img_div">
                        <img src="assets/gurucool/grey.png" class="or_in_img">
                     </div>  
                </div>

            </div>
        </div>
    </div>
    <hr>
    
    <div class="internship_displ py-4">
        <div class="container">
    
            <div class="row">
                <div class="col-sm-6">
                    <div class="header_contents_div">
                        <h3 class="header_contents ibm_challenegs">About HackerVerse</h3>
                    </div> 
                    <div class="content_siders about_test ibm-tt">
                         <h4>Join together | Explore Tech | Build Solutions</h4>   
                           
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel vitae recusandae voluptas sapiente molestiae enim qui
                            ipsum reprehenderit consequuntur aut nihil repellendus veniam illum, expedita cumque, mollitia quis, numquam
                            reiciendis.</p>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel vitae recusandae voluptas sapiente molestiae enim qui
                            ipsum reprehenderit consequuntur aut nihil repellendus veniam illum, expedita cumque, mollitia quis, numquam
                            reiciendis.</p>
                    </div>
                </div>
                <div class="col-sm-6">

                    <div class="video_banner">
                   
                    <iframe width="100%" height="350px" src="https://www.youtube.com/embed/a3ICNMQW7Ok" frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                    </div>
    
                </div>   
            </div>
    
        </div>
    </div>	
    
    <div class="ibm-cool-ban2 py-5">
        <div class="container">
            <h4>Program Structure</h4>
            <p>Hands-on Learning followed by project building.</p>
            <div class=" text-center">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ibm-btm-main text-left">
                            <div class="row">
                                <div class="col-md-5 col-12">
                                    <a href="#program_agenda">
                                        <div class="ibm-box mt-3">
                                            <h5>6 Days Hands-on Training</h5>
                                            <h3>IoT, Data, ML, Artificial Intelligence & Cloud Native</h3>
                                            <p>Powered by IBM <b>Watson</b></p>
                                            
                                        </div>
                                    </a>    
                                </div>
                                <div class="col-md-2 col-12 text-center"><img style="width: 70%; margin-top: 50%;" class="d-none d-sm-block d-sm-none d-md-block mx-4 text-center" src="assets/gurucool/images/plus.png" alt="vm-course"></div>
                                <div class="col-md-5 col-12">
                                    <a href="#project_buil_a_thon">
                                        <div class="ibm-box mt-3">
                                            <h5>2 - Weeks Mentor Guided Project Development</h5>
                                            <h3>Project Build-A-Thon</h3>
                                            <p>Powered by <b>SmartInternz</b></p>
                                        </div>
                                    </a>    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="ibm-cl-ex py-5">
        
        <div class="container">
            <div class="header_contents_div" > 
                
                <h4>Exciting Benefits</h4>
                <p style="color:#ffff">Not just learning !! Lot more exciting benefits.</p>
                <div class="row mt-5">
                  
                      
                    <div class="col-sm-3  col-6">
                        <div class="cool_card text-center">
                            <div class="cool_crads">
                                <img src="assets/gurucool/images/online.png" class="cool_img">
                            </div>
                            <div class="cool-prize">
                                <p>Design Thinking Workshops</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-6">
                        <div class="cool_card text-center">
                            <div class="cool_crads">
                                <img src="assets/icons/new/ibm_nodered.png" class="cool_img">
                            </div>
                            <div class="cool-prize">
                                <p>Earn IBM Skill Badges</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-6">
                        <div class="cool_card text-center">
                            <div class="cool_crads">
                                <img src="assets/icons/new/ibm_cloud.png" class="cool_img">
                            </div>
                            <div class="cool-prize">
                                <p>Free Access to IBM Cloud</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-6">
                        <div class="cool_card text-center">
                            <div class="cool_crads">
                                <img src="assets/icons/new/courseware_icon.png" class="cool_img">
                            </div>
                            <div class="cool-prize">
                                <p>Free Access to IBM Academic Initiative Courseware &amp; Software</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-6">
                        <div class="cool_card text-center">
                            <div class="cool_crads">
                                <img src="assets/icons/new/mentor.png" class="cool_img">
                            </div>
                            <div class="cool-prize">
                                <p>Tech Mentor & Industry Leader Connect</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-6">
                        <div class="cool_card text-center">
                            <div class="cool_crads">
                                <img src="assets/icons/new/winner.png" class="cool_img">
                            </div>
                            <div class="cool-prize">
                                <p>Prizes for the best projects developed by the faculty</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-6">
                        <div class="cool_card text-center">
                            <div class="cool_crads">
                                <img src="assets/icons/new/badge.png" class="cool_img">
                            </div>
                            <div class="cool-prize">
                                <p>Special Prizes under different categories</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-6">
                        <div class="cool_card text-center">
                            <div class="cool_crads">
                                <img src="assets/icons/new/certificate.png" class="cool_img">
                            </div>
                            <div class="cool-prize">
                                <p>Participation Certificate from IBM</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>

    


    <div class="aws-ban1">
        <div class="container">
            <h4 class="mt-5">Important Dates</h4>
            <div class="row mt-4">
                <div class="col-sm-12 col-md-5 col-lg-6 mb-2">
                    <div class="aws-date">
                        <div class="row">
                            <div class="col-3 col-xs-3">
                                <div class="aws-date-blk">
                                    <h2>25</h2>
                                    <h4>SEP</h4>
                                </div>
                            </div>
                            <div class="col-9 col-xs-9 back_shades">
                                <h5 class="mt-3">Last Date of Registration</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-5 col-lg-6 mb-2"></div>
                <div class="col-sm-12 col-md-5 col-lg-6 mb-2">
                    <div class="aws-date">
                        <div class="row">
                            <div class="col-3 col-xs-3">
                                <div class="aws-date-blk">
                                    <h2>28</h2>
                                    <h4>SEP</h4>
                                </div>
                            </div>
                            <div class="col-9 col-xs-9  back_shades">
                                <h5 class="mt-3">6 Days Training Program Starts</h5>
                            </div>
                        </div>
                    </div>
                    <div class="aws-date">
                        <div class="row">
                            <div class="col-3 col-xs-3">
                                <div class="aws-date-blk">
                                    <h2>06</h2>
                                    <h4>OCT</h4> 
                                </div>
                            </div>
                            <div class="col-9 col-xs-9  back_shades">
                                <h5 class="mt-3">6 Days Training Program Ends</h5>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-sm-12 col-md-5 col-lg-6 mb-2">
                    <div class="aws-date">
                        <div class="row">
                            <div class="col-3 col-xs-3">
                                <div class="aws-date-blk">
                                    <h2>08</h2>
                                    <h4>OCT</h4>
                                </div>
                            </div>
                            <div class="col-9 col-xs-9  back_shades">
                                <h5 class="mt-3">Project Build-a-Thon Starts</h5>
                            </div>
                        </div>
                    </div>

                    <div class="aws-date">
                        <div class="row">
                            <div class="col-3 col-xs-3">
                                <div class="aws-date-blk">
                                    <h2>28</h2>
                                    <h4>OCT</h4>
                                </div>
                            </div>
                            <div class="col-9 col-xs-9  back_shades">
                                <h5 class="mt-3">Project Build-a-Thon Ends</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-5 col-lg-6 mb-2"></div>
                <div class="col-sm-12 col-md-5 col-lg-6 mb-2">
                    <div class="aws-date">
                        <div class="row">
                            <div class="col-3 col-xs-3">
                                <div class="aws-date-blk">
                                    <h2>16</h2>
                                    <h4>NOV</h4>
                                </div>
                            </div>
                            <div class="col-9 col-xs-9  back_shades">
                                <h5 class="mt-3">Winner Announcement, Certificate Distribution etc.</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
        </div>
    </div> 
    
    <div class="faq-timeline-area py-5" id="program_agenda">
        <div class="container">
            <div class="text-center">
                <!-- Dream Dots -->
                <div class="dream-dots justify-content-center wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <span></span><span></span><span></span><span></span><span></span><span></span><span></span>
                </div>
                <h4 data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">Program Agenda</h4>
                <p class="agend_sub">6-Days Hands-on Training; Virtual Program via WebEx : Timings 4:00PM to 8:00PM</p>
            </div>

            <div class="row">
                <div class="col-12 col-lg-12 col-md-12">
                    
                    <div class="dream-faq-area">
                        <dl>
                            <!-- Single FAQ Area -->
                            <dt class="wave ibm-clps" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp; position: relative; overflow: hidden; z-index: 1;">Day-1: Cognitive Computing, Visual
Recognition & Image Classification          <span class="right_float">28th September 2020</span></dt>
                            <dd style="display: none;">
                                 <div class="row">
                                    <div class="col-12 col-lg-6 col-md-6 serv1">
                                        <b>Concepts</b><br><br>
                                        <ul>
                                            <li>Introduction to Cognitive Computing</li>
                                            <li>IBM’s Cognitive Point of View – Solving Real-Life Problems</li>
                                            <li>Building Cognitive Applications</li>
                                            <li>IBM Watson AI Services</li>
                                        </ul>
                                        <br><br>
                                        <ul>
                                            <li>Computer Vision & Image Recognition</li>
                                            <li>Introduction to IBM Visual Recognition</li>
                                            <li>Introduction to IBM Watson Studio</li>
                                            <li>Explore IBM Visual Recognition Service</li>
                                            <li>Work on Pre-Trained models</li>
                                            <li>Create and Deploy Custom Visual Recognition Models</li>
                                            <li>Build an Image Recognition Application with Node-RED</li>
                                        </ul>

                                        
                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6 serv2">
                                            <b>Usecase</b><br><br>
                                            <p>Building custom Image Classification using Visual Recognition service</p>
                                    </div>

                                 </div>


                              
                            </dd>

                            <dt class="wave ibm-clps" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp; position: relative; overflow: hidden; z-index: 1;">Day-2: Conversation AI Platforms, Business Bots, Speech Recognition & Analysis          <span class="right_float">29th September 2020</span></dt>
                            <dd style="display: none;">
                                <div class="row">
                                   <div class="col-12 col-lg-6 col-md-6 serv1">
                                       <b>Concepts</b><br><br>
                                       <ul>
                                            <li>Conversation & Speech Recognition</li>
                                            <li>Conversation AI Platforms</li>
                                            <li>Introduction to IBM Watson Assistant</li>
                                            <li>Dialog Skill and Search Skill</li>
                                            <li>Create your first assistant – powered chatbot</li>
                                       </ul>
                                       <br><br>
                                       <ul>
                                            <li>Introduction to STT & TTS Services</li>
                                            <li>Building Custom Speech Recognition Models</li>
                                            <li>Getting Started with Text-to-Speech Service</li>
                                            <li>Understanding Speech Synthesis Markup Language (SSML)</li>
                                            <li>Introduction to Language Translator</li>
                                            <li>Introduction to Tone Analyzer</li>
                                       </ul>


                                       
                                   </div>
                                   <div class="col-12 col-lg-6 col-md-6 serv2">
                                            <b>Usecase</b><br><br>
                                            <p>Build a web based chatbot with Voice input & Output</p>
                                    </div>
                                </div>


                             
                           </dd>


                            <!-- Single FAQ Area -->
                            <dt class="wave ibm-clps" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp; position: relative; overflow: hidden; z-index: 1;">Day-3: Data Insights, Text Analytics, Smart Applications <span class="right_float">30th September 2020 </span></dt>
                            <dd style="display: none;">
                                <div class="row">
                                <div class="col-12 col-lg-6 col-md-6 serv1">
                                        <b>Concepts</b><br><br>
                                        <ul>
                                            <li>Introduction to Natural Language Processing</li>
                                            <li>Watson Natural Language Understanding</li>
                                            <li>Explore Knowledge Catalog & NLU Services</li>
                                            <li>Introduction to Watson Discovery</li>
                                            <li>Create a Cognitive News Search Application</li>
                                            <li>Bring your Own data to Watson Discovery</li>
                                            <li>Integrate Watson Discovery with Chatbot</li>

                                        </ul>
                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6 serv2">
                                            <b>Usecase</b><br><br>
                                            <p>Build a Customer Help Desk powered by Watson Discovery Service</p>
                                    </div>
                                </div>


                             
                           </dd>

                            <!-- Single FAQ Area -->
                            <dt class="wave ibm-clps" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp; position: relative; overflow: hidden; z-index: 1;">Day-4: Machine Learning, Auto AI and IBM Watson Studio   <span class="right_float">01st October 2020</span></dt>
                            <dd style="display: none;">
                                <div class="row">
                                    <div class="col-12 col-lg-6 col-md-6 serv1">
                                        <b>Concepts</b><br><br>
                                        <ul>
                                            <li>Introduction to Machine Learning</li>
                                            <li>Getting Started with Watson Studio</li>
                                            <li>Explore Various services in Watson Studio</li>
                                            <li>Explore Watson Machine Learning Service</li>
                                            <li>Develop a Machine Learning Model using Auto AI</li>
                                            <li>Deploy Machine Learning Model as a Webservice</li>
                                        </ul>
                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6 serv2">
                                            <b>Usecase</b><br><br>
                                            <p>Build & Deploy Machine Learning Models with Watson Studio</p>
                                    </div>
                                </div>

                           </dd>

                            <!-- Single FAQ Area -->
                            <dt class="wave ibm-clps" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp; position: relative; overflow: hidden; z-index: 1;">Day-5: Internet of Things (IoT), Cloud App Development <span class="right_float"> 02nd October 2020</span></dt>
                            <dd style="display: none;">
                                <div class="row">
                                    <div class="col-12 col-lg-6 col-md-6 serv1">
                                        <b>Concepts</b><br><br>
                                        <ul>
                                            <li>Internet of Things (IoT), IoT Platforms</li>
                                            <li>Introduction to Watson IoT Platform</li>
                                            <li>Work with IoT Sensor Simulator</li>
                                            <li>Data Streaming and Visualization</li>
                                            <li>Data Storage in CloudantDB (NoSQL DB)</li>
                                            <li>Introduction to Serverless Applications</li>
                                            <li>Explore IBM Cloud Functions</li>
                                            <li>Build an IoT Application with Serverless Computing</li>
                                        </ul>
                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6 serv2">
                                            <b>Usecase</b><br><br>
                                            <p>Build an IoT Application with Serverless Computing</p>
                                    </div>
                                </div>
                            </dd>

                            <dt class="wave ibm-clps" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp; position: relative; overflow: hidden; z-index: 1;">Day - 6: Cloud Native and Design Thinking  <span class="right_float"> 02nd October 2020</span></dt>
                            <dd style="display: none;">
                                <div class="row">
                                    <div class="col-12 col-lg-6 col-md-6 serv1">
                                        <b>Concepts</b><br><br>
                                        <ul>
                                            <li>Introduction to containers</li>
                                            <li>Introduction to Docker</li>
                                            <li>Building container images</li>
                                            <li>Using container registries</li>
                                            <li>Running containers</li>
                                            <li>The Kubernetes Ecosystem</li>
                                            <li>Introduction to Red Hat OpenShift</li>
                                            <li>Red Hat OpenShift and Kubernetes</li>
                                        </ul>
                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6 serv2">
                                            <b>Usecase</b><br><br>
                                            <p>Develop a cloud-native application and deploying it on Red Hat OpenShift using CI/CD features.	</p>
                                    </div>
                                </div>
                                </div>
                            </dd>

                    
                        </dl>
                      
                    </div>
                </div>

                
            </div>
        </div>
    </div>

    

    

</div>

    <div class="aws-ban2 pb-5" id="project_buil_a_thon">
        <div class="container">
            <h4 class="mt-5">Projects <span class="hight_buils">Build-A-Thon</span></h4>
            <p style="color: #333;">Choose a project based on your area of interest, follow the instructions, refer the resources and build the project. 
                <br><i>(Project enrollment will be active on last day of 6 Days training program)</i></p>

            <div style="padding: 20px;" id="flip" class="d-block d-sm-none d-none d-sm-block d-md-none"><img style="padding-right: 6px;" src="assets/gurucool/images/intern-search.png" alt="Search-filter">Search Filter</div>

            <div style="background-color: #f6f8fd;" class="container d-md-block d-lg-none d-lg-block d-xl-none d-xl-block" id="panel">
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-4 ">
                        <select class="form-control form_css1 internship_roles" name="category" id="category">
                            <option value="">All Technologies</option>
                            <option value="Artificial Intelligence">Artificial Intelligence</option>
                            <option value="Machine Learning">Machine Learning</option>
                            <option value="Internet of Things">Internet of Things</option>
                            <option value="Cloud Application Development">Cloud Application Development</option>
                            <option value="Cloud Native">Cloud Native</option>
                        </select>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3">
                        <select class="form-control form_css1 internship_roles" name="subcategory" id="subcategory">
                            <option value="">Business Sector</option>
                                                            <option value="Agriculture">Agriculture</option>
                                                            <option value="Corporate or Business">Corporate or Business</option>
                                                            <option value="Defence">Defence</option>
                                                            <option value="Disaster Management">Disaster Management</option>
                                                            <option value="E-Commerce">E-Commerce</option>
                                                            <option value="Education">Education</option>
                                                            <option value="Entertainment">Entertainment</option>
                                                            <option value="Environment">Environment</option>
                                                            <option value="Finance">Finance</option>
                                                            <option value="Food & Drinks">Food & Drinks</option>
                                                            <option value="Healthcare">Healthcare</option>
                                                            <option value="Industry">Industry</option>
                                                            <option value="Insurance">Insurance</option>
                                                            <option value="JavaScript Library">JavaScript Library</option>
                                                            <option value="Manufacturing">Manufacturing</option>
                                                            <option value="Oil & Gas">Oil & Gas</option>
                                                            <option value="Others">Others</option>
                                                            <option value="Petrochemical">Petrochemical</option>
                                                            <option value="Power">Power</option>
                                                            <option value="Public Welfare">Public Welfare</option>
                                                            <option value="RealEstate">RealEstate</option>
                                                            <option value="Retail">Retail</option>
                                                            <option value="Smart Cities">Smart Cities</option>
                                                            <option value="Supply Chain">Supply Chain</option>
                                                            <option value="Tourism">Tourism</option>
                                                            <option value="Transportation">Transportation</option>
                                                            <option value="Travel & Tourism">Travel & Tourism</option>
                                                    </select>
                    </div>
                    <div class="col-12 col-sm-4 col-md-3">
                        <select class="form-control form_css1 internship_roles" name="complexity" id="complexity">
                            <option value="">Complexity</option>
                            <option value="Basic">Basic</option>
							<option value="Intermediate">Intermediate</option>
							<option value="Advanced">Advanced</option>
                        </select>
                    </div>
                    <div class="col-12 col-sm-4 col-md-2">
                        <button class="btn btn-primary fomr_btn1"  id="internships_search" > Search</button>
                    </div>
                </div>
            </div>


         
            <div class="row" id="show_data"></div>
            <ul id="pagination" class="pagination"></ul>

        </div>
    </div>
    
    
       
    <div class="aws-ban1">
        <div class="container">
            <h4 class="mt-5">Eligibility & Pre-requisites</h4>
           
            <div class="row faq-timeline-area">
                <div class="col-12 col-lg-6 col-md-6">
                    <div class="blog_higs">Eligibility</div>
                    <div class="blog_inners">
                        <ul>
                            <li>Any faculty from India & interested in learning emerging technologies.</li>
                            <li>Any faculty from Engineering / Sciences / Business Schools / Polytechnics / ITI's / Atal Tinkering Labs / Schools</li>
                            <li>Minimum coding skills are necessary for hands-on sessions</li>
                            <li>Must register for the program before the last date of registration</li>
                        </ul>
                    </div>
                   
                    
                </div>
                <div class="col-12 col-lg-6 col-md-6">
                    <div class="blog_higs">Pre-requisites</div>
                    <div class="blog_inners">
                        <ul>
                            <li>Must have Laptop with Good Internet connectivity as it is a Virtual Hands-on Session</li>
                            <li>Must have basic understanding of Python Programming & DataScience concepts</li>
                            <li>Must register for IBM Cloud account <a href="http://ibm.biz/GuruCoolCloud">http://ibm.biz/GuruCoolCloud</a></li>
                        </ul>
                    </div>
                </div>
             </div>
    
            
        </div>
    </div> 


    <div class="faq-timeline-area dished_bck_faq" id="faq">
        <div class="container">
            <h4 class="mt-5">Frequently Asked Questions</h4><br>
           

            <div class="row">
                <div class="col-12 col-lg-6 col-md-12">
                    
                    <div class="dream-faq-area">
                        <dl>
                            <!-- Single FAQ Area -->
                            <dt class="wave wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp; position: relative; overflow: hidden; z-index: 1;">1.	Is There An Entry Fee?</dt>
                            <dd style="display: none;">
                                <p>Zero. Zip. Zilch. Nada. Nothing. GuruCool is completely free.</p>
                            </dd>


                            <!-- Single FAQ Area -->
                            <dt class="wave wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp; position: relative; overflow: hidden; z-index: 1;">2.	Who can participate in GuruCool program?</dt>
                            <dd style="display: none;">
                            <p>Any faculty, who is interested to learn & explore emerging technologies (IoT, Data Science, AI and Cloud).  Faculty of engineering, diploma, Sciences, Business schools, Secondary Schools, etc. can participate in this program. Basic coding skills will be advantageous.</p>
                            </dd>
                            <!-- Single FAQ Area -->
                            <dt class="wave wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp; position: relative; overflow: hidden; z-index: 1;">3.	How does the 6 Days training will be organized?</dt>
                            <dd style="display: none;">
                                <p>The training program will be organized online via WebEx every day between 4:00pm to 8:00pm. You will receive an email with WebEx meeting links once the registration is successful.</p>
                            </dd>
                            <!-- Single FAQ Area -->
                            <dt class="wave wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp; position: relative; overflow: hidden; z-index: 1;">4.	What is project build-a-thon?</dt>
                            <dd style="display: none;">
                                <p>The project build-a-thon is a project development activity, where faculty will be enrolling in a project listed under various technology categories. SmartInternz platform has a project workspace where the respective project should be developed and submitted for mentor review. A detailed demo of the platform will be provided during the 6 Days training program.</p>
                            </dd>

                            <dt class="wave wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp; position: relative; overflow: hidden; z-index: 1;">5.	Can I enroll for the projects on Day-1 of the program?</dt>
                            <dd style="display: none;">
                                <p>No. Project enrollment will be active on last day of 6 Days training program. A detailed orientation session on project build-a-thon will be organized on last day of the training program.</p>
                            </dd>

                            <dt class="wave wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp; position: relative; overflow: hidden; z-index: 1;">6.	What if I don’t work on the project</dt>
                             <dd style="display: none;">
                            <p>This program includes both Training and Project development, it is mandatory to build & submit the project to receive the participation certificate. </p>

                            <dt class="wave wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp; position: relative; overflow: hidden; z-index: 1;">7.	Will there be any guidance provided to complete the projects?</dt>
                             <dd style="display: none;">
                            <p>Yes.  IBM & SmartBridge mentors will be supporting you to build the projects. </p>
                        </dd>
                        </dl>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                <div class="dream-faq-area">
    <dl>

    <dt class="wave wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp; position: relative; overflow: hidden; z-index: 1;">8.	How Will I Connect With Mentors?</dt>
                            <dd style="display: none;">
                                <p>We will be inviting you to Slack channel where you connect with IBM & SmartBridge mentors.</p>
                            </dd>

                            
                    <dt class="wave wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp; position: relative; overflow: hidden; z-index: 1;">9.	Can I participate in teams for Project Build-a-thon? </dt>
                        <dd style="display: none;">
                            <p>No. Project enrollments are individual; and every faculty must build & submit a project.</p>
                        </dd>

                        <dt class="wave wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp; position: relative; overflow: hidden; z-index: 1;">10.	How does the projects will be evaluated? </dt>
                        <dd style="display: none;">
                            <p>Valid project submissions will be evaluated based on the working features, coding logic & layout, utilization of IBM services, external API’s, performance of models, richness of UI and project documentation. </p>
                        </dd>


                        <dt class="wave wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp; position: relative; overflow: hidden; z-index: 1;">11.	Can I enroll students in this program?</dt>
                        <dd style="display: none;">
                            <p>No. GuruCool is an exclusive program for faculty. You can enroll students in exclusive project build-a-thon organized by IBM University Relations & SmartBridge for students. Go to the link <a href="ibm-build-a-thon.html" target="_blank">https://smartinternz.com/ibm-build-a-thon</a></p>
                        </dd>

                        <dt class="wave wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp; position: relative; overflow: hidden; z-index: 1;">12.	How can I avail IBM Academic Initiative benefits?</dt>
                        <dd style="display: none;">
                        <p>You can register with IBM Academic Initiative using your Institutional email ID, Example: amit@nit.edu, follow the steps as mentioned in this link ! to get benefits <a href="assets/docs/Create%20IBM%20Academic%20Initiative%20Cloud%20Account.pdf" target="_blank" >Link</a> promocodes, course-ware, downloadable softwares etc.</p>
                        </dd>


                        <dt class="wave wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp; position: relative; overflow: hidden; z-index: 1;">13.	When will I receive the prizes and certificates?</dt>
                        <dd style="display: none;">
                        <p>We will keep you posted with the information, please be aware that with COVID and government restrictions in place, couriers will be highly delayed. Rest assured they will reach you but will take time.</p>
                        </dd>

                        
                        <!-- <dt class="wave wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp; position: relative; overflow: hidden; z-index: 1;">Will there be any face to face presentation for the participating team?</dt>
                        <dd style="display: none;">
                            <p>No, the initial rounds will not have a Face to Face Presentation. The IBM Hack Challenge 2020 is
completely a digital hackathon. The shortlisted final teams will present the solution to the Jury
(either face to face or in person) depending on the travel itinerary circumstances in the upcoming
month.</p>
                        </dd> -->
    </dl>
</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
<div id="myModal1" class="modal fade" role="dialog" style="z-index: 7000;">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header" style="display: initial;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Problem Statement</h4>
      </div>
      <div class="modal-body">
        <table class="table table-bordered custom_table">
             <tbody>
                 <tr>       
                    <td>Title</td>              
                    <td class="highkigt_pron_stat">Optimized Warehouse Management of Perishable Goods for a Food Delivery Company</td>              
                 </tr> 
                 <tr>       
                    <td>Description</td>              
                    <td>A food delivery service has to deal with a lot of perishable raw materials which
                    makes it all, the most important factor for such a company is to accurately
                    forecast daily and weekly demand. Too much inventory in the warehouse means
                    more risk of wastage, and not enough could lead to out-of-stocks - and push
                    customers to seek solutions from your competitors. The replenishment of
                    majority of raw materials is done on weekly basis and since the raw material is
                    perishable, the procurement planning is of utmost importance,</td>              
                 </tr> 
                 <tr>       
                    <td>Expected Solutions</td>              
                    <td>Machine Learning Model to predict the demand of goods for the next 10 weeks

                    or in the future
                    Mobile / Web Application to Interact with ML Model deployed on IBM Cloud</td>              
                 </tr> 
                 <tr>       
                    <td>Technologies &amp; Tools</td>              
                    <td>Python 2 or 3, IBM Watson Studio, IBM Cloud for Deployment, Android / any
                    Web frameworks</td>              
                 </tr> 
                 <tr>       
                    <td>Reference</td>              
                    <td>
                        <a href="https://www.altexsoft.com/blog/demand-forecasting-methods-using-machine-learning/">1. https://www.altexsoft.com/blog/demand-forecasting-methods-using-machine-learning/</a>
                            <br>
                            <a href="https://www.kaggle.com/shashkhr25/food-demand-forecasting-challange/data">2. https://www.kaggle.com/shashkhr25/food-demand-forecasting-challange/data</a>                    
                    </td>              
                 </tr> 
             </tbody>           
        </table>
      </div>
      <div class="modal-footer">
      			
        <a class="btn btn-info btn-modal " href="student-login.html">Register Now</a> <span class="fress">(Free Participation)</span>
    
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div id="myModal2" class="modal fade" role="dialog" style="z-index: 7000;">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header" style="display: initial;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Problem Statement</h4>
      </div>
      <div class="modal-body">
        <table class="table table-bordered custom_table">
             <tbody>
                 <tr>       
                    <td>Title</td>              
                    <td class="highkigt_pron_stat">Predicting the energy output of wind turbine based on weather condition</td>              
                 </tr> 
                 <tr>       
                    <td>Description</td>              
                    <td>Wind energy plays an increasing role in the supply of energy world-wide. The
energy output of a wind farm is highly dependent on the wind conditions
present at its site. If the output can be predicted more accurately, energy
suppliers can coordinate the collaborative production of different energy
sources more efficiently to avoid costly overproduction.</td>              
                 </tr> 
                 <tr>       
                    <td>Expected Solutions</td>              
                    <td>Develop a time series model to Predict the power output of wind farm based on

the weather condition in the site (1Hr prediction to 72Hrs. prediction)
Build an application to recommend the Power Grid to suggest the best time to
utilize the energy from wind farm</td>              
                 </tr> 
                 <tr>       
                    <td>Technologies &amp; Tools</td>              
                    <td>Python 2 or 3, IBM Watson Studio, IBM Cloud for Deployment, Android / any

Web frameworks
Use Weather Company Data from IBM Cloud</td>              
                 </tr> 
                 <tr>       
                    <td>Reference</td>              
                    <td>
                        <a href="https://hpi.de/friedrich/docs/paper/RE1.pdf">1.https://hpi.de/friedrich/docs/paper/RE1.pdf</a>
                            <br>
                            <a href="https://www.kaggle.com/berkerisen/wind-turbine-scada-dataset">2. https://www.kaggle.com/berkerisen/wind-turbine-scada-dataset</a>                    
                    </td>              
                 </tr> 
             </tbody>           
        </table>
      </div>
      <div class="modal-footer">
      			
        <a class="btn btn-info btn-modal " href="student-login.html">Register Now</a> <span class="fress">(Free Participation)</span>
    
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



<div id="myModal3" class="modal fade" role="dialog" style="z-index: 7000;">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header" style="display: initial;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Problem Statement</h4>
      </div>
      <div class="modal-body">
        <table class="table table-bordered custom_table">
             <tbody>
                 <tr>       
                    <td>Title</td>              
                    <td class="highkigt_pron_stat">Impact of COVID-19 on Food Security – Visualization Dashboard</td>              
                 </tr> 
                 <tr>       
                    <td>Description</td>              
                    <td>Alarmed by a potential rise in food insecurity during the COVID-19 pandemic, many
countries and organizations are mounting special efforts to keep agriculture safely
running as an essential business, markets well supplied in affordable and nutritious
food, and consumers still able to access and purchase food despite movement
restrictions and income losses.</td>              
                 </tr> 
                 <tr>       
                    <td>Expected Solutions</td>              
                    <td>Create a machine learning model to predict supply – demand gaps, Supply chain
impact food security of people and provide a dashboard to show how the extended
lockdowns / post lockdown situations can impact the food security of people</td>              
                 </tr> 
                 <tr>       
                    <td>Technologies &amp; Tools</td>              
                    <td>Python 2 or 3, IBM Watson Studio, IBM Cloud for Deployment, Any Web
frameworks</td>              
                 </tr> 
                 <tr>       
                    <td>Reference</td>              
                    <td>
                        <a href="https://knoema.com/atlas/India/topics/Food-Security">1.https://knoema.com/atlas/India/topics/Food-Security</a>
                            <br>
                            <a href="https://data.nal.usda.gov/dataset/international-food-security-0">2. https://data.nal.usda.gov/dataset/international-food-security-0</a>
                            <br>
                            <a href="https://www.ifpri.org/blog/addressing-covid-19-impacts-agriculture-food-security-and-livelihoods-india">3.https://www.ifpri.org/blog/addressing-covid-19-impacts-agriculture-food-security-and-livelihoods-india</a>
                            <br>
                            <a href="https://www.ers.usda.gov/data-products/food-environment-atlas/data-access-and-documentation-downloads/">4. https://www.ers.usda.gov/data-products/food-environment-atlas/data-access-and-documentation-downloads/</a>
                            <br>
                            <a href="https://github.com/IBM/visualize-food-insecurity">5. https://github.com/IBM/visualize-food-insecurity</a>

                    </td>              
                 </tr> 
             </tbody>           
        </table>
      </div>
      <div class="modal-footer">
      			
        <a class="btn btn-info btn-modal " href="student-login.html">Register Now</a> <span class="fress">(Free Participation)</span>
    
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>





<div id="myModal4" class="modal fade" role="dialog" style="z-index: 7000;">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header" style="display: initial;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Problem Statement</h4>
      </div>
      <div class="modal-body">
        <table class="table table-bordered custom_table">
             <tbody>
                 <tr>       
                    <td>Title</td>              
                    <td class="highkigt_pron_stat">Sentiment Analysis of COVID-19 Tweets – Visualization Dashboard</td>              
                 </tr> 
                 <tr>       
                    <td>Description</td>              
                    <td>The sentiment analysis of Indians after the extension of lockdown
announcements to be analyzed with the relevant #tags on twitter and build a
predictive analytics model to understand the behavior of people if the lockdown
is further extended.<br>
Also develop a dashboard with visualization of people reaction to the govt
announcements on lockdown extension

</td>              
                 </tr> 
                 <tr>       
                    <td>Expected Solutions</td>              
                    <td>Develop a twitter sentiment analysis model to understand the following<br><br>
                    1. Get to know people’s sentiment towards the epidemic<br>
                    2. Understand the sentiments of people on govt. decision to extend the
lockdown

                    </td>              
                 </tr> 
                 <tr>       
                    <td>Technologies &amp; Tools</td>              
                    <td>Python 2 or 3, IBM Watson Studio, IBM Cloud for Deployment, Any Web

frameworks</td>              
                 </tr> 
                 <tr>       
                    <td>Reference</td>              
                    <td>
                        <a href="https://www.kaggle.com/smid80/coronavirus-covid19-tweets">1.https://www.kaggle.com/smid80/coronavirus-covid19-tweets</a>
                            <br>
                            <a href="https://ieee-dataport.org/open-access/corona-virus-covid-19-tweets-dataset">2. https://ieee-dataport.org/open-access/corona-virus-covid-19-tweets-dataset</a>
                            <br>
                            <a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC7152888/">3.https://www.ncbi.nlm.nih.gov/pmc/articles/PMC7152888/</a>

                    </td>              
                 </tr> 
             </tbody>           
        </table>
      </div>
      <div class="modal-footer">

      			
        <a class="btn btn-info btn-modal " href="student-login.html">Register Now</a> <span class="fress">(Free Participation)</span>
    

        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



<div id="myModal5" class="modal fade" role="dialog" style="z-index: 7000;">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header" style="display: initial;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Problem Statement</h4>
      </div>
      <div class="modal-body">
        <table class="table table-bordered custom_table">
             <tbody>
                 <tr>       
                    <td>Title</td>              
                    <td class="highkigt_pron_stat">AI Recruiter – Shortlist a Suitable candidate for specific Job Role</td>              
                 </tr> 
                 <tr>       
                    <td>Description</td>              
                    <td>52% of talent acquisition leaders say that the most difficult part of their job is to
shortlist the right candidate and 3% of candidates never hear back from a company
after one touchpoint. On the flip side, it’s a challenge for employers to communicate
well with all their candidates. For high volume recruiting, this would require
communicating with thousands of candidates, in addition to a recruiter’s normal
screening functions and other duties. Artificial Intelligence enabled software bots
can definitely provide a solution for this problem.

</td>              
                 </tr> 
                 <tr>       
                    <td>Expected Solutions</td>              
                    <td>Software Bot enabled with Artificial Intelligence, which screens the candidate
application, shortlists for interview and identify his skills &amp; personality traits through
conversation.
                    </td>              
                 </tr> 
                 <tr>       
                    <td>Technologies &amp; Tools</td>              
                    <td>IBM Watson Assistant, IBM Watson Personality Insights, Python 2 or 3, IBM Watson
Studio, IBM Cloud for Deployment, Any Web / Mobile app frameworks</td>              
                 </tr> 
                 <tr>       
                    <td>Reference</td>              
                    <td>
                        <a href="https://marutitech.com/14-powerful-chatbot-platforms/">1.https://marutitech.com/14-powerful-chatbot-platforms/</a>
                            <br>
                            <a href="https://chatbotsmagazine.com/how-to-develop-a-chatbot-from-scratch-62bed1adab8c">2. https://chatbotsmagazine.com/how-to-develop-a-chatbot-from-scratch-62bed1adab8c</a>
                            <br>
                            <a href="https://ideal.com/recruitment-chatbot/">3.https://ideal.com/recruitment-chatbot/</a>

                    </td>              
                 </tr> 
             </tbody>           
        </table>
      </div>
      <div class="modal-footer">
      			
        <a class="btn btn-info btn-modal " href="student-login.html">Register Now</a> <span class="fress">(Free Participation)</span>
    
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<div id="myModal6" class="modal fade" role="dialog" style="z-index: 7000;">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header" style="display: initial;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Problem Statement</h4>
      </div>
      <div class="modal-body">
        <table class="table table-bordered custom_table">
             <tbody>
                 <tr>       
                    <td>Title</td>              
                    <td class="highkigt_pron_stat">Intelligent Post-Lock Down Management System for Public Transportation</td>              
                 </tr> 
                 <tr>       
                    <td>Description</td>              
                    <td>Post-Lockdown, it will be risky to allow the public transportation without proper
mechanism to maintain the social distancing, especially the frequency of buses, trains
and metros shall be managed properly to utilize the capacity with social distancing
criteria. The transport authorities must integrate together to maintain the system
properly.

</td>              
                 </tr> 
                 <tr>       
                    <td>Expected Solutions</td>              
                    <td>An Intelligent app to schedule the timings of transportation, avoiding the over
occupancy of public transport / bus stations / railway stations etc.
                    </td>              
                 </tr> 
                 <tr>       
                    <td>Technologies &amp; Tools</td>              
                    <td>IBM Watson Assistant, Python 2 or 3, IBM Watson Studio, IBM Cloud for Deployment,
Any Web / Mobile app frameworks</td>              
                 </tr> 
                 <tr>       
                    <td>Reference</td>              
                    <td>
                        <a href="https://www.transformative-mobility.org/news/the-covid-19-outbreak-and-implications-to-public-transport-some-observations">1.https://www.transformative-mobility.org/news/the-covid-19-outbreak-and-implications-to-public-transport-some-observations</a>
                            <br>
                            <a href="https://www.teriin.org/article/effects-covid-19-transportation-demand">2. https://www.teriin.org/article/effects-covid-19-transportation-demand</a>
                            <br>
                            <a href="https://www.uitp.org/public-transport-and-covid-19">3.https://www.uitp.org/public-transport-and-covid-19</a>

                    </td>              
                 </tr> 
             </tbody>           
        </table>
      </div>
      <div class="modal-footer">
      			
        <a class="btn btn-info btn-modal " href="student-login.html">Register Now</a> <span class="fress">(Free Participation)</span>
    
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



<style>

.high_foo{
    color: #fff366 !important;
    font-weight: 500;
    font-size: 16px !important; 
}
</style>
<script>
      var base_url = "index.html";
    $(function(){
        //$('#myModal').modal('show');
    });
   
  
</script>
<script src="../ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="assets/vps/js/2020/gurucool.js"></script>
<style>

.high_foo{
    color: #fff366 !important;
    font-weight: 500;
    font-size: 16px !important; 
}
</style>
    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area bg-img" style="background-image: url(sb_asserts/documents/vps/img/core-img/pattern.png);">

        <div class="footer-content-area ">
            <div class="container">
                <div class="row ">
                    <div class="col-12 col-lg-4 col-md-6">
                        <div class="footer-copywrite-info">
                            <!-- Copywrite -->
                            <div class="copywrite_text fadeInUp" data-wow-delay="0.2s">
                            <p>HackerVerse - Hackathon by Kristu Jayanti College</p>
                            </div>
                            <!-- Social Icon -->
                            <div class="footer-social-info fadeInUp" data-wow-delay="0.4s">
                                <a href="https://www.facebook.com/#/"><i class="fab fa-facebook facebook" aria-hidden="true"></i></a>
                                <a href="https://twitter.com/#"> <i class="fab fa-twitter twitter" aria-hidden="true"></i></a>
                                <a href="https://www.instagram.com/#"><i class="fab fa-instagram instagram" aria-hidden="true"></i></a>
                                <a href="https://www.linkedin.com/#"><i class="fab fa-linkedin linkedin" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-3 col-md-6 ">
                        <div class="contact_info_area d-sm-flex justify-content-between">
                           
                            <div class="contact_info mt-s text-center fadeInUp" data-wow-delay="0.4s">
                                <h5>CONTACT US</h5>
                                <p><i class="fab fa-google-plus-square addres" aria-hidden="true"></i> mailid@maildomain.com</p>
                                <br>
                                <p class="high_foo">Kristu Jayanti College (Autonomous)</p>
                                <p><i class="fab fa-periscope addres" aria-hidden="true"></i>
                                    K. Narayanapur, Kothanur P.O
                                    Bangalore 560077, Karnataka, India</p>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- ########## All JS ########## -->
    <!-- jQuery js -->
    <script src="sb_asserts/documents/vps/js/jquery.min.js"></script>
    <!-- Popper js -->
    <script src="sb_asserts/documents/vps/js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="sb_asserts/documents/vps/js/bootstrap.min.js"></script>
   
    <script src="sb_asserts/documents/vps/js/plugins.js"></script>
    
    <script src="sb_asserts/documents/vps/js/dzsparallaxer.js"></script>

    <script src="sb_asserts/documents/vps/js/jquery.syotimer.min.js"></script>

   
    <script src="sb_asserts/documents/vps/js/script.js"></script>

</body>
</html>