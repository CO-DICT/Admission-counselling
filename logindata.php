<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nitesh";
$State = $_POST["State"];
$Course = $_POST["Course"];
$Enter_college_Name = $_POST["Enter_college_Name"];
$CSE = $_POST["CSE"];
$ISE = $_POST["ISE"];
$CIVIL = $_POST["CIVIL"];
$MECH = $_POST["MECH"];
$ECE = $_POST["ECE"];
$EEE = $_POST["EEE"];
$Total_seats = $_POST["Total_seats"];
$Rank = $_POST["Rank"];
$Placement_percent = $_POST["Placement_percent"];
$Website = $_POST["Website"];

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed" . $conn->connect_error); 
    
}
$sql = "insert into detail(State,Course,Enter_college_Name,CSE,ISE,CIVIL,MECH,ECE,EEE,Total_seats,Rank,Placement_percent,Website) values ('$State','$Course','$Enter_college_Name','$CSE','$ISE','$CIVIL','$MECH','$ECE','$EEE','$Total_seats','$Rank','$Placement_percent','$Website')";


if ($conn->query($sql) === TRUE) {
    echo "<script type='text/javascript'>alert('Submitted Successfully')</script>";
    header("location: submit.html");
}
else {
    echo "<script type='text/javascript'>alert('Error')</script>" . $sql . "<br>" . $conn->error;
}


$conn->close();
    
?>
