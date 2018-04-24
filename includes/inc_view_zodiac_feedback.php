<?php
    include("inc_connect.php");
    $db_table ="zodiacfeedback";
    $SelectStatement = "SELECT * FROM $db_table WHERE public_message == 'Y'";
    $QueryResult = mysql_query($SelectStatement, $db_table);

    echo "<table width=100% border='1'>\n";
    echo "<tr><th>Name</th><th>Comment</th>";
    $Row = mysql_fetch_assoc($QueryResult);
    while(($Row = mysql_fetch_assoc($QueryResult)) !== FALSE)
    {
        echo "<tr><td>{$Row[0]}</td>";
        echo "<td>{$Row[1]}</td>";
        echo "<td>{$Row[2]}</td>";
        echo "<td>{$Row[3]}</td>";
        echo "<td>{$Row[4]}</td></tr>";
    }
    echo "</table>";
?>