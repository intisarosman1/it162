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
        $title = "Rin's Doodles";
        $PageID = 'Welcome';
    break;

    case 'index.php':
        $title = "Rin's Doodles";
        $PageID = 'Home';
    break;

    case 'collectionone.php':
        $title = "Collection I";
        $PageID = 'Collection I';
    break;

    case 'collectiontwo.php':
        $title = "Collection II";
        $PageID = 'Collection II';
    break;

    case 'collectionthree.php':
        $title = "Collection III";
        $PageID = 'Collection III';
    break;

    case 'commissions.php':
        $title = "Commissions";
        $PageID = 'Commissions';
    break;

    case 'aboutme.php':
        $title = "About Me";
        $PageID = 'About Me';
    break;

    default:
        $title = THIS_PAGE;
        $PageID = 'Home';
        $logo = '';//no icon by default 
   }

//place URL & labels in the array here for navigation:


/*
makeLinks function will create our dynamic nav when called.
Call like this:
echo makeLinks($nav1); #in which $nav1 is an associative array of links
*/


?>



