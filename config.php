<?php
/* phpcv - PHP Curriculum Vitae 0.1
 * Made by Pierre Mavro & Piskvor
*/

///////////////////////////////
// All versions (first part) //
///////////////////////////////
$my_name = 'Jan Martinec';
$my_mail = 'jan {\} martinec.name';
$my_birth_day = "13";
$my_birth_month = "11";
$my_birth_year = "1981";

///////////////
// Languages //
///////////////

//
// French Version
//
if ($lang === 'cs')
{
    // <br /> has been added because of bug with wkhtmltopdf on letter-spacing
//	$role = "Vývojář";
	$title = "$my_name | $role | $my_mail";
	$personnal_infos = array(
		"Mail : <a href=\"mailto:$my_mail\">$my_mail</a>");
	$personnal_infos_full = array(
		"<img src=\"/photo-Jan_Martinec.jpg\" />",
		//birth_years_old($my_birth_day,$my_birth_month,$my_birth_year) . ' ans',
		'Tel. : +420 606 116 931');
	//$profile_title = 'Profile';
	$profile_desc = 'Description de mon profile';
	//$aim_title = 'Objectif';
	$aim_desc = 'Description de mon objectif';
	//$skills_name = 'Compétences';
	$first_skill = '1ère compétence';
	$first_skill_desc = 'Description de ma première compétence';
	$second_skill = '2ème compétence';
	$second_skill_desc = 'Description de ma deuxième compétence';
	$third_skill = '3ème compétence';
	$third_skill_desc = 'Description de ma troisème compétence';
	//$knowledges_title = 'Connaissances';
	$experience_title = 'Zkušenosti';
	$all_jobs = array(
		array(
			'Finnology',
			'CRM Team Leader',
			'2017',
			'výkonová optimalizace'),
		array(
			'DHL Česká Republika',
			'Software developer',
			'2016',
			'vývoj interního projektu - API+frontend'),
		array(
			'České Radiokomunikace',
			'programátor IS',
			'2015 - 2016',
			'vývoj reportingu, výkonová optimalizace frontendu'),
		array(
			'OTYS Česká Republika',
			'Software analyst',
			'2014 - 2015',
			'migrace platformy, výkonová optimalizace'),
		array(
			'Tovarna.cz',
			'programátor',
			'2013 - 2014',
			'vývoj nové funkčnosti'),
		array(
			'CET 21',
			'senior internet developer',
			'2012 - 2013',
			'API a automatizace, vývoj'),
		array(
			'Elevator',
			'senior developer',
			'2010 - 2012',
			'CRM - vývoj nových funkcí'),
		array(
			'OTYS Česká Republika',
			'developer',
			'2008 - 2010',
			'optimalizace db+backendu, full stack development'),
		array(
			'Alianza Turismo',
			'webmaster',
			'2007',
			'refactoring systému, externí integrace')
		);
	//$education_title = 'Formations';
	$all_education = array(
		array(
			'Formation 1'),
		array(
			'Formation 2',
			'Détail 1',
			'Détail 2'),
		array(
			'Diplôme d école')
	);
	$others_title = 'Znalosti';
	$all_others = array(
		array(
			'Programovací jazyky',
			'PHP, Javascript/node.js/React, bash, Java'),
		array(
			'Databáze',
			'MySQL, pgSQL, syBase'),
		array(
			'Další technologie',
			'Docker, Memcached, RabbitMQ, administrace Linux'),
		array(
			'Jazyky',
			'čeština - C2, angličtina - C1, francouzština - B1, němčina - A2'),
		array(
			'Řidičský průkaz',
			'B, bez omezení'),
	);
	//$hobby_title = 'Hobby';
	$hobby_list = array(
		'OpenStreetMap',
		'Geocaching');
}
else
//
// English Version
//
{
    // <br /> has been added because of bug with wkhtmltopdf on letter-spacing
//	$role = "Developer";
	$title = "$my_name | $role | $my_mail";
	$personnal_infos = array(
		"Mail : <a href=\"mailto:$my_mail\">$my_mail</a>"
	);
	$personnal_infos_full = array(
		"<img src=\"/photo-Jan_Martinec.jpg\" />",
//		birth_years_old($my_birth_day,$my_birth_month,$my_birth_year) . ' years old',
		"Phone : +420 606 116 931",
		'Skype: jan-agcz',
		);
	//$profile_title = "Profile";
	$profile_desc = "Profile's description";
	//$aim_title = "Aim";
	$aim_desc = "Aim's description";
	//$skills_name = "Skills";
	$first_skill = "1st skill";
	$first_skill_desc = "1st skill description";
	$second_skill = "2nd skill";
	$second_skill_desc = "2nd skill description";
	$third_skill = "3rd skill";
	$third_skill_desc = "3rd skill description";
	//$knowledges_title = "Knowledges";
	$experience_title = "Experience";
	$all_jobs = array(
		array(
			'Finnology',
			'CRM Team Leader',
			'2017',
			'scaling and performance optimization'),
		array(
			'DHL Česká Republika',
			'Software developer',
			'2016',
			'feature development - API+frontend'),
		array(
			'České Radiokomunikace',
			'programátor IS',
			'2015 - 2016',
			'reporting development, frontend performance optimization'),
		array(
			'OTYS Česká Republika',
			'Software analyst',
			'2014 - 2015',
			'platform migration, scaling optimization'),
		array(
			'Tovarna.cz',
			'programátor',
			'2013 - 2014',
			'feature development'),
		array(
			'CET 21',
			'senior internet developer',
			'2012 - 2013',
			'API + automation, feature development'),
		array(
			'Elevator',
			'senior developer',
			'2010 - 2012',
			'CRM feature development'),
		array(
			'OTYS Česká Republika',
			'developer',
			'2008 - 2010',
			'db+backend optimization, full stack development'),
		array(
			'Alianza Turismo',
			'webmaster',
			'2007',
			'system rewrite, external integration')
	);
	//$education_title = "Education";
	$all_education = array(
		array(
			"Training 2"),
		array(
			"Training 1",
			"Detail 1",
			"Detail 2"),
		array(
			"School diploma")
	);
	$others_title = "Knowledge";
	$all_others = array(
		array(
			'Programming languages',
			'PHP, Javascript/node.js/React, bash, Java'),
		array(
			'Databases',
			'MySQL, pgSQL, syBase'),
		array(
			'Further technologies',
			'Docker, Memcached, RabbitMQ, Linux administration'),
		array(
			'Natural languages',
			'Czech - C2 (native), English - C1 (advanced), French - B1 (intermediate), German - A2 (elementary)'),
		array(
			'Driving license',
			'B, no restrictions'),
	);
	//$hobby_title = "Hobbies";
	$hobby_list = array(
		'OpenStreetMap',
		'Geocaching');
}

//////////////////////////////
// All versions (last part) //
//////////////////////////////

// Knowledges
$first_knowledges = array(
	"Tic",
	"Tac",
	"Toc"
	);
$second_knowledges = array(
	"Foo",
	"Bar"
	);
$third_knowledges = array(
	"Plic",
	"Plac",
	"Ploc"
	);

// Set list array for others
/*
$others_list = array(
	"1 other",
	"2 other",
	"3 other",
	"4 other",
	"5 other",
	"6 other",
	"7 other");
*/
//////////////////
// PDF settings //
//////////////////

// wkhtmltopdf binary path
$wkhtmltopdf_bin = '/usr/bin/xvfb-run /usr/local/bin/wkhtmltopdf';
// Options
$options = '--no-background -B 10';
// URL to cv.php
$site = 'http://cv.martinec.name/cv.php';
// Destination where to stock file (prefer temporary filesystem if possible)
$pdf_destination = __DIR__ . DIRECTORY_SEPARATOR . '/pdf';
// PDF file name when downloaded - empty for a heuristic
$pdf_filename = '';


?>
