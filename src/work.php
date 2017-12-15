<?php
	require_once(((@include_once('Webkit/init.php')) ? $docRoot : $_SERVER['DOCUMENT_ROOT']) . 'app/core/sleepy.php');

	$page = new \Sleepy\Template('work');

	if (!isset($_GET['nighttime'])) {
		header('Location: work.php?nighttime=false');
	}
	
	if ($_GET['nighttime'] == 'true') {
		\Sleepy\Hook::addAction('nighttime_enabled');
	} else {
		\Sleepy\Hook::addAction('nightime_disabled');
	};

	// Content
	$night = $_GET['nighttime'] == 'true';
	
	$page->bind('header', array(
		"title" => "sleepy<span>ABOUT</span>",
		"link" => $night ? "about.php?nighttime=false" : "about.php?nighttime=true",
		"indexlink" => $night ? "index.php?nighttime=true" : "index.php?nighttime=false",
		"class" => $night ? "inverted" : ""
	));
	
	$page->bind('our_projects', array(
		array(
         "title" => "Endless Gallery",
         "live_link" => 'http://sorenbaird.com/apps/endless_gallery',
			"git_link" => 'https://github.com/sorebear/endless_gallery.git',
			"author" => "Soren Baird",
			"description" => "Our second Hackathon project"
		), 
      array(
         "title" => "Puzzle Me",
         "live_link" => 'http://puzzleme.sorenbaird.com/',
			"git_link" => 'https://github.com/sorebear/puzzle_me.git',
			"author" => "Soren Baird",
			"description" => "
				Our second Hackathon project",
		)
	));

	$page->show();
