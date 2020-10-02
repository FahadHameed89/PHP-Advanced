<?php 
session_start();

// Global Variables are stored in PHP's $GLOBALS array...
$GLOBALS['pageTitle'] = 'Home';

// Show the Header
include './templates/header.php';
?>

<p> 
    This is the 
    
    <?php echo $GLOBALS['pageTitle']; ?> 
    Page!
</p>


<?php if ( isset( $_SESSION['calcHistory'] ) ) : ?>
    <h2>Calculator History from $_SESSION</h2>
    <ul>
        <?php foreach ($_SESSION['calcHistory'] as $calculation) : ?>
            <li>
            <?php echo $calculation; ?>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>


<?php // Show the Footer
include './templates/footer.php';

?>

<h3>Hi there!</h3>