<?php

echo '<!DOCTYPE html>';
echo '<html lang="en">';

	include(APPPATH.'views/backend/layout/head.php');

	echo '<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">';
	//navigation
	include(APPPATH.'views/backend/layout/nav.php');
	//sidebar
	include(APPPATH.'views/backend/layout/sidebar.php');

	//content-wrapper
	include(APPPATH.'views/backend/layout/content-wrapper.php');
	//dashboard
	include(APPPATH.'views/backend/layout/content.php');
	//control sidebar
	include(APPPATH.'views/backend/layout/control-sidebar.php');
	
	//footer
	include(APPPATH.'views/backend/layout/footer.php');

	// ./wrapper
	echo'</div>';
	

	//script
	include(APPPATH.'views/backend/layout/script.php');
echo '</body>';
echo '</html>';

?>