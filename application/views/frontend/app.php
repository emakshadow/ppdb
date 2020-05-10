<?php

echo '<!DOCTYPE html>';
echo '<html lang="en">';

	include(APPPATH.'views/frontend/layout/head.php');

	echo '<body id="page-top">';
	//navigation
	include(APPPATH.'views/frontend/layout/nav.php');
	//masterhead
	include(APPPATH.'views/frontend/layout/masterhead.php');

	//pendaftaran
	include(APPPATH.'views/frontend/pendaftaran/app.php');
	//berita
	include(APPPATH.'views/frontend/layout/Vberita.php');
	//info
	include(APPPATH.'views/frontend/layout/Vinfo.php');
	//jalur
	include(APPPATH.'views/frontend/layout/Vjalur.php');
	//kontak
	include(APPPATH.'views/frontend/layout/Vkontak.php');

	//footer
	include(APPPATH.'views/frontend/layout/footer.php');
	//modal
	
	//script
	include(APPPATH.'views/frontend/layout/script.php');
echo '</body>';
echo '</html>';

?>