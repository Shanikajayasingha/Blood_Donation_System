<html>
<head>

   <!--Boostrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    
    <!--Custom Css-->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="style3.css">
   

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
      <a href="storage.php" class="link"> Storage</a>
     <a href="camps.php" class="link" > Camps</a>
      
      <a href="login.php" class="link"> Create Accounts</a>
      <a href="index.php" class="link"> Log Out</a>
</NAV>


      </div>
    </div>
  </div>

     <!--End Grid-->
     <div class="main">

     <div class="type">Register_ADMIN_EMP</div>
      <form action="data2.php"  class="form-inline" method="post" class="form">
      
     
 





        <div class="form-group">
            <div class="row ">
                  <div class="col-5 col-sm-2 c"><label >Position</label> </div>
                  <div class="col-5 col-sm-3 c">
                    <input type="radio"  value="Administrator" class="form-check-input "  name="position">Administrator<br>
                    <input type="radio" value="Employee" class="form-check-input " name="position">Employee </div>
    
                    <div class="row "></div>
                    <div class="col-4 col-sm-2 c"><label >User Name</label> </div>
                    <div class="col-5 col-sm-3 c"><input type="text"  class="form-control" id="formGroupExampleInput" name="user" >  </div>

                    <div class="row "></div>
                    <div class="col-4 col-sm-2 c"><label >PassWord</label> </div>
                    <div class="col-5 col-sm-3 c"><input type="password"  class="form-control" id="formGroupExampleInput" name="password" >  </div>
                    <div class="row "></div>
                          <div class="col-4 col-sm-2 c"><label >ID</label> </div>
                          <div class="col-5 col-sm-3 c"><input type="text"  class="form-control" id="formGroupExampleInput" name="ID" >  </div>
    
                          <div class="row "></div>
                          <div class="col-5 col-sm-2 c"><label >Name</label> </div>
                          <div class="col-5 col-sm-3 c"><input type="text"  class="form-control" id="formGroupExampleInput" name="name" >  </div>
    
    
                          <div class="row "></div>
                          <div class="col-5 col-sm-2 c"><label >NIC</label> </div>
                          <div class="col-5 col-sm-3 c"><input type="text"  class="form-control" id="formGroupExampleInput" name="NIC" >  </div>
    
                          <div class="row "></div>
                          <div class="col-5 col-sm-2 c"><label >DOB</label> </div>
                          <div class="col-5 col-sm-3 c"><input type="date"  class="form-control" id="formGroupExampleInput" name="DOB" >  </div>
    
    
    
                          <div class="row "></div>
                          <div class="col-5 col-sm-2 c"><label >Gender</label> </div>
                          <div class="col-5 col-sm-3 c">
                            <input type="radio"  value="Male" class="form-check-input radio"  name="G">Male <br>
                            <input type="radio" value="FeMale" class="form-check-input radio" name="G">Female </div>
                            
                            <div class="row "></div>
                            <div class="col-5 col-sm-2 c"><label >Address</label> </div>
                            <div class="col-5 col-sm-3 c"><input type="text"  class="form-control" id="formGroupExampleInput" name="address" >  </div>
      
                            <div class="row "></div>
                            <div class="col-5 col-sm-2 c"><label >Contact Number</label> </div>
                            <div class="col-5 col-sm-3 c"><input type="text"  class="form-control" id="formGroupExampleInput" name="cn1" >  </div>
      
                            <div class="row "></div>
                            <div class="col-5 col-sm-2 c"><label >Contact Number</label> </div>
                            <div class="col-5 col-sm-3 c"><input type="text"  class="form-control" id="formGroupExampleInput" name="cn2" >  </div>
      
                            <div class="row "></div>
                            <div class="col-5 col-sm-2 c"><input type="submit"  class="btn btn-primary"value="Submit"> </div>
                         
      
                        </div>
   
    </form>
    


 
    
     </div>
     </body>
     </html>
        