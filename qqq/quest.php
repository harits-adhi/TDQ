<?php

	// Start the session
	session_start();
	
	if(isset($_POST['submit'])) 
	{ 
		$_SESSION['inputTask'] = $_POST['inputTask'];
		$_SESSION['beginTask'] = $_POST['beginTask'];
		$_SESSION['finishTask'] = $_POST['finishTask'];
		
		$_SESSION['breakeddd'] = $_POST['breakeddd'];
		
		$_SESSION['inputTaskk'] = $_POST['inputTaskk'];
		$_SESSION['beginTaskk'] = $_POST['beginTaskk'];
		$_SESSION['finishTaskk'] = $_POST['finishTaskk'];
		
		header('Location: /qqq/main.php');
		exit;
	}

?>