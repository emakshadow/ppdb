<?php

		foreach ($pendaftaran as $pendaftaran ) 
		{ 
			  $aktifasi = $pendaftaran->tampil;

			  	if($aktifasi == '0'){
					include(APPPATH.'views/frontend/pendaftaran/not_available.php');
			  	}
			  	elseif($aktifasi == '1'){
					include(APPPATH.'views/frontend/pendaftaran/btq.php');
			  	}
			  	elseif($aktifasi == '2'){
					include(APPPATH.'views/frontend/pendaftaran/form_enis.php');
			  	}elseif($aktifasi == '3'){
					include(APPPATH.'views/frontend/pendaftaran/tes_tulis.php');
			  	}
			  	elseif($aktifasi == '4'){
					include(APPPATH.'views/frontend/pendaftaran/pengumuman_hasil.php');
			  	}
			 
		 
		}
?>