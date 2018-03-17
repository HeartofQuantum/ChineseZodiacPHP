<?php
    echo 
    '<ul>
        <li>Cody Mumford</li>
        <li>cody.a.mum@my.fake.edu</li>
        <li>Date Revised: 
        </li>
        <li>Oklahoma City Community College does not necessarily endorse the content or respective links of this page.</li>
    </ul';

    //Gets the file contents from the file and reads it into an array
    $ProverbList = explode("\n", file_get_contents('includes/proverbs.txt')); 
    //Counts the number of proverbs
    $ProverbCount = count($ProverbList);
    //picks a random proverb to display
    $RandomProverb = rand(0, $ProverbCount - 1);

    echo "<p>The proverb of the day is... ";
    echo $ProverbList[$RandomProverb];
    echo "</p>";

    //gets the contents from the images file
    $ImageList = scandir('Images/');        
    //basic array getting file images from the /images file
    $DragonList = preg_grep('/Dragon\d+\.(gif)$/', $ImageList, 6);
    
    echo "<img src='Images/". $DragonList[rand(0,5)] . " ' alt='" . "' />";
?>