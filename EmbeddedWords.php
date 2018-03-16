<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="author" content="Cody Mumford"/>
    <meta name="revised" content="01/17/2018"/>
    <meta name="draft.html" content="draft.html"/>
    <meta name="description" content="rough draft for chinesezodiac project"/>
    <meta name="keywords" content="chinese zodiac"/>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
    <meta http-equiv="Content-Language" content="en-us"/> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <link rel="stylesheet" href="custom.css"/>
    <title>Chinese Zodiac</title>
</head>

<!-- Content -->
<body>
    <!-- Wrapper -->
    <div id="wrapper">
        
        <div class="header"><?php include 'includes/inc_header.php' ?></div>
        
        <!-- Top Button Navigation -->


            <div id="navbar">
                <?php include 'includes/inc_button_nav.php' ?>
            </div>

            <!-- Side bar navigation-->
            <div id="sidebar">

                <?php include 'includes/inc_text_links.php'?>

            </div>

            <!-- Text File -->
            <div class="main">
                <?php include 'includes/inc_home.php' ?>
                <?php include 'includes/inc_home_links_bar.php' ?>
                <h1>Similar Names</h1>
                <?php
                    $Phrases = array("Your chinese Zodiac sign tells a lot about your personality. ", "Embed PHP scripts within an XHTML document. ");
                    $SignNames = array("Rat", "Ox", "Tiger", "Rabbit", "Dragon", "Snake", "Horse", "Sheep", 
                "Monkey", "Rooster", "Dog", "Pig");

                function BuildLetterCounts($text)
                {

                    $text = strtoupper($text);
                    $letter_counters = count_chars($text);
                    return $letter_counters;
                }

                function AContainsB($A,$B)
                {
                    $retval = TRUE;
                    $first_letter_index = ord('A');
                    $last_letter_index = ord('Z');

                    for($letter_index = $first_letter_index; $letter_index <= $last_letter_index; ++$letter_index)
                    {
                        if ($A[$letter_index]< $B[$letter_index])
                        {

                            return FALSE;
                        }
                    }
                    return TRUE;
                }

                foreach ($Phrases as $Phrase)
                {
                    $PhraseArray = BuildLetterCounts($Phrase);
                    $GoodWords = array();
                    $BadWords = array();
                    foreach ($SignNames as $Word)
                    {
                        $WordArray = BuildLetterCounts($Word);
                        if(AContainsB($PhraseArray, $WordArray))
                            $GoodWords[] = $Word;
                        else 
                            $BadWords[] = $Word;
                    }
                    echo "<p>The following words can be made from the letters in the phrase. &quot;$Phrase&quot;:";
                    foreach ($GoodWords as $Word)
                        echo "$Word";
                    echo "</p>\n";
                    echo "<p>The following words can not be made from the letters in the phrase. &quot;$Phrase&quot;:";                    
                    foreach ($BadWords as $Word)
                        echo "$Word";
                    echo "</p> \n";
                    echo "<hr />\n";
                }
                ?>
            </div>

            <!-- Footer -->
            <div class="footer">
                <?php include 'includes/inc_footer.php '?>
            </div>
    </div>

</body>
</html>