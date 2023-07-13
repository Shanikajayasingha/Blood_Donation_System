<?php

$dbServerName="localhost";
$dbUsername="root";
$dbPassWord="";
$dbName="blood";


$conn=mysqli_connect($dbServerName,$dbUsername,$dbPassWord,$dbName);



$d=$_POST['date'];
$t=$_POST['time'];
$l=$_POST['lo'];
$dis=$_POST['dis'];


$query="insert into camps(Date,Time,Location,Description)values
        ('$d','$t','$l','$dis')";

        
$rnn=mysqli_query($conn,$query);
  
if($rnn){

    echo"submitted";
}

else{
    "Not submited";
}


    
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";
  



  ?>
  
