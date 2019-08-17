<?php

if(isset($_POST['submit'])){
include_once 'config.php';

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $c_password = mysqli_real_escape_string($conn, $_POST['cpassword']);
//Error handling
//check empty
      if(empty($name)||empty($email)||empty($gender)||empty($password)||empty($c_password)){
        header("Location:signup.php?signup=empty");
        exit();
      }else{
        //check if input characters are valid
        if(!preg_match("/^[a-zA-Z]*$/",$name)){
        header("Location:signup.php?signup=invalid") ;
        exit();
      }else{
        //check if email is invalid
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
          header("Location:signup.php?signup=email") ;
          exit();
        }else{
          $sql="SELECT * FROM `signup` WHERE `email`='$email'";
          $result = mysqli_query($conn, $sql);
          $resultCheck = mysqli_num_rows($result);
          if($resultCheck >0){
            header("Location:signup.php?signup=usertaken") ;
            exit();
          }else{
              $sql1 = "INSERT INTO `signup` (`sl_id`, `name`, `email`, `gender`, `password`, `c_password`) VALUES (NULL, '$name', '$email', '$gender', '$password', '$c_password');";
              $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt,$sql1)){
              echo "SQL error";
            }else {
              mysqli_stmt_bind_param($stmt, "sssss", $name,$email,$gender,$password,$c_password);
              mysqli_stmt_execute($stmt);
            }

            header("Location:signup.php?signup=success");
          }
        }
      }
}
}else{
    header("Location:signup.php");
    exit();
  }

  

    ?>
