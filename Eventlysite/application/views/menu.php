<?php 
	if ($this->session->userdata('logged_in')) {
		include('menu_logued.php');
	}
	else {
		include('menu_unlogued.php');
	}
?>