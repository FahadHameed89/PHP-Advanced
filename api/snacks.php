<?php 
/**
 * Goal: Return a JSON representation of a Snack.
 * Parameter: "search" term.
 * Accept a search term in a GET request, and output a JSON representation of the Snack of our choosing.
 */

 // Header are sent "under the rader" to give additional information about the request/response. In this case we are describing the file-type or how we intend the content body string to be read.
 header( 'Content-type: app/JSON; charset=UTF-8');


 // First lets make sure there is a search term present!
 if ( isset( $_GET['search'] ) && $empty( $_GET['search'] ) )
 { // JSON object response with the search term via the $_GET global array.
    echo "{\"response\":\"Search term: {$_GET['search']}\"}";
 }
 // If there is no search present / fallback response..
 else 
 { // JSON object response w/ status info
    echo "{\"response\":\"ERROR: No search term!\"}";
 }

 