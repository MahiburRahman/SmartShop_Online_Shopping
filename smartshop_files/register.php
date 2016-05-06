<?php include "base.php"; ?>
<!doctype html>
<meta charset="utf-8">

<html> 
 <head> 
    <title> smart shop </title> 
	<link  rel="stylesheet" href="styles/register.css"/>
	<link  rel="stylesheet" href="styles/smartshop.css"/>
   </head>
   <body>
   
    
 <img src ="images/top2.jpg" alt="smart picture" width=100% height=18%>
  
  


		<div id="menu">
	   	  <a href="../index.php"> HOME</a>
		  <a href="about.html"> ABOUT</a>
		  <a href="contact.html"> CONTACT</a>
	      <a href="" > SERVICE </a >
		</div>
		
<div id="register">
<?php
if(!empty($_POST['username']) && !empty($_POST['password']))
{
	$username = mysql_real_escape_string($_POST['username']);
    $password = md5(mysql_real_escape_string($_POST['password']));
    $email = mysql_real_escape_string($_POST['email']);
    
	 $checkusername = mysql_query("SELECT * FROM tblcustomer WHERE Username = '".$username."'");
     
     if(mysql_num_rows($checkusername) == 1)
     {
     	echo "<h1>Error</h1>";
        echo "<p>Sorry, that username is taken. Please go back and try again.</p>";
     }
     else
     {
     	$registerquery = mysql_query("INSERT INTO tblcustomer (Username, Password, Email) VALUES('".$username."', '".$password."', '".$email."')");
        if($registerquery)
        {
        	echo "<h1>Success</h1>";
        	echo "<p>Your account was successfully created. Please <a href=\"../index.php\">click here to login</a>.</p>";
        }
        else
        {
     		echo "<h1>Error</h1>";
        	echo "<p>Sorry, your registration failed. Please go back and try again.</p>";    
        }    	
     }
}
else
{
	?>
    
   <h1 align="center">Register</h1>
    
   <p align="center">Please enter your details below to register.</p>
    
	<form method="post" action="register.php" name="registerform" id="registerform">
	<fieldset>
		<label for="username">Username:</label><input type="text" name="username" style="width:260px;" id="username" /><br><br>
		<label for="password">Password:</label><input type="password" name="password"  style="width:260px;" id="password" /><br><br>
        <label for="email">Email:</label><input type="text" name="email" style="width:260px;" id="email" /><br><br>
		<input type="submit" name="register" id="reg" value="Register" class="button" />
	</fieldset>
	</form>
    
    <?php
}
?>

</div>
</body>
</html>
