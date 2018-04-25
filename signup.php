<?php

include "a.php";


 if(isset($_POST['a'])){
	 $email=$_POST['email'];
	 $name=$_POST['name'];
	 $pass=$_POST['pass'];
	 $gender=$_POST['gender'];
	 
	 $stid = oci_parse($conn, "insert into reguser values('$email','$name','$pass','$gender')");
oci_execute($stid);
 header('Location:index.php');
 }
?>
<html>
<body>
<!--
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
<link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
-->
<link rel="stylesheet" type="text/css" href="mystyle.css">
<br><br><br><br>
<div class="testbox">
  <h1>Registration</h1>
  

  <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
      
  
  <input type="text" name="email" placeholder="Email" required/>
  
  <input type="text" name="name" placeholder="Name" required/>
  
  <input type="password" name="pass"  placeholder="Password" required/>
  <div class="gender">
    <input type="radio" value="male" id="male" name="gender" checked/>
    <label for="male" class="radio" chec>Male</label>
    <input type="radio" value="female" id="female" name="gender" />
    <label for="female" class="radio">Female</label>
   </div> 
   <button type="submit"class="button" name="a" align="center">Register</button>
  </form>
</div>
</body>
</html>