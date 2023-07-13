<?php

$dbServerName="localhost";
$dbUsername="root";
$dbPassWord="";
$dbName="blood";


$con=mysqli_connect($dbServerName,$dbUsername,$dbPassWord,$dbName);

//$ID=$_POST['ID'];

$sql2="SELECT bages FROM `doner` WHERE. ID='$ID';";


$result=mysqli_query($con,$sql2);
while($row = mysqli_fetch_array($result)){
  echo  $row['Bages']."</br>";
}

$rnn=mysqli_query($con,$query);
  
if($rnn){

    echo"submitted";
}

else{
    "Not submited";
}


    
if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";
  


?>
