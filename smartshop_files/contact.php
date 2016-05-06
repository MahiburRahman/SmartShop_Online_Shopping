
<html>
  <head>
    <title>Thank you</title>
	<link rel="stylesheet"  href="styles/insert.css">
	
  </head>
  <body>
  
      <h1>Thank you! for your feedback</h1>

	  <div id="head">
	  
	  <?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("shop36", $con);

$sql="INSERT INTO tblcontact (Name, Email, Comments)
VALUES
('$_POST[name]','$_POST[Email]','$_POST[comments]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
 //echo "Name:       $_POST[name] </br>"; 
// echo "Email:         $_POST[Email]</br>";
 
mysql_close($con);
?>
</div>

  
  </body>
</html>