<?php 
    echo "<ul>
            <li><a href='index.php?page=AlphabetizeSigns&amp;section=AlphabetizeSigns'>Alphabetize Signs</a></li>
         </ul>";
    echo "<h1>Web Forms</h1>";
    echo "Web Forms and User Input
         User input for Web pages is done through Web forms. Web forms involve two components.
         The first is the actual Web form with fields for the user to enter data. 
         The second is a form processor, which reads the entered data and responds appropriately.
         User input for Web pages can also be done through links using the <a> tag. 
         Web browsers automatically process user input when a link is clicked, 
         and send a request to the Web server. ";
  
    include ('includes/' . 'inc_Alphabetize_Signs.php');


if(isset($_GET['section']))
{
    switch ($_GET['section'])
    {
    case 'AlphabetizeSigns':
    include ('includes/' . 'inc_Alphabetize_Signs.php');
    break;
    }
}



?>