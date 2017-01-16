<?php

$servername = "localhost";
$username = "root";
$password = "root";
$db = "registration";

$fname = $_POST["firstname"];
$lname = $_POST["lastname"];
$email = $_POST["email"];
$county = $_POST["county"];
$checked_arr = $_POST['checkbox'];
$count = count($checked_arr);

echo "Welcome, " . $fname . " " . $lname . "!<br>Your email address is " . $email . 
	" and you are from ". $county . " county.<br>Additionally, you have been to " . $count .
	" Midwestern states so far.<br>";

//connection
$con = new mysqli($servername, $username, $password, $db);

//check conection
if (!$con) {
    die("Connection to the database has failed: " . mysqli_connect_error());
    }
else { echo "Connection to the database has been a success!"; }


$sql = "INSERT INTO reginfo2(id, firstname, lastname, email, county, states) VALUES (null, '$fname', '$lname', 
    '$email', '$county', '$count');";
	
echo "<br><br>The text for this entry that would get passed into the database would look like 
this:<br> '" . $sql . "'";

if (mysqli_query($con, $sql)) {
    echo "Data Entered Successfully"; 
}	
else {"Error: " . $sql . "<br>" . mysqli_error($con);
}
mysqli_close($con);
?>
