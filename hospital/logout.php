<?php


session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location:signin.html"); // Redirecting To Home Page
}
?>