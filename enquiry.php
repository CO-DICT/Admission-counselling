<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nitesh";
$State = $_POST["State"];
$Course = $_POST["Course"];
$Enter_college_Name = $_POST["Enter_college_Name"];
$Mobile_no = $_POST["Mobile_no"];

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed" . $conn->connect_error); 
    
}
$sql = "insert into enquiry(State,Course,Enter_college_Name,Mobile_no) values ('$State','$Course','$Enter_college_Name','$Mobile_no')";


if ($conn->query($sql) === TRUE) {
    echo "<script type='text/javascript'>alert('Submitted Successfully')</script>";
    header("location: submit.html");
}
else {
    echo "<script type='text/javascript'>alert('Error')</script>" . $sql . "<br>" . $conn->error;
}


$conn->close();
    
?>
