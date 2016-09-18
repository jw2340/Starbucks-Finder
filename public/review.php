<?php

    // configuration
    require("../includes/config.php");
    
    // if user reached page via POST
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // validate submission
        if (empty($_POST["review"]))
        {
            apologize("Please enter text.");
        }
        
        // add review to SQL database
        query("INSERT INTO reviews (store_id, review, outlet) VALUES(?, ?, ?)", $_POST["store_id"], $_POST["review"], $_POST["outlet"]);
        
        // render form
        render("review_template.php", ["title" => "Thank you for the review!"]);    
    }
    
    else
    {
        // render form
        render("review_form.php", ["title" => "Write a review"]);
    }
    
    

?>
