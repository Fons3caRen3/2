<?php
	session_unset();
	require_once  'controlador/controladorSports.php';		
    $controller = new controladorSports();	
    $controller->mvcHandler();
?>