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
		<div class="row g1    ">
		<div class="col">
			<div class="p-0" >
				<img src="logo.png">
			</div>
		</div>
		<div class="col  link_col">
			<div class="links px-0 p-5">
			<<div class="links px-0 p-5">
            <nav>
     <a href="camps.php" class="link" > Camps</a>
      <a href="storage.php" class="link"> Storage</a>
      <a href="login.php" class="link"> Create Accounts</a>
      <a href="index.php" class="link"> Log Out </a>
</NAV>

    </div>
  </div>
</div>
        
	 <body>
<form action="data3.php" method="post">
        <input type="text" placeholder="name" name="name">
        <input type="text" placeholder="id" name="id">
        <input type="text" placeholder="Address" name="address">
        <input type="text" placeholder="phone" name="tp">

        <input type="date" placeholder="dob" name="dob">

        <input type="radio" value="Male"  name="gen">
        <input type="radio"  value="Female"  name="gen">


        <select name="type" >
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>

            <option value="o+">O+</option>
            <option value="o-">O-</option>
        
        
        </select>
		


<input type="text" placeholder="Amount" name="amount">
<input type="text" placeholder="Cause" name="cause">


<input type="submit" placeholder="Amount" value="submit" name="submit">





    
</form>
    </div>
	
</body>
</html>