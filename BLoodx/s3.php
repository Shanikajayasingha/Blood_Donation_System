<?php


$dbServerName="localhost";
$dbUsername="root";
$dbPassWord="";
$dbName="blood";
$conn=mysqli_connect($dbServerName,$dbUsername,$dbPassWord,$dbName);
$ID=$_POST['ID'];
?>
  
  




  <html>
   <head>
      <!--Boostrap-->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
      <!--Custom Css-->
      <link rel="stylesheet" href="style.css">
   </head>
   <body>
      <!--Grid-->
      <div class="main">
      <div class="container  px-1 grid" >
      <div class="row g1">
         <div class="col">
            <div class="p-0" >
               <img src="logo.png">
            </div>
         </div>
         <div class="col  link_col">
            <div class="links px-0 p-5">
            <a href="user.php" class="link "> Schedules</a>
            <a href="doner.php" class="link" > Register_Doner</a>
            <a href="status.php" class="link"> Donor Details </a>
            <a href="donate.php" class="link"> Blood Donat</a>
            <a href="index.php" class="link"> Log Out</a>
              
               
            </div>
         </div>
      </div>

      



<div class="row">

  <div class="col-2">ID</div>
  <div class="col"> 
    <?php
  $sql="select ID from doner where ID='$ID'"; 
    $result=mysqli_query($conn,$sql);
    while($row = mysqli_fetch_array($result)){
      echo  $row['ID']."</br>";
    }

    ?>
</div>

  <div class="w-100"></div>
  <div class="col-2">Name</div>
  <div class="col">  <?php
  $sql="select Name from doner where ID='$ID'"; 
    $result=mysqli_query($conn,$sql);
    while($row = mysqli_fetch_array($result)){
      echo  $row['Name']."</br>";
    }

    ?>
   

</div>
<div class="w-100"></div>
  <div class="col-2">Gender</div>
  <div class="col">  <?php
  $sql="select Gender from doner where ID='$ID'"; 
    $result=mysqli_query($conn,$sql);
    while($row = mysqli_fetch_array($result)){
      echo  $row['Gender']."</br>";
    }

    ?>

</div>
<div class="w-100"></div>
  <div class="col-2">DOB</div>
  <div class="col">  <?php
  $sql="select DOB from doner where ID='$ID'"; 
    $result=mysqli_query($conn,$sql);
    while($row = mysqli_fetch_array($result)){
      echo  $row['DOB']."</br>";
    }

    ?>


</div>
<div class="w-100"></div>
  <div class="col-2">Address</div>
  <div class="col">  <?php
  $sql="select Address from doner where ID='$ID'"; 
    $result=mysqli_query($conn,$sql);
    while($row = mysqli_fetch_array($result)){
      echo  $row['Address']."</br>";
    }

    ?>

</div>
<div class="w-100"></div>
  <div class="col-2">Telephone</div>
  <div class="col">  <?php
  $sql="select TP1 from doner where ID='$ID'"; 
    $result=mysqli_query($conn,$sql);
    while($row = mysqli_fetch_array($result)){
      echo  $row['TP1']."</br>";
    }

    ?>

</div>
<div class="w-100"></div>
  <div class="col-2">Telephone</div>
  <div class="col">  <?php
  $sql="select TP2 from doner where ID='$ID'"; 
    $result=mysqli_query($conn,$sql);
    while($row = mysqli_fetch_array($result)){
      echo  $row['TP2']."</br>";
    }

    ?>



</div>
<div class="w-100"></div>
  <div class="col-2">BLood Type</div>
  <div class="col">  <?php
  $sql="select Type from doner where ID='$ID'"; 
    $result=mysqli_query($conn,$sql);
    while($row = mysqli_fetch_array($result)){
      echo  $row['Type']."</br>";
    }

    ?>

</div>
<div class="w-100"></div>
  <div class="col-2">Bages</div>
  <div class="col">  <?php
  $sql="select Bages from doner where ID='$ID'"; 
    $result=mysqli_query($conn,$sql);
    while($row = mysqli_fetch_array($result)){
      echo  $row['Bages']."</br>";
    }

    ?>



</div>
<div class="w-100"></div>
  <div class="col-2">Last Donate Date</div>
  <div class="col">  <?php
  $sql="select Lastdate from doner where ID='$ID'"; 
    $result=mysqli_query($conn,$sql);
    while($row = mysqli_fetch_array($result)){
      echo  $row['Lastdate']."</br>";
    }

    ?>





    
  </div>
</div>







</body>
</html>
    


