<?php 
$GLOBALS['pageTitle'] = 'PHP Calculator';

// Show the Header
include './templates/header.php';
?>

<p> 
This is the Calculator Page...!
</p>

<form method="GET">
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