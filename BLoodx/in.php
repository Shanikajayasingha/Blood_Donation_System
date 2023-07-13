<?php
$dbServerName="localhost";
$dbUsername="root";
$dbPassWord="";
$dbName="blood";


$conn=mysqli_connect($dbServerName,$dbUsername,$dbPassWord,$dbName);
$query="SELECT Bages FROM `doner` WHERE ID='21'";

$result=mysqli_query($conn,$query)or die("bad Query:$sql");


$row = mysqli_fetch_assoc($result);









        
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
  

  $a=array($row);
  echo array_sum($a);

  