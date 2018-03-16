<?php
// Need Statistics folder for each sign



$DisplayForm = TRUE;
$Year; 
$SignName = array("monkey", "ox", "tiger", "rabbit", "dragon", "snake", "horse", "sheep", "rat", "rooster", "dog", "pig");
$YourSign;
$Count = 0;

function ValidateAnimal($Year)
{
    switch ($Year%12)
    {
        case 0: 
            $YourSign = $SignName[0];
            
            break;
        case 1:
            $YourSign = $SignName[1];
            break;
        case 2: 
            $YourSign = $SignName[2];
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
            $YourSign = $SignName[12];
            break;
        default: 
            return "You didn't enter a valid number";
            break;
    }
}

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

if ($DisplayForm) 
{  ?>
    <form name="AnimalForm" action="inc_BirthYear_ifelse.php" method="post">
        <p>Enter a number: <input type="text" name="InputYear" value="<?php echo $Year; ?>" /></p>
        <p><input type="reset" value="Clear Form" />&nbsp; &nbsp; <input type="submit" name="Submit" value="Send Form"/></p>
    </form>
<?php 
}
else 
{
    echo "<p>Thanks for entering your year</p>";
    $Count += 1;
    file_put_contents($YourSign + ".txt", $Count);

    echo "<p>Your sign is:" + $YourSign + "</p>" ;  
    echo "<p>You are also the" + $Count + "person to enter your year.</p>" ;
    echo "<img src='images/" . $YourSign . ".jpg' alt='" . $YourSign . "' />";
}
?>
