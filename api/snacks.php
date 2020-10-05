<?php
/**
 * Goal: Return a JSON representation of a Snack.
 * Parameter: Query parameter string "search" term.
 */

// Headers are sent "under-the-radar" to give additional info
// about the request / response. In this case, we are
// describing the "file-type" or how we intend the content body
// / string to be read / treated.
header( 'Content-type: app/JSON; charset=UTF-8' );



// Search Term
if ( isset( $_GET['search'] ) && !empty( $_GET['search'] ) )
{ // Success
  // echo "{\"response\":\"Search term: {$_GET['search']}\"}";
  // Retrieve the list of snacks. 
    $snacksJSONString =   file_get_contents( '../data/snacks.json' );
    // echo $snacksJSONString; <-- Testing the output
    // Check if we were able to read the file!
    if ( $snacksJSONString !== FALSE )
    {
        // If we found it
        $snacksList = json_decode ( $snacksJSONString ); 
        if ( $snacksList !== NULL )
        {
            // If we got the snack list
            $matchingSnacks = array(); // Array for storing matches
            foreach ( $snacksList as $snack )
            { // Check for a match in our snack name vs search. 
                if ( stristr( $snack[0], $_GET['search'] ) )
                    {
                        array_push( $matchingSnacks, $snack );
                    }
            }
            // Check if there were any matches!
            if ( !empty ($matchingSnacks ) )
            {   // Respond with the matching snacks array!
                echo json_encode ( $matchingSnacks );
            }
        }
        else 
        {
            // If we fucked up
            echo "{\"response\":\"ERROR: Unable to convert the Snacks list from JSON.\"}";
        }

    }
    else
    {
        // If we fucked up
        echo "{\"response\":\"ERROR: Unable to retrieve snacks list.\"}";
    }
}
// If there is no search present, a default / fall-back response.
else
{ // Failure
  echo "{\"response\":\"ERROR: No search term present.\"}";
}