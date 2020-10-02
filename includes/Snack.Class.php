<?php 

/**
 * This is the Snack Class - where we will define the properties of each object that is referred to as a snack. 
 */

 class Snack 
 {
     // Declare Properties
    public $name = '';
    public $type = '';
    public $price = 0.00;
    public $calories = 0;

     // Declare Method (Constructor, runs every time and makes a new instance of this class.)
     function __construct ( $snackName = '', $snackType = '', $snackPrice = 0.00, $snackCalories = 0.00 )
     {
        $this->name = $snackName;
        $this->type = $snackType;
        $this->price = number_format( $snackPrice,
        2,      // Decimal Places
        '.',    // Decimal Separator
        ','     // Thousands Separator. 
         );
        $this->calories = intval ($snackCalories);

     }   

     public function caramelize()
     {
         $this->calories *= 2;
     }

 }

$mySnack = new Snack( 'Oh Henry', 'Chocolate', 1.799999, 200.7 );
var_dump( $mySnack ); 

$mySnack->caramelize();
var_dump( $mySnack ); 

?>