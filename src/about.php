
<?php
	require_once(((@include_once('Webkit/init.php')) ? $docRoot : $_SERVER['DOCUMENT_ROOT']) . 'app/core/sleepy.php');

	// include_once("./app/modules/night-time/night_time.header.php");
	$page = new \Sleepy\Template('about');

	if (!isset($_GET['nighttime'])) {
		header('Location: about.php?nighttime=false');
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

	$page->show();