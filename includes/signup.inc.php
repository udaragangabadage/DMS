<?php

if (isset($_POST['submit'])){
    include_once 'dbh.inc.php';


    $first = mysqli_real_escape_string($conn, $_POST['first']);
    $last = mysqli_real_escape_string($conn, $_POST['last']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $uid = mysqli_real_escape_string($conn, $_POST['uid']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

    //Error handlers
    //Check for empty fields
    if(empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd)){
      header("Location:../signup.php?signup=empty");
      exit();
    }else {
      //Check if input characters are valid
      if(!preg_match("/^[a-zA-Z]*$",$first) ||  !preg_match("/^[a-zA-Z]*$",$last)){
        header("Location: ../signup.php?signup=invalid");
        exit();
      }else {
        //Chech if email is valid
        if (filter_var($email, FILTER_VALIDATE)) {
          # code...
        }
      }
    }



} else {
   header("Location:../signup.php");
  exit();
}
