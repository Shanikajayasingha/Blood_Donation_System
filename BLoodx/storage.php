<?php
   $dbServerName="localhost";
   $dbUsername="root";
   $dbPassWord="";
   $dbName="blood";
   $conn=mysqli_connect($dbServerName,$dbUsername,$dbPassWord,$dbName);
    
   ?>
<html>
   <head>
      <!--Boostrap-->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
      <!--Custom Css-->
      <link rel="stylesheet" href="style.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
      <link rel="stylesheet" href="style.css">
      <style>
         .head{
         font-family: 'Times New Roman', Times, serif;
         margin-bottom:50px ;
         }
         .m{
         margin-top: 100px;
         }
         .col-sm{
         border: 2px solid black;
         }
         .detail{
         font-size: 30px;
         }
      </style>
   </head>
   <body>
      <!--Grid-->
      <div class="main ">
      <div class="header">
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
               <a href="storage.php" class="link"> Storage</a>
                  <a href="camps.php" class="link" > Camps</a>
                  
                  <a href="login.php" class="link"> Create Accounts</a>
                  <a href="index.php" class="link"> Log Out</a>
               </NAV>
            </div>
         </div>
      </div>
      </head>
      <body>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
         <H2 class="m"> Storage</H2>
         <center>
            <div class="container detail">
               <div class="row">
                  <div class="col-sm">
                     <div class="head"> A+</div>
                     <?php
                        $sql="select SUM(Bages) from doner where Type='A+'"; 
                        $result=mysqli_query($conn,$sql);
                        while($row = mysqli_fetch_array($result)){
                        $Ap=$row['SUM(Bages)']."</br>";
                          echo $Ap;
                         }
                        ?>
                  </div>
                  <div class="col-sm">
                     <div class="head"> A-</div>
                     <?php
                        $sql="select SUM(Bages) from doner where Type='A-'";  
                          $result=mysqli_query($conn,$sql);
                          while($row = mysqli_fetch_array($result)){
                            $An=$row['SUM(Bages)']."</br>";
                        
                            echo $An;
                           }
                          ?>
                  </div>
                  <div class="col-sm">
                     <div class="head">B+</div>
                     <?php
                        $sql="select SUM(Bages) from doner where Type='B+'";  
                          $result=mysqli_query($conn,$sql);
                          while($row = mysqli_fetch_array($result)){
                            $Bp=$row['SUM(Bages)']."</br>";
                        
                            echo $Bp;
                           }
                          ?>
                  </div>
                  <div class="col-sm">
                     <div class="head"> B-</div>
                     <?php
                        $sql="select SUM(Bages) from doner where Type='B-'";  
                          $result=mysqli_query($conn,$sql);
                          while($row = mysqli_fetch_array($result)){
                            $Bn=$row['SUM(Bages)']."</br>";
                        
                            echo $Bn;
                           }
                          ?>
                  </div>
                  <div class="col-sm">
                     <div class="head"> AB+</div>
                     <?php
                        $sql="select SUM(Bages) from doner where Type='AB+'";  
                          $result=mysqli_query($conn,$sql);
                          while($row = mysqli_fetch_array($result)){
                            $ABp=$row['SUM(Bages)']."</br>";
                        
                            echo $ABp;
                           }
                          ?>
                  </div>
                  <div class="col-sm">
                     <div class="head"> AB-</div>
                     <?php
                        $sql="select SUM(Bages) from doner where Type='AB-'";  
                          $result=mysqli_query($conn,$sql);
                          while($row = mysqli_fetch_array($result)){
                            $ABn=$row['SUM(Bages)']."</br>";
                        
                            echo $ABn;
                           }
                          ?>
                  </div>
                  <div class="col-sm">
                     <div class="head"> O+</div>
                     <?php
                        $sql="select SUM(Bages) from doner where Type='O+'";  
                          $result=mysqli_query($conn,$sql);
                          while($row = mysqli_fetch_array($result)){
                            $Op=$row['SUM(Bages)']."</br>";
                        
                            echo $Op;
                           }
                          ?>
                  </div>
                  <div class="col-sm">
                     <div class="head"> O-</div>
                     <?php
                        $sql="select SUM(Bages) from doner where Type='O-'";  
                          $result=mysqli_query($conn,$sql);
                          while($row = mysqli_fetch_array($result)){
                            $On=$row['SUM(Bages)']."</br>";
                        
                            echo $On;
                           }
                          ?>
                  </div>
                  
               </div>
            
            </div>

            
                     


            

         </center>
   </body>
</html>