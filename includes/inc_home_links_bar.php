<?php
    echo "<ul>
            <li><a href='index.php?page=home_page&amp;section=php'>PHP</a></li>
            <li><a href='index.php?page=zodiac&amp;section=zodiac'>Chinese Zodiac</a></li>
            <li><a href='index.php?page=feedback&amp;section=feedback'>Feedback</a></li>
         </ul>";    

    if(isset($_GET['section']))
    {
        switch ($_GET['section'])
        {
            case 'zodiac':
            include ('includes/' . 'inc_chinese_zodiac.php');
            break;

            case 'feedback':
            include ('includes/' . 'inc_zodiac_feedback.php');

            case 'php': 
            default: include ('includes/' .'inc_php_info.php');
            break;



        }

    }


?>