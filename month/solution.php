<?php
    $month=$_POST["months"];
    $m = array(
        "January" => "31 days",
        "February" => "28 days, 29 in leap-year",
        "March" => "31 days",
        "April" => "30 days",
        "May" => "31 days",
        "June" => "30 days",
        "July" => "31 days",
        "August" => "31 days",
        "September" => "30 days",
        "October" => "31 days",
        "November" => "30 days",
        "December" => "31 days"
    );
    echo "The month of ".$month." has ".$m[$month];
?>