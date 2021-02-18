<?php
      session_start();
      

     /* if($db){
        echo "connected to db";
      }*/
     
     if(isset($_POST['signup'])){
      $db=mysqli_connect('localhost','root','','hackerverse') or die('can not connected to DB');
           $email=mysqli_real_escape_string($db,$_POST['email']);
           $password=mysqli_real_escape_string($db,$_POST['pass']);

           // hard coded values 
           // $email="abhinavawasthi123@xyz.com";
           //  $password="456";
           //  $re_password="456";

           // validation
            $errors=array();
            if(empty($email)){
              array_push($errors,"Email is required");

            }
            if(empty($password)){
              array_push($errors, "Password is required");
            }

            // if($password!=$re_password){
            //   array_push($errors,"Password do not match");
            //   //echo "<script type='text/javascript'> alert('Password do not match') </script>";
            //    }

        

              if(count($errors)==0){

                  $password=md5($password);
                        
                   
                  
                  //echo "logged in successfully part-1 sucessful";
                        
                   $query="INSERT INTO `credentials`(`email`, `password`) VALUES ('$email','$password')";
                   $result=mysqli_query($db,$query);


                   if($result){


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

                   //hard coded value for form 2
                   // $par1="aaa";
                   // $par2="bbb";
                   // $par3="ccc";
                   // $par4="ddd";
                   // $par5="eee";
         
                   // $team="bravo";
                   // $phone1="9099999999";
                   // $phone2="9090900000";
                   // $colname="KJC";

                    if(empty($par1)){
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

                    // $team_check_query="select * from `hackerverse`.`user_details` where teamName='$team' ";
                    // $result=mysqli_query($db,$team_check_query);
                   
                        
          
                    //     if($result){
                    //       $user=mysqli_fetch_assoc($result);
                    //         if($user['teamName']===$team){
                    //             array_push($errors,"Team name already exist");
                    //             //echo "<script type='text/javascript'> alert('Team name already exist') </script>";
                    //           }          
                    //     }

                    if(count($errors)==0){

                    $query="INSERT INTO `hackerverse`.`user_details`(`email`, `college`, `teamName`, `leader`, `phone1`, `phone2`, `participant1`, `participant2`, `participant3`, `participant4`, `participant5`) VALUES ('$email','$colname','$team','$leader','$phone1','$phone2','$par1','$par2','$par3','$par4','$par5')";
                          $result=mysqli_query($db,$query);
                          if($result)
                          {
                            echo "<script type = 'text/javascript'>alert('Registration Successful')</script>";
                            $_SESSION['username']=$team;
                             $_SESSION['success']="You are logged in";
                             header("location:index.php");
                          }
                          else
                          {
                            
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