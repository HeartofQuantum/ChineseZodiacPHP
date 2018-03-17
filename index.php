<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="author" content="Cody Mumford"/>
    <meta name="revised" content="03/16/2018"/>
    <meta name="index.php" content="index.php"/>
    <meta name="description" content="home page of Chinese Zodiac "/>
    <meta name="keywords" content="chinese zodiac"/>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
    <meta http-equiv="Content-Language" content="en-us"/> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
    crossorigin="anonymous">
    
    <link rel="stylesheet" href="custom.css"/>
    <title>Chinese Zodiac</title>
</head>

<!-- Content -->
<body>
    <!-- Wrapper -->
    <div class="container-fluid">
        
        <div class="header"><?php include 'includes/inc_header.php' ?></div>
        
            <!-- Top Button Navigation -->
            <div>
                <?php include 'includes/inc_button_nav.php' ?>
            </div>

            <!-- Side bar navigation
            <div id="sidebar">
                <?php include 'includes/inc_text_links.php'?>
            </div>
-->
            <!-- Text File -->
            <div class="jumbotron">
                <?php include 'includes/inc_home_links_bar.php';
                
                    if (isset($_GET['page']))
                    {
                        switch($_GET['page'])
                        {
                            case 'site_layout':
                            include ('includes/' . 'inc_site_layout.php');
                            break;

                            case 'control_structures':
                            include ('includes/' . 'inc_control_structures.php');
                            break;

                            case 'string_functions':
                            include ('includes/' . 'inc_string_functions.php');
                            break;

                            case 'web_forms':
                            include ('includes/' . 'inc_web_forms.php');
                            break;

                            case 'state_information':
                            include ('includes/' . 'inc_state_information.php');
                            break;

                            case 'file':
                            include ('includes/' . 'inc_file.php');
                            break;

                            case 'object_oriented':
                            include ('includes/' . 'inc_object_oriented.php');
                            break;
                            
                            default: 
                            include ('includes/' . 'inc_home.php');
                            break;
                        }
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