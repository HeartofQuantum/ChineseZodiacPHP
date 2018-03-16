<?php

    echo "<h1>String and Character Functions</h1>";
    
    echo "<ul>
            <li><a href='#string'>String Functions</a></li>
            <li><a href='#char'>Character Functions</a></li>
        </ul>";
        
    echo "<a id='string'>String Functions</a>
        <p>The script uses the levenshtein() and similar_text() functions to determine which of the signs of the chinese zodiac have the most similar names.</p>
        <a href='SimilarNames.php'>[Test the Script]</a>
        <a href='includes/ShowSourceCode.php?source_file=SimilarNames.php'>[View the Source]</a>";

    echo "<a id='char'>Character Functions</a>
        <p>This script counts the number of times each letter appears in a string and compares that count to the number of times each letter appears in the names of the Chinese zodiac signs to determine if the names can be made from the characters in the string.</p>
        <a href='SimilarNames.php'>[Test the Script]</a>
        <a href='includes/ShowSourceCode.php?source_file=SimilarNames.php'>[View the Source]</a>";

?>