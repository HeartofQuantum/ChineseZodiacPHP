<?php 

//Associative array with an animal name for the key and a caption
$AnimalArray = array("dog.jpg" => "A goofy Dog", "dragon.jpg" => "A fierce Dragon", "horse.jpg" => "A wild horse", 
"monkey.jpg" => "A quick monkey", "ox.jpg" => "A strong ox", "pig.jpg" => "A filthy pig",
"rat.jpg" => "A diseased rat", "rooster.jpg" => "A wild cock", "sheep.jpg" => "A calm sheep", 
"snake.jpg" => "A slithery snake", "tiger.jpg" => "A fierce tiger");

for($i = 0; $i < count($AnimalArray); $i++)
{
    $key = key($AnimalArray);
    echo "<h2>" . $AnimalArray[$key] . "</h2>";
    echo "<img src=Images/" . key($AnimalArray) . " />";

    next($AnimalArray);
}


?>