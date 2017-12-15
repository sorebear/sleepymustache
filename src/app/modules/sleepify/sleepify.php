<?php 

namespace Module\Sleepify;



function makeItSleepy($topNav) {
   $topNav->title = "Sleepy $topNav->title";
   return $topNav;
}

\Sleepy\Hook::applyFilter(
	'navigation_page',
	'\Module\Sleepify\makeItSleepy'
);