<?php


include('session.php');

if(!isset($_SESSION['login_user'])){
header("location:signin.html"); // Redirecting To Home Page
}
?>

<!DOCTYPE html>
<html>
<head>
 <title>Table with database</title>
 <style>
  table {
   border-collapse: collapse;
   width: 100%;
   color: #588c7e;
   font-family: monospace;
   font-size: 25px;
   text-align: left;
     } 
  th {
   background-color: #588c7e;
   color: white;
    }
  tr:nth-child(even) {background-color: #f2f2f2}
 </style>
</head>
<body>
<div id="profile">
  <b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
  <b id="logout"><a href="signin.html">Log Out</a></b>
 <table>
 <tr>
  <th>PID</th> 
  <th>FirstName</th> 
  <th>LastName</th>
  <th>email_id</th>
  <th>mobileno</th>
  <th>sex</th>
  <th>address</th>
  <th>appointment__date</th>
 </tr>
 
  <?php
 $conn = mysqli_connect("localhost", "root", "", "abhay");
  // Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  } 
  $sql = "SELECT PID, FirstName, LastName, email_id, mobileno,  sex, address, appointment__date FROM patients";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["PID"]. "</td><td>" . $row["FirstName"] . "</td><td>"
. $row["LastName"]. "</td><td>" . $row["email_id"]. "</td><td>" . $row["mobileno"]. "</td><td>" . $row["sex"]. "</td><td>" . $row["address"]. "</td><td>" . $row["appointment__date"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>