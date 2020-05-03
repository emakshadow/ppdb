<?php

		foreach ($pendaftaran as $pendaftaran ) 
		{ 
			  $nama_jadwal = $pendaftaran->nama_jadwal;
			  $status = $pendaftaran->status;

			  	if($nama_jadwal == 'pendaftaran'){
					include(APPPATH.'views/frontend/pendaftaran/not_available.php');
			  	}
			  	elseif($nama_jadwal == 'BTQ'){
					include(APPPATH.'views/frontend/pendaftaran/btq.php');
			  	}
			 
		 
		}
?>