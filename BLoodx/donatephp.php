<?php

$dbServerName="localhost";
$dbUsername="root";
$dbPassWord="";
$dbName="blood";


$con=mysqli_connect($dbServerName,$dbUsername,$dbPassWord,$dbName);

$ID=$_POST['ID'];
$date=$_POST['date'];   

$bags=$_POST['bag'];

$sql ="UPDATE `doner` SET `Bages` = '$bags', `LastDate` = '$date' WHERE `doner`.`ID` = '$ID';";

if (mysqli_multi_query($con, $sql)) {
  do {
    // Store first result set
    if ($result = mysqli_store_result($con)) {
      while ($row = mysqli_fetch_row($result)) {
        
        
        printf("%s\n", $row[0]);
        $sum=$row[0]+$bags;
      }
      mysqli_free_result($result);
    }
    // if there are more result-sets, the print a divider
    if (mysqli_more_results($con)) {
      printf("-------------\n");
    }
     //Prepare next result set
  } while (mysqli_next_result($con));
}

mysqli_close($con);


if ($con->connect_error) {
  
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";








?>

