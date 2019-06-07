<?php

// php code to Insert data into mysql database from input text
if(isset($_POST['submit']))
{
    $hostnames = "localhost";
    $user = "root";
    $pass = "";
    $databaseNames = "login";
    
    // get values form input text and number

    $username = $_POST['username'];
    $password = $_POST['password'];
    


$conn = mysqli_connect($hostnames, $user, $pass, $databaseNames);






$sql = "SELECT * FROM `account` WHERE username='" .$username. "' AND password='" .$password."' LIMIT 1";

$res =$mysqli_query($sql);
if (mysqli_num_rows($res)==1)
{
	echo "you have been logged in";
}
else
{
	echo "yo have not enter correct username and password";
}

}


 
?>


