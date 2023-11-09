<?php
if (isset($_GET['page'])) {

	switch ($_GET['page']) {
		
		case 'reservation':
			require_once 'content/reservation.php';
			break;
		case 'service':
			require_once 'content/service.php';
			break;
		case 'employee':
			require_once 'content/employee.php';
			break;
		case 'patient':
			require_once 'content/patient.php';
			break;
		case 'terapist':
			require_once 'content/terapist.php';
			break;
		case 'practice':
			require_once 'content/practice.php';
			break;
	}
} else {
	require_once 'content/index.php';
	
}
