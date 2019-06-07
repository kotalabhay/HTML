<?php
include('login.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){
header("location: profile.php"); // Redirecting To Profile Page
}
?> 

