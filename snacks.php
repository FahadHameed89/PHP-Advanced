<?php 
session_start();
// Global Variables are stored in PHP's $GLOBALS array...
$GLOBALS['pageTitle'] = 'Snacks';
require_once './includes/Snack.Class.php'; // Note: Require causes a fatal error if the file is not found. _once means once it has 
include './templates/header.php'; // Note: Include will allow a page to run even if not included, but will issue a warning. 

$snacks = [];

$snacksFileString = file_get_contents( './data/snacks.json' ); // Retrieves the contents of the file as a string!

if ( $snacksFileString )
{   // This will convert the JSON into a PHP object or array.
    $snacksArray = json_decode ( $snacksFileString ); 
    if ( $snacksArray )
    {
       // var_dump( $snacksArray );   // This test allows us to see if we actually get the array..!
        foreach ( $snacksArray as $snack )
        {
            // $snacks[] = Value
            // Is the same as...
            // array_push ( $snacks, $value )
            $snacks[] = new Snack( ...$snack );
                // $snacks[] = new Snack(       <--- Without using the psread operator, we could do something like this...
                //     $snack[0],
                //     $snack[1],
                //     $snack[2],
                //     $snack[3]
                // );
        }
      //  var_dump( $snacks );      // Another Test var_dump. Doing this to see the array after manipulation
    }
}

?>

<?php if ( !empty( $snacks) ): // If there are snacks, output them! ?>
<h2>Our Snack List</h2>
<?php foreach ( $snacks as $snack ) $snack->output(); ?>
<?php else : ?>
    <p>Sorry, no Snacks bruh...</p>
<?php endif; ?>

<p> 
    This is the 
    <?php echo $GLOBALS['pageTitle']; ?> 
    Page!
</p>



<?php // Show the Footer
include './templates/footer.php';
?>
