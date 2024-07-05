<?php
require("connection.php");    
session_start();
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>مستعجل</title>

    <link rel="stylesheet" href="css/pickupTime.css">
  </head>

<body>
  <header class="header">
                <nav class="main_nav">
                    <a class="logo"><img src="images/logo.png" alt=""></a>

                    <ul class="nav">
                    <li><a href="index.php">Food</a></li>
                    <li><a href="orders.php">Orders</a></li>
                    <li><a href="profile.php">Profile</a></li>
                    </ul>
                </nav>	
        </div>
  </header>

<section class="pickupD_T_section">
<div class="scroll">
<button class="btn1">1</button>
<button class="btn2">2</button>
<button class="btn2">3</button>
</div>

<div class="box">
<div class="title">
 <p>Set Pick Up Time</p>
</div>

<div class="content">
 <p>pick Up Location</p>
 <h3>Mackkah Technical Collage for Girls</h3>
 
 
  <p>كافتريا السلام</p>
 <h3>Daily: Today's Hours 8:00 am to 2:00 pm</h3>
 
 
 <p>Date & Time</p>
 <form method="post" class="form">
<div class="D_T_form">
					 
                      <input type="datetime-local" name="Date_Time"  placeholder="Enter Date & Time" autocomplete="on" >
					  <button class="D&T" name="PickUp" type="submit">Set Pick Up Time</button>
</div>
</form>

<?php
  if(isset($_POST['PickUp']))
	{
		  $date_time =$_POST['Date_Time'];
		  
		  if (empty($date_time))
        echo "<script>alert('Set Pick Up Time');</script>";
	
	    else
	    {
			$_SESSION['date_time']=$_POST['Date_Time'];
			 echo "<script>window.location.replace('Collagechechout.php')</script>";
		}
   }
?>
</div>
</div>
  </section>
</body>
</html>
