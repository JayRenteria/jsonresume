<?php

class Rochelle {

	public $settings = array("icons" => true);

	public $firstname = "Rochelle";
	public $familyname = "Lewis";
	public $linkedin_id = "rochellealewis";
	public $github_id = "rlewis2892";
	public $twitter_id = "rochelleUXUI";

	public $bio_data = array(
		"website" => "http://www.rochellelewis.com",
		"stars" => array("Front End Web Developer", "Web Designer", "Assistant Instructor"),
		"summary" => array("points" => array(
			"Web Designer and Front End Web Developer with a background spanning technology, photography, art and design, business administration, writing, and the sciences.",
			"I possess a discriminating and intuitive eye for high quality UX & UI Design, and specialize in Design-Minded Web Development. Agile Evangelist.",
			"I am passionate about high quality, progressive, and positive work environments that thrive on innovation, passion, and joy. I believe everyone should feel really good about work each and every day."
		)),
	);

	public $skills = array("details" => array(
		array(
			"type" => "Languages & Frameworks",
			"items" => array(
				array("name" => "HTML5"),
				array("name" => "CSS3"),
				array("name" => "JavaScript"),
				array("name" => "jQuery"),
				array("name" => "Bootstrap"),
				array("name" => "Python"),
				array("name" => "PHP"),
				array("name" => "AngularJS"),
				array("name" => "Jinja2")
			)
		),
		array(
			"type" => "Professional Interests",
			"items" => array(
				array("name" => "User Experience Design"),
				array("name" => "User Interface Design"),
				array("name" => "Web Design"),
				array("name" => "Creative Direction")
			)
		),
		array(
			"type" => "Tools & Skills",
			"items" => array(
				array("name" => "Adobe Creative Suite"),
				array("name" => "WordPress"),
				array("name" => "PhpStorm"),
				array("name" => "Git"),
				array("name" => "Ubuntu Linux"),
				array("name" => "mySQL")
			)
		),

	));

	public $education = array (
		"show_gpa" => false,
		"schools" => array(
			array(
				"degree" => "Certificate of Completion",
				"major" => "Web Development",
				"institution" => "Udacity",
				"graduation_year" => "2004"
			),
			array(
				"degree" => "Bachelor of Science (pursued)",
				"major" => "Imaging and Photographic Technology",
				"institution" => "Rochester Institute of Technology",
				"graduation_year" => "2005"
			),
			array(
				"degree" => "Associates of Arts",
				"major" => "Photography",
				"institution" => "San Diego City College",
				"graduation_year" => "2002"
			)
		)
	);

	public $experience = array("items" => array(
		array(
			"title" => "Assistant Instructor",
			"organisation" => "Deep Dive Coders Bootcamp at the CNM STEMulus Center",
			"location" => "Albuquerque, NM",
			"from" => "December 2014",
			"to" => "Present",
			"details" => array(
				"Assistant instructor at an intensive 9 week (40+ hours per week) web development boot camp taught at the CNM STEMulus Center in downtown Albuquerque, New Mexico.",
				"In conjunction with the Head Instructor, I help students learn the fundamentals of web development and coding to build great websites, software, and apps.",
				"I assist with the training of students on the fundamentals of modern web development using the latest tools, languages, and technologies including HTML5, CSS3, JavaScript, MySQL, and PHP."
			)
		),
		array(
			"title" => "Web Designer",
			"organisation" => "Real Time Solutions",
			"location" => "Albuquerque, NM",
			"from" => "October 2011",
			"to" => "November 2013",
			"details" => array(
				"Web design and front-end web development. Created and developed custom web sites tailored for RTS' proprietary realSites CMS."
			),
			"technology_used" => array("tools" => array(
				array("name" => "HTML5"),
				array("name" => "CSS3"),
				array("name" => "jQuery"),
				array("name" => "JavaScript"),
				array("name" => "Responsive Web Design"),
				array("name" => "ASP.NET Web Forms")
			))
		),
		array(
			"title" => "Executive Assistant",
			"organisation" => "Staffing Solutions",
			"location" => "Albuquerque, NM",
			"from" => "2011",
			"to" => "2011",
			"details" => array(
				"(Temporary Position)",
				"Provided broad-scope administrative support for the Executive Director of the Commercial Association of REALTORS, New Mexico."
			)
		),
		array(
			"title" => "Creative Director",
			"organisation" => "Iron Core Kettlebell Strength and Conditioning",
			"location" => "San Diego, CA",
			"from" => "2008",
			"to" => "2010",
			"details" => array(
				"Graphic design and branding for retail products, retail merchandising, advertising and marketing collateral.",
				"Provided administrative support, directed retail merchandising, and managed eCommerce for 100+ SKUs (POS, web store, and Amazon.com).",
				"Updated and maintained content on website, and managed web and social media presence.",
				"Developed FileMaker Pro database for member records from the ground up (1500+ records).",
				"Provided photography for web, eCommerce, and social media marketing.",
				"Assisted with video production for fitness DVDs and YouTube."
			)
		),
		array(
			"title" => "Photoshop Retoucher",
			"organisation" => "Lavalu, Inc.",
			"location" => "San Diego, CA",
			"from" => "2006",
			"to" => "2007",
			"details" => array(
				"Photoshop retouching, photo editing, digital post production, and custom album designs for some of the finest wedding photographers in the business."
			)
		)
	));

	public $projects = array(
		"items" => array(
			array(
				"title" => "City of Albuquerque Official Website",
				"organisation" => "Real Time Solutions",
				"from" => "October 2011",
				"to" => "May 2012",
				"points" => array(
					"Loading, formatting and transferring existing content over to the new City of Albuquerque Official Website, designed and developed by Real Time Solutions."
				)
			),
			array(
				"title" => "Reformat New Mexico Secretary of State Corporation Forms",
				"organisation" => "Real Time Solutions",
				"from" => "April 2013",
				"to" => "April 2013",
				"points" => array(
					"In 2013, the filing, maintenance and retention of corporate records for the State of New Mexico changed hands from the NM Public Regulation Commission to the NM Secretary of State. As a part of the Real Time Solutions design team, I was charged with the reformatting and redesign of over 50 official corporation forms for the State of New Mexico. These forms include Articles of Incorporation, Articles of Organization, Annual Reports, Corporate Dissolutions, and other required filings as required by the State of New Mexico regarding establishment of formal business structure."
				)
			),
			array(
				"title" => "Kettlebells For Dummies",
				"organisation" => "Iron Core LLC",
				"from" => "May 2009",
				"to" => "July 2009",
				"points" => array(
					"Provided Creative Direction for photo shoot production for the Kettlebells for Dummies book authored by Sarah Lurie and published by Wiley Publishing, Inc."
				)
			)
		)
	);

}

header("Content-type: text/json");
$rochelle = new Rochelle();
echo json_encode($rochelle, JSON_PRETTY_PRINT);
?>