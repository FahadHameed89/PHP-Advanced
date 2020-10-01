<?php 
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
        $result = $_GET['value1'] + $_GET['value2'];                
        break;
        case 'subtraction':
        $result = $_GET['value1'] - $_GET['value2'];
        break;
        case 'multiplication':
        $result = $_GET['value1'] * $_GET['value2'];
        break;
        case 'division':
        $result = $_GET['value1'] / $_GET['value2'];
        break;
    }
}
var_dump( $result );

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



<?php // Show the Footer
include './templates/footer.php';?>

<h3>Hi there!</h3>