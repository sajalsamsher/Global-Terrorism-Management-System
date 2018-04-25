<?php

include "a.php";


 if(isset($_POST['a'])){
	
	 $email=$_POST['email'];
	 $i=0;
	 $pass=$_POST['pass'];
	 
	 
	 $stid = oci_parse($conn, "select password from reguser where email='$email'");
oci_execute($stid);
$row=oci_fetch_array($stid);
echo $row[0];
if(oci_num_rows($stid)==0){
	
	echo "<script>alert('user does not exist')</script>";
  		header('Refresh:0;url=signin.php');
		exit;
}
	
if($pass==$row[0]){
	echo $row[0];
	
	 header('Location:index1.php');
}
else{
	echo "<script>alert('Wrong password')</script>";
  		header('Refresh:0;url=signin.php');
	
}


}
?>
<html><body>

<link rel="stylesheet" type="text/css" href="mystyle.css">
 <br><br><br><br><br><br>
<div class="testbox1">
  <h1>Log In</h1>
   <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
  
  <input type="text" name="email" id="name" placeholder="Enter your email id" required/>
  
  <input type="password" name="pass" id="name" placeholder="Password" required/>
  <button type="submit"class="button" name="a" align="center">Log in</button>
  <br><a href="signup.php" align="right">Create an account</a>
   
  </form>
  
 </div>

</body>
</html>