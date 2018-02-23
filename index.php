<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Weather App</title>
  </head>
  <body>
  	
  		<nav class="nav mb-5">
		    <ul class="nav nav-pills">
			  <li class="nav-item">
			    <a class="nav-link active" href="#">Home</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" href="https://openweathermap.org/current">Source</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" href="https://en.wikipedia.org/wiki/Lists_of_cities_by_country">Cities</a>
			  </li>
			</ul>
		</nav>

	<div class="container">
		<div class="jumbotron">
	  		<div class="info text-center text-danger mt-5"></div>
			
			<div class="form-group">
				<label for="">City:</label>
				<input type="text" class="city-input form-control" placeholder="Enter a city to check weather">
				<button class="submit-btn btn btn-primary btn-block mt-4">Get Weather</button>
			</div>

			<div class="weather-info"></div>
		</div>
  	</div>
    
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
    	// Jquery function 1 page update
		$(".info").html('<h2>Alex\'s Weather App</h2>');
		// Jquery function 2 add event
		// $(".btn").on("click", function(event){
		// 	$(".info").toggle();
		// });
		// Jquery function 3 ajax

		$(".submit-btn").on("click", function(event) {
			var city = $(".city-input").val();
			// console.log(city);
			$.get(
				"http://api.openweathermap.org/data/2.5/weather?q=" + city + "&appid=4feb67b0dd401c57666337291f0c2532",
				function(data) {
					var str = "<h5 class='text-center'>" + city + " weather</h5>";
					str += "<div class='row'>";
					str += "<div class='col-3'><h5>Weather:</h5></div><div class='col-3'><h5><span class='badge badge-primary'>" + data.weather[0].main + "</span></h5></div>";
					str += "<div class='col-3'><h5>Temp:</h5></div><div class='col-3'><h5><span class='badge badge-primary'>" + (data.main.temp - 273.15) + "</span></h5></div>";
					str += "<div class='col-3'><h5>Wind speed:</h5></div><div class='col-3'><h5><span class='badge badge-primary'>" + data.wind.speed + "</span></h5></div>";
					str += "<div class='col-3'><h5>Pressure:</h5></div><div class='col-3'><h5><span class='badge badge-primary'>" + data.main.pressure + "</span></h5></div>";
					str += "</div>";
					$(".weather-info").html(str);
				}
			);
		});
    	
    </script>
  </body>
</html>