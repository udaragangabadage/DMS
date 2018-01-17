<?php
if(isset($_POST['submit'])){

  include_once 'dbh.dash.php';

  $type = $_POST['type'];
  $email = $_POST['email'];
  $uid = $_POST['uid'];
  $pwd = $_POST['pwd'];

// Error handlers
//chech for empty fields

if(empty($type) || empty($email) || empty($uid) || empty($pwd) ){
  header("Location: ../adminlogin.php?signup=empty");
  exit();
}
// else{
//
//   //check if input characters are valid
//   if (!preg_match("/^[a-zA-Z]*$/",$first) ||  !preg_match("/^[a-zA-Z]*$/",$last)){
//       header("Location: ../signup.php?signup=invalid");
//       exit();
// }
else{

  //check if email is valid
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    header("Location: ../adminlogin.php?signup=email");
    exit();
}
else{

    $sql = "SELECT * FROM users WHERE user_uid='$uid'";
    $result = mysqli_query($conn,$sql);
    $resultCheck = mysqli_num_rows($result);
    if($resultCheck > 0){
      header("Location: ../adminlogin.php?signup=usertaken");
      exit();
}
else{

      //Hashing the password
      $hashedPwd = password_hash($pwd,PASSWORD_DEFAULT);
      //INSERT THE USAER INTO THE DATABASE
      $sql = "INSERT INTO users (user_type,user_email,user_uid,user_pwd) VALUES ('$type','$email','$uid','$hashedPwd');";
      mysqli_query($conn,$sql);
      header("Location: ../adminlogin.php?signup=success");
      exit();
    }
   }
  }
}



else{
  header("Location: ../adminlogin.php");
  exit();
}
