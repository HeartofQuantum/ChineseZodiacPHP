<?php
$DisplayForm = TRUE;
$Year; 
$SignName = array("monkey", "ox", "tiger", "rabbit", "dragon", "snake", "horse", "sheep", "rat", "rooster", "dog", "pig");
$YourSign;
$Count = 0;

function ValidateAnimal($Year)
{
    for($Counter = 0; $Counter < sizeof($SignName); $Counter++)
    {
        if ($Year %12 == $Counter)
        {
            $YourSign = $SignName[$Counter];
        }
    }
}

if (isset($_POST['Submit']))
{
    $Year = $_POST['InputYear'];
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

if ($DisplayForm) {?>
    <form name="AnimalForm" action="inc_BirthYear_ifelse.php" method="post">
    <p>Enter a number: <input type="text" name="InputYear" value="<?php echo $Year; ?>" /></p>
    <p><input type="reset" value="Clear Form" />&nbsp; &nbsp; <input type="submit" name="Submit" value="Send Form"/></p>
    </form>
<?php }
else 
{
    echo "<p>Thanks for entering your year</p>";
    ValidateAnimal();
    
    $Count += 1;
    file_put_contents("statistics/" + $YourSign + ".txt", $Count);
    echo "<p>Your sign is: $</p>";    
    echo "<img src='images/" . $YourSign . ".jpg' alt='" . $YourSign . "' />";
}
?>

