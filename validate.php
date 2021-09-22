<?php

$myemail = "duaa@gmail.com";
$mypass = "12345";

if(isset($_POST['login'])){

  
  $email = $_POST['email'];
  $pass = $_POST['password'];

  if ($email == $myemail and $pass == $mypass){
      if(isset($_POST['remember'])){
          setcookie('email' , $email , time()+60*60*7 );

      }

      session_start();
      $_SESSION['email'] = $email;
      header("Location: welcome.php");

    }

else{
    echo "Email Or Password id Invalid";
  }
}else {
  header( "Location: login.php");
   
}

?>