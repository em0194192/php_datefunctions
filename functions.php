<?php

$todaysDate = date('M-d-Y h:i');

date_default_timezone_set('America/Chicago');

function todaysDate(){
    global $todaysDate; // Tells the function to access the global variable $todaysDate from above
    echo("Today's date is " . $todaysDate);
}

//todaysDate();

function calculateFutureDate($daysToAdd=0)
{
    global $todaysDate;
    $futureDate = date('Y-m-d: D', strtotime($todaysDate . "+ $daysToAdd days"));
    return($futureDate);
}

//calculateFutureDate(5);

?>