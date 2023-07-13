<?php

$dbServerName="localhost";
$dbUsername="root";
$dbPassWord="";
$dbName="blood";


$conn=mysqli_connect($dbServerName,$dbUsername,$dbPassWord,$dbName);



$ID=$_POST['ID'];




$sql="select ID from doner where ID='id'";


$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);

  
//sql Database
if($row['user']){
    
    header('location:status2.php');
    echo "Yes";



}elseif ($row['user']==$u && $row['password']==$p && $row['position']==$a){
    header('location:status2.php');
    echo "No";
}











   
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";


?>






?>
