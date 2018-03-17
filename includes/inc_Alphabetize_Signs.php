<?php 

    $DisplayForm = TRUE;
    //creates an empty array
    $Signs = array();
    if (isset($_POST['Submit']))
    {
        //gets the signs entered by the user
        $Signs =  $_POST['Signs'];
        if (is_array($Signs))
        {
            $count = count($Signs);
            sort($Signs);
            for($i = 0; $i < $count; $i++ )
            {
                echo "The sorted signs are: {$Signs[$i]} <br/>";   
            }
        }

    }
    else 
    {
        echo "You must enter the 12 signs. ";
    }

    if ($DisplayForm)
    {?>
        <form name="AlphabetizeSigns" action="index.php?page=web_forms" method="post">
        <p>Enter a sign: <input class="textbox" type="text" name="Signs[]"/></p>
        <p>Enter a sign: <input class="textbox" type="text" name="Signs[]"/></p>
        <p>Enter a sign: <input class="textbox" type="text" name="Signs[]"/></p>
        <p>Enter a sign: <input class="textbox" type="text" name="Signs[]"/></p>
        <p>Enter a sign: <input class="textbox" type="text" name="Signs[]"/></p>
        <p>Enter a sign: <input class="textbox" type="text" name="Signs[]"/></p>
        <p>Enter a sign: <input class="textbox" type="text" name="Signs[]"/></p>
        <p>Enter a sign: <input class="textbox" type="text" name="Signs[]"/></p>
        <p>Enter a sign: <input class="textbox" type="text" name="Signs[]"/></p>
        <p>Enter a sign: <input class="textbox" type="text" name="Signs[]"/></p>
        <p>Enter a sign: <input class="textbox" type="text" name="Signs[]"/></p>
        <p>Enter a sign: <input class="textbox" type="text" name="Signs[]"/></p>
        <p>Enter a sign: <input class="textbox" type="text" name="Signs[]"/></p>

        <p><input type="reset" value="Clear Form" />&nbsp;&nbsp;
        <input type="submit" name="Submit" value="Send Form"/></p>
        </form>
        <?php
    }
    else 
    {
        echo "<p>Thank you for entering the 12 signs.</p>";
    }
?>