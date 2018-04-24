<?php 
$DisplayForm = TRUE;
$Comment = '';
$Name = '';
if (isset($_POST['Submit']))
{
    $Comment = $_POST['comment'];
    $Name = stripslashes($_POST['name']);
    $Name = trim($Name);
    $Public = $Post['public'];
    if (is_string($Name) && strlen($Name) > 0)
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
    <form name="addcomment" action="inc_process_zodiac_feedback.php" method="POST">
    <p>Name: <input type="text" name="name"/></p>
    <p>Comment: <textarea name="comment" rows="5" cols="40"></textarea>
    <p>Public? <input type="checkbox" name="public" value="public" /> </p>
    <p><input type="reset" value="Clear Form" />&nbsp; &nbsp; <input type="submit" name="Submit" value="Send Form"/></p>
    </form>
<?php }
else 
{
    echo "<p>Thanks for entering your comment!</p>";
}

?>