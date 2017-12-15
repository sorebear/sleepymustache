<?php 

namespace Module\Date;
function renderDate() {

   $date = date('M') . " ";
   $date .= date('d') . ", <br>";
   $date .= date('Y');
   return $date;
   
}

\Sleepy\Hook::applyFilter(
	'render_placeholder_date',
	'\Module\Date\renderDate'
);