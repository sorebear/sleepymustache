<?php 

namespace Module\NightTime;

function nighttimeEnabled() {
   echo "<style> body { background-color: #444; } p, h2 { color: white; } form fieldset li label { color: teal; }</style>";
}

function nighttimeDisabled() {
	echo "<style> body { background-color: white; } p, h2 { color: black; } form fieldset li label { color: #444; }</style>";
}

\Sleepy\Hook::applyFilter(
	'nighttime_enabled',
	'\Module\NightTime\nighttimeEnabled'
);

\Sleepy\Hook::applyFilter(
	'nighttime_disabled',
	'\Module\NightTime\nighttimeDisabled'
);
