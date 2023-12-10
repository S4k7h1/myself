<?php
include 'link.php';

session_start();

if(isset($_POST['submit'])){

  $useremail=$_POST['useremail'];

  $userpassword=$_POST['userpassword'];



  $commad="SELECT upassword from userinfotable where usernameoremail='$useremail'";

  $result=$link->query($commad);

  $row=$result->fetch_assoc();

  $userpass=$row['upassword'];

  if($result->num_rows>0 && password_verify($userpassword,$userpass)){
    $_SESSION['useremail']=$useremail;
    header('location:dashboard.php');
    exit;
    // echo"<script>location.href='dashboard.html'</script>";
  }
  else{
    echo "<script>alert('please check the username and password')</script>";
    echo "<script>location.href='login.php'</script>";

  }
}


?>