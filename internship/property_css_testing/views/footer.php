
<?php 
ob_start();


if(isset($_SESSION['lang'])) {

    $current_language = $_SESSION['lang'];

    
}else{
    
    $current_language = "EN";
}



// Define the translations
$translations_footer = array(
    "EN" => array(
        "Copyright" => "Copyright © 2021",
        "Company" => "Maintenance Assistant inc.",
        "Built" => "Built with ferver, and love in",
        "Cities1" => "Montreal, Quebec City, Ottawa,",
        "Cities2" => "Toronto, New York, and Boston.",
        "Rights" => "All rights reserved."
    ),
    "FR" => array(
        "Copyright" => "Copyright © 2021",
        "Company" => "Maintenance Assistant inc.",
        "Built" => "Conçu avec ardence et amour",
        "Cities1" => "à Montréal, Québec, Ottawa,",
        "Cities2" => "Toronto, New York, et Boston.",
        "Rights" => "Tous droits réservés."
    )
);

// Use the current language to get the correct translations
$current_translations_footer = $translations_footer[$current_language];
?>



<link rel="stylesheet" type="text/css" href="../css/style_footer.css">

<footer class="footer">
  <div class="footer-text-container">
    <span class="footer-text footer-text-bold"><?php echo $current_translations_footer["Copyright"]; ?></span>
    <span class="footer-text footer-text-extra-bold"><?php echo $current_translations_footer["Company"]; ?></span>
    <span class="footer-text"><?php echo $current_translations_footer["Built"]; ?></span>
    <span class="footer-text"><?php echo $current_translations_footer["Cities1"]; ?></span>
    <span class="footer-text"><?php echo $current_translations_footer["Cities2"]; ?></span>
    <span class="footer-text footer-text-italic"><?php echo $current_translations_footer["Rights"]; ?></span>
  </div>
  <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/73b6ae8fc480d5fd13cbafe69d83e45a7d0a6565c3c95a1956bfda289dba733c?apiKey=2b2b143f121d4950beddb3a34f0a171a&" alt="Maintenance Assistant inc. logo" class="footer-logo" />
</footer>

<?php 
    ob_end_flush();
?>