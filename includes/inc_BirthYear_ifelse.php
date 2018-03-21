<?php
$DisplayForm = TRUE;
$Year = 0; 


function ValidateAnimal($Year)
{
    $Signs = array("Rat", "Ox", "Tiger", "Rabbit", "Dragon", "Snake", "Horse", "Goat", "Monkey", "Rooster", "Dog", "Pig");
    for($i = 0; $i < count($Signs); $i++)
    {
        if ($Year%12 == $i)
        {
            $Count;
            $YourSign = $Signs[$i];
            $Count += 1;
            file_put_contents("statistics/" . $YourSign . ".txt", $Count);
            echo "<p>Your sign is: $YourSign</p>";    
            echo "<img src='Images/" . $YourSign . ".jpg' alt='" . $YourSign . "' />";
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
    echo "<p>Thanks for entering your year!</p>";
    ValidateAnimal($Year);
    

}
?>

