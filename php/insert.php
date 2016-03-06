<?php
header("Access-Control-Allow-Origin: *");
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phonegap_demo";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

 if(true)
{$id = $_POST['id'];	 
 $title=$_POST['title'];
 $duration=$_POST['duration'];
 $price=$_POST['price'];
echo $q = "INSERT INTO course_details (id,title,duration,price) VALUES ('','$title','$duration','$price')";
  if (mysqli_query($conn, $q)) {
    echo "ok";
} else {
    echo "error" ;
}
 }
 ?>