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
	"Going_Hunting" => substr_count($content, "Going Hunting"),
	"Teasing_the_Weak" => substr_count($content, "Teasing the Weak"),
	"Volunteering_for_the_poor" => substr_count($content, "Volunteering for the poor"),
	"Going_Dancing" => substr_count($content, "Going Dancing"),
	"Watching_the_sun_go_down" => substr_count($content, "Watching the sun go down"),
	"Eating_Out_of_the_Garbage" => substr_count($content, "Eating Out of the Garbage")
);

// print_r($beans);

$lifespan = array(
	"five_years" => substr_count($content, "1 to 5"),
	"twenty_years" => substr_count($content, "10 to 20"),
	"hundred_years" => substr_count($content, "30 to 100"),
	"None" => substr_count($content, "none")	
);

// print_r($beans);

//This may cause issues with the currently existing beans variable
$provide = array(
	"Food" => substr_count($content, "Food"),
	"Love" => substr_count($content, "Love"),
	"Warmth" => substr_count($content, "Warmth"),
	"Riches" => substr_count($content, "Riches"),
	"Protection" => substr($content, "Protection")
);

// print_r($tomato_stuff);

$qualities = array(
	"Romantic" => substr_count($content, "Romantic"),
	"Service" => substr_count($content, "Service"),
	"Purse" => substr_count($content, "Purse"),
	"Protect" => substr_count($content, "Protect"),
	"Cute" => substr_count($content, "Cute")
);
// print_r($fixings);

?>