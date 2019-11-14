<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nitesh";
$RESPONSE_TIME = $_POST["RESPONSE_TIME"];
$INTERACTIVITY = $_POST["INTERACTIVITY"];
$INFORMATION_AVAIL = $_POST["INFORMATION_AVAIL"];
$OVERALL_RATING = $_POST["OVERALL_RATING"];
$SUGGESTION = $_POST["SUGGESTION"];
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed" . $conn->connect_error); 
    
}
$sql = "INSERT INTO feedback(RESPONSE_TIME,INTERACTIVITY,INFORMATION_AVAIL,OVERALL_RATING,SUGGESTION) VALUES ('$RESPONSE_TIME','$INTERACTIVITY','$INFORMATION_AVAIL','$OVERALL_RATING','$SUGGESTION')";


if ($conn->query($sql) === TRUE) {
    echo "<script type='text/javascript'>window.alert('Submitted Successfully'); window.location=\"submit.html\";</script>";
   // header("location: submit.html");
}
else {
    echo "<script type='text/javascript'>alert('Error')</script>" . $sql . "<br>" . $conn->error;
}


$conn->close();
    
?>
