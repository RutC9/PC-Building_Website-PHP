<?php 
session_start();
include 'connect_database.php';
 
if(isset($_POST['submit']))
{
    $username = mysqli_real_escape_string($database, $_POST['username']);
    $password = $_POST['password'];
    
    $sql = "SELECT * FROM user WHERE email='$username' ";
    $result = mysqli_query($database, $sql);
    $row = mysqli_fetch_assoc($result);
    $dbStoredPASSWORD = $row['password'];

  if (password_verify ($password, $dbStoredPASSWORD)) 
  {
      $_SESSION['customer'] = $username;
      header('location:myaccount.php');
  } 
  else 
  {
    header('location:login.php?message=1'); //send message=1 tologin.php
    $message =  'incorrect Credentials';
  }

}

?>