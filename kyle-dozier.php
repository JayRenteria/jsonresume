<?php

class KyleDozier {

	public $settings = array("icons" => true);

	public $firstname = "Kyle";
	public $familyname = "Dozier";
	public $linkedin_id = "kedlogic";
	public $github_id = "kedlogic";
	public $twitter_id = "kedlogic";

	public $bio_data = array(
		"email" => "kyle@kedlogic.com",
		"phone" => "",
		"website" => "http://www.kedlogic.com",
		"stars" => array("Earnest and Fun", "Full Stack Developer", "Driven to Learn", "Object Oriented and Security Minded"),
		"summary" => array("points" => array(
			"Enthusiastic and Personable Guy with a Love of Technology and Art. Humor is the best medicine!",
			"Up and coming Web Developer Proficient in PHP, HTML5, CSS, Javascript, Bootstrap, and MySQL",
			"Driven to Learn new Skill and Try new Things. Always open to Fresh Ideas.",
			"Highly Organized and Modular Coding Style utilizing the Object Oriented Mentality and Prioritizing Security."
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
				array("name" => "Bootstrap"),
				array("name" => "jQuery"),
			)
		),
		array(
			"type" => "Tools",
			"items" => array(
				array("name" => "git"),
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
				array("name" => "OpenSSH"),
				array("name" => "mySQL"),
				array("name" => "Ubuntu Linux")
			)
		)
	));

	public $education = array (
		"show_gpa" => false,
		"schools" => array(
			array(
				"degree" => "",
				"major" => "",
				"institution" => "DeepDiveCoders",
				"graduation_year" => 2015,
				"gpa" => ""
			)
		)
);

	public $experience = array("items" => array(
		array(
			"title" => "EasyTech",
			"organisation" => "Staples",
			"location" => "Albuquerque, NM",
			"from" => "December 2014",
			"to" => "Present",
			"details" => array(
				"Repaired Laptop and Desktop Computers.",
				"Advised Customers on the Purchase and Repair of PCs, Printers, Software, Mobile Devices, Peripherals, and other Technology related Merchandise and Services.",
				"Performed basic retail functions: Cashiering, Customer Service, Restocking, and some Janitorial."
			),
			"technology_used" => array("tools" => array(
				array("name" => "Windows XP and Later"),
				array("name" => "POS / Cash Register")
			))
		),
		array(
			"title" => "PC Technician",
			"organisation" => "The Computer Shop by Percolate Solutions",
			"location" => "Albuquerque, NM",
			"from" => "October 2013",
			"to" => "July 2014",
			"details" => array(
				"Built and Repaired Laptop and Desktop Computers and Mobile Devices",
				"Managed Inventory and Special Orders",
				"Advised Customers on the Purchase and Repair of PCs, Printers, Mobile Devices, Peripherals, and other Technology related Merchandise and Services.",
				"Performed basic retail functions: Cashiering, Customer Service, Restocking, and some Janitorial."
			),
			"technology_used" => array("tools" => array(
				array("name" => "Windows 98, 2000, XP, Vista, 7, and 8"),
				array("name" => "Linux Ubuntu, MInt, and Kali"),
				array("name" => "Mac OSX"),
				array("name" => "POS / Cash Register"),
			))
		),
	)
);

}

header("Content-type: text/json");
$kyleDozier = new KyleDozier();
echo json_encode($kyleDozier, JSON_PRETTY_PRINT);
?>