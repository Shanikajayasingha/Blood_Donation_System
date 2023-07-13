<?php

$dbServerName="localhost";
$dbUsername="root";
$dbPassWord="";
$dbName="blood";


$conn=mysqli_connect($dbServerName,$dbUsername,$dbPassWord,$dbName);

$u=$_POST['user'];
$p=$_POST['pass'];
$e="Employee";
$a="Administrator";

$sql="select * from login where user='$u' AND password='$p'";

$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);

if($u==" " &&$p==" "){
  
    
}

//sql Database
if($row['user']==$u && $row['password']==$p && $row['position']==$e){
    
    header('location:user.php');



}elseif ($row['user']==$u && $row['password']==$p && $row['position']==$a){
    header('location:storage.php');
}

else{
    header('location:index.php');
}





   






   
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";



?>