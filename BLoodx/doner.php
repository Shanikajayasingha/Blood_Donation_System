<html>
   <head>
      <!--Boostrap-->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
     
      <!--Custom Css-->
      <link rel="stylesheet" href="style.css">


      <style>
.c,.w-100{
   margin: 10px;
}
         </style>
      
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
      <!--End Manu-->
      <!--Title-->
      <div class="type">Register_Doner</div>
      <form action="data.php"  class="form-inline" method="post" class="form">
      
      <div class="form-group">
      <div class="row ">
            <div class="col-5 col-sm-2 c"><label >NIC</label> </div>
            <div class="col-5 col-sm-2 c">
               
            <input type="text"  class="form-control" id="formGroupExampleInput" name="ID" >  </div>
    
            <div class="row"> </div>
            <div class="col-5 col-sm-2 c"><label >Name</label></div>
            <div class="col-5 col-sm-2 c">  <input type="text" class="form-control" id="formGroupExampleInput" name="Name"> </div>
            <div class="row"></div>
            <div class="col-5 col-sm-2 c"><label >Gender</label>    </div>
            <div class="col-6 col-sm-4 c">  
               <input type="radio"  value="Male" class="form-check-input"  name="G">Male
               <input type="radio" value="FeMale" class="form-check-input" name="G">Female
            </div>
            <div class="w-100 d-none d-md-block"></div>
            <div class="col-5 col-sm-2 c"> <label >DOB</label>   </div>
            <div class="col-5 col-sm-2 c"> <input type="date"  class="form-control" id="formGroupExampleInput"  name="B"> </div>
            
            <div class="w-100 d-none d-md-block"></div>
            <div class="col-5 col-sm-2 c"><label >Address</label></div>
            
            <div class="col-5 col-sm-2 c"><input type="text"  class="form-control" id="formGroupExampleInput" name="A"></div>
            <div class="w-100 d-none d-md-block"></div>
            <div class="col-5 col-sm-2 c">  <label >Telephone</label></div>
            
            <div class="col-5 col-sm-2 c"><input type="text"  class="form-control" id="formGroupExampleInput" name="TP1"></div>
            <div class="w-100 d-none d-md-block"></div>
            <div class="col-5 col-sm-2 c"> <label >Telephone2</label> </div>
            <div class="col-5 col-sm-2 c"> <input type="text" class="form-control" id="formGroupExampleInput" name="TP2"> </div>
            <div class="w-100 d-none d-md-block"></div>
           
            <div class="col-5 col-sm-2 c"> <label >Blood Type</label></div>
            <div class="col-5 col-sm-4 c"> 
               <input type="radio" value="A+" class="form-check-input" name="b">A+
               <input type="radio" value="A-" class="form-check-input" name="b">A-
               <input type="radio" value="B+"class="form-check-input" name="b">B+
               <input type="radio" value="B-" class="form-check-input"name="b">B-
               <input type="radio" value="AB+"class="form-check-input" name="b">AB+
               <input type="radio" value="AB-" class="form-check-input"name="b">AB-
               <input type="radio" value="O+"class="form-check-input" name="b">O+
               <input type="radio" value="O-"class="form-check-input" name="b">O-

               <div class="w-100 d-none d-md-block"></div>
            <div class="col-5 col-sm-2 c"></div>
               <input type="submit" value="SUBMIT"  class="btn btn-primary" name="submit">
            </div>
      </div>
         </div>
      </form>
   </body>
</html>