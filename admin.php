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
  <nav class="navbar navbar-expand-lg navbar-dark bg-danger">

    <a class="navbar-brand text-dark" href="#">

    <i class="fa fa-shield " aria-hidden="true"></i>
    Department Of Disaster Management
  </a>

		<ul class="nav justify-content-end">
			 <li class="nav-item">
			 			<a href=""><button type="button" class="btn btn-dark my-2 my-sm-0">Logout</button></a>
			 </li>
    </ul>




  </nav>


<br>
	<div class="text-center">
		<h5 class="">Admin Dashboard</h5>
	</div>
<br>



















	<div class="card">
	  <!-- <div class="card-header">
	    Reported Incidents
	  </div> -->
	  <div class="card-body">
	    <h5 class="card-title">Reported Incidents</h5>
	    <?php

			include_once'../latestincedents.php'
			?>
		</div>
	 </div>

<br>
	<div class="card">
	  <!-- <div class="card-header">
	    Reported Incidents
	  </div> -->
	  <div class="card-body">
	    <h5 class="card-title">User Info</h5>
	    <?php
      include_once "../usersinfo.php";
			?>
		</div>
	 </div>





<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>


















        <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Infomation Center
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li> -->


        <!-- <li class="nav-item">
          <a class="nav-link disabled" href="#">Disabled</a>
         </li> -->
      <!-- </ul> -->
      <!-- <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn btn-dark my-2 my-sm-0" type="submit">Search</button>
        </form> -->
        <!-- <ul class="nav justify-content-end">

          <li class="nav-item"> -->
            <!-- <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn btn-dark my-2 my-sm-0" type="submit">Search</button>
              </form> -->
          <!-- </li>
          <li class="nav-item">
          <a href=""><button type="button" class="btn btn-dark my-2 my-sm-0">Logout</button></a>
          </li>

        </ul>
    </div>
    </div>



<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/andrew-gaines-365269.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
    <h5>Welcom To Department Of Disaster Management</h5>
    <p>We cannot stop natural disasters but we can arm ourselves with knowledge: so many lives wouldn't have to be lost if there was enough disaster preparedness.</p>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/arny-mogensen-172490.jpg" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
    <h5>Welcom To Department Of Disaster Management</h5>
    <p>Learn from the past, look to the future, but live in the present.</p>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/benjamin-kerensa-363991.jpg" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
    <h5>Welcom To Department Of Disaster Management</h5>
    <p>We cannot stop natural disasters but we can arm ourselves with knowledge: so many lives wouldn't have to be lost if there was enough disaster preparedness.</p>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/madi-robson-113926.jpg" alt="Forth slide">
      <div class="carousel-caption d-none d-md-block">
    <h5>Welcom To Department Of Disaster Management</h5>
    <p>Learn from the past, look to the future, but live in the present.</p>
  </div>
    </div>
  </div>

  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>



<div class="jumbotron">
  <h1 class="display-4">Welcome to Department Disaster Management</h1>
  <p class="lead">We cannot stop natural disasters but we can arm ourselves with knowledge: so many lives wouldn't have to be lost if there was enough disaster preparedness.</p>
  <hr class="my-4">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex corporis rem fugiat cumque nam minus ipsam aliquam aut velit distinctio autem animi reprehenderit, aspernatur iste repellendus quasi velit! Ut itaque minus, maiores. Deleniti, rerum nesciunt animi? Magnam laboriosam minus corporis rem dicta fugiat quam quo officia, beatae eum esse voluptates nesciunt ut temporibus dolor, nisi unde. Consequuntur impedit excepturi omnis numquam, expedita eum voluptas est saepe.</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="#" role="button">Read more</a>
  </p>
</div>

<h1 class="center display-4">Reported Incidents</h1>


<?php

include_once'../footer.php'
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
