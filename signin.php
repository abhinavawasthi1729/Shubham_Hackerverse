<?php
      session_start();
      $db=mysqli_connect('localhost','root','','hackerverse') or die('can not connected to DB');

     if(isset($_POST['signin'])){
            $email=mysqli_real_escape_string($db,$_POST['login_email']);
            $password=mysqli_real_escape_string($db,$_POST['login_pass']);

            //hard coded values
            // $email="abhinavawasthi123@xyz.com";
            // $password="456";

                    $password=md5($password);
                    $query="SELECT * FROM `credentials` WHERE email='$email' AND password='$password'";
                    $result=mysqli_query($db,$query);
                   /* if(!$result){
                      echo "can not insert into credentials $query <br> $db->error";
                    }
                    else{
                      echo "logged in successfully";
                    }*/

                    if(mysqli_num_rows($result)){
                      /*$_SESSION['email']=$email;
                      $_SESSION['success']="you are successfully logged in";
                      echo "log in successful";*/
                      $query="SELECT * FROM `user_details` WHERE email='$email'";
                      $result=mysqli_query($db,$query);
                      if($result){
                        $input=mysqli_fetch_assoc($result);
                          if(isset($input)){
                            $_SESSION['username']=$input['teamName'];
                            echo $_SESSION['username'];
                          }
                      }
                      header("location:index.php");
                      echo "<script type='text/javascript'> alert ('Login successful') </script>";
                      echo "<script type='text/javascript'>window.location.assign('index.html')</script>";
                      
                   }
                   else{
                          echo "<script type='text/javascript'> alert ('Incorrect email or password') </script>";
                          echo "<script type='text/javascript'>window.location.assign('registration.php')</script>";
                    }
               
                }

      
      

  ?>
