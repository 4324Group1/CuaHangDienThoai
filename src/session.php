<?php
  if(!isset($_SESSION)) 
    {
session_start();// Starting Session
}
if(!isset($_SESSION['user']) && !isset($_SESSION['authority'])){

header('Location: index.php'); // Redirecting To Home Page
}
?>