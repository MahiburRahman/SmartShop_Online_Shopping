<?php include "base.php"; ?> 
<?php include "smartlogin.php"; ?> 
<html>
  <head>
    <title>Thank you</title>
	<link rel="stylesheet"  href="styles/insert.css">
  </head>
  <body>
  
      <h1>Thank you! for your order. We have received your order!</h1>

	  <div id="head">
	  
<?php
session_start();
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("shop36", $con);
$laptop = $_POST["laptop"];
//$username=$_SESSION['Username'];
//$ssql = mysql_query("SELECT * FROM tblcustomer WHERE Username = $_SESSION['Username']")
//$row = mysql_fetch_array($ssql);
//$users = $row['Username'];



$sql="INSERT INTO tblcustomer_order (Name, Email, laptop, Pro_id, Num_of_pro, Bill, Bikash_mob, Transaction_ID, Comments, Date, Time)
VALUES
('$_POST['users']','$_POST[Email]','$laptop','$_POST[Pro_ID]','$_POST[nop]','$_POST[bill]','$_POST[bmobile]','$_POST[trxID]','$_POST[comments]',CURDATE(), CURTIME())";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
// echo "Name:       $_POST[name] </br>"; 
 //echo "Email:         $_POST[Email]</br>";
// echo "Mobile:     $_POST[mobile]</br>";
 echo "Product id:         $_POST[Pro_ID]</br>";
 echo "Brand Type: $laptop</br>";
mysql_close($con);
?>
<center><a href="../index.php"> <img src="images/home.png" width=50px height=50px></a></center>

</div>



  
  </body>
</html>