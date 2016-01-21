<!DOCTYPE html>
<html>
<head>
	<title>Tyson Graham - CS 313</title>
	<link rel='stylesheet' href="styles.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script>
		var Clicks = 0 ;
		function AddClick(animal){
			  if()
			Clicks = Clicks + 1;
			document.getElementById('CountedClicks').innerHTML =  Clicks ;
		}
	</script>
</head>
<body>
	<div class="page gradient" id="main_page">
	    <nav class="navbar navbar-inverse">
	    	<div class="container-fluid">
	        	<div class="navbar-header">
	          		<a class="navbar-brand" href="#">Tyson Graham - CS 313</a>
	        	</div>
	    		<ul class="nav navbar-nav">
	      			<li class="active"><a href="#">Home</a></li>
	      			<li class="active"><a href="assignments.html">Assignments</a></li>
	      			<li><a href="spiritanimal.html">Guess My Spirit Animal</a></li>
	    		</ul>
	    	</div>
	    </nav>
	  
	    <div class="container">
    		<h3>Tyson Graham - CS 313 Homepage</h3>

	    	<hr class="featurette-divider">

	        <div class="row featurette">
				<div class="col-md-7">
					<img class=" featurette-image img-fluid center-block" height="360px" width="550px" src="wedding.jpg" alt="Generic placeholder image"></img>
				</div>
		        <div class="col-md-5">
					<h2 class="featurette-heading">About me.</h2>
					<p class="lead">Computer Science Major</p>
					<ul>
						<li>Node Developer</li>
						<li>SPA Enthusiest</li>
						<li>Happily Married Future Father</li>
						<li>Lifelong Student</li>
						<li>Discrete Math Lover</li>
					</ul>

					<p class="lead">Interests</p>
					<ul>
						<li>Web Development</li>
						<li><a href="https://nodejs.org/en/">Node Js</a></li>
						<li><a href="https://laravel.com/">Laravel</a></li>
						<li><a href="https://www.youtube.com/watch?v=MkWTVwJEQ7c">Animal Battles(e.g. snake vs squirrel, shark vs shark)</a></li>
					</ul>
		        </div>
	      	</div>
		</div>
	</div>
</body>
</html>