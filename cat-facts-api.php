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
<h2>Request Animal Facts</h2>

<form action="#" method="POST">
    <label for="amount"> Enter the amount of Facts you need...
    <input type="number" id="amount" name="amount"></label>
    <label for="animal-type"> Enter the Type of Animal:
    <input type="text" id="animal-type" name="type">
    </label>
    <input type="submit" value="Get Facts">
</form>

<?php

// Lets make a request to include a query parameter string.
$factsListResponse = file_get_contents ( "https://cat-fact.herokuapp.com/facts/random?amount={$_POST['amount']}&animal_type={$_POST['type']}" );
var_dump ($factsListResponse);



?>

<?php // Show the Footer
include './templates/footer.php';

?>