<?php 
session_start();

// Global Variables are stored in PHP's $GLOBALS array...
$GLOBALS['pageTitle'] = 'Snacks!';

// Show the Header
include './templates/header.php';
?>

<p> 
    This is the 
    <?php echo $GLOBALS['pageTitle']; ?> 
    Page!
</p>



<?php // Show the Footer
include './templates/footer.php';
?>
