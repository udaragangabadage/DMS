


<?php
include_once'dbh.usersinfo.php';
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

<div class="flex">


	<table class="table table-dark">
		<thead>
			<tr>
				<!-- <th scope="col">#</th> -->
				<!-- <th scope="col">User id</th> -->
				<th scope="col">User First Name</th>
				<th scope="col">User Last Name</th>
				<th scope="col">User Email</th>

			</tr>
		</thead>

<tbody><tr>


	<?php


		$sql = "SELECT * FROM users;";
		$result = mysqli_query($conn,$sql);
		$resultCheck = mysqli_num_rows($result);




				// echo $row['user_id'];
				// echo $row['user_name'];
				// echo $row['user_email'];
				// echo $row['address'];
				// echo $row['latitude'];
				// echo $row['longitude'];
				// echo $row['incident'];
				// echo $row['explanation'];
        //

	if ($resultCheck > 0) {
		while ($row = mysqli_fetch_assoc($result)) {


			 // echo "<th>" . $row['user_id']    . "</th>" ;
			 echo "<td>" . $row['user_first'] . "</td>" ;
			 echo "<td>" . $row['user_last'] . "</td>" ;
			 echo "<td>" . $row['user_email'] . "</td>" ;



echo "</tr>";


}


}


 ?>



</tbody>
</table>


</div>










<!--

	<table class="table table-dark">
	  <thead>
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">First</th>
	      <th scope="col">Last</th>
	      <th scope="col">Handle</th>
	    </tr>
	  </thead>
	  <tbody>
	    <tr>
	      <th scope="row">1</th>
	      <td>Mark</td>
	      <td>Otto</td>
	      <td>@mdo</td>
	    </tr>
	    <tr>
	      <th scope="row">2</th>
	      <td>Jacob</td>
	      <td>Thornton</td>
	      <td>@fat</td>
	    </tr>
	    <tr>
	      <th scope="row">3</th>
	      <td>Larry</td>
	      <td>the Bird</td>
	      <td>@twitter</td>
	    </tr>
	  </tbody>
	</table> -->




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
