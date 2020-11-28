<?php
/**
 *Created with PHP STORM
 * Created by @Sridhar
 * Created on 21st November 2020
 * Time : 10:00AM
 **/
//initialising the session
session_start();
//unsetting all the session variables
$_SESSION = array();
//destroying the session
session_destroy();

header("Location: Main.php");
clearstatcache();
exit;
/**
 * This last line basically used to destroy the session and logout of the webapp and then redirect to the main page
 * and then encourage user to login again
 */

?>
