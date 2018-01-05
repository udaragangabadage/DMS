<?php
if(isset($_POST['submit'])){

  include_once 'dbh.re.php';

  $user_name = $_POST['user_name'];
  $user_email = $_POST['user_email'];
  $address = $_POST['address'];
  $latitude = $_POST['latitude'];
  $longitude = $_POST['latitude'];
  $incident = $_POST['incident'];
  $explanation = $_POST['explanation'];

// Error handlers
//chech for empty fields

if(empty($user_name) || empty($user_email) || empty($address) || empty($latitude) || empty($longitude) || empty($incident) || empty($explanation)){
  header("Location: ../incident report center.php?signup=empty");
  exit();
}
else{

  //check if input characters are valid
  if (!preg_match("/^[a-zA-Z]*$/",$user_name)){
      header("Location: ../incident report center.php?signup=invalid");
      exit();
}
else{

  //check if email is valid
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    header("Location: ../incident report center.php?signup=email");
    exit();
}
else{

    $sql = "SELECT * FROM increport WHERE address='$address'";
    $result = mysqli_query($conn,$sql);
    $resultCheck = mysqli_num_rows($result);
    if($resultCheck > 0){
      header("Location: ../incident report center.php?signup=reportedincident");
      exit();
}else {
  //INSERT THE USAER INTO THE DATABASE
  $sql = "INSERT INTO increport (user_name, user_email,address,latitude,longitude,incident,explanation) VALUES ('$user_name','$user_email','$address','$latitude','$longitude','$incident','$explanation');";
  mysqli_query($conn,$sql);
  header("Location: ../home.php?signup=success");
  exit();
}
    }
   }
  }
}

}else{
  header("Location: ../incident report center.php");
  exit();
}
