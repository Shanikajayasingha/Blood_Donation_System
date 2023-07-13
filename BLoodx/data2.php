<?php

$dbServerName="localhost";
$dbUsername="root";
$dbPassWord="";
$dbName="blood";


$conn=mysqli_connect($dbServerName,$dbUsername,$dbPassWord,$dbName);



$p=$_POST['position'];
$u=$_POST['user'];

$pw=$_POST['password'];
$id=$_POST['ID'];
$name=$_POST['name'];


$nic=$_POST['NIC'];
$DOB=$_POST['DOB'];
$g=$_POST['G'];
$a=$_POST['address'];
$cn1=$_POST['cn1'];
$cn2=$_POST['cn2'];


$query="insert into login(Position,User,password,ID,name,NIC,DOB,Gender,Address,c1,c2)values
        ('$p','$u','$pw','$id','$name','$nic','$DOB','$g','$a','$cn1','$cn2')";

        
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
  

