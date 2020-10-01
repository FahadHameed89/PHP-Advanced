<?php 
$GLOBALS['pageTitle'] = 'PHP Calculator';

// Show the Header
include './templates/header.php';
?>

<p> 
This is the Calculator Page...!
</p>

<form>
    <label for="num1">
    Enter First Operand:
    <input 
    id="num1" 
    name="value1"
    type="number"
    value="">
    </label>

    <label for="num2">
    Enter Second Operand:
    <input 
    id="num2" 
    name="value2"
    type="number"
    value="">
    </label>
</form>



<?php // Show the Footer
include './templates/footer.php';?>

<h3>Hi there!</h3>