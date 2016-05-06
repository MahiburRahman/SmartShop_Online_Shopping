<!doctype html>
<meta charset="utf-8">

<html> 
 <head> 
    <title>Smartshop Home </title> 
	<link  rel="stylesheet" href="smartshop_files/styles/smartshop.css"/>
   </head>
   <body>
      
    
 <img src ="smartshop_files/images/top2.jpg" alt="smartshop picture" width=100% height=18%/>
  
  

	    <div id="cscroll">
		   <marquee  behavior="scroll"  scrollamount="3" direction="left">
		   Today is <?php echo date ("Y/m/d") ?>. Our services are open 24 hours! Follow us in Social Network sites. Be with us....:)
		   </marquee>
		</div>

		<img src ="smartshop_files/images/banner.jpg" alt="smartshop banner" width=100% height=18%/>
		<div id="menu">
	   	   HOME
		  <a href="smartshop_files/about.html"> ABOUT</a>
		  <a href="smartshop_files/contact.html"> CONTACT</a>
	      <a href="" > SERVICES </a >
		</div>
		
		
		
		
			<?php include "smartshop_files/smartlogin.php"; ?>
		
		
		
		
    	<div id="head">
		<h1 align="center"> Smart Shop. New World, New Thinking.</h1>
		
		<?php echo "Welcome $_SESSION[Username]"?>
		
		
		    
		
      <p> Smart Shop is the largest laptop Distributor in Bangladesh. Here, you will find
		  Apple, Hp, Fujitsu, Lenovo and Acer laptops. Smart Shop provides exciting products
		  and services to meet customers’ needs. 
		  </p>  
    </div>
	
	<div id="items" class="box-shadow">
	


	<h1 align="center"> <a id="apple"> <u> Brands </u> <a> </h1>
	<div style="float:left;  width:1%;">
   <ul> 
   <li ><a href="smartshop_files/apple.php"><font size="4" color="white"><b>Apple</b></font></a></li>  
   <li ><a href="smartshop_files/hp.php"><font size="4" color="white"><b>Hp</b></font></a></li>  
   <li ><a href="smartshop_files/fujitsu.php"><font size="4" color="white"><b>Fujitsu</b></font></a></li>   
   <li ><a href="smartshop_files/lenovo.php"><font size="4" color="white"><b>Lenovo</b></font></a></li>   
   <li ><a href="smartshop_files/acer.php"><font size="4" color="white"><b>Acer</b></font></a></li>    
   </ul>
   </div>
   
   </div>
   <!--lunch-->
 

   
   
	
	   <div id="arrival">
      <h1><a id="Special"><u>New Arrival</u></a> </h1>
      
     <p>
        <img src="smartshop_files/images/arrival.png" alt="" />
      </p>
      <h3>Macbook Pro 3.8</h3>
      
	    
	  
      
    </div>


	
<div id="order">
      <p>
        <img src="smartshop_files/images/bag.png" alt="bag" />
        <br />
        ORDER ONLINE
        with the 
        <a href="smartshop_files/form.php"><u><b>SMARTSHOP</b></u></a>
        <br />
        <span>
            FAST <br />
            
            TO YOUR DOOR <br />
        </span>
      </p>
      
	  <b>Find us on:</b> <a href="https://www.twitter.com/smartshop" title="@smartshop">
							<img src="smartshop_files/images/twitter.png" alt="twitter logo" width=30 height=30/>
						</a> 
						<a href="http://www.facebook.com/smartshop" title="Like smartshop">
							<img src="smartshop_files/images/facebook.png" alt="facebook logo" width=30 height=30/>
						</a> 
						
						
    </div>
  
   
   <div id="footer">
      &copy; 2014, SMARTSHOP
      <br />
      All trademarks and registered trademarks appearing on 
      this site are the property of their respective owners.
    </div>
	

	
</body>

	</html>