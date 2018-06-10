<?php
  include("class/users.php");
  $signin=new users; //create a signin object of users class
  extract($_POST);
  if($signin->signin($email,$pass)) //fetch email and pasword form login page and it pass to users page
  {
    $signin->url("home.php");
  }
  else {
    $signin->url("login.php?run=failed");
  }
 ?>
