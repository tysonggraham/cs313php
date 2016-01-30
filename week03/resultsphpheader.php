<?php


fopen($resultsfile, 'r');

$content = file_get_contents("./$resultsfile", true);

//Build my results arrays

$redeemingquality = array(
	"Good_Kisser" => substr_count($content, "Good Kisser"),
	"Good_Cook" => substr_count($content, "Good Cook"),
	"Shares_My_Interests" => substr_count($content, "Shares My Interests"),
	"Skilled_In_Combat" => substr_count($content, "Skilled in Combat"),
	"Good_Provider" => substr_count($content, "Good Provider"),
	"Loyal" => substr_count($content, "Loyal"),
	"Highly_Intelligent" => substr_count($content, "Highly Intelligent"),
	"Cute_Bum" => substr_count($content, "Cute Bum")
);

// print_r($meats);

$eat = array(
	"Pizza" => substr_count($content, "Pizza"),
	"Sugar_Cubes" => substr_count($content, "Sugar Cubes"),
	"Garbage" => substr_count($content, "Garbage"),
	"Grubs" => substr_count($content, "Grubs"),
	"Elephant_Seal" => substr_count($content, "Elephant Seal")
);

// print_r($rices);

//This may cause issues with the currently existing beans variable
$perfectdate = array(
	"Going_Hunting" => substr_count($content, "Refried Beans"),
	"Teasing_the_Weak" => substr_count($content, "Teasing the Weak"),
	"Volunteering_for_the_poor" => substr_count($content, "Volunteering for the poor"),
	"Going_Dancing" => substr_count($content, "Going Dancing"),
	"Watching_the_sun_go_down" => substr_count($content, "Watching the sun go down"),
	"Eating_Out_of_the_Garbage" => substr_count($content, "Eating Out of the Garbage")
);

// print_r($beans);

$mediums = array(
	"Thick_Tortilla" => substr_count($content, "Thick Tortilla"),
	"Thin_Tortilla" => substr_count($content, "Thin Tortilla"),
	"Salad" => substr_count($content, "Salad")	
);

// print_r($beans);

//This may cause issues with the currently existing beans variable
$tomato_stuff = array(
	"Plain" => substr_count($content, "Plain"),
	"Pico_de_Gallo" => substr_count($content, "Pico de Gallo"),
	"Salsa" => substr_count($content, "Salsa"),
	"None" => substr($content, "None")	
);

// print_r($tomato_stuff);

$fixings = array(
	"Lettuce" => substr_count($content, "Lettuce"),
	"Sour_Cream" => substr_count($content, "Sour Cream"),
	"Guacamole" => substr_count($content, "Guacamole"),
	"Cilantro" => substr_count($content, "Lettuce"),
	"Lime" => substr_count($content, "Lime"),
	"Jalapenos" => substr_count($content, "Jalapenos"),
	"Onions" => substr_count($content, "Onions")
);
// print_r($fixings);

?>