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
			"Experienced software developer in Java EE, PHP, HTML5, CSS, Bootstrap, and C++",
			"Agile project manager who demands a high quality of coding through rigorous unit testing",
			"Seasoned systems administrator who makes no compromises on enhancing security"
		)),
	);

	public $skills = array("details" => array(
		array(
			"type" => "Programming Languages",
			"items" => array(
				array("name" => "C"),
				array("name" => "C++"),
				array("name" => "CSS3"),
				array("name" => "HTML5"),
				array("name" => "Java"),
				array("name" => "JavaScript"),
				array("name" => "LaTeX"),
				array("name" => "PHP")
			)
		),
		array(
			"type" => "Frameworks",
			"items" => array(
				array("name" => "Bootstrap"),
				array("name" => "Java EE"),
				array("name" => "Java Persistence API (JPA)"),
				array("name" => "JavaServer Faces (JSF)"),
				array("name" => "jQuery"),
				array("name" => "Laravel"),
				array("name" => "Qt"),
				array("name" => "Spring")
			)
		),
		array(
			"type" => "Tools",
			"items" => array(
				array("name" => "Eclipse"),
				array("name" => "gcc"),
				array("name" => "git"),
				array("name" => "IntelliJ IDEA"),
				array("name" => "PhpStorm"),
				array("name" => "Qt")
			)
		),
		array(
			"type" => "Databases",
			"items" => array(
				array("name" => "IBM Informix"),
				array("name" => "Microsoft SQL Server"),
				array("name" => "mySQL"),
				array("name" => "Oracle Berkeley DB")
			)
		),
		array(
			"type" => "Servers",
			"items" => array(
				array("name" => "Apache"),
				array("name" => "Dovecot"),
				array("name" => "Postfix"),
				array("name" => "mySQL"),
				array("name" => "SpamAssassin"),
				array("name" => "Tomcat"),
				array("name" => "Ubuntu Linux")
			)
		)
	));

	public $education = array (
		"show_gpa" => true,
		"schools" => array(
			array(
				"degree" => "PhD (pursued)",
				"major" => "Computer Science",
				"institution" => "Missouri University of Science & Technology",
				"graduation_year" => 2011,
				"gpa" => 3.5
			),
			array(
				"degree" => "Master of Science",
				"major" => "Computer Science",
				"institution" => "Missouri University of Science & Technology",
				"graduation_year" => 2008,
				"gpa" => 3.5
			),
			array(
				"degree" => "Bachelor of Science",
				"major" => "Computer Science",
				"institution" => "California State University, San Marcos",
				"graduation_year" => 2006,
				"gpa" => 3.0
			),
			array(
				"degree" => "Associates of Arts",
				"major" => "Computer Science",
				"institution" => "Mira Costa College",
				"graduation_year" => 2005,
				"gpa" => 3.1
			)
		)
	);
}

header("Content-type: text/json");
$dylan = new Dylan();
echo json_encode($dylan, JSON_PRETTY_PRINT);
?>