<?php

$servername = "localhost";
$username = "root";
$password = "root";
$db = "registration";

//connection
$con = new mysqli($servername, $username, $password, $db);


//check con
if (!$con) {
    die("Connection has failed: " . mysqli_connect_error());
    }
else { echo "connection success"; }


$sql = "SELECT id, firstname, lastname, email, county, states FROM reginfo2;";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - First Name: " . $row["firstname"]. " - Last Name: "
			. $row["lastname"]. " - Email: " . $row["email"]. " - County: " . $row["county"]. " - States: " . $row["states"]. "<br>";
        }
}

else { echo "0 results"; }

mysqli_close($con);


?>
