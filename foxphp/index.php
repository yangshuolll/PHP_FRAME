<?php
	include("foxphp.conf");
	$_controller = isset($_GET["controller"])?$_GET["controller"]:""; // get the controller parameters
	$_action = isset($_GET["action"])?$_GET["action"]:""; // get action parameter, may it is not exist
	if($_controller == "" || in_array($_controller, explode(",", FOXPHP_FORBIDDEN_TYPE))) exit(); 
	include(FOXPHP_PATH . "/Common/functions.inc");
	include(FOXPHP_PATH . "/MVC/Controller/_Master.inc");
	include(FOXPHP_PATH . "/MVC/Controller/". $_controller .".inc");

	$_init_controller = new $_controller();
	$_init_controller->$_action();  //execute the action
	
?>