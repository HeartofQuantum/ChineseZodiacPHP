<?php
    echo 
    '<ul>
        <li>Cody Mumford</li>
        <li>cody.a.mum@my.fake.edu</li>
        <li>Date Revised: 
        </li>
        <li>Oklahoma City Community College does not necessarily endorse the content or respective links of this page.</li>
    </ul';

    $ProverbList = explode("\n", file_get_contents('includes/proverbs.txt')); 
    $ProverbCount = count($ProverbList);
    $RandomProverb = rand(0, $ProverbCount - 1);
    
    //$RandomProverb isn't working 
    echo "<p>The proverb of the day is... ";
    echo $ProverbList[$RandomProverb];
    echo "</p>";
?>