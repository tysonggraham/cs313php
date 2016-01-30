<?php 

$resultsfile = "surveyresults.dat";

if ($_POST["submit"] == "submitted")
{
	if (!isset($_COOKIE["has_voted"])) {
		//All the post data goes here

		//Get the user's input
		$redeemingquality = $_POST["redeemingquality"];
		$perfectdate = $_POST["perfectdate"];
		$eat = $_POST["eat"];
		$lifespan = $_POST["lifespan"];
		$provide = $_POST["provide"];
		$quality = $_POST["attribute"];

		//The name of the file containg previous results.

		//Opens the file for appending (file must already exist).
		$fh = fopen($resultsfile, 'a');

		//Create an array to store everything
		$results_array = array();

		//Push everything on
		array_push($results_array, $redeemingquality, $perfectdate, $eat, $lifespan, $provide);

		foreach ($attribute as $item) {
			array_push($results_array, $item);
		}

		//Implode the array and separate it.
		$comma_delimited_list = implode("\n", $results_array) . ",\n";

		//Write to our results file.
		fwrite($fh, $comma_delimited_list);


		setcookie("has_voted", "1", mktime().time()+60*60*24*365*10);
	}
}

require "resultsphpheader.php";

 ?>
      
<!DOCTYPE html>
<html>
<head>
	<title>Results</title>
	<script lifespan="text/javascript" src="survey.js"></script>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
 	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<link rel="stylesheet" lifespan="text/css" href="survey.css">
	<script type="text/javascript" src="sources/jscharts.js"></script>
	<script type="text/javascript" src="results.js"></script>
  
            <!--Load the AJAX API-->
        <script type="text/javascript" src="https://www.google.com/jsapi"></script>
        <script type="text/javascript">

          // Load the Visualization API and the piechart package.
          google.load('visualization', '1.0', {'packages':['corechart']});

          // Set a callback to run when the Google Visualization API is loaded.
          google.setOnLoadCallback(drawChart);

          // Callback that creates and populates a data table,
          // instantiates the pie chart, passes in the data and
          // draws it.
          function drawChart() {
          	var redeemingqualitysArray = [<?php echo json_encode($redeemingqualitys); ?>];
	      	var eatArray = [<?php echo json_encode($eat); ?>];
	      	var perfectdateArray = [<?php echo json_encode($perfectdates); ?>];
	      	var lifespansArray = [<?php echo json_encode($lifespans); ?>];
	      	var provideArray = [<?php  echo json_encode($provide); ?>];
	      	var attributeArray = [<?php echo json_encode($attribute); ?>]

            // Create the data table.
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'redeemingquality');    
            data.addColumn('number', 'Count');
            data.addRows([
				['Good Kisser', redeemingqualitysArray[0].Good_Kisser],
				['Good Cook',     redeemingqualitysArray[0].Good_Cook],
				['Shares My Interests',    redeemingqualitysArray[0].Shares_My_Interests],
				['Skilled in Combat', redeemingqualitysArray[0].Skilled_in_Combat],
				['Good Provider', redeemingqualitysArray[0].Good_Provider],
				['Loyal',        redeemingqualitysArray[0].Loyal],
				['Highly Intelligent',  redeemingqualitysArray[0].Highly_Intelligent],
				['Cute Bum',  redeemingqualitysArray[0].Cute_Bum]
            ]);
            // Create the data table.
            var data2 = new google.visualization.DataTable();
            data2.addColumn('string', 'perfectdate');
            data2.addColumn('number', 'Count');
            data2.addRows([
				['Going Hunting', perfectdateArray[0].Going_Hunting],
				['Teasing the Weak',  perfectdateArray[0].Teasing_the_Weak],
				['Volunteering for the poor',    perfectdateArray[0].Volunteering_for_the_poor],
				['Going Dancing', 	perfectdateArray[0].Going_Dancing],
				['Watching the sun go down',       perfectdateArray[0].Watching_the_sun_go_down] 
            ]);

            var data3 = new google.visualization.DataTable();
            data3.addColumn('string', 'eat');
            data3.addColumn('number', 'Count');
            data3.addRows([              
				['Pizza',  eatArray[0].Pizza],
				['Sugar Cubes',    eatArray[0].Sugar_Cubes],
				['Anything really, mostly garbage', 	eatArray[0].Anything_really,_mostly_garbage],
				['Grubs',       eatArray[0].Grubs],
				['Elephant Seal',       eatArray[0].Elephant_Seal] 
            ]);              

            var data4 = new google.visualization.DataTable();
            data4.addColumn('string', 'Tortilla');
            data4.addColumn('number', 'Count');
            data4.addRows([              
				['1 to 5', 		lifespansArray[0].1_to_5],
				['10 to 20', 	lifespansArray[0].10_to_20],
				['30 to 100',  	lifespansArray[0].30_to_100],
				['none',  		lifespansArray[0].none]
            ]); 

            var data5 = new google.visualization.DataTable();
            data5.addColumn('string', 'Tomato Stuff');
            data5.addColumn('number', 'Count');
            data5.addRows([              
				['Food', 		provideArray[0].Food],
				['Love', 		provideArray[0].Love],
				['Warmth',  	provideArray[0].Warmth],
 				['Riches',  	provideArray[0].Riches],
				['Protection',	provideArray[0].Protection]
            ]); 

            var data6 = new google.visualization.DataTable();
            data6.addColumn('string', 'perfectdate');
            data6.addColumn('number', 'Count');
            data6.addRows([              
				['Romantic', 		attributeArray[0].Romantic],
				['Service',    attributeArray[0].Service],
				['Purse',    	attributeArray[0].Purse],
				['Protect', 		attributeArray[0].Protect],
				['Cute',        	attributeArray[0].Cute]
            ]); 

            // Set chart options
            var options = {'title':'Redeeming Quality Choice',
                           'width':400,
                           'height':300};
            // Set chart options
            var options2 = {'title':'Perfect Date Choice',
                           'width':400,
                           'height':300};
            // Set chart options
            var options3 = {'title':'Eating Choice',
                           'width':400,
                           'height':300};
            // Set chart options
            var options4 = {'title':'Lifespan Choice',
                           'width':400,
                           'height':300};
            // Set chart options
            var options5 = {'title':'Provider Choice',
                           'width':400,
                           'height':300};
            // Set chart options
            var options6 = {'title':'Favorite attribute',
                           'width':400,
                           'height':300};

            // Instantiate and draw our chart, passing in some options.
            var chart = new google.visualization.PieChart(document.getElementById('chart_div1'));
            chart.draw(data, options);
            var chart2 = new google.visualization.PieChart(document.getElementById('chart_div2'));
            chart2.draw(data2, options2);
            var chart3 = new google.visualization.PieChart(document.getElementById('chart_div3'));
            chart3.draw(data3, options3);0
            var chart4 = new google.visualization.PieChart(document.getElementById('chart_div4'));
            chart4.draw(data4, options4);
            var chart5 = new google.visualization.PieChart(document.getElementById('chart_div5'));
            chart5.draw(data5, options5);
            var chart6 = new google.visualization.BarChart(document.getElementById('chart_div6'));
            chart6.draw(data6, options6);

          }
  </script> 
</head>
<body>

<nav class="navbar navbar-inverse">
	<div class="container-fluid">
    	<div class="navbar-header">
      		<a class="navbar-brand">CompanionFinder Survey Results</a>
    	</div>
		<ul class="nav navbar-nav">
  			<li class="active"><a href="results.php">Results</a></li>
		</ul>
	</div>
</nav>

<h2>Voting Results</h2>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
		<li data-target="#myCarousel" data-slide-to="3"></li>
		<li data-target="#myCarousel" data-slide-to="4"></li>
		<li data-target="#myCarousel" data-slide-to="5"></li>
	</ol>

	<!-- Wrapper for slides -->
	<div class="carousel-inner centered" role="listbox">
		<!-- I wanted to center these, but I couldn't figure out the CSS... -->
		<div class="item active">
			<div id="chart_div1"></div>
		</div>

		<div class="item">
			<div id="chart_div2"></div>
		</div>

		<div class="item">
			<div id="chart_div3"></div>
		</div>

		<div class="item">
			<div id="chart_div4"></div>
		</div>

		<div class="item">
			<div id="chart_div5"></div>
		</div>

		<div class="item">
			<div id="chart_div6"></div>
		</div>
	</div>

	<!-- Left and right controls -->
	<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>
</body>
</html>