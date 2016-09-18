<?php

    require(__DIR__ . "/../includes/config.php");

    // numerically indexed array of places
    $places = array();

    // search database for places matching $_GET["geo"]
    
    // parse individual strings in $_GET["geo"]
    $geoelements = preg_split("/[\s,]+/", $_GET["geo"]);
    // print_r(array_values($geoelements));
    $geonumber = count($geoelements);

    
    // input strings in places array
    if ($geonumber == 1)
    {
        $places = query("SELECT * FROM places WHERE postal_code LIKE '$geoelements[0]' OR city LIKE '$geoelements[0]'");    
    }
    
    if ($geonumber >= 2)
    {
    $places = query("SELECT * FROM places WHERE (postal_code LIKE '$geoelements[0]' AND city LIKE '$geoelements[1]')
        OR (postal_code LIKE '$geoelements[1]' AND city LIKE '$geoelements[0]')
        ");
    }

    // output places as JSON (pretty-printed for debugging convenience)
    header("Content-type: application/json");
    print(json_encode($places, JSON_PRETTY_PRINT));

?>
