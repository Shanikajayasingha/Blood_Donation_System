<html>
<head>

   <!--Boostrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    
    <!--Custom Css-->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style5.css">
   

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

<form action="script6.php" method="post">
    <div class="form-group">
      
        <label>Date</label>
      
        <input type="date" class="form-control" name="date">
      
    </div>

    <div class="form-group">
      
        <label>Time</label>
      
        <input type="Time" class="form-control" name="time">
      
    </div>
    <div class="form-group">
     
        <label>Location</label>
      <input type="text" class="form-control" name="lo">
    </div>
    <div class="form-group">
     
        <label>Discription  </label>
      <input type="text" class="form-control" name="dis">
    </div>
    
   
      
     
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>



</div>
</div>
</body>
</html>

