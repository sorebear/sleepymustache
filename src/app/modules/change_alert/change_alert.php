<?php 

namespace Module\ChangeAlert;

function youChanged($currentPage) {
   echo "<div class='bottom-alert'><p>You Changed!</p></div>";
}

\Sleepy\Hook::applyFilter(
	'navigation_current_page',
	'\Module\ChangeAlert\youChanged'
);