<?php
// Need Statistics folder for each sign



$DisplayForm = TRUE;
$Year = 0; 
$YourSign = "";
$Count = 0;


$AnimalSigns = array(
    "Rat" => array("Start Date" => 1900, "End Date" => 2020, "President" => "George Washington"),
    "Ox" => array("Start Date" => 1901, "End Date" => 2021, "President" => "Barack Obama"), 
    "Tiger" => array("Start Date" => 1902, "End Date" => 2022,"President" => "Dwight Eisenhower"),
    "Rabbit" => array("Start Date" => 1903,"End Date" => 2023, "President" => "John Adams"),
    "Dragon" => array("Start Date" => 1904, "End Date" =>2024, "President" =>"Abraham Lincoln"),
    "Snake" => array("Start Date" => 1905, "End Date" => 2025, "President" =>"John Kennedy"),
    "Horse" => array("Start Date" => 1906, "End Date" => 2026, "President" => "Theodore Roosevelt"),
    "Goat" => array("Start Date" => 1907, "End Date" => 2027, "President" => "James Madison"),
    "Monkey" => array("Start Date" => 1908, "End Date" => 2028, "President" => "Harry Truman"),
    "Rooster" => array("Start Date" => 1909, "End Date" => 2029, "President" => "Grover Cleveland"),
    "Dog" => array("Start Date" => 1910, "End Date" =>2030, "President" => "George Walker Bush"),
    "Pig" =>array("Start Date" => 1911, "End Date" => 2031, "President" =>"Ronald Reagan")
);



$SignName = array("Rat", "Ox", "Tiger", "Rabbit", "Dragon", "Snake", "Horse", "Goat", "Monkey", "Rooster", "Dog", "Pig");




if (isset($_POST['Submit']))
{
    $Year = $_POST['Number'];
    if (is_numeric($Year))
    {
        $DisplayForm = FALSE;
    }
    else 
    {
        echo "<p>You must enter a numeric value.</p>\n";
        $DisplayForm = TRUE;
    }
}


switch ($Year%12)
{
        case 0: 
            $YourSign = $SignName[0];
            break;
        case 1:
            $YourSign =$SignName[1];
            break;
        case 2: 
            $YourSign =$SignName[2];
            break;
        case 3:
            $YourSign = $SignName[3];
            break;
        case 4: 
            $YourSign = $SignName[4];
            break;
        case 5:
            $YourSign = $SignName[5];
            break;
        case 6: 
            $YourSign = $SignName[6];
            break;
        case 7:
            $YourSign = $SignName[7];
            break;
        case 8: 
            $YourSign = $SignName[8];   
            break;
        case 9:
            $YourSign = $SignName[9];
            break;
        case 10: 
            $YourSign = $SignName[10];
            break;
        case 11:
            $YourSign = $SignName[11];
            break;
        case 12: 
            $YourSign = explode($SignName[12]);
            break;
        default: 
            return "You didn't enter a valid number";
            break;
}

if ($DisplayForm) 
{  ?>
    <form name="AnimalForm" action="inc_BirthYear_switch.php" method="post">
        <p>Enter a number: <input type="text" name="Number" value="<?php echo $Year; ?>" /></p>
        <p><input type="reset" value="Clear Form" />&nbsp; &nbsp; <input type="submit" name="Submit" value="Send Form"/></p>
    </form>
<?php 
}
else 
{
    echo "<p>Thanks for entering your year</p>";

    $Count += 1;
    file_put_contents($YourSign + ".txt", $Count);
    echo "<p>Your sign is: " . $YourSign . "</p>" ;  
    echo "<img src='Images/" . $YourSign . ".jpg' alt='" . $YourSign . "' />";
    echo "<p>You are also the " . $Count . " person to enter your year.</p>" ;

    $SignMessage = "Your Chinese Zodiac sign is the $YourSign, you share a zodiac sign with President " . $AnimalSigns[$YourSign]["President"] . " .";
    $SignMessage .= "Years of your sign include: ";
    for ($i = $AnimalSigns[$YourSign]["Start Date"]; $i < $AnimalSigns[$YourSign]["End Date"];$i += 12)
    {    
        $SignMessage .= $i . ", ";
        $SignMessage .= "and " . $AnimalSigns[$YourSign]["End Date"] . ".";
    }



}
?>
