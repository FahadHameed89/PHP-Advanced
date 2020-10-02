<?php 
// We need to use SESSION_START to declare to PHP that we want to use the $_SESSION global variable!
// It sets up a unique identifier for the browser so that only the array of values is associated with only the one user. 
session_start();

// Make sure to set a default value, if this is a key/value pair does not yet exist in the associate session array. We cannot push using array_push to a NULL, so we convert CalcHistory into an array. 

if ( !isset( $_SESSION['calcHistory'] ) )
{
    $_SESSION['calcHistory'] = array();
}

// Avoid using Globals unless needed...
$GLOBALS['pageTitle'] = 'PHP Calculator';

// Show the Header
include './templates/header.php';

// If we want to read values from a GET method submission, we can use the $_GET superglobal. It is an associative array. 
echo '<pre>';           // Note if we echo '<pre>' we can hold white space 
var_dump( $_GET );
var_dump( $_POST );     // POST is handled in a similar fashion.
echo '</pre>';

$result = FALSE;
if ( !empty( $_GET ) )
{
    switch ($_GET['op'])
    {
        case 'addition':
        $opSymbol = '+';
        $result = $_GET['value1'] + $_GET['value2'];                
        break;

        case 'subtraction':
        $opSymbol = '-';
        $result = $_GET['value1'] - $_GET['value2'];
        break;

        case 'multiplication':
        $opSymbol = '&times;';
        $result = $_GET['value1'] * $_GET['value2'];
        break;

        case 'division':
        $opSymbol = '&divide;';
        $result = $_GET['value1'] / $_GET['value2'];
        break;
    }
   array_push( 
    $_SESSION['calcHistory'], 
    "{$_GET['value1']} {$opSymbol} {$_GET['value2']} = {$result}" 
);
echo '<pre>';
var_dump( $_SESSION );

}
var_dump( $result );
echo '</pre>';

?>


<p> 
This is the Calculator Page...!
</p>

<form method="GET" action="calc.php">
    <label for="num1">
    Enter First Operand:
    <input 
    id="num1" 
    name="value1"
    type="number"
    value="">
    </label>

    <label for="operator">
        Select an Operator:
        <select id="operator" name="op">

            <option value="addition">
            +
            </option>
            
            <option value="subtraction">
            -
            </option>
            
            <option value="multiplication">
            &times;
            </option>
            
            <option value="division">
            &divide;
            </option>

        </select>
    </label>

    <label for="num2">
    Enter Second Operand:
    <input 
    id="num2" 
    name="value2"
    type="number"
    value="">
    </label>
    <input type="submit" value="Calculate!">
</form>


<?php if ($result != FALSE) : ?>
    <p>
    The Result is:
    <?php echo $result; ?>
    </p>
<?php endif; ?>

<?php // Show the Footer
include './templates/footer.php';?>

<h3>Hi there!</h3>