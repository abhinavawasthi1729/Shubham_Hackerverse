    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>

        <title>Sign Up Form by Colorlib</title>

        <!-- Font Icon -->
        <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

        <!-- Main css -->
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>

        <style>

     
        #myDIV1 {
          display:block;


        }
        #myDIV2 {
          display:none;
        }

        #myDIV3 {
          display:none; 
        }

        #backgound-image{
            background-image: url("banner.jpg");
            position:absolute;
            background-repeat: no-repeat;
             background-size: cover;
            width:150vw;
            height:200vh;
            left:-20%;
            top:-20%;
            z-index: -1;
            opacity:0.5;
            
        }
        .back{
            z-index: 3;
        }
        
      </style>
     

        <div class="back main">

             <p align="center" style="font-family: 'Press Start 2P', cursive; font-size: 2.5em;color:black">HACKERVERSE</p>

            <!-- Sign up form -->
            <section id="myDIV1" class="signup">
                <div class="container">

                        <div class="signup-content">

                        <div class="signup-image">
                            <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                            <a href="#" class="signup-image-link" onclick="myFunction(3)">I have already account</a>
                        </div>
                        

                        <div class="signup-form">
                            <h2 class="form-title">Sign up</h2>
                            <form name="form1" id="form1" method="POST" class="register-form" id="register-form">
                                <!-- <div class="form-group">
                                    <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                    <input type="text" name="name" id="name" placeholder="Your Name"/>
                                </div> -->
                                <div class="form-group">
                                    <label for="email"><i class="zmdi zmdi-email"></i></label>
                                    <input type="email" name="email" id="email" placeholder="Your Email"/>
                                </div>
                                <div id="backgound-image">

                                </div>
                                <div class="form-group">
                                    <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                    <input type="password" name="pass" id="pass" placeholder="Password"/>
                                </div>
                                <div class="form-group">
                                    <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                    <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password"/>
                                </div>
                                <!-- <div class="form-group">
                                    <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                    <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                                </div> -->
                                <div class="form-group form-button">
                                   
                                    <input id="next" name="next" type="button" class="form-submit" value="Next" onclick="myFunction(2)" />
                                </div>
                            </form>
                            <!--  <button style="outline:none" class="form-submit" onclick="myFunction(2)">Next</button> -->
                        </div>

                        
                    </div>
                </div>
            </section>


                    <section id="myDIV2" class="signup">
                    <div class="container">
                    <div class="signup-content">   
                        <div class="signup-form">
                            <h2 class="form-title">Registration Detail</h2>
                            <form name="form2" id="form2" method="POST" class="register-form" id="register-form">

                                <div class="form-group">
                                    <!-- <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label> -->
                                    <input type="text" name="teamname" id="teamname" placeholder="Team Name"/>
                                </div>    
                                <div class="form-group">
                                    <!-- <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label> -->
                                    <input type="text" name="name" id="name" placeholder="Team Leader Name"/>
                                </div>
                                <div class="form-group">
                                    <!-- <label for="email"><i class="zmdi zmdi-email"></i></label> -->
                                    <input type="text" name="clgname" id="clgname" placeholder="College Name"/>
                                </div>
                                <div class="form-group">
                                    <!-- <label for="pass"><i class="zmdi zmdi-lock"></i></label>
 -->                                    <input type="tel" name="mob" id="mob" placeholder="Mobile"/>
                                </div>
                                <div class="form-group">
                                   <!--  <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label> -->
                                    <input type="tel" name="altmob" id="altmob" placeholder="Alternate Phone"/>
                                </div>
                                <div class="form-group">
                                   <!--  <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label> -->
                                    <input type="text" name="name1" id="name1" placeholder="Member1 Name"/>
                                </div>
                                <div class="form-group">
                                   <!--  <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label> -->
                                    <input type="text" name="name2" id="name2" placeholder="Member2 Name"/>
                                </div>
                                <div class="form-group">
                                   <!--  <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label> -->
                                    <input type="text" name="name3" id="name3" placeholder="Member3 Name"/>
                                </div>
                                <div class="form-group">
                                   <!--  <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label> -->
                                    <input type="text" name="name4" id="name4" placeholder="Member4 Name"/>
                                </div>
                                <div class="form-group">
                                   <!--  <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label> -->
                                    <input type="text" name="name5" id="name5" placeholder="Member5 Name"/>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                    <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                                </div>
                                <div class="form-group form-button">
                                        <input type="button" class="form-submit" value="Back" onclick="myFunction(1)" />
                                        <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                        
                                    <!-- <button style="outline:none" class="form-submit" onclick="myFunction(2)">Register</button> -->
                                    <!-- <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/> -->
                                </div>
                            </form>
                            <!-- <button style="outline:none" class="form-submit" onclick="myFunction(1)">Back</button> -->

                        </div>
                    </div>              
                </div>
            </section>

            <!-- Sing in  Form -->
            <section id="myDIV3" class="sign-in">
                <div class="container">
                    <div class="signin-content">
                        <div class="signin-image">
                            <figure><img src="images/signin-image.jpg" alt="sing up image"></figure>
                            <a href="#" class="signup-image-link" onclick="myFunction(1)">Create an account</a>
                        </div>

                        <div class="signin-form">
                            <h2 class="form-title">Sign In</h2>
                            <form action="signin.php" method="POST" class="register-form" id="login-form">
                                <div class="form-group">
                                    <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                    <input type="text" name="login_email" id="login_email" placeholder="Your Email" required />
                                </div>
                                <div class="form-group">
                                    <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                    <input type="password" name="login_pass" id="login_pass" placeholder="Password" required />
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                    <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                                </div>
                                <div class="form-group form-button">
                                    <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                                </div>
                            </form>
                            <!-- <div class="social-login">
                                <span class="social-label">Or login with</span>
                                <ul class="socials">
                                    <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                    <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                    <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                                </ul>
                            </div> -->
                        </div>
                    </div>
                </div>
            </section>

        </div>
        <span id="result"></span> 

        <script>
        function myFunction(btnsel) {
          if(btnsel===1){
            var x = document.getElementById("myDIV1");
            var y = document.getElementById("myDIV2");
            var z = document.getElementById("myDIV3");
            x.style.display = "block";
            y.style.display = "none";
            z.style.display = "none";
          }
          if(btnsel===2){
            var x = document.getElementById("myDIV1");
            var y = document.getElementById("myDIV2");
            var z = document.getElementById("myDIV3");
            x.style.display = "none";
            y.style.display = "block";
            z.style.display = "none";

          }

          if(btnsel===3){
            var x = document.getElementById("myDIV1");
            var y = document.getElementById("myDIV2");
            var z = document.getElementById("myDIV3");
            x.style.display = "none";
            y.style.display = "none";
            z.style.display = "block";

          }  
        }

        submitForms = function(){
            document.getElementById("form1").submit();
            document.getElementById("form2").submit();
        }

       $(document).ready(function(){
        var email,pass;
        var res;
         $("#next").click(function(){

            email = $('#email').val();
            pass = $('#pass').val();
        //   //  res=<?php   
        //   //  $db=mysqli_connect('localhost','root','','hackerverse') or die('can not connected to DB');
        //             $email= "<script>document.writeln(res);</script>";
        //           $email_check_query="select * from `hackerverse`.`user_details` where teamName='$email' ";
        //              $result=mysqli_query($db,$email_check_query);
                   
        //                 if($result){
        //                    echo "false" ;

        //                  }
        //                  else{
        //                      echo "true";
        //                  }
        //     ?>
        //     alert(res);
         });

         $("#form2").on('submit', function(event){
            $('#form2').append("<input type='hidden' name='email' value='"+
                         email+"' />");
            $('#form2').append("<input type='hidden' name='pass' value='"+
                         pass+"' />");
         var form_data = $(this).serialize();
         $.ajax({
          url:'index.php',
          type:'POST',
          data: {
           form_data
         },
         success:function(result){
           // alert('Registration Successfull');
           $("#result").html(result);

         }
         });
         // event.preventDefault();
            
         });


       });
      </script>
      <?php



             if(isset($_POST['signup'])){
                    $db=mysqli_connect('localhost','root','','hackerverse') or die('can not connected to DB');
                    $email=mysqli_real_escape_string($db,$_POST['email']);
                    $password=mysqli_real_escape_string($db,$_POST['pass']);
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

            //validation
            $errors=array();
            if(empty($email)){
              array_push($errors,"Email is required");

            }
            if(empty($password)){
              array_push($errors, "Password is required");
            }
            if(empty($leader)){
                    array_push($errors,"Team Leader is required");
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


              if(count($errors)==0){

                  $password=md5($password);
                        
                   
                  
                  //echo "logged in successfully part-1 sucessful";
                        
                   $query="INSERT INTO `credentials`(`email`, `password`) VALUES ('$email','$password')";
                   $result=mysqli_query($db,$query);


                   if($result){

                    if(count($errors)==0){

                    $query="INSERT INTO `hackerverse`.`user_details`(`email`, `college`, `teamName`, `leader`, `phone1`, `phone2`, `participant1`, `participant2`, `participant3`, `participant4`, `participant5`) VALUES ('$email','$colname','$team','$leader','$phone1','$phone2','$par1','$par2','$par3','$par4','$par5')";
                          $result=mysqli_query($db,$query);
                          if($result)
                          {
                            echo "<script type = 'text/javascript'>alert('Registration Successful')</script>";
                            echo "<script type='text/javascript'>window.location.assign('index.php')</script>";
                          }
                          else
                          {
                             $query = mysqli_query($db, "DELETE FROM `credentials` WHERE `email` = '$email'");
                            
                            array_push($errors,"Team Name already exists");     
                          }
                    }

                  }else{
                    array_push($errors,"Email id already registered!");
                  }
                }else{
                     echo "<script type = 'text/javascript'>alert('Registration Not Successful!! Please try again!')</script>";
                              
                        echo "&nbsp;&nbsp;&nbsp;&nbsp;<strong> Errors : </stong>";
                         foreach($errors as $error){
                            echo "<ul><li> $error</li></ul>";
                  }

                }

                   



                     if(count($errors)!=0){
                          
                           echo "<script type = 'text/javascript'>alert('Registration Not Successful!! Please try again!')</script>";
                              
                           echo "&nbsp;&nbsp;&nbsp;&nbsp;<strong> Errors : </stong>";
                           foreach($errors as $error){
                          echo "<ul><li> $error</li></ul>";
                          
                         
                       }
                      }          

     }

      ?>

        <!-- JS -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="js/main.js"></script>
    </body><!-- This templates was made by Colorlib (https://colorlib.com) -->
    </html>