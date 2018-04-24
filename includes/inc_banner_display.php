<?php

    $banner_array = array("Images/banner1.png", 
                          "Images/banner2.png", 
                          "Images/banner3.png",
                          "Images/banner4.png", 
                          "Images/banner1.png");
    if(empty($_COOKIE["lastbanner"]))
    {
        /* generate random index greater than or equal
        to 0, and less than number of elements in 
        the $banner_array array
        */
        $banner_array = rand(0,$banner_array);
    }
    else
    {
        // assign the cookie value tot he banner index
        $banner_index = $_COOKIE["lastbanner"];
        // increment and use mod to ensure that the index is greater than or equal to 0

        $banner_index = (++$banner_index) % $banner_count;
    }
    // set or update the cookie value
    setcookie("lastbanner", $banner_index, time()+(60*60*24*7));


?>