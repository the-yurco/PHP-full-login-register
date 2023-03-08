<?php

/**
 * 
 * 
 * 
 */
function validate($data)
{
    // removes any whitespace from the beginning and end of the string
    $data = trim($data);
    // removes any backslashes () that may have been added to the string
    $data = stripslashes($data);
    // converts special characters (such as <, >, ", and &) to their HTML entity equivalents
    $data = htmlspecialchars($data);

    return $data;
}
