<?php
	// URL check for a page
	if(isset($_GET['page'])) {
		$page = $_GET['page'];
	} else {
		$page = 'home';
	}

	// css, javascript, plugins for every page
	include_once('includes/main_header.php');
	// navigation
	include_once('includes/main_topnav.php');
	
	// if page does not exist shows error page
	if(!file_exists('includes/page_'.$page.'.php')) {
		
		include_once('includes/page_error.php');
	  
	} else {
		
		include_once('includes/page_'.$page.'.php');
	  
	}
	// footer
	include_once('includes/main_footer.php');
	
?>