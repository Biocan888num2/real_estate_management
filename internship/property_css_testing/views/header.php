<?php 
include "../models/head.inc.php";
ob_start();


if(isset($_SESSION['lang'])) {

    $current_language = $_SESSION['lang'];

    
}else{
    
    $current_language = "EN";
}



// Get the current page name
$current_page = basename($_SERVER['PHP_SELF']);

// Set the title based on the current page
switch($current_page) {
    
    case 'properties.php':

        if ($current_language == 'EN') {
            $title = 'Properties';

        } elseif ($current_language == 'FR') {
            $title = 'Propriétés';

        } else { 
            $title = 'Maintenance Proof';

        }
        break;

    // Add more cases as needed
    default:
        $title = 'Maintenance Proof';
}

?>

<link rel="stylesheet" type="text/css" href="../css/style_header.css">

    <header class="content-container">
      <div class="properties-title"><?php echo $title; ?></div>
      <nav class="language-switcher">
        <div class="language-options">
           <a href="../controllers/properties_controller.php?action=changeLanguage&lang=EN" style="text-decoration: none;" class="language">EN</a>
          <div class="language-divider">/</div>
           <a href="../controllers/properties_controller.php?action=changeLanguage&lang=FR" style="text-decoration: none;" class="language">FR</a>
        </div>
        <div class="image-container">
            <a href="../controllers/properties_controller.php?action=viewNotifications&notify=clicked">
                <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/0f4f507e16decc1b439407f4ee008bb24be8ce71fb0621b526ff874769d54e64?apiKey=2b2b143f121d4950beddb3a34f0a171a&" alt="Language switch icon" />
            </a>
        </div>
      </nav>
    </header>

<?php 
    ob_end_flush();
   ?>