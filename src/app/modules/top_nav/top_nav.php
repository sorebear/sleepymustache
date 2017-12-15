<?php 

namespace Module\TopNav;

function render() {
	$topNavData = '{
		"pages": [
			{
				"title": "About",
				"link": "/about.php?' . $_SERVER['QUERY_STRING'] . '"
			},
			{
				"title": "Work",
				"link": "/work.php?' . $_SERVER['QUERY_STRING'] . '"
			},
			{
				"title": "Contact",
				"link": "/contact.php?' . $_SERVER['QUERY_STRING'] . '"
			}
		]
	}';

   $topNav = new \Module\Navigation\Builder($topNavData);
   return $topNav->show();
}

function isActive($active) {
	print_r($active);
}

\Sleepy\Hook::applyFilter(
	'render_placeholder_top_nav',
	'\Module\TopNav\render'
);

\Sleepy\Hook::applyFilter(
	'navigation_has_active',
	'\Module\TopNav\isActive'
);