<?php

class Dylan {

	public $settings = array("icons" => true);

	public $firstname = "Dylan";
	public $familyname = "McDonald";
	public $linkedin_id = "deepdivedylan";
	public $github_id = "deepdivedylan";
	public $twitter_id = "deepdivedylan";

	public $bio_data = array(
		"email" => "--EMAIL--",
		"phone" => "--PHONE--",
		"website" => "http://www.deepdivedylan.com/",
		"stars" => array("Instructor", "Full Stack Developer", "Scrum Master", "Systems Administrator"),
		"summary" => array("points" => array(
			"Passionate and dedicated instructor who pushes his students to the limits of their experience",
			"Experienced software developer in Java, JSF, PHP, HTML5, CSS, Bootstrap, and C++",
			"Agile project manager who demands a high quality of coding through rigorous unit testing",
			"Seasoned systems administrator who makes no compromises on enhancing security"
		)),
	);
}

header("Content-type: text/json");
$dylan = new Dylan();
echo json_encode($dylan, JSON_PRETTY_PRINT);
?>