<!doctype html>
<html lang="en">

<head>
  <title>DMS</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">


  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

  <!-- custom stylesheets -->
  <link rel="stylesheet" href="/css/common-layout.css">
  <link rel="stylesheet" href="/css/common-text.css">
  <!-- fontawesome cdn -->
<script src="https://use.fontawesome.com/1cc2ffd043.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDjW-Cq9fUukw6QRyUEtsiSwQBiKDiZEjQ"></script>


  <!-- offline stylesheets -->



</head>

<body>

<!-- nav start -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-danger">

    <a class="navbar-brand text-dark" href="#">
    <!-- <img src="/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt=""> -->
    <i class="fa fa-shield " aria-hidden="true"></i>
    Department Of Disaster Management
  </a>
    <!-- <a class="navbar-brand" href="#">Department Of Disaster Management</a> -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <!-- <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li> -->
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Contact Us</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link text-white" href="incident report center .html">Incident Report Center</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link text-white" href="#">Infomation Center</a>
        </li>




        <!-- <li class="nav-item">
          <a class="nav-link disabled" href="#">Disabled</a>
        </li> -->
      </ul>
      <!-- <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn btn-dark my-2 my-sm-0" type="submit">Search</button>
        </form> -->
        <ul class="nav justify-content-end">

          <li class="nav-item">
            <!-- <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn btn-dark my-2 my-sm-0" type="submit">Search</button>
              </form> -->
          </li>
          <li class="nav-item">
          <a href=""><button type="button" class="btn btn-dark my-2 my-sm-0">Logout</button></a>
          </li>

        </ul>
    </div>
    </div>
  </nav>

<!-- nav end -->
<br>

<div class="container">
  <div class="card card-body">
    <form>

      <div class="form-group">
        <label for="exampleInputEmail1">User Name</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>

        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

<!DOCTYPE html>
<html lang="en">
<head>
<title>Autocomplete Location Search using Google Maps JavaScript API and jQuery by CodexWorld</title>
<meta charset="utf-8">
<!-- Bootstrap library -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- jQuery UI library -->
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

<!-- Google JavaScript API -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDjW-Cq9fUukw6QRyUEtsiSwQBiKDiZEjQ"></script>

<script type="text/javascript">
    var geocoder;
    var map;
    var marker;

    /*
     * Google Map with marker
     */
    function initialize() {
        var initialLat = $('.search_latitude').val();
        var initialLong = $('.search_longitude').val();
        initialLat = initialLat?initialLat:36.169648;
        initialLong = initialLong?initialLong:-115.141000;

        var latlng = new google.maps.LatLng(initialLat, initialLong);
        var options = {
            zoom: 16,
            center: latlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };

        map = new google.maps.Map(document.getElementById("geomap"), options);

        geocoder = new google.maps.Geocoder();

        marker = new google.maps.Marker({
            map: map,
            draggable: true,
            position: latlng
        });

        google.maps.event.addListener(marker, "dragend", function () {
            var point = marker.getPosition();
            map.panTo(point);
            geocoder.geocode({'latLng': marker.getPosition()}, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    map.setCenter(results[0].geometry.location);
                    marker.setPosition(results[0].geometry.location);
                    $('.search_addr').val(results[0].formatted_address);
                    $('.search_latitude').val(marker.getPosition().lat());
                    $('.search_longitude').val(marker.getPosition().lng());
                }
            });
        });

    }

    $(document).ready(function () {
        //load google map
        initialize();

        /*
         * autocomplete location search
         */
        var PostCodeid = '#search_location';
        $(function () {
            $(PostCodeid).autocomplete({
                source: function (request, response) {
                    geocoder.geocode({
                        'address': request.term
                    }, function (results, status) {
                        response($.map(results, function (item) {
                            return {
                                label: item.formatted_address,
                                value: item.formatted_address,
                                lat: item.geometry.location.lat(),
                                lon: item.geometry.location.lng()
                            };
                        }));
                    });
                },
                select: function (event, ui) {
                    $('.search_addr').val(ui.item.value);
                    $('.search_latitude').val(ui.item.lat);
                    $('.search_longitude').val(ui.item.lon);
                    var latlng = new google.maps.LatLng(ui.item.lat, ui.item.lon);
                    marker.setPosition(latlng);
                    initialize();
                }
            });
        });

        /*
         * Point location on google map
         */
        $('.get_map').click(function (e) {
            var address = $(PostCodeid).val();
            geocoder.geocode({'address': address}, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    map.setCenter(results[0].geometry.location);
                    marker.setPosition(results[0].geometry.location);
                    $('.search_addr').val(results[0].formatted_address);
                    $('.search_latitude').val(marker.getPosition().lat());
                    $('.search_longitude').val(marker.getPosition().lng());
                } else {
                    alert("Geocode was not successful for the following reason: " + status);
                }
            });
            e.preventDefault();
        });

        //Add listener to marker for reverse geocoding
        google.maps.event.addListener(marker, 'drag', function () {
            geocoder.geocode({'latLng': marker.getPosition()}, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    if (results[0]) {
                        $('.search_addr').val(results[0].formatted_address);
                        $('.search_latitude').val(marker.getPosition().lat());
                        $('.search_longitude').val(marker.getPosition().lng());
                    }
                }
            });
        });
    });

</script>
<style>
#geomap{width: 100%; height: 400px;}
</style>
</head>
<body>

    <h4>Search Incident Location</h4>

    <!-- search input box -->
    <form>
    <div class="form-group input-group">
        <input type="text" id="search_location" class="form-control" placeholder="Search location">
        <div class="input-group-btn">
            <button class="btn btn-default get_map" type="submit">
                Locate
            </button>
        </div>
    </div>
    </form>

    <!-- display google map -->
    <div id="geomap"></div>

    <!-- display selected location information -->
    <h4>Incident Location Details</h4>
    <p>Address: <input type="text" class="search_addr" size="45"></p>
    <p>Latitude: <input type="text" class="search_latitude" size="30"></p>
    <p>Longitude: <input type="text" class="search_longitude" size="30"></p>


</body>
</html>


      <div class="form-group">
        <label for="exampleInputEmail1">Location</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

      </div>
    <!-- <div class="form-group">
      <label for="exampleInputEmail1">User Name</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div> -->
    <!-- <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"> -->

    </div>
    <div class="form-group">
      <label for="exampleFormControlSelect1">Incident Type</label>
      <select class="form-control" id="exampleFormControlSelect1">
        <option>Natural Disaster</option>
        <option>Road Side Accident</option>
        <option>Fire</option>
        <option>Electric Breakdown</option>
        <option>Leakages</option>
      </select>
    </div>

<!-- google map goes here -->


















    <!-- <div class="form-group">
      <label for="exampleInputEmail1">Location</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"> -->

    </div>
    <div class="form-group">
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
<br>

 <button class="btn btn btn-warning btn-space my-2 my-sm-0" type="submit">Sign Up</button>

 <br>
  </form>








  </div>
</div>


<br>

<?php
include_once'footer.php'
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
