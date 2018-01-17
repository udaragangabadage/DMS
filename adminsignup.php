<?php
// session_start();
 ?>

<!doctype html>
<html lang="en">

<head>
  <title>DMS</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

  <!-- custom stylesheets -->
  <link rel="stylesheet" href="/css/common-layout.css">
  <link rel="stylesheet" href="/css/common-text.css">
  <!-- fontawesome cdn -->
<script src="https://use.fontawesome.com/1cc2ffd043.js"></script>

  <!-- offline stylesheets -->



</head>

<body>

<!-- nav start -->
  <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-danger"> -->

    <!-- <a class="navbar-brand text-dark" href="#"> -->
    <!-- <img src="/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt=""> -->
    <!-- <i class="fa fa-shield " aria-hidden="true"></i>
    Department Of Disaster Management
  </a> -->
    <!-- <a class="navbar-brand" href="#">Department Of Disaster Management</a> -->
    <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">



      </ul>

        <ul class="nav justify-content-end">

          <li class="nav-item">
            <form class="form-inline my-2 my-lg-0" action="includes/login.inc.php" method="POST">
              <input class="form-control mr-sm-2" type="text" placeholder="User Name/E-mail" name="uid" >
              <input class="form-control mr-sm-2" type="password" placeholder="Password" name="pwd" >
              <button class="btn btn btn-dark btn-space my-2 my-sm-0" type="submit" name="submit">Log In</button>

              </form>
          </li>
          <li class="nav-item">  <button class="btn btn btn-warning btn-space my-2 my-sm-0" type="submit">Sign Up</button></li>

        </ul>
    </div>
    </div>
  </nav> -->


<br>
<br>
<br>

<div class="text-center">
	<h5 class="">Admin Signup</h5>
</div>
<br>
<br>
<!-- signup goes here -->
<div class="container">
  <div class="card card-body">

    <!-- <div class="form-group">
      <label for="">National Identification Number</label>
      <input type="text" class="form-control" id="" name="" placeholder="National Identification Number">
    </div> -->


<form class="signup-form" action="includes/signup.inc.php" method="POST">

  <!-- <div class="form-group">
    <label for="">First Name</label>
    <input type="text" class="form-control" id="" name="first" placeholder="First Name">
  </div>
  <div class="form-group">
    <label for="">Last Name</label>
    <input type="text" class="form-control" id="" name="last" placeholder="Last Name">
  </div> -->
	<div class="form-group">
		<label for="exampleFormControlSelect1">Admin Type</label><br>
		<select class="form-control" name="incident">
				<option>incident report manager</option>
				<option>police station chief</option>
				<option>grama niladari officer</option>
				<option>post office chief</option>
		</select>
	</div>
  <div class="form-group">
    <label for="">Email address</label>
    <input type="text" class="form-control" id="" name="email" placeholder="E-mail">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" class="form-control" id="" name="uid" placeholder="Username">
  </div>
  <div class="form-group">
    <label for="">Password</label>
    <input type="password" class="form-control" name="pwd" id="" placeholder="Password">
  </div>

  <button type="submit" name="submit" class="btn btn-danger">Sign Up</button>
</form>

</div>

</div>



<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>

<?php
include_once'footer.php'
?>
<?php
//include_once'twitter.php'
?>




  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

  <script src="libs/jquery-3.2.1.min.js"></script>
  <script src="scripts/script.js">

  </script>

</body>

</html>
