



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
            <a href="donate.php" class="link"> Blood Donate</a>
            <a href="index.php" class="link"> Log Out</a>
              
               
            </div>
         </div>
      </div>

      
   <!----------------------------------------------------------------->
   <div class="type">Donate</div>
   <!--start form-->
   
   <form class="bb"  action="donatephp.php"  class="form-inline" method="post" class="form">
      <div class="form-group row">
        
      
      <label  class="col-sm-2 col-form-label">ID</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="ID">
        </div>
      </div>
      
      
    
      <div class="form-group row">
         <label class="col-sm-2 col-form-label">Last_Date_Of_Donate</label>
         
         <div class="col-sm-10">
           <input type="date" class="form-control" id="inputEmail3" placeholder="KG" name="date">
         </div>
       </div>

       <div class="form-group row">
         <label  class="col-sm-2 col-form-label">Bages</label>
         <div class="col-sm-10">
           <input type="text" class="form-control" id="inputEmail3" placeholder="1/2/3" name="bag">
         </div>
       </div>
       
       <div class="form-group row">
         <div class="col-sm-10">
         <button type="submit" class="btn btn-primary">Submit</button>
   
   
   </form>
   
   
   
   </div>

</body>
</html>