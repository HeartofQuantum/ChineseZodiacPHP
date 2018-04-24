<?php 

    session_start();

    $survey_questions = array(
        1 => "Was the navigation straightfoward and  did all the links work?", 
        2 => "Was the selection of the background color, font color, and font size appropiate?",
        3 => "Were the images appropriate and did they complement the web content?",
        4 => "Were the descriptions of the PHP program complete and easy to understand?",
        5 => "Was the PHP code structured properly and well commented?",
    );
    if (isset($_SESSION['CurrentQuestion']))
    {
        if (isset($_SESSION['CurrentQuestion'] > 0 ) && (isset($_POST['response'])))
        {
            $_SESSION['Response'][$_SESSION['CurrentQuestion']] = $_POST['CurrentQuestion'];
        }
        ++$_SESSION['CurrentQuestion'];
    }
    else
    {
        $_SESSION['CurrentQuestion'] = 0;
    }
    
    echo "<h1>Survey</h1>";
    
    if ($_SESSION['CurrentQuestion'] == 0 )
    {
        echo "<p>Thank you for visiting my survey page! Please take a moment to answer a couple questions. </p>";
        
    }
    elseif ($_SESSION['CurrentQuestion'] > $question_count)
    {
        echo "<p>Thank you for taking the time to participate in the survey. </p>";        
    }
    else 
    {
        echo "<p>Question " . $_SESSION['CurrentQuestion'] . ": " . $survey_questions[$_SESSION['CurrentQuestion']] . "</p>\n";
    }

    if ($_SESSION['CurrentQuestion'] <= $question_count)
    {
        echo "<form method='post' action='inc_web_survey.php'>\n";
        echo "input type='hidden' name='PHPSESSID' value=' " . session_id(). "' />\n";
        if ($_SESSION['CurrentQuestion'] > 0)
        {
            echo "<p><input type='radio' name='response' value='Exceeds Expectations' /> Exceeds Expectations <br/>\n";
            echo "<input type='radio' name='response' value='Meets Expectations' /> Meets Expectations <br/>\n";
            echo "<input type='radio' name='response' value='Below Expectations' /> Below Expectations <br/></p>\n";
        }
        echo "<input type='submit' name='submit' value='";
        if($_SESSION['CurrentQuestion'] == 0)
            echo "Start the survey";
        elseif ($_SESSION['CurrentQuestion'] == $question_count)
            echo "Finished";
        else 
            echo "Next Question";
        echo "'/>\n";
        echo "</form>\n";


    }
?>
