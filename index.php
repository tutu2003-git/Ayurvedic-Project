<?php
include("includes/header.php");
include("includes/topbar.php");




$page = isset($_GET['page']) ? $_GET['page'] : 'home';

// Switch statement to handle different pages
switch ($page) {
    case 'home':
       include("home.php")
        break;
    case 'about':
        echo '<h1>About Page</h1>';
        echo '<p>This is the About Page.</p>';
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

