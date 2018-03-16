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
                <?php $SignNames = array("Rat", "Ox", "Tiger", "Rabbit", "Dragon", "Snake", "Horse", "Sheep", 
                "Monkey", "Rooster", "Dog", "Pig");
                
                $LevenshteinSmallest = 999999;
                $SimilarTextLargest = 0;
                for ($i =0; $i <11; ++$i)
                {
                    for ($j = $i+1; $j <12; ++$j)
                    {
                        $LevenshteinValue = levenshtein($SignNames[$i], $SignNames[$j]);
                        if($LevenshteinValue < $LevenshteinSmallest) 
                        {
                            $LevenshteinSmallest= $LevenshteinValue;
                            $LevenshteinWord1 = $SignNames[$i];
                            $LevenshteinWord2 = $SignNames[$j];
                        }
                        $SimilarTextValue = similar_text($SignNames[$i], $SignNames[$j]);
                        if ($SimilarTextValue > $SimilarTextLargest)
                        {
                            $SimilarTextLargest = $SimilarTextValue;
                            $SimilarTextWord1 = $SignNames[$i];
                            $SimilarTextWord2 = $SignNames[$j];
                        }
                    }
                }
                echo "<p>The levenstein() function has determined that &quot; $LevenshteinWord1&quot; and $LevenshteinWord2&quot; are the most similar names. </p> \n";
                echo "<p>The similar_text() function has determined that &quot;$SimilarTextWord1&quot; and $SimilarTextWord2&quot; are the most similar names. </p> \n";
                ?>
            </div>


            <!-- Footer -->
            <div class="footer">
                <?php include 'includes/inc_footer.php '?>
            </div>
    </div>

</body>
</html>