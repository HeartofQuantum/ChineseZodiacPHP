<?php

echo 
"<div class='navbar navbar-expand-lg navbar-light bg-light'>";

include("Includes/inc_banner_display.php");
$image = $banner_array[$banner_index]; 

echo
  "<a href='index.php?page=home_page'>
    <img src='Images/" . $image . "alt='[Banner Ad]' title='Banner Ad'/>
  </a>";


echo
  "
  <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
    <span class='navbar-toggler-icon'></span>
  </button>

  <div class='navbar-collapse collapse w-100 order-3 dual-collapse2' id='navbarSupportedContent'>
  <ul class='navbar-nav ml-auto>
    <li class='nav-item active'>
      <a class='nav-link' href='index.php?page=home_page'>Home</a>
    </li>
    <li class='nav-item'>
      <a class='nav-link' href='index.php?page=site_layout'>Site Layout</a>
    </li>
    <li class='nav-item'>
      <a class='nav-link' href='index.php?page=control_structures'>Control Structures</a>
    </li> 
    <li class='nav-item'>
      <a class='nav-link' href='index.php?page=string_functions'>String Functions</a>
    </li>
    <li class='nav-item'>
      <a class='nav-link' href='index.php?page=web_forms'>Web Forms</a>
    </li>
    <li class='nav-item'>
      <a class='nav-link' href='index.php?page=midterm_assessment'>Midterm Assessment</a>
    </li>
    <li class='nav-item'>
      <a class='nav-link' href='index.php?page=state_information'>State Information</a>
    </li>
    <li class='nav-item'>
      <a class='nav-link' href='index.php?page=object_oriented'>Object Oriented</a>
    </li>
  </ul>

  </li>
  </div>
</div>";

?>
