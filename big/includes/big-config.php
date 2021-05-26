<?php
/*
portal-config.php

Used to store all of our WEB120 configuration information

*/

//prevents data from being sent early
ob_start();

//this helps us avoid PHP date errors:
date_default_timezone_set('America/Los_Angeles');

//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;

$logo_color = ''; //make logo_color an empty string by default

switch(THIS_PAGE){

    case '../index.php':
        $title = "Intisar's IT162 Title Page";
        $logo = 'fa fa-fw fa-bank';
        $PageID = 'Welcome';
        $logo_color = ' style="color:#AFAFAF"';
    break;
    
    case 'index.php':
        $title = "Intisar's IT162 BIG Page";
        $logo = 'fa fa-fw fa-home';
        $PageID = 'Client Questionnaire';
        $logo_color = ' style="color:#AFAFAF"';
    break;

    case 'flexbox.php':
        $title = "Flexbox Research";
        $PageID = 'Flexbox Research';
    break;

    case 'galleries.php':
        $title = "Galleries Research";
        $PageID = 'Galleries Research';
    break;

    case 'calendar.php':
        $title = "Calendar";
        $PageID = 'Calendar';
    break;

    case 'map.php':
        $title = "Map";
        $PageID = 'Map';
    break;

    case 'youtube.php':
        $title = "Web Accessibility";
        $PageID = 'Web Accessibility';
    break;

    case 'shoppingcarts.php':
        $title = "Shopping Carts";
        $PageID = 'Shopping Carts';
    break;

    case 'siteapp.php':
        $title = "Site vs App";
        $PageID = 'Site vs App';
    break;

    case 'webcam.php':
        $title = "Web Cam";
        $PageID = 'Web Cam';
    break;

    default:
        $title = THIS_PAGE;
        $logo = '';//no icon by default 
   }

?>



