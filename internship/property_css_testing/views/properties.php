<!-- Author: Andrew
Date: 03/11/2024
Email: bepecinplus@gmail.com -->

<?php 

include 'header.php';
$propertyMgr = new PropertyManager;

ob_start();

$all_properties = $propertyMgr->getAllProperties();
$user_properties_list = array();


if(isset($_SESSION['user_id'])) {
    $logged_id = $_SESSION['user_id'];

    if($logged_id >= 1){

    	$user_properties_list = getPropertiesOneUser($logged_id);

    }
}


//Check if global SESSION 'lang' variable is set
if(isset($_SESSION['lang'])) {

	//if it is SET use its stored value 
    $current_language = $_SESSION['lang'];

}else{
	//If not SET default is 'EN' which is english
    $current_language = "EN";
}


//The the associative arrays holding the various words in both languages throughout the app is assigned to a variable
$translations_main = array(
    "EN" => array(
        "Proplist" => "YOUR LIST"
    ),
    "FR" => array(
        "Proplist" => "VOTRE LISTE"
    )
);

// Use the current language to get the correct translations
$current_translations_main = $translations_main[$current_language];

?>

<!doctype html>  
<html lang="en">			
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Property Page</title>
		
			<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
			<link rel="stylesheet" type="text/css" href="../css/style.css">
			<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css">
			<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.3.2/swiper-bundle.css">
			<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
	</head>
	<body>

		<?php include 'sidebar.php'; ?>

		<div class="body-contents">
			<div class="your-list-group">
				<div class= "your-list-title">
					<div class="your-list-title-text"><?php echo $current_translations_main["Proplist"]; ?></div>
				</div>
				<div class="your-list" id="list-nav">

					<?php 

					    if(!empty($user_properties_list)){

					        foreach($user_properties_list as $line) {
					        	$link = '<a href="../controllers/properties_controller.php?action=propertyClicked&pclick=' . $line->getId() . '">';

					            if($line->getClickedOn() == "1"){

					                echo $link . '<div class="list-BUTTON-clicked">
					                    <div class="clicked-property">' . $line->getPropertyName() . '</div>
					                    <img class="logo-tiny" src="../images/logo.png" />
					                </div></a>';


					            }else if($line->getClickedOn() == "0"){

					                echo $link . '<div class="list-BUTTON-unclicked">
					                    <div class="unclicked-property">' . $line->getPropertyName() . '</div>
					                    <img class="logo-tiny" src="../images/logo.png" />
					                </div></a>';
					            }   
					        }


					    }else{

			        		if(!empty($all_properties)){

						        foreach($all_properties as $line) {
						            $link = '<a href="../controllers/properties_controller.php?action=propertyClicked&pclick=' . $line->getId() . '">';

						            if($line->getClickedOn() == "1"){

						                echo $link . '<div class="list-BUTTON-clicked">
						                    <div class="clicked-property">' . $line->getPropertyName() . '</div>
						                    <img class="logo-tiny" src="../images/logo.png" />
						                </div></a>';


						            }else if($line->getClickedOn() == "0"){

						                echo $link . '<div class="list-BUTTON-unclicked">
						                    <div class="unclicked-property">' . $line->getPropertyName() . '</div>
						                    <img class="logo-tiny" src="../images/logo.png" />
						                </div></a>';
						            
						            }else{

						            	echo '<a href=""><div class="list-BUTTON-unclicked">
						                    <div class="unclicked-property">ERROR</div>
						                    <img class="logo-tiny" src="../images/logo.png" />
						                </div></a>';
						            }   
					        	}	

			        		}
			        	}


			      	?>    

				</div>	
			</div>
			<div class="box-ADDRESS">
		    	<div class="frame-name-image">
		        	<img class="capture-dcran" src="..\images\Capture d’écran 2023-11-28 125036.png" />
		        	<div class="text-wrapper">Le Mistral</div>
		      	</div>
		      	<div class="frame-ADDRESS">
		        	<div class="bar-ADDRESS"><p class="div">5345 Bd Gouin O, Montréal, Qc, H2M 5T6, Canada</p></div>
		        	<div class="subgroup-ACTIONS">
		          		<div class="div-2">
		            		<img class="rectangle" src="..\images\icon_details8.png" />
		            		<div class="text-wrapper-2">SEE DETAILS</div>
		          		</div>
		          		<div class="div-2">
		            		<img class="edit" src="..\images\icon_modify8.png" />
		            		<div class="text-wrapper-2">MODIFY</div>
		          		</div>
		          		<div class="item-ADD">
		            		<div class="text-wrapper-2">ADD</div>
		            		<img class="add" src="..\images\icon_add8.png" />
		          		</div>
		        	</div>
		      	</div>
		      	<div class="property-IMPORTANCE">
		        	<!-- <div class="group-TITLE">
		          		<div class="title-IMPORTANCE"><div class="property-important">Important Points</div></div>
		        	</div> -->
		        	<div class="frame-FIELDS">
		          		<div class="div-wrapper">
		            		<div class="property-BUILD-DATE">
		              			<div class="description-BUILD"><div class="text-wrapper-3">BUILD DATE</div></div>
		              			<div class="div-wrapper-2"><div class="text-wrapper-4">1967-07-01</div></div>
		            		</div>
		          		</div>
		          		<div class="div-wrapper">
		            		<div class="property-LAST">
		              			<div class="description-LAST"><div class="text-wrapper-3">LAST RENOVATED</div></div>
		              			<div class="div-wrapper-2"><div class="last-renovated">2018-06-30</div></div>
		            		</div>
		          		</div>
		        	</div>
		        	<div class="property-BUILD-DATE-wrapper">
		          		<div class="property-BUILD-DATE-2">
		            		<div class="BUILD-DATE-wrapper"><div class="BUILD-DATE">PROPERTY VALUE</div></div>
		            		<div class="div-wrapper-2"><div class="text-wrapper-5">$3 900 000.00</div></div>
		          		</div>
		        	</div>
		    	</div>
		    </div>	
		</div>
		<div class="spacer-gradient">	
		</div>

		<?php include 'footer.php'; ?>	

		<script src="../js/jquery.js" type="text/javascript"></script>
		<script src="../js/bootstrap.bundle.js" type="text/javascript"></script>
		<!-- <script src="../js/home.js" type="text/javascript"></script> -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.js" type="text/javascript"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.3.2/swiper-bundle.js" type="text/javascript"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" type="text/javascript"></script>
		<script>	
			var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
			var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  			return new bootstrap.Tooltip(tooltipTriggerEl)
			})
		</script>	

	</body>
</html>	

<?php 
    ob_end_flush();
?>