<?php
// index.php

// Include the database connection file if you are retrieving data from a database
// include 'db_connect.php';

// Define an associative array to hold page content which may come from a database or other source
$sections = [
    'home' => 'home_content.php',
    'about' => 'about_content.php',
    'skills' => 'skills_content.php',
    'projects' => 'projects_content.php',
    'reviews' => 'reviews_content.php'
];

// Define the current section (this could be set by a GET variable or set to a default)
$current_section = 'home'; // This would dynamically change, perhaps according to user navigation

// Include the header file (contains your HTML <head> and opening <body> tags, navigation, etc.)
require 'Includes/header.php';

    // Check if we're currently on the home page
if ($current_section === 'home') {
    // Home page specific content
    ?>
    <div class="content-container">
        <div class="picture-box">
            <!-- Image could be dynamically included from a database or other source -->
            <img src="/Img/IMG_4395.jpg" alt="Your Picture" />
        </div>

        <div class="welcome-message-container">
            <p class="welcome-message">
      <span style="font-size: 3.5rem">Hello,</span><br> 
      <span style="font-size: 1.5rem; color: white;">I am a recent grad from
      <span style="color: purple">Hennepin Technical College,</span><br>
      <span style="color: white"> Where I earned an Associate's degree in</span> <span style="color: purple">SQL Server Development.</span><br>
      <span style="color: purple">Currently, I'm pursuing a</span> <span style="color: white">B.S. in Computer Science</span><br>
      <span style="color: white">at</span> <span style="color: purple">Metro State University.</span><br>
      <span style="color: purple">I am passionate about</span> <span style="color: white">Data Science,</span><br>
      <span style="color: white">and plan to further my education with a</span> <span style="color: purple">Master's degree.</span><br>
      <span style="color: purple">My skills include</span> <span style="color: white">Database Administration,</span><br>
      <span style="color: white">Entry-Level Software Development,</span><br>
      <span style="color: purple">and Data Analysis.</span><br>
      <span style="color: white">I aspire to secure a position in these fields,</span><br>
      <span style="color: purple">leveraging my knowledge and skills to drive success.</span>
      </p>

      

      <form action="download.php" method="post">
        <!-- The button that will submit the form -->
        <button type="submit" class="download-button" name="download_resume">Download Resume</button>
      </form>
        </div>
    </div>
    <?php
} else
      
        



// Load the content for the current section
if (array_key_exists($current_section, $sections)) {
    include $sections[$current_section];
} else {
    // If the section isn't found, you could load a default page or show an error
    include '404.php'; // A simple 404 error page
}

// Include the footer file (contains your closing </body> and </html> tags, etc.)

?>
