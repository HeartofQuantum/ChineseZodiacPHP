<?php 

    include 'inc_connect.php';


    /* set cook if this is the first visit - the expires arguemtn is 1 day to 
     prevent visits from incrementing each time the user
     returns to the page that contains the site counter*/

    if (empty($_COOKIE["visits"]))
    {
        // increment the counter in the database
        mysql_query("UPDATE visit_counter " . 
                    "SET counter = counter +1 ". 
                    "WHERE id = 1");
        // query the visit_counter table and assign the counter value to the $visitors variable
        // value to the $visitors variable
        $queryResult  = mysql_result("SELECT counter " . 
                        "FROM visit_counter WHERE id = 1 ");
        if (($row=mysql_fetch_assoc($queryResult) !== FALSE)
            $visitors = $row['counter'];
        else 
            $visitors = 1;        
    }
    else 
    {
        // otherwise, assign the cookie value to the $visitor
        // value to the $visitors variable
        $visitors = $_COOKIE["visits"];
    }

?>