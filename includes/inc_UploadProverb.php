<?php 
$DisplayForm = TRUE;
$Proverb;

if (isset($_POST['Submit']))
{
    $Proverb = $_POST['Proverb'];
    if (is_string($Proverb))
    {
        $DisplayForm = FALSE;
    }
    else 
    {
        echo "<p>You must enter a string of characters. </p>";
        $DisplayForm = TRUE;
    }
        
}

if ($DisplayForm) {?>
    <form name="Proverb" action="inc_proverb.php" method="post">
    <p>Enter a proverb: <input type="text" name="InputProverb" value="<?php echo $Proverb; ?>" /></p>
    <p><input type="reset" value="Clear Form" />&nbsp; &nbsp; <input type="submit" name="Submit" value="Send Form"/></p>
    </form>
<?php }
else 
{
    echo "<p>Thanks for entering your proverb!</p>";
    
    fwrite($Proverb);
    file_put_contents("statistics/" + proverb + ".txt", $Proverb);
}

?>