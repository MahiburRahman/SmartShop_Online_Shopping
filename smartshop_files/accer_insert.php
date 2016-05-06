
<html>
  <head>
    <title>Thank you</title>
	<link rel="stylesheet"  href="styles/insert.css">
  </head>
  <body>
  
      <h1>Thank you! for your order. We have received your order!</h1>

	  <div id="head">
	  
	  <?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("shop36", $con);

$uname=$_POST['nm'];
$mail=$_POST['ml'];
$laptop=$_POST['lpt'];
/*$rk=rand(0,100);
$r=$_SESSION['risk'];
$_SESSION['risk']=$_SESSION['risk'].$rk;
$ri=$_SESSION['risk'];
echo $_SESSION['risk'];*/
/*$sql="INSERT INTO tblcustomer_order (Name, Email, laptop, Pro_id, Bill, Bikash_mob, Transaction_ID, Comments, Date, Time)
VALUES
('$uname','$mail','$laptop','$_POST[Pro_ID]','$_POST[bill]','$_POST[bmobile]','$_POST[trxID]','$_POST[comments]',CURDATE(), CURTIME())";
*/
$sql="update tblcustomer_order set Bikash_mob='$_POST[bmobile]',Transaction_ID='$_POST[trxID]' where name='$uname' and email='$mail'";
//$qu="update tblcustomer_order set risk='$ri' where risk='$r'";
mysql_query($qu);
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
 echo "Name:       $_POST[nm] </br>"; 
 echo "Email:         $_POST[ml]</br>";
 echo "Mobile:     $_POST[bmobile]</br>";
 echo "Brand Type: $_POST[lpt]</br>";
mysql_close($con);
?>
<center><a href="../index.php"> <img src="images/home.png" width=50px height=50px></a></center>

</div>



  
  </body>
</html>