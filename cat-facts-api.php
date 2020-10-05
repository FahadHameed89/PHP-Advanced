<?php 
$GLOBALS['pageTitle'] = 'Cat Facts (External API Test)';
include './templates/header.php';
$dailyCatFactResponse = file_get_contents( 'https://cat-fact.herokuapp.com/facts/random' ); // Source Link: https://alexwohlbruck.github.io/cat-facts/docs/
// Test output in var_dump
// var_dump ( $dailyCatFactResponse );

// If we get a response...run 
if ( $dailyCatFactResponse ) {
    $dailyCatFact = json_decode( $dailyCatFactResponse );
?>
    <h3>Welcome to the Cat Facts Page...!</h3>
    <p><?php echo $dailyCatFact->text; ?></p>
<?php 
}
?>

<?php // Show the Footer
include './templates/footer.php';

?>