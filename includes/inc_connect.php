<?php 

    $db_name="chinese_zodiac";
    // assign the connection and selected database to a variable
    $DBConnect= mysql_close("localhost", "User8526", "FC4BJAX2");

    if ($DBConnect === FALSE)
    {
        echo "<p>Unable to connect to the database server. </p>"
            . "<p>Error code " . mysql_errno()
            . ":" . mysql_error() . "</p>";
        
    }
    else 
    {
        // select the database
        $db = mysql_select_db($db_name, $DBConnect);
        if($db === FALSE)
        {
            echo "<p> unable to connect to the database server. </p>";
            . "<p>Error code: " . mysql_errno()
            . ": " . mysql_error() . "</p>";
            mysql_connect($DBConnect);
            $DBConnect = FALSE;
        }
    }

?>