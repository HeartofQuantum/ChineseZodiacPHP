<?php

    echo "<h1>Control Structures</h1>";

    echo "  <a href='#if_else'>If... else statements<br/></a>
            <a href='#switch'>Switch Statements</a><br/>
            <a href='#while_loop'>While loop</a><br/>
            <a href='#for_loop'>For loop</a><br/><br/>";
        
    echo "<a id='if_else'>If... else statements</a>
        <p>The script uses the levenshtein() and similar_text() functions to determine which of the signs of the chinese zodiac have the most similar names.</p>
        <a href='includes/inc_BirthYear_ifelse.php'>[Test the Script]</a>
        <a href='includes/ShowSourceCode.php?source_file=inc_BirthYear_ifelse.php'>[View the Source]</a><br><br/>";

    echo "<a id='switch'>Switch Statements</a>
        <p>The switch statement is a control structure used to proc new events and control the structure.</p>
        <a href='includes/inc_BirthYear_switch.php'>[Test the Script]</a>
        <a href='includes/ShowSourceCode.php?source_file=inc_BirthYear_switch.php'>[View the Source]</a><br><br/>";

    echo "<a id='while_loop'>While Loop</a>
        <p>This script counts the number of times each letter appears in a string and compares that count to the number of times each letter appears in the names of the Chinese zodiac signs to determine if the names can be made from the characters in the string.</p>
        <a href='Chinese_Zodiac_while_loop.php'>[Test the Script]</a>
        <a href='includes/ShowSourceCode.php?source_file=inc_Chinese_Zodiac_while_loop.php'>[View the Source]</a><br><br/>";
    
    echo "<a id='for_loop'>For Loop</a>
        <p>This script counts the number of times each letter appears in a string and compares that count to the number of times each letter appears in the names of the Chinese zodiac signs to determine if the names can be made from the characters in the string.</p>
        <a href='Chinese_Zodiac_for_loop.php'>[Test the Script]</a>
        <a href='includes/ShowSourceCode.php?source_file=inc_Chinese_Zodiac_for_loop.php'>[View the Source]</a>";
        
?>