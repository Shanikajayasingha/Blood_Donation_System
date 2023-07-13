
<?php include_once 'main.php';
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
      <nav>
        <a href="user.php" class="link "> Schedules</a>
        <a href="doner.php" class="link" > Register_Doner</a>
        <a href="status.php" class="link"> Donor Details </a>
        <a href="donate.php" class="link"> Blood Donate</a>
        <a href="index.php" class="link"> Log Out</a>
</NAV>

      </div>
    </div>
  </div>

     <!--End Grid-->

 <div class="News">
  
 <div class="type">Shedules</div>


<div class="container">
  <div class="row ">
    <div class="col  rr">ID</div>
    <div class="col rr">Location</div>
    <div class="col rr" >Date</div>
    <div class="col rr">Time</div>
    <div class="col rr">Discription</div>
    
    <div class="w-100  "></div>
    <div class="col"> 
       
       <?php
       $sql="select * from camps;"; 
       $result=mysqli_query($conn,$sql);
       
       while($row = mysqli_fetch_array($result)){
        echo  $row['ID']."</br>";
      }
      ?>
 

  </div>
    <div class="col"> 
    <?php
    $sql="select * from camps;"; 
    $result=mysqli_query($conn,$sql);
    while($row = mysqli_fetch_array($result)){
      echo  $row['Location']."</br>";
    }
      ?>

    </div>
    <div class="col">
    <?php
    $sql="select * from camps;"; 
    $result=mysqli_query($conn,$sql);
    while($row = mysqli_fetch_array($result)){
      echo  $row['Date']."</br>";
    }
      ?>
    </div>
    <div class="col">
    <?php
    $sql="select * from camps;"; 
    $result=mysqli_query($conn,$sql);
    while($row = mysqli_fetch_array($result)){
      echo  $row['Time']."</br>";
    }
      ?>
    </div>
    <div class="col">
    <?php
    $sql="select * from camps;"; 
    $result=mysqli_query($conn,$sql);
    while($row = mysqli_fetch_array($result)){
      echo  $row['Description']."</br>";
    }
      ?>
    </div>
  
  
  
  
  
  </div>
</div>
















<!--Main Div-->
</div>




</body>
</html>