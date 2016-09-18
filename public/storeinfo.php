<?php

    require(__DIR__ . "/../includes/config.php");
    
    $store_id = $_GET['store_id'];
    
    $reviews = query("SELECT * FROM reviews WHERE store_id = ?", $store_id);
    
    // create array for store reviews
    $reviewspositions = [];
    
    foreach ($reviews as $review)
    {
            $reviewspositions[] = [
                "review" => $review["review"],
                "outlet" => $review["outlet"]
            ];
    }
    
    // render form
    render("storeinfo.php", ["title" => "Store Reviews", "reviewspositions" => $reviewspositions]);
    
?>
