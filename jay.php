<?php

class Jay {

	public $settings = array("icons" => true);

	public $firstname = "Jay";
	public $familyname = "Renteria";
	public $linkedin_id = "jayrenteria";
	public $github_id = "JayRenteria";
	public $twitter_id = "jazzerrlol";

	public $bio_data = array(
		"email" => "jay@jayrenteria.com",
		"phone" => "+1 505.803.9324",
		"website" => "http://www.jayrenteria.com",
		"stars" => array("Front End Developer"),
		"summary" => array("points" => array(
			"Passionate and continuing to learn and grow in the world of development",
			"Focused on Front End Development, but have back end experience and can be an asset here as well.",
			"Looking for somewhere to continue to grow and build awesome things.",
		)),
	);

	public $skills = array("details" => array(
		array(
			"type" => "Programming Languages",
			"items" => array(
				array("name" => "CSS3"),
				array("name" => "HTML5"),
				array("name" => "JavaScript"),
				array("name" => "PHP")
			)
		),
		array(
			"type" => "Frameworks",
			"items" => array(
				array("name" => "AngularJS"),
				array("name" => "BackboneJS"),
				array("name" => "Laravel"),
				array("name" => "Bootstrap"),
				array("name" => "jQuery"),
			)
		),
		array(
			"type" => "Tools",
			"items" => array(
				array("name" => "git"),
				array("name" => "Grunt/Gulp"),
				array("name" => "PhpStorm"),
			)
		),
		array(
			"type" => "Databases",
			"items" => array(
				array("name" => "mySQL"),
			)
		),
		array(
			"type" => "Servers",
			"items" => array(
				array("name" => "Apache"),
				array("name" => "NGINX"),
				array("name" => "OpenSSH"),
				array("name" => "mySQL"),
			)
		)
	));

	public $education = array (
		"show_gpa" => false,
		"schools" => array(
//			array(
//				"degree" => "",
//				"program" => "Deep Dive Coders",
//				"institution" => "Central New Mexico Community College",
//				"graduation_year" => 2015,
//				"gpa" => ""
//			),
			array(
				"degree" => "Associate of Science",
				"major" => "Computer Science",
				"institution" => "Central New Mexico Community College",
				"years_attended" => "2012-2013",
				"gpa" => ""
			),
			array(
				"degree" => "Bachelor of Science",
				"major" => "Computer Science",
				"institution" => "University of New Mexico",
				"years_attended" => "2011-2012",
				"gpa" => ""
			),
		)
	);

	public $experience = array("items" => array(
		array(
			"title" => "Owner/Developer",
			"organisation" => "Hermes Development",
			"location" => "Albuquerque, NM",
			"from" => "April 2015",
			"to" => "Current",
			"details" => array(
				"Creating and maintaining clean and quality code for website/web apps.",
				"Communicating and working with clients to determine the best possible solutions.",
				"Work with two other business partners/developers in an Agile Development based setting.",
				"Research technologies that would be most efficient for the project at hand."
			),
			"technology_used" => array("tools" => array(
				array("name" => "HTML5"),
				array("name" => "CSS3"),
				array("name" => "JavaScript"),
				array("name" => "PHP"),
				array("name" => "Laravel"),
				array("name" => "WordPress"),
				array("name" => "AngularJS"),
				array("name" => "BackboneJS"),
				array("name" => "git"),
				array("name" => "Grunt/Gulp"),
				array("name" => "PHPStorm"),
				array("name" => "Apache"),
				array("name" => "mySQL"),
				array("name" => "Agile Development"),
			))
		),

		array(
			"title" => "Tier II Epic Clinical Analyst",
			"organisation" => "The Kemtah Group Inc",
			"location" => "Albuquerque, NM",
			"from" => "November 2013",
			"to" => "December 2014",
			"details" => array(
				"Assisted with the launch of the Epic system that was deployed in the Presbyterian Hospitals in the city. Assisted with supervision and training for the Regional Go-Live of Epic to the surrounding hospitals in New Mexico. ",
				"Assisted with clinical issues within the Epic application, from workflow to technical issues.",
				"Provide support for all clinical staff in the Presbyterian Medical Facilities, from front desk registrars to physicians.",
				"Navigating and troubleshooting the Epic EMR system in 10 different modules."
			),
			"technology_used" => array("tools" => array(
				array("name" => "CA Service Desk"),
				array("name" => "Epic EMR"),
				array("name" => "CC Pulse"),
				array("name" => "Remote Support Tools"),
			))
		),

//		array(
//			"title" => "Resident Technician",
//			"organisation" => "Staples",
//			"location" => "Albuquerque, NM",
//			"from" => "April 2012",
//			"to" => "November 2013",
//			"details" => array(
//				"In charge of troubleshooting/diagnosing computers, recommending a solution, and then directly applying the fix.",
//				"In charge of making and carrying out on-site appointments to set up printers, networks, fax machines, or fixing computers in the customers home or business.",
//				"Provide support over the phone or through remote means such as, TeamViewer, to troubleshoot problems and apply software related repairs."
//			),
//			"technology_used" => array("tools" => array(
//				array("name" => "Windows Xp, Vista, 7 and 8"),
//				array("name" => "Mac OSX"),
//			))
//		)
	));
}

header("Content-type: text/json");
$jay = new Jay();
echo json_encode($jay, JSON_PRETTY_PRINT);
?>