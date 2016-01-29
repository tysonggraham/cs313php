<?php 
if (isset($_COOKIE["has_voted"])) {
	header("Location: results.php");
	exit();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Awesome.com</title>
	<script type="text/javascript" src="survey.js"></script>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
 	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="survey.css">
</head>
<body>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
	    	<div class="navbar-header">
	      		<a class="navbar-brand">Most Eligible Companions</a>
	    	</div>
			<ul class="nav navbar-nav">
	  			<li class="active"><a href="results.php">Results</a></li>
			</ul>
		</div>
	</nav>
	<div id="container">
		<form action="results.php" method="POST">
			<div id="lhs">
				<h2>What is the most redeeming quality for a potential companion to have?</h2>
				<hr>

				<input type="radio" name="meat" value="Carne Asada"> Good Kisser<br>
				<input type="radio" name="meat" value="Chicken"> Good Cook<br>
				<input type="radio" name="meat" value="Carnitas"> Shares My Interests<br>
				<input type="radio" name="meat" value="Ground Beef"> Skilled in Combat<br>
				<input type="radio" name="meat" value="Sweet Pork Barbacoa">Good Provider<br>
				<input type="radio" name="meat" value="Fish"> Loyal<br>
				<input type="radio" name="meat" value="Vegetarian"> Highly Intelligent<br>
				<input type="radio" name="meat" value="Vegetarian"> Cute Bum<br>
				<br>

				<h2>Which of the following is the closest thing to a perfect date?</h2>
				<hr>
				<input type="radio" name="rice" value="Spanish Rice"> Going Hunting<br>
				<input type="radio" name="rice" value="Cilantro Rice"> Teasing the Weak<br>
				<input type="radio" name="rice" value="White Rice"> Volunteering for the poor<br>
				<input type="radio" name="rice" value="Brown Rice"> Going Dancing<br>
				<input type="radio" name="rice" value="No Rice"> Watching the sun go down<br>
				<input type="radio" name="rice" value="No Rice">Eating Out of the Garbage<br>
				<br>

				<h2>If you had to one of these, which would you eat?</h2>
				<hr>
				<input type="radio" name="beans" value="Pinto Beans"> Pizza<br>
				<input type="radio" name="beans" value="Pinto Beans"> Sugar Cubes<br>
				<input type="radio" name="beans" value="Pinto Beans"> Anything really, mostly garbage<br>
				<input type="radio" name="beans" value="Pinto Beans"> Grubs..Acuna Matata!<br>
				<input type="radio" name="beans" value="Refried Beans"> Elephant Seal<br>
				<br>

				<h2>What is the estimated lifespan you want your companion to have?</h2>
				<hr>
				<input type="radio" name="medium" value="Thick Tortilla"> 1-5 years<br>
				<input type="radio" name="medium" value="Thin Tortilla"> 10-20 years<br>
				<input type="radio" name="medium" value="Salad"> 30-100 years<br>
				<input type="radio" name="medium" value="Salad"> Doesn't matter because I can stuff it when it's gone.<br>
				<br>

				<h2>If your companion could provide you with only one thing and you could choose, what would it be?</h2>
				<hr>
				<input type="radio" name="tomato_stuff" value="Plain"> Food<br>
				<input type="radio" name="tomato_stuff" value="Pico de Gallo"> Love<br>
				<input type="radio" name="tomato_stuff" value="Salsa"> Warmth<br>
				<input type="radio" name="tomato_stuff" value="No Tomato"> Riches<br>
				<input type="radio" name="tomato_stuff" value="No Tomato"> Protection<br>
				<br>
				
				<h2>What kind of companion are you looking for?</h2>
				<hr>
				<input type="checkbox" name="fixings[]" value="Lettuce"> Romantic/Eternal<br>
				<input type="checkbox" name="fixings[]" value="Sour Cream"> Service Animal<br>
				<input type="checkbox" name="fixings[]" value="Guacamole"> Someone to carry in my purse<br>
				<input type="checkbox" name="fixings[]" value="Cilantro"> Someone to protect me<br>
				<input type="checkbox" name="fixings[]" value="Lime"> Anything as long as its cute<br>
				<br>

				<button name="submit" value="submitted">Submit</button>
				<br>
				<br>
				<br>
			</div>
		</form>
	</div>
</body>
</html>


<?php
	// if (!isset($_COOKIE['count']))
	// {
		?>
<!-- Welcome!  This is the first time you visited this page! :D -->
<?php
		// $cookie = 1;
		// setcookie("count", $cookie);
	// }
	// else
	// {
		// $cookie = ++$_COOKIE['count'];
		// setcookie("count", $cookie);
		?>
<!-- You have this page <?=$_COOKIE['count'] ?> times. -->
<?php
	// }
?>