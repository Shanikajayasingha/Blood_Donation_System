<?php

include_once 'database.php';

$id=$_POST['ID'];
$name=$_POST['name'];
$

$sql="INSERT INTO doner(ID,Name,DOB,Address,Telephone1,Telephone-2,BloodType)values('$id','$name');";

$result=mysqli_query($connect,$sql);


header("location:doner.php?signup=success");
?>