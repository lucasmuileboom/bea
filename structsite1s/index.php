<?php
// ------------------------------------------------------------------------
// Maak het onderstaande script werkend:
// Vul de code aan en zorg dat de include-bestanden in de juiste map staan
// ------------------------------------------------------------------------
include 'includes/config.php';
include 'views/head.php';
include 'views/header.php';
include 'views/menu.php';

$page = $_GET ["page"];
switch($page)
{
    case "home";
        include"views/home.php";
    break;
    case "articles";
        include"views/articles.php";
    break;
    case "about";
        include"views/about.php";
    break; 
    case "contact";
        include"views/contact.php";
    break;
}
include 'views/footer.php';
?>
