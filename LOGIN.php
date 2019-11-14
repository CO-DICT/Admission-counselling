<html>
<head>
    <script>
        
        
    </script>
<?php
$userid=$_POST["userid"];
$pswd=$_POST["password"];
$servername="localhost";
$username="root";
$password="";
$dbname="nitesh";

$conn=new mysqli($servername,$username,$password,$dbname);//mysqli functionname to connect mysql
if ($conn->connect_error){
    die("Connection failed");
}
$sql="select userid,password from Admin";
$result=$conn->query($sql);
    
    while($row = $result->fetch_assoc()){
        if($userid===$row["userid"] && $pswd===$row["password"]){
            header('location: data2.html');
        }
    }
    echo "<script type='text/javascript'>alert('login unsuccessful')</script>";
?>
