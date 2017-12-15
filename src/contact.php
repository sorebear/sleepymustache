
<?php
	require_once(((@include_once('Webkit/init.php')) ? $docRoot : $_SERVER['DOCUMENT_ROOT']) . 'app/core/sleepy.php');

      $page = new \Sleepy\Template('form');

      if ($_POST) {
            $message = new \Module\Mailer\Message();
            $message->addTo("sbaird@envivent.com");
            $message->addFrom($_POST['senderEmail']);
            $message->addSubject("New Sleepy Message From: " . $_POST['senderName']);
            $message->msgText($_POST['senderMessage']);
            $message->send();
      }

      if (!isset($_GET['nighttime'])) {
		header('Location: contact.php?nighttime=false');
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
            "link" => $night ? "contact.php?nighttime=false" : "contact.php?nighttime=true",
            "indexlink" => $night ? "index.php?nighttime=true" : "index.php?nighttime=false",
            "class" => $night ? "inverted" : ""
      ));

	$page->bind('form', array(
      "method" => "post",
      "inputs" => array(
         array(
            "name" => "senderName",
            "label" => "Your Name",
            "type" => "text",
            "placeholder" => "John Smith"
         ),
         array(
            "name" => "senderEmail",
            "label" => "Your Email",
            "type" => "email",
            "placeholder" => "johnnyboy@test.com"
         ),
      ),
      "textarea" => array(
            "label" => "Your Message",
            "name" => "senderMessage"
      )));

	$page->show();