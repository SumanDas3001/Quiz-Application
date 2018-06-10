<?php
  include("class/users.php");
  $register=new users;
  extract($_POST);
  $img_name=$_FILES['img']['name'];
  $temp_name=$_FILES['img']['temp_name'];
  move_uploaded_file($temp_name,"img/".$img_name);
  $query="insert into signup values('','$uname','$umail','$upass','$img_name')";

  if($register->signup($query))
  {
    $register->url("registration.php?run=success");
  }

?>
