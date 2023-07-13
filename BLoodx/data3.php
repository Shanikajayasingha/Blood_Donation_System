<?php

$dbServerName="localhost";
$dbUsername="root";
$dbPassWord="";
$dbName="blood";


$conn=mysqli_connect($dbServerName,$dbUsername,$dbPassWord,$dbName);


$n=$_POST['name'];
$id=$_POST['id'];
$a=$_POST['address'];
$tp=$_POST['tp'];

$dob=$_POST['dob'];
$g=$_POST['gen'];
$t=$_POST['type'];
$a=$_POST['amount'];
$c=$_POST['cause'];





$query="insert into request(name,id,address,phone,dob,gender,type,amount,cause)values
                             ('$n','$id','$a','$tp','$dob','$g','$t','$a','$c')";

        
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
  