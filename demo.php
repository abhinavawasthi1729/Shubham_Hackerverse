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
    <style>
    /* The side navigation menu */
.sidebar {
  margin: 0;
  padding: 0;
  width: 25vw;
  background-color: #f1f1f1;
  position: absolute;
  height: 100%;
  overflow: auto;
  top:102vh;
  height: 180vh;
}

/* Sidebar links */
.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}

/* Active/current link */
.sidebar a.active {
  background-color: #02075d;
  color: white;
}

/* Links on mouse-over */
.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

/* Page content. The value of the margin-left property should match the value of the sidebar's width property */
div.content {
  margin-left: 25vw;
  padding: 1px 16px;
  height: 180vh;
}

/* On screens that are less than 700px wide, make the sidebar into a topbar */
@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

/* On screens that are less than 400px, display the bar vertically, instead of horizontally */
@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
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

<div class="sidebar">
  <a class="active" href="#home">Edit form</a>
  <a href="#news">Submission</a>
  <a href="#contact">Fee Status</a>
  <a href="#about">Contact us</a>
</div>
<div class="content">
 
 <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A, debitis corporis natus accusamus itaque eligendi perspiciatis odio iste quam, obcaecati culpa unde quibusdam eaque impedit velit nobis ipsa quisquam accusantium.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium minus a porro quas quia pariatur ad perspiciatis facere voluptates dicta id modi voluptatibus dolores consequuntur, architecto rem iste odit inventore!</p>
    -->

    <div class="header">
  	<h2>Edit form</h2>
  </div>

  <style>
  .myform{
  font-size: 120%;
  background: #F8F8FF;
  height:120%;

  }
    .header {
  width: 30%;
  margin: 50px auto 0px;
  color: white;
  /*background: #5F9EA0;
  
  border: 1px solid #B0C4DE;*/
  text-align: center;
  border-bottom: none;
  border-radius: 10px 10px 0px 0px;
  padding: 20px;
  margin-top:100px;
  margin-bottom:0px;
}
form, .content {
  width: 80%;
  margin: 0px auto;
  padding: 20px;
  border: 1px solid #B0C4DE;
  background: white;
  border-radius: 0px 0px 10px 10px;
}
.input-group {
  margin: 10px 0px 10px 0px;
}
.input-group label {
  display: block;
  text-align: left;
  margin: 3px;
}
.input-group input {
  height: 30px;
  width: 93%;
  padding: 5px 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid gray;
}
.btn {
  padding: 10px;
  font-size: 15px;
  color: white;
  background: #5F9EA0;
  border: none;
  border-radius: 5px;
}
.error {
  width: 92%; 
  margin: 0px auto; 
  padding: 10px; 
  border: 1px solid #a94442; 
  color: #a94442; 
  background: #f2dede; 
  border-radius: 5px; 
  text-align: left;
}
.success {
  color: #3c763d; 
  background: #dff0d8; 
  border: 1px solid #3c763d;
  margin-bottom: 20px;
}
  </style>


    <?php


        $db=mysqli_connect('localhost','root','','hackerverse') or die('can not connected to DB');
        /*if($db){
            echo "connected";
        }*/
       // $query="SELECT * FROM `user_details` WHERE teamName=".$_SESSION['username'];
       $query= "SELECT  * FROM `user_details` WHERE `teamName`='".$_SESSION['username']."'";
        $result=mysqli_query($db,$query);
        if(mysqli_num_rows($result)>0){
            $input=mysqli_fetch_assoc($result);
            $par1=$input['participant1'];
            $par2=$input['participant2'];
            $par3=$input['participant3'];
            $par4=$input['participant4'];
            $par5=$input['participant5'];

            $team=$input['teamName'];
            $leader = $input['leader'];
            $phone1=$input['phone1'];
            $phone2=$input['phone2'];
            $colname=$input['college'];
            $email=$input['email'];
            $sno=$input['sno'];
            $colname=$input['college'];
           /* echo "<br>".$phone1;
            echo "<br>".$par1;*/

        }
        if(isset($_POST['edit'])){
            
                 
      
                            $email=mysqli_real_escape_string($db,$_POST['email']);
                          $par1=mysqli_real_escape_string($db,$_POST['name1']);
                          $par2=mysqli_real_escape_string($db,$_POST['name2']);
                          $par3=mysqli_real_escape_string($db,$_POST['name3']);
                          $par4=mysqli_real_escape_string($db,$_POST['name4']);
                          $par5=mysqli_real_escape_string($db,$_POST['name5']);
      
                          $team=mysqli_real_escape_string($db,$_POST['teamname']);
                          $leader = mysqli_real_escape_string($db,$_POST['name']);
                          $phone1=mysqli_real_escape_string($db,$_POST['mob']);
                          $phone2=mysqli_real_escape_string($db,$_POST['altmob']);
                          $colname=mysqli_real_escape_string($db,$_POST['clgname']);
      

                         $errors=array();
                         if(empty($email)){
                           array_push($errors,"Email is required");
             
                         }      
                          if(empty($leader)){
                          array_push($errors,"Participant 1 is required");
                          }
                          if(empty($team)){
                              array_push($errors,"Team name is required");
                          }
                          if(empty($phone1)){
                              array_push($errors,"Phone number is required");
                          }
                          if(empty($colname)){
                              array_push($errors,"College name is required");
                          }
      
                           $team_check_query="select * from `hackerverse`.`user_details` where teamName='$team' ";
                           $result=mysqli_query($db,$team_check_query);
                         
                              
                
                              if($result){
                                 $user=mysqli_fetch_assoc($result);
                                   if($user['teamName']===$team){
                                       array_push($errors,"Team name already exist");
                          //             //echo "<script type='text/javascript'> alert('Team name already exist') </script>";
                                     }          
                               }

                               $team_check_query="select * from `hackerverse`.`user_details` where email='$email' ";
                           $result=mysqli_query($db,$team_check_query);
                         
                              
                
                              if($result){
                                 $user=mysqli_fetch_assoc($result);
                                   if($user['email']===$email){
                                       array_push($errors,"Email already exist");
                          //             //echo "<script type='text/javascript'> alert('Team name already exist') </script>";
                                     }          
                               }
      
                          if(count($errors)==0){
      
                                // $query="UPDATE `user_details` SET `email`='".$email ."' ,`college`='". $colname."',`teamName`='". $team."',`leader`='". $leader."',`phone1`='". $phone1."',`phone2`='". $phone2."',`participant1`='".$par1 ."',`participant2`='".$par2 ."',`participant3`='".$par3 ."',`participant4`='".$par4 ."',`participant5`='".$par5 ."' WHERE `sno`='". $sno."'";
                               
                                $query="UPDATE `user_details` SET `phone2`='". $phone2."' WHERE `sno`='". $sno."'";
                             
                                $result=mysqli_query($db,$query);
                                if(isset($result))
                                {
                                  echo "<script type = 'text/javascript'>alert('Registration Successful')</script>";
                                  $_SESSION['username']=$team;
                                   $_SESSION['success']="You are logged in";
                                   header("location:index.php");
                                }
                                else
                                {
                                  
                                    //echo "<script type = 'text/javascript'>alert('Registration Not Successful!! Please try again!')</script>";  
                                    echo "not submited" ;
                                }
                          
      
                       /* }
                        else{
                          array_push($errors,"Email id already registered!");
                        }*/
                        }
                      else{
                           echo "<script type = 'text/javascript'>alert('Registration Not Successful!! Please try again!')</script>";
                                    
                              echo "&nbsp;&nbsp;&nbsp;&nbsp;<strong> Errors : </stong>";
                               foreach($errors as $error){
                                  echo "<ul><li> $error</li></ul>";
                                }
      
                      }
      
                    
      
         }
            
    ?>

   
    <div class="myform">	
  <form method="post" action="">
  	
  	<div class="input-group">
  	  <label>Team Name</label>
  	  <input type="text" name="teamname" value="<?php echo" $team"; ?>">
  	</div>
      <div class="input-group">
  	  <label>College Name</label>
  	  <input type="text" name="clgname" value="<?php echo" $colname"; ?>">
  	</div>
      <div class="input-group">
  	  <label>Team Leader Name</label>
  	  <input type="text" name="name" value=<?php  echo"$leader"; ?> >
  	</div>
      <div class="input-group">
  	  <label>Mobile number</label>
  	  <input type="text" name="mob" value=<?php  echo"$phone1"; ?>>
  	</div>
      <div class="input-group">
  	  <label>Alternate Mobile number</label>
  	  <input type="text" name="altmob" value=<?php  echo"$phone2"; ?>>
  	</div>
      
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value=<?php  echo"$email"; ?>>
  	</div>
      <div class="input-group">
  	  <label>Team member 1 name</label>
  	  <input type="text" name="name1" value=<?php  echo"$par1"; ?>>
  	</div>
      <div class="input-group">
  	  <label>Team member 2 name</label>
  	  <input type="text" name="name2" value=<?php  echo"$par2"; ?> >
  	</div>
      <div class="input-group">
  	  <label>Team member 3 name</label>
  	  <input type="text" name="name3" value=<?php  echo"$par3"; ?>>
  	</div>
      <div class="input-group">
  	  <label>Team member 4 name</label>
  	  <input type="text" name="name4" value=<?php  echo"$par4"; ?>>
  	</div>
      <div class="input-group">
  	  <label>Team member 5 name</label>
  	  <input type="text" name="name5" value=<?php  echo"$par5"; ?>>
  	</div>
  <!--	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>-->
  	<div class="input-group">
  	  <button type="submit" class="btn" name="edit">Modify</button>
  	</div>
  
  </form>
  </div>  
</div>

    <!-- ##### Footer Area Start ##### -->
  <<!--  <footer class="footer-area bg-img" style="background-image: url(sb_asserts/documents/vps/img/core-img/pattern.png);">

        <div class="footer-content-area ">
            <div class="container">
                <div class="row ">
                    <div class="col-12 col-lg-4 col-md-6">
                        <div class="footer-copywrite-info">
                            <!-- Copywrite -->
                         <!--   <div class="copywrite_text fadeInUp" data-wow-delay="0.2s">
                            <p>HackerVerse - Hackathon by Kristu Jayanti College</p>
                            </div>
                            <!-- Social Icon -->
                           <!-- <div class="footer-social-info fadeInUp" data-wow-delay="0.4s">
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
    </footer>-->
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