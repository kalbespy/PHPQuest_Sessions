<?php 
require 'inc/head.php'; 

if (!isset($_SESSION['loginname']) || empty($_SESSION['loginname'])) 
{
    header ('location: login.php');
} else {
    echo 'Une session en cours';
    session_unset();
    session_destroy();
    header ('location: login.php');
}

?>