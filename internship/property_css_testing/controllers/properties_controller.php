<?php
include "../models/head.inc.php";
$propertyMgr = new PropertyManager;


$action = $_REQUEST['action'];

	switch ($action) {
	    
		case "changeLanguage":

			if(isset($_GET['lang'])){

				$temp_language = $_GET['lang'];
				$_SESSION['lang'] = $temp_language;
				
				//unset _GET after assigned to _SESSION
				unset($_GET['lang']);

				// Get the referrer page
            $referrer = $_SERVER['HTTP_REFERER'];
           	// Redirect to the referrer page
            echo "<script>window.location.href='$referrer'</script>";

		     }
		break;


		case "viewNotifications":

			if(isset($_GET['notify'])){

				$temp_selection = $_GET['notify'];
				 
				 //unset _GET after assigned to _SESSION
				 unset($_GET['notify']);

				if($temp_selection == "clicked"){
					 
					// set the notification page
            		$referrer = "notifications.php";
           			// Redirect to the notification page
            		echo "<script>window.location.href='$referrer'</script>";
            	}

		     }
		break;


		case "colorMode":

			if(isset($_GET['colorChoice'])){

				$temp_color = $_GET['colorChoice'];
				$_SESSION['colorChoice'] = $temp_color;

				//unset _GET after assigned to _SESSION
				unset($_GET['colorChoice']);

				// Get the referrer page
            $referrer = $_SERVER['HTTP_REFERER'];
           	// Redirect to the referrer page
            echo "<script>window.location.href='$referrer'</script>";

		     }
		break;


		case "propertyClicked":

			if(isset($_GET['pclick'])){

				$current_clicked_id = $_GET['pclick'];
				$_SESSION['clicked_property_id'] = $current_clicked_id;

				$propertyMgr->propertyWasClicked($current_clicked_id);

				//unset _GET after assigned to _SESSION
				unset($_GET['pclick']);				


				// Get the referrer page
            	$referrer = $_SERVER['HTTP_REFERER'];
           		// Redirect to the referrer page
            	echo "<script>window.location.href='$referrer'</script>";
			}
		break;

	}

?>