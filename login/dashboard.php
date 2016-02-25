<include 
<?php
function get_coordinates($city, $street, $state)
{
	$address = urlencode($city.','.$street.','.$state);
	$url = "http://maps.google.com/maps/api/geocode/json?address=$address&sensor=false&region=United States";
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_PROXYPORT, 3128);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	$response = curl_exec($ch);
	curl_close($ch);
	$response_a = json_decode($response);
	$status = $response_a->status;

	if ( $status == 'ZERO_RESULTS' )
	{
	    return FALSE;
	}
	else
	{
	    $return = array('lat' => $response_a->results[0]->geometry->location->lat, 'long' => $long = $response_a->results[0]->geometry->location->lng);
	    return $return;
	}
}

function GetDrivingDistance($lat1, $lat2, $long1, $long2)
{
	$url = "https://maps.googleapis.com/maps/api/distancematrix/json?origins=".$lat1.",".$long1."&destinations=".$lat2.",".$long2."&mode=driving&language=en-Us";
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_PROXYPORT, 3128);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	$response = curl_exec($ch);
	curl_close($ch);
	$response_a = json_decode($response, true);
	print_r($response_a['rows']);
//	$dist = $response.routes[0].legs[0].distance.value + " meters";
	$time = $response_a['rows'][0]['elements'][0]['duration']['text'];

	return array('distance' => $dist, 'time' => $time);
}

function parseAddress ($address) {
	$addressPieces = explode(", ", $address);
	$statePiece = explode(" ", $addressPieces[2]);
	$addressPieces[2] = $statePiece[0];
	return $addressPieces;
}

session_start();
//echo 'Welcome '. . "\r\n";;
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
<meta charset="utf-8">
<title>Companion Finder Home</title>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<style>
html, body {
	height: 100%;
	margin: 0;
	padding: 0;
}
#map {
	height: 100%;
}
#floating-panel {
	position: absolute;
	top: 10px;
	left: 25%;
	z-index: 5;
	background-color: #fff;
	padding: 5px;
	border: 1px solid #999;
	text-align: center;
	font-family: 'Roboto','sans-serif';
	line-height: 30px;
	padding-left: 10px;
}
</style>

<script src="https://maps.googleapis.com/maps/api/js?signed_in=true&callback=initMap" async defer></script>
<script>
	function initMap() {
		var directionsService = new google.maps.DirectionsService;
		var directionsDisplay = new google.maps.DirectionsRenderer;
		var map = new google.maps.Map(document.getElementById('map'), {
			zoom: 7,
			center: {lat: 41.85, lng: -87.65}
		});
		directionsDisplay.setMap(map);

		var onChangeHandler = function() {
			calculateAndDisplayRoute(directionsService, directionsDisplay);
		};
		document.getElementById('start').addEventListener('change', onChangeHandler);
		document.getElementById('end').addEventListener('change', onChangeHandler);
	}

	function calculateAndDisplayRoute(directionsService, directionsDisplay) {
		directionsService.route({
			origin: document.getElementById('start').value,
			destination: document.getElementById('end').value,
			travelMode: google.maps.TravelMode.DRIVING

		}, function(response, status) {
	    if (status === google.maps.DirectionsStatus.OK) {
			directionsDisplay.setDirections(response);
	    } else {
			window.alert('Directions request failed due to ' + status);
	    }
	  });
	}
</script>
</head>
<body background-image="url(https://upload.wikimedia.org/wikipedia/commons/thumb/8/85/Smiley.svg/2000px-Smiley.svg.png)">
    <nav class="navbar navbar-inverse">
	<div class="container-fluid">
    	<div class="navbar-header">
      		<a class="navbar-brand" href="#"><?php echo Welcome . " " . $_SESSION['email'];?></a>
    	</div>
		<ul class="nav navbar-nav">
  			<li class="active"><a href="#">Home</a></li>
  			<li class="active"><a href="assignments.html">Assignments</a></li>
  			<li><a href="https://www.spiritanimal.info/spirit-animal-quiz/">Guess My Spirit Animal</a></li>
  			<li><a href='./listUsers.php'>View All Users</a></li>
  			<li><a href='./compatibility_survey/survey.php'>Compatibility Survey</a></li>
  			<li><a href='./editProfile.php'>Edit Profile</a></li>
  			<li><a href='/logout.php'>Log Out</a></li>
		</ul>
	</div>
</nav>

<?php
$addr1 = "1521 1st Ave, Seattle, WA";
$addr2 = "1301 Alaskan Way, Seattle, WA";

$parts1 = parseAddress($addr1);
$parts2 = parseAddress($addr2);

// $coord1 = get_coordinates("Seattle", "1521 1st Ave", "Washington");

$coord1 = get_coordinates($parts1[1], $parts1[0], $parts1[2]);
$coord2 = get_coordinates($parts2[1], $parts2[0], $parts2[2]);

echo $parts1[1] . " - " . $parts1[0] . " - " . $parts1[2] . "<br>";
echo $parts2[1] . " - " . $parts2[0] . " - " . $parts2[2] . "<br>";

if ( $coord1 && $coord2 )
{
	$dist = GetDrivingDistance($coord1['lat'], $coord2['lat'], $coord1['long'], $coord2['long']);
	echo 'Distance: <b>'.$dist['distance'].'</b><br>Travel time duration: <b>'.$dist['time'].'</b>';
}
else
{
	echo 'Bad address.';
}
?>
	<div style:"text-align:center; display:block; margin:auto;">
	<b>Origin: </b>
	<select id="start">
		<option value="<?php echo $addr1; ?>">rexburg1</option>
		<option value="joplin, mo">Joplin, MO</option>
		<option value="oklahoma city, ok">Oklahoma City</option>
		<option value="amarillo, tx">Amarillo</option>
		<option value="gallup, nm">Gallup, NM</option>
		<option value="flagstaff, az">Flagstaff, AZ</option>
		<option value="winona, az">Winona</option>
		<option value="kingman, az">Kingman</option>
		<option value="barstow, ca">Barstow</option>
		<option value="san bernardino, ca">San Bernardino</option>
		<option value="los angeles, ca">Los Angeles</option>
	</select>
	<b>Destination: </b>
	<select id="end">
		<option value="<?php echo $addr2; ?>">rexburg2</option>
		<option value="chicago, il">Chicago</option>
		<option value="st louis, mo">St Louis</option>
		<option value="joplin, mo">Joplin, MO</option>
		<option value="oklahoma city, ok">Oklahoma City</option>
		<option value="amarillo, tx">Amarillo</option>
		<option value="gallup, nm">Gallup, NM</option>
		<option value="flagstaff, az">Flagstaff, AZ</option>
		<option value="winona, az">Winona</option>
		<option value="kingman, az">Kingman</option>
		<option value="barstow, ca">Barstow</option>
		<option value="san bernardino, ca">San Bernardino</option>
		<option value="los angeles, ca">Los Angeles</option>
	</select>
	</div>
	<div style="display:block; margin:auto; height: 500px; width:500px" id="map"></div>
</body>
</html>