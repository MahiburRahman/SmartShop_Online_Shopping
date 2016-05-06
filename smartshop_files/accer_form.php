<?php include "base.php"; ?> 

<!doctype html>
<meta charset="utf-8">

<html>
<head>  

<title>Customer's Order</title>
<link  rel="stylesheet" href="styles/smartshop.css"/>
<link rel="stylesheet"  href="styles/form.css"/>
	<!--<script src="myForm.js"></script>-->

	
	
</head>  
<body>  
<div id="main">




<?php
if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username']))
{
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$price=$_POST['price'];
//echo $name;
}

$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("shop36", $con);

$uname=$_SESSION['Username'];
$mail=$_SESSION['Email'];
$laptop="accer";
//$ident=$_SESSION['risk'];
//echo $ident;
$sql="INSERT INTO tblcustomer_order (Name, Email, laptop, Pro_id, Bill, Bikash_mob, Transaction_ID, Date, Time)
VALUES
('$uname','$mail','$laptop','$name','$price','$_POST[bmobile]','$_POST[trxID]', CURDATE(), CURTIME())";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
 echo "success</br>"; 
mysql_close($con);
?>
	

	 <h1 align="center"> Welcome to Smart Shop"<b><?php echo "$_SESSION[Username]"?></b>"!!! </h1>
	 <p align="center"><b>Fill the form below and give your order.</b></p> <a  href="../index.php"> <img  align="right" src="images/home.png" title="Back To Home" style="margin-right:50px" width=50px height=50px></a><br><br>
     <!--form method="post" action="logout.php" name="loginform" id="loginform">
	 <!--input type="submit" name="login" id="login" value="Logout" />
     </form-->
	  

        <form name="myForm" action="accer_insert.php" onsubmit ="return validateForm()" method="post">
      <table>
	  
	

	
	     
          <!--<th>Product&nbspId:</th>
		  <td><input type="text" name="Pro_ID" id="Pro_ID"  maxlength="11"  title="You can find the Product Id by hovering the cursor over products name, Use (.) or (,) to seperate multiple products!!"  value="" /></td>
           -->
	  </tr>

               
		  
		  
		  <th><h2> Payment: </h2></th>
		  <td><br><br><br><b>We accept payment via <em>"bKash"</em>.Please fill required sectors below to confirm your order :-</b><br><br>
                  <b><big>Our account no:</big></b> <big><big><big>01765349536</big></big></big>. <br><br>		  
                  Mobile_No (Which you used to pay):<br>
                    <input type="text" name="bmobile" id="bmobile"  style="width:300px;" value="" /><br><br>
                  bKash Transaction ID (TrxID):<br>
                    <input type="text" name="trxID" id="trxID" style="width:300px;" value="" /><br><br>
					<!-- Paid Amount(BDT):<br>
					    <input type="text" name="bill" id="bill" style="width:300px;" value="" /><br><br>
						-->
					
					   
						
						<input type="hidden" name="lpt" id="nop" style="width:300px;" value="accer" />
						<input type="hidden" name="nm" id="nop" style="width:300px;" value="<?php echo $_SESSION['Username'];?>" />
						<input type="hidden" name="ml" id="nop" style="width:300px;" value="<?php echo $_SESSION['Email'];?>" />
                 
				  
				  </td>
				  
				  
				  
       
            

          <tr>
	    <th></th>
            <td>
              <input type="submit" value="Confirm Order"  class="fbutton" onclick= "return validateForm()"  />
            </td>
          </tr>
		  
		  
        </table>
		
		
		
      </form>

	  
	  



 <a  href="../index.php"> <img align="right" src="images/home.png" title="Back To Home" width=50px height=50px></a><br><br>

<div id="footer">
      &copy; 2014, SMARTSHOP
      <br />
      All trademarks and registered trademarks appearing on 
      this site are the property of their respective owners.
    </div>

     <?php
}
elseif(!empty($_POST['username']) && !empty($_POST['password']))
{
	$username = mysql_real_escape_string($_POST['username']);
    $password = mysql_real_escape_string($_POST['password']);
    
	$checklogin = mysql_query("SELECT * FROM tblcustomer WHERE Username = '".$username."' AND Email = '".$password."'");
    
    if(mysql_num_rows($checklogin) == 1)
    {
    	$row = mysql_fetch_array($checklogin);
        $email = $row['Email'];
        
        $_SESSION['Username'] = $username;
        $_SESSION['Email'] = $password;
		//$ran=rand(0,100);
        //$_SESSION['risk'] =$username.$ran;
		$_SESSION['LoggedIn']=1;
        
    	echo "<h1>Success</h1>";
        echo "<p>We are now redirecting you to the member area.</p>";
        echo "<meta http-equiv='refresh' content='=2;form.php' />";
    }
    else
    {
    	echo "<h1>Error</h1>";
        echo "<p>Sorry, your account could not be found. Please <a href=\"form.php\">click here to try again</a>.</p>";
    }
}
else
{
	?>
	
	<div id="smartlogin">
    
   <h1>Member Login</h1>
    
   <p>Please either login below, or <a href="register.php">click here to register</a>.</p>
    
	<form method="post" action="accer_form.php" name="loginform" id="loginform">
	<fieldset>
		<label for="username">Username:</label><input type="text" name="username" id="username" /><br><br>
		<label for="password">Email:&nbsp</label><input type="password" name="password" id="password" /><br><br>
		<input type="submit" name="login" id="login" value="Login"  class="button" onclick="parent.location='accer_form.php'"/>
	</fieldset>
	</form>
	</div>
    
   <?php
}
?>

</div>



</body>
</html>
