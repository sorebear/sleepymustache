<!DOCTYPE html>
<!--[if lt IE 9 ]>	  <html class="ie ie8 {{ urlClass }}" lang="en"> <![endif]-->
<!--[if IE 9 ]>		  <html class="ie ie9 {{ urlClass }}" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="{{ urlClass }}" lang="en"><!--<![endif]-->
<head>
	<!-- META DATA -->
	<meta charset="utf-8">
	<meta name="keywords" content="{{ keywords }}">
	<meta name="description" content="{{ description }}">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>{{ title }}</title>

	<!-- FRAME BUSTING -->
	<style>html {display:none}</style>
	<script>(self == top) ?	document.documentElement.style.display = 'block' : top.location = self.location;</script>

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="/css/main.css">

	<!-- JAVASCRIPT -->
	<script async src="<?= URLBASE ?>js/main.bundle.js"></script>

	<!-- FAVICON -->
	<link rel="apple-touch-icon" href="<?= URLBASE ?>favicon.png">
	<link rel="icon" href="<?= URLBASE ?>favicon.png">
	<!--[if IE]><link rel="shortcut icon" href="<?= URLBASE ?>favicon.ico"><![endif]-->
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="<?= URLBASE ?>favicon.png">

	<!-- SHIV -->
	<!--[if lt IE 9]>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
	<![endif]-->
</head>
<body>
	<div class="wrapper header">
		<header class="header__title">
			<h1>{{ header.title }}</h1>
			<input type="checkbox" id="light-switch">
			<label for="light-switch" class="{{ header.class }}">
			<a href="{{ header.link }}">
				<svg fill="white" class="header__light-switch" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve">
					<g><g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"><path stroke="white" d="M2430.8,5001c-168.6-28.7-400.5-153.3-534.7-285.5c-141.8-143.7-256.8-360.3-287.5-550c-17.2-95.8-21.1-1209.2-17.2-4125.8l5.7-3995.5l44.1-122.7c92-254.9,272.1-465.7,498.2-582.6c247.2-126.5,69-118.8,2868.7-118.8c2439.5,0,2552.6,1.9,2654.1,36.4c281.7,95.8,494.4,270.2,619,505.9c138,260.6,128.4-55.6,128.4,4353.9c0,4413.3,9.6,4093.3-130.3,4357.7c-139.9,266.4-438.9,482.9-732.1,528.9C7388.4,5027.8,2580.3,5024,2430.8,5001z M7656.6,4612c139.9-63.2,291.3-214.6,356.4-350.7l42.2-92v-4053v-4053l-42.2-92c-65.1-136.1-216.5-287.5-356.4-350.7l-118.8-55.6H4998.7H2459.6l-118.8,55.6c-139.9,63.2-291.3,214.6-356.4,350.7l-42.2,92v4053v4053l42.2,92c53.7,113.1,201.2,272.1,302.8,325.8c178.2,92,78.6,88.2,2740.3,84.3l2510.4-3.8L7656.6,4612z"/><path d="M4839.6,3736.2c-199.3-105.4-237.6-373.7-72.8-536.6c124.6-124.6,300.9-136.1,450.3-30.7c67.1,47.9,124.6,170.6,126.5,266.4C5345.5,3692.2,5067.7,3857,4839.6,3736.2z"/><path d="M4117.2,221.7v-1964.2h871.9H5861V221.7v1964.2h-871.9h-871.9V221.7z M5525.7,787V-257.4h-536.6h-536.6l-5.7,1025.2c-1.9,563.4,0,1036.7,5.7,1050.1c5.7,19.2,124.6,23,540.4,19.2l532.7-5.7V787z"/><path d="M4851.1-2794.6c-92-42.1-168.6-147.5-189.7-256.8c-26.8-147.6,90.1-323.9,251-377.5c201.2-67.1,431.2,109.2,431.2,329.6C5343.6-2850.2,5079.2-2687.3,4851.1-2794.6z"/></g></g>
				</svg>
			</a>
			</label>
			
		</header>
		<a href="{{ header.indexlink }}">
			<div class="date-display">
				<p>{{ date }}</p>
			</div>
		</a>
		<nav class="top-nav">{{ top_nav }}</nav>
		<section class="content clearfix">