<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="author" content="Cody Mumford"/>
    <meta name="revised" content="03/28/2018"/>
    <meta name="Chinese_Zodiac_for_loop.php" content="for loop displaying the chinese zodiac signs "/>
    <meta name="description" content="for loop for zodiac signs"/>
    <meta name="keywords" content="chinese zodiac"/>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
    <meta http-equiv="Content-Language" content="en-us"/> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
    crossorigin="anonymous">    
    
    <link rel="stylesheet" href="./custom.scss"/>
    <title>Cody Mumford | Chinese Zodiac</title>
</head>

<!-- Content -->
<body>
    <!-- Wrapper -->
    <div id="container-fluid">
        
        <!-- Top Button Navigation -->

        <div>
            <?php include './inc_button_nav.php' ?>
        </div>

        <div class="center jumbotron">
            <?php
                include './inc_home_links_bar.php';

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
            <?php include './inc_footer.php '?>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>
