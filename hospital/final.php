<?php

// php code to Insert data into mysql database from input text
if(isset($_POST['SUBMIT']))
{
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "abhay";
    
    // get values form input text and number

   $FirstName=$_POST['FirstName'];
$LastName=$_POST['LastName'];
$email_id=$_POST['email_id'];
$mobileno=$_POST['mobileno'];
$sex=$_POST['sex'];
$address=$_POST['address'];
$appointment__date=$_POST['appointment__date'];
    
    // connect to mysql database using mysqli

    $connect = mysqli_connect($hostname, $username, $password, $databaseName);
	
    
    // mysql query to insert data
		$query = "INSERT INTO `patients`(`FirstName`,`LastName`,`email_id`,`mobileno`,`sex`,`address`,`appointment__date`) VALUES ('$FirstName','$LastName','$email_id','$mobileno','$sex','$address','$appointment__date')";
      //$query = "INSERT INTO `users`(`fname`, `lname`, `age`) VALUES ('$fname','$lname','$age')";
    
    $result = mysqli_query($connect,$query);
    
    // check if mysql query successful

    if($result)
    {
        echo 'Data Inserted';
    }
    
    else{
        echo 'Data Not Inserted';
    }
    
    
    mysqli_close($connect);
}

?>