<!DOCTYPE html>
<html>
<head>
    <meta name="author" content="Cody Mumford"/>
    <meta name="revised" content="02/06/2018"/>
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
            <?php
                echo "<table>";
                echo "<tr>"; //first row

                $SignName = array("rat", "ox", "tiger", "rabbit", "dragon", "snake", "horse", "sheep", "monkey", "rooster", "dog", "pig");
                for ($Counter = 0; $Counter < sizeof($SignName); $Counter++)
                {
                    echo "<th>";
                    echo "<img src='images/" . $SignName[$Counter] . ".jpg' alt='" . $SignName[$Counter] . "' />";
                    echo "</th>";
                }

                echo "</tr>";
                echo "<tr>";

                for ($year = 1912; $year <= date('Y'); $year++)
                {  
                    echo "<td>{$year}</td>";
                    if ( $year % 12 === 3)
                    {
                        echo '<tr></tr>'; 
                    }

                }

                echo "</tr>";
                echo "</table>";
            ?>
            </div>


            <!-- Footer -->
            <div class="footer">
                <?php include 'includes/inc_footer.php '?>
            </div>
    </div>

</body>
</html>
