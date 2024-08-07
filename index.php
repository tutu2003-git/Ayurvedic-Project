<?php
include("includes/header.php");
include("includes/topbar.php");




$page = isset($_GET['page']) ? $_GET['page'] : 'home';

// Switch statement to handle different pages
switch ($page) {
    case 'home':
       include("home.php");
        break;
    case 'about':
        include("about.php");
        break;
    case 'contact':
        echo '<h1>Contact Page</h1>';
        echo '<p>Get in touch with us via the Contact Page.</p>';
        break;
    default:
        echo '<h1>404 Not Found</h1>';
        echo '<p>The page you are looking for does not exist.</p>';
        break;
}


?>

