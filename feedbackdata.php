<html>
<head>
<link rel="stylesheet" type="text/css" href="enquiry.css">
</head>
      <style>.head{
height:250px;
background:url("head.jpg");
border:5px solid powderblue;
padding:2px;
}
.search
{
width:450px;
margin-left: 100px;
border-radius: 15px;
padding:10px;
}
    .quotes2
{
width:750px;
background:#00ffff;
margin-left:250px;
height:250px;
}</style>


<body>

	<div class="wrapper">
	<div class="head">
			<div class="mid"
				 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="heading.png">
              <!--   <span style="color:black";><i><font size="30" face="arial">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>ADMISSION COUNSELLING</b></font></span> -->
			
			</div>
			</div>
		<div class="scrollmenu">
  <a href="p1.html">Home</a>
<a href="LOGIN.html">Admin login</a>
  <a href="enquiry.html">Enquiry</a>
  <a href="about.html">About</a>
	<a href="feedback.html">Feedback</a>
</div>
		
<div class="quotes">
			<div class="quotes1">
			<img src="images (2).jpeg" height="250"; width="250";>
			</div>
			<div class="quotes2">
			 <span style="color:black";><i><font size="6"><h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;WELCOME TO &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ADMISSION &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;COUNSELLING</h1></font></i></span>
			</div>
		</div>


		<h1>
		<div class="search">
            <table border="7" style="background:orange;align:center;">
            <tr>
                <td><span style="color:red"><h4>RESPONSE_TIME</h4></span></td>
                <td><span style="color:red"><h4>INTERACTIVITY</h4></span></td>
                <td><span style="color:red"><h4>OVERALL_RATING</h4></span></td>
                <td><span style="color:red"><h4>INFORMATION_AVAIL</h4></span></td>
		 <td><span style="color:red"><h4>SUGGESTION</h4></span></td>

            </tr>

<?php
$servername="localhost";
$username="root";
$password="";
$dbname="nitesh";

$conn=new mysqli($servername,$username,$password,$dbname);//mysqli functionname to connect mysql
if ($conn->connect_error){
    die("Connection failed");
}
$sql="select RESPONSE_TIME,INTERACTIVITY,OVERALL_RATING,INFORMATION_AVAIL,SUGGESTION from feedback";
$result=$conn->query($sql);
if ($result->num_rows > 0){
    
    while($row = $result->fetch_assoc()){
        echo "<tr>";
	
        echo "<td><strong>".$row["RESPONSE_TIME"]."</strong></td>";
        echo "<td><strong>".$row["INTERACTIVITY"]."</strong></td>";
        echo "<td><strong>".$row["INFORMATION_AVAIL"]."</strong></td>";
        echo "<td><strong>".$row["OVERALL_RATING"]."</strong></td>";
        echo "<td><strong>".$row["SUGGESTION"]."</strong></td>";
        echo "</tr>";
    }
}
        $conn->close();

?>
    </table>
            </div><br/>
 <div class="gif">
    		<div class="bodyup">
			<img class="myslides" src="12.jpg" alt="" width="1000" height="450">
			<img class="myslides" src="22.jpg" alt="" width="1000" height="450">
			<img class="myslides" src="image1.jpg" alt="" width="1000" height="450">
			<img class="myslides" src="image.jpg" alt="" width="1000" height="450">
			<img class="myslides" src="Grads.jpg" alt="" width="1000" height="450">
			<img class="myslides" src="11.jpg" alt="" width="1000" height="450">
			<script>
			var slideIndex = 0;
			carousel();

			function carousel() {
				var i;
				var x = document.getElementsByClassName("myslides");
				for (i = 0; i < x.length; i++) {
					x[i].style.display = "none"; 
				}
				slideIndex++;
				if (slideIndex > x.length) {slideIndex = 1} 
				x[slideIndex-1].style.display = "block"; 
				setTimeout(carousel, 2000); // Change image every 2 seconds
			}
			</script>
     </div>
		</div>
    
		<div class="developer">
			<span style="color:silver";>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Developed and Designed by N & N
PVT. LTD.
</span>
		</div>

	

    

        </div>
    </div>
</body>

</html>