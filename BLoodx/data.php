<?php

$dbServerName="localhost";
$dbUsername="root";
$dbPassWord="";
$dbName="blood";


$conn=mysqli_connect($dbServerName,$dbUsername,$dbPassWord,$dbName);

$ID=$_POST['ID'];
$Name=$_POST['Name'];
$Gender=$_POST['G'];
$B=$_POST['B'];
$Address=$_POST['A'];
$TP1=$_POST['TP1'];
$TP2=$_POST['TP2'];
$Type=$_POST['b'];



$query="insert into doner(ID,Name,Gender,DOB,Address,TP1,TP2,Type)values
        ('$ID','$Name','$Gender','$B','$Address','$TP1','$TP2','$Type')";

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
  
