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
	      		<a class="navbar-brand">Tastiest Burrito Toppings & Fillins'</a>
	    	</div>
			<ul class="nav navbar-nav">
	  			<li class="active"><a href="results.php">Results</a></li>
			</ul>
		</div>
	</nav>
	<div id="container">
		<form action="results.php" method="POST">
			<div id="lhs">
				<h2>Favorite Quality</h2>
				<hr>

				<input type="radio" name="redeemingquality" value="Good Kisser"> Good Kisser<br>
				<input type="radio" name="redeemingquality" value="Good Cook"> Good Cook<br>
				<input type="radio" name="redeemingquality" value="Shares My Interests"> Shares My Interests<br>
				<input type="radio" name="redeemingquality" value="Skilled in Combat"> Skilled in Combat<br>
				<input type="radio" name="redeemingquality" value="Good Provider">Good Provider<br>
				<input type="radio" name="redeemingquality" value="Loyal"> Loyal<br>
				<input type="radio" name="redeemingquality" value="Highly Intelligent"> Highly Intelligent<br>
				<input type="radio" name="redeemingquality" value="Cute Bum"> Cute Bum<br>
				<br>

				<h2>If you had to eat one of these, which would you eat?</h2>
				<hr>
				<input type="radio" name="eat" value="Pizza"> Pizza<br>
				<input type="radio" name="eat" value="Sugar Cubes"> Sugar Cubes<br>
				<input type="radio" name="eat" value="Garbage"> Anything really, mostly garbage<br>
				<input type="radio" name="eat" value="Grubs"> Grubs..Acuna Matata!<br>
				<input type="radio" name="eat" value="Elephant Seal"> Elephant Seal<br>
				<br>

				<h2>Which of the following is the closest thing to a perfect date?</h2>
				<hr>
				<input type="radio" name="perfectdate" value="Going Hunting"> Going Hunting<br>
				<input type="radio" name="perfectdate" value="Teasing the Weak"> Teasing the Weak<br>
				<input type="radio" name="perfectdate" value="Volunteering for the poor"> Volunteering for the poor<br>
				<input type="radio" name="perfectdate" value="Going Dancing"> Going Dancing<br>
				<input type="radio" name="perfectdate" value="Watching the sun go down"> Watching the sun go down<br>
				<input type="radio" name="perfectdate" value="Eating Out of the Garbage">Eating Out of the Garbage<br>
				<br>

				<h2>Favorite Fillin' Medium </h2>
				<hr>

				<input type="radio" name="medium" value="Thick Tortilla"> Thick Flour Tortilla<br>
				<input type="radio" name="medium" value="Thin Tortilla"> Thin Flour Tortilla<br>
				<input type="radio" name="medium" value="Salad"> Burrito Salad Bowl<br>
				<br>

				<h2>Tomato-ey Stuff</h2>
				<hr>

				<input type="radio" name="tomato_stuff" value="Plain"> Plain old chopped up tomatoes<br>
				<input type="radio" name="tomato_stuff" value="Pico de Gallo"> Pico de Gallo<br>
				<input type="radio" name="tomato_stuff" value="Salsa"> Salsa-tized!<br>
				<input type="radio" name="tomato_stuff" value="No Tomato"> No tomatoes!<br>
				<br>
				
				<h2>Extra Fixin's</h2>
				<hr>

				<input type="checkbox" name="fixings[]" value="Lettuce"> Lettuce<br>
				<input type="checkbox" name="fixings[]" value="Sour Cream"> Sour Cream<br>
				<input type="checkbox" name="fixings[]" value="Guacamole"> Guacamole<br>
				<input type="checkbox" name="fixings[]" value="Cilantro"> Cilantro<br>
				<input type="checkbox" name="fixings[]" value="Lime"> Lime<br>
				<input type="checkbox" name="fixings[]" value="Jalapenos"> Jalepenos<br>
				<input type="checkbox" name="fixings[]" value="Onions"> Onions<br>
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