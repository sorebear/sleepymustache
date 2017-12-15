<?php
	require_once(((@include_once('Webkit/init.php')) ? $docRoot : $_SERVER['DOCUMENT_ROOT']) . 'app/core/sleepy.php');
	// include_once('app/modules/magical/magical.php');

	$page = new \Sleepy\Template('homepage');

	if (!isset($_GET['nighttime'])) {
		header('Location: index.php?nighttime=false');
	}
	
	if ($_GET['nighttime'] == 'true') {
		\Sleepy\Hook::addAction('nighttime_enabled');
	} else {
		\Sleepy\Hook::addAction('nightime_disabled');
	};

	// SEO
	$page->bind('title', 'Sleepy Mustache');
	$page->bind('description', 'This is the description');
	$page->bind('keywords', 'blog, sleepy mustache, framework');


	$night = $_GET['nighttime'] == 'true';

	$page->bind('header', array(
		"title" => "sleepy<span>ABOUT</span>",
		"link" => $night ? "about.php?nighttime=false" : "about.php?nighttime=true",
		"indexlink" => $night ? "index.php?nighttime=true" : "index.php?nighttime=false",
		"class" => $night ? "inverted" : "",
		"link1" => array(
			"title" => "Testing",
			"path" => "routes/about.php"
		),
		"link2" => array(
			"title" => "Our Work",
			"path" => "routes/work.php"
		),
		"link3" => array(
			"title" => "Contact",
			"path" => "routes/contact.php"
		)
	));

	$page->bind('teasers', array(
		array(
			"title" => "Getting Started",
			"link" => 'http://www.sleepymustache.com/',
			"author" => "Jaime A. Rodriguez",
			"date" => date('m/d/Y', time()),
			"description" => "
				Congratulations on successfully installing sleepyMUSTACHE! You can visit the <a href=\"http://www.sleepymustache.com/documentation/index.html\">documentation page</a> to learn more or hit the ground running by viewing the <a href=\"http://www.sleepymustache.com/#getting-started\">getting started</a> section.",
			"tags" => array(
				array(
					'name' => "Configuration",
					'link' => "http://www.sleepymustache.com/#getting-started"
				)
			)
		), array(
			"title" => "Sample Modules",
			"link" => "#",
			"author" => "Jaime A. Rodriguez",
			"date" => date('m/d/Y', time() - 30 * 24 * 60 * 60),
			"description" => "
				By default there are 2 sample modules included with the
				framework. These modules demonstrate how to create your own
				modules, and implement existing functionality. You may safely
				delete them.",
			"tags" => array(
				array(
					'name' => "modules",
					'link' => "http://www.sleepymustache.com/#default-modules"
				),
				array(
					'name' => "fixes",
					'link' => "https://github.com/jaimerod/sleepy-mustache/commits/master"
				)
			)
		)
	));

	$page->show();
