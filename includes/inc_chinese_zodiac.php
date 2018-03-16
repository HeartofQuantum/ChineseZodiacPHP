<?php

    $SignName = array("Rat", "Ox", "Tiger", "Rabbit", "Dragon", "Snake", "Horse", "Sheep", "Monkey", "Rooster", "Dog", "Pig");
    $SignDescription = array("Those born under the rat have excellent taste, are motivated by money is ever curious and welcomes challenges.", 

    "Those born under the Ox are steadfast, solid, goal and detail - oriented.", 
    
    "Those born under the Tiger are controlling, are strong leaders, and self interested.", 
    
    "The rabbit enjoy being around those they love. Usually popular due to their likelihood to avoid all conflict.", 
    
    "The Dragon is an energetic, warmhearted, egotistical bunch, but they are good at ordering others around and leading in times of need. ",
    
    "The Snake is seductive and dangerously smart - they rely on hard work and their intuition. ",
    
    "The Horse love to wander about life they are zealous for travel." ,
    
    "Those born under the goat tend to enjoy spending time along and reflecting on their thoughts with a good book." ,  
    
    "Those born under the monkey thrive on having fun they are upbeat people and love listening yet somehow lack self-control." ,  
    
    "Those born under the rooster are practical, resourceful, observant, and straightforward.",
    
    "Those born under the Dog are loyal just as man's best friend is in person. They are honest tempermental and prone to mood swings.",
    
    "Those born under the Pig are extremely nice, civil, and filled with taste for the better things in life.");
    
    
    echo "<dl>";
    for($Counter = 0; $Counter < sizeof($SignName); $Counter++)
    {
        echo "<dt>$SignName[$Counter]</dt>";
        echo"<dd>$SignDescription[$Counter]</dd>";
    }

    
    echo "</dl>";


?>