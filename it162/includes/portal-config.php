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

    case 'index.php':
        $title = "Intisar's IT162 Title Page";
        $logo = 'fa-home';
        $PageID = 'Welcome';
        $logo_color = ' style="color:#AFAFAF"';
    break;
    
    case 'aia.php':
        $title = "Intisar's IT162 AIA Page";
        $logo = 'fa-pencil-square-o';
        $PageID = 'AIA';
        $logo_color = ' style="color:#AFAFAF"';
    break;

    case 'contactme.php':
        $title = "Intisar's IT162 Contact Page";
        $logo = 'fa-pencil-square-o';
        $PageID = 'Contact Intisar';
        $logo_color = ' style="color:#AFAFAF"';
    break;

    default:
        $title = THIS_PAGE;
        $logo = '';//no icon by default 
   }

//place URL & labels in the array here for navigation:
    $nav1['index.php'] = "Welcome";
    $nav1['big/index.php'] = "Big";
    $nav1['aia.php'] = "AIA";
    $nav1['fp/index.php'] = "Final Project";
    $nav1['contactme.php'] = "Contact Intisar";
    

/*
makeLinks function will create our dynamic nav when called.
Call like this:
echo makeLinks($nav1); #in which $nav1 is an associative array of links
*/
function makeLinks($linkArray)
{
    $myReturn = '';

    foreach($linkArray as $url => $text)
    {
        if($url == THIS_PAGE)
        {//selected page - add class reference
	    	$myReturn .= '<li><a class="selected" href="' . $url . '">' . $text . '</a></li>' . PHP_EOL;
    	}else{
	    	$myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>'  . PHP_EOL;
    	}    
    }
      
    return $myReturn;    
}

?>



