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
 $snacksJSONString =   file_get_contents(
     '../data/snacks.json'
 );
 echo $snacksJSONString;
}
// If there is no search present, a default / fall-back response.
else
{ // Failure
  echo "{\"response\":\"ERROR: No search term present.\"}";
}