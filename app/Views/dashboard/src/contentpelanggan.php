<?php
if (isset($_GET['page'])) {

	switch ($_GET['page']) {
		
		case 'reservation':
			require_once 'content/reservationpelanggan.php';
			break;
		case 'service':
			require_once 'content/servicepelanggan.php';
			break;
		case 'practice':
			require_once 'content/practicepelanggan.php';
			break;
	}
} else {
	require_once 'content/reservationpelanggan.php';
	
}
