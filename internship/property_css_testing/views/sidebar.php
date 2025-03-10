<!-- Author: Andrew
Date: 03/11/2024
Email: bepecinplus@gmail.com -->


<?php 

ob_start();

//Fetch the current language of the page
if(isset($_SESSION['lang'])) {
    $current_language = $_SESSION['lang'];

} else {
    $current_language = "EN";

}


//The different menu item texts depending on the 
//language selected, placed in associative array
$translations_sidebar = array(
    "EN" => array(
        "Dashboard" => "Dashboard",
        "Properties" => "Properties",
        "Assets" => "Assets",
        "Inspection" => "Inspection",
        "Settings" => "Settings"
    ),
    "FR" => array(
        "Dashboard" => "Tableau de bord",
        "Properties" => "Propriétés",
        "Assets" => "Actifs",
        "Inspection" => "Inspection",
        "Settings" => "Paramètres"
    )
);


// Define the image sources for each menu item
$image_sources = array(
    "Dashboard" => "https://cdn.builder.io/api/v1/image/assets/TEMP/597a67e074988defc2999459bf3204bd51edd3d16365f1f3d61bc04f05c2e9a9?apiKey=2b2b143f121d4950beddb3a34f0a171a&",

    "Properties" => "https://cdn.builder.io/api/v1/image/assets/TEMP/d24c1c32e9e9e0a48796e206f70019b37d4c9dc3ea99cca5a2fd7148def5364b?apiKey=2b2b143f121d4950beddb3a34f0a171a&",

    "Assets" => "https://cdn.builder.io/api/v1/image/assets/TEMP/2a7f98139bc615e011d2e83cddaa8058a4da75de35519383888816ba168d591d?apiKey=2b2b143f121d4950beddb3a34f0a171a&",

    "Inspection" => "https://cdn.builder.io/api/v1/image/assets/TEMP/4b0ce557172b4f147a131fb00ddfee1e5c5676510860f9ce3603ad11ea9c4298?apiKey=2b2b143f121d4950beddb3a34f0a171a&",

    "Settings" => "https://cdn.builder.io/api/v1/image/assets/TEMP/2f6bf8dc0b0213a0a0c2b468698387e4305419bd0f5b499906eb3a9a243cac2c?apiKey=2b2b143f121d4950beddb3a34f0a171a&"
);


// Create array of translated menu text
$current_translations_sidebar = $translations_sidebar[$current_language];


// Get page you are currently on
$current_page = basename($_SERVER['PHP_SELF'], ".php");


// Desired order of menu items, so that iteration 
//by for each, does not change order of menu
$menu_order = array("Dashboard", "Properties", "Assets", "Inspection", "Settings");
?>


<link rel="stylesheet" type="text/css" href="../css/style_sidebar.css">

<nav class="navigation-container" id="display-nav">
    <div class="top-icons">
      <a href="../controllers/properties_controller.php?action=colorMode&colorChoice=light">
        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/595956d3a2596c7390190c74c2eb57c4b2acce58b6d8aea7c58f5d2099d5a51e?apiKey=2b2b143f121d4950beddb3a34f0a171a&" alt="Sun" class="sun" />
      </a>
      <a href="index.php">  
        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/00c7d0a2f48f5308d001584779b518b02abf0476c7dc4262daf7282fbbd9e49f?apiKey=2b2b143f121d4950beddb3a34f0a171a&" alt="Logo" class="logo" />
      </a>
      <a href="../controllers/properties_controller.php?action=colorMode&colorChoice=dark">
        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/2f42f405356eb23963cc2fd81900bbbf9d19aa1d992020329330d599de1faa3a?apiKey=2b2b143f121d4950beddb3a34f0a171a&" alt="Moon" class="moon" />
      </a>
    </div>

    <?php foreach ($menu_order as $item): ?>

        <a href="<?php echo strtolower($item); ?>.php" class="menu-item <?php if (strtolower($item) == $current_page) echo 'selected-menu-item'; ?>">
      
            <img src="<?php echo $image_sources[$item]; ?>" alt="<?php echo $item; ?>" class="icon <?php echo strtolower($item); ?>-icon" />
      
            <div class="menu-text"><?php echo $current_translations_sidebar[$item]; ?></div>
        </a>
    <?php endforeach; ?>

    <div class="profile-section">
      <a href="user_profile.php" class="profile-text">
        <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/0dc95d8d567e460f25c9a75f6f424771443ab67e360465f10c10ae7056e92dcd?apiKey=2b2b143f121d4950beddb3a34f0a171a&" class="image-wrapper" alt="User Profile"/>
        <div class="profile-text">Martin Roy</div>
      </a>  
    </div>
</nav>

<?php 
ob_end_flush();
?>
