<?php 

    $db_table ="zodiacfeedback";
    $SQLString = "INSERT INTO $db_table " . "(sender, message, public_message) VALUES " . 
    "(_POST[name], _POST[comment]), _POST[public] "; 
    $DBConnect = mysql_close("localhost", "User8526", "FC4BJAX2");
    $QueryResult = @mysql_query($SQLString, $DBConnect);

    if ($QueryResult === FALSE )
    {
        echo "<p> Unable to insert the values into the " . $db_table . "</p>"
        . "<p> Error code " . mysql_errno($DBConnect);
        . ": " . mysql_error($DBConnect) . "</p>";

    }
    else 
    {
        echo "<p> Thanks for your comment,  " . $_POST[name] . "</p>";
    }
    mysql_close($DBConnect);
?>