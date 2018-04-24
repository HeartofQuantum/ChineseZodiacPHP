<?php 

    echo "<h1>Web Forms</h1>";
    echo "<ul>
            <li><a href='index.php?page=inc_Alphabetize_Signs.php&amp;section=AlphabetizeSigns'>Alphabetize Signs</a></li>
            <li><a href='index.php?page=inc_Zodiac_Gallery.php&amp;section=ZodiacGallery'>Zodiac Gallery</a></li>
            <li><a href='index.php?page=inc_zodiac_feedback.php;section=ZodiacFeedback'>Zodiac Feedback</a></li>
            <li><a href='index.php?page=inc_view_zodiac_feedback.php;section=ZodiacViewFeedback'>Zodiac View Feedback</a></li>            
         </ul>";

    echo "Web Forms and User Input
         User input for Web pages is done through Web forms. Web forms involve two components.
         The first is the actual Web form with fields for the user to enter data. 
         The second is a form processor, which reads the entered data and responds appropriately.
         User input for Web pages can also be done through links using the <a> tag. 
         Web browsers automatically process user input when a link is clicked, 
         and send a request to the Web server. <br/>";
  
    echo "<a href='includes/inc_Alphabetize_Signs.php'>[Test the Script]</a>
          <a href='includes/ShowSourceCode.php?source_file=inc_Alphabetize_Signs.php'>[View the Source]</a><br/>";
    echo " This page displays thumbnail images of the twelve Chinese zodiac signs. When clicked, the thumbnail will cause the browser to display the full-sized image. <br/>";

    echo "<a href='includes/inc_Zodiac_Gallery.php'>[Test the Script]</a>
          <a href='includes/ShowSourceCode.php?source_file=inc_Zodiac_Gallery.php'>[View the Source]</a><br>";

    echo "<a href='includes/inc_zodiac_feedback.php'>[Test the Script]</a>
          <a href='includes/ShowSourceCode.php?source_file=inc_zodiac_feedback.php'>[View the Source]</a><br/>      
          This form allows site visitors to enter feedback about the Chinese Zodiac Web site, and stores the data in a database table.";

    echo "<a href='includes/inc_view_zodiac_feedback.php'>[Test the Script]</a>
          <a href='includes/ShowSourceCode.php?source_file=inc_view_zodiac_feedback.php'>[View the Source]</a><br/>
          This page displays all of the Zodiac Feedback records that are marked as public messages.";
        


if(isset($_GET['section']))
{
    switch ($_GET['section'])
    {
        case 'AlphabetizeSigns':
        include ('includes/' . 'inc_Alphabetize_Signs.php');
        break;
        case 'ZodiacGallery':
        include ('includes/' . 'inc_Zodiac_Gallery.php');
        break;

        case 'ZodiacFeedback':
        include ('includes/' . 'inc_zodicac_feedback.php');
        break;

        case 'ZodiacView':
        include ('includes/' . 'inc_view_zodiac_feedback.php');
        break;
    }


    
}



?>