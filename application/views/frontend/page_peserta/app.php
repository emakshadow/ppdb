<?php

echo '<!DOCTYPE html>';
echo '<html lang="en">';

	include(APPPATH.'views/backend/layout/head.php');

	echo '<body class="hold-transition sidebar-mini sidebar-collapse">
<div class="wrapper">';	//sidebar
 	    
	include(APPPATH.'views/frontend/page_peserta/sidebar.php');

	//content-wrapper
	include(APPPATH.'views/backend/layout/content-wrapper.php');
	//dashboard
	include(APPPATH.'views/frontend/page_peserta/content.php');
	//control sidebar
	include(APPPATH.'views/backend/layout/control-sidebar.php');
	//foreach
	
	//footer
	include(APPPATH.'views/backend/layout/footer.php');

	// ./wrapper
	echo'</div>';
	//script
	include(APPPATH.'views/backend/layout/script.php');
echo '</body>';
echo '</html>';

?>