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

    <link rel="stylesheet" href="css/orders.css">
  </head>

<body>
  <header class="header">
                <nav class="main_nav">
                    <a class="logo"><img src="images/logo.png" alt=""></a>

                    <ul class="nav">
                    <li><a href="index.php" class="active">Food</a></li>
                    <li><a href="orders.php">Orders</a></li>
                    <li><a href="profile.php">Profile</a></li>
                    </ul>
                </nav>	
        </div>
  </header>

  <section class="orders_section">

  <p>Current and Upcoming orders</p>
  
  <?php
  $sql="select * from alsalam_orders";
            $statement=$connection->prepare($sql);
            $statement -> execute();
			if($statement->rowcount()>0)
			{
      foreach($statement->fetchall() as $row)           
                   {
	             echo'
				   <div class="current_order">
					<div class="past_imgg">
					<img src="images/add-to-cart.png">
					</div>

					<div class="past_time">
					<p>order name: '.$row['name'].'</p>
					<p>Pickup Time: '.$row['pickup_time'].'</p>
					</div>

					<div class="past_price">
					<p>'.$row['price'].'$ - '.$row['cafeteria_name'].'</p>
					</div>
					</div>
				 
				 ';
				   }
			}
			else
			{
				echo'<div class="current_orders">

  <div class="title1">
    <p>No List Items from alsalam</p>
  </div>

  <div class="imgg">
  <img src="images/logo.png">
  </div>

  <div class="title2">
    <p>No New Orders from alsalam...</p>
  </div>


  <div class="title3">
    <p>Find food and palce an order!</p>
  </div>
  </div>';
			}
  


/*************************************************/
$sql="select * from collage_coffee";
            $statement=$connection->prepare($sql);
            $statement -> execute();
			if($statement->rowcount()>0)
			{
      foreach($statement->fetchall() as $row)           
                   {
	             echo'
				   <div class="current_order">
					<div class="past_imgg">
					<img src="images/add-to-cart.png">
					</div>

					<div class="past_time">
					<p>order name: '.$row['name'].'</p>
					<p>Pickup Time: '.$row['pickup_time'].'</p>
					</div>

					<div class="past_price">
					<p>'.$row['price'].'$ - '.$row['cafeteria_name'].'</p>
					</div>
					</div>
				 
				 ';
				   }
			}
			else
			{
				echo'<div class="current_orders">

  <div class="title1">
    <p>No List Items from collage coffee</p>
  </div>

  <div class="imgg">
  <img src="images/logo.png">
  </div>

  <div class="title2">
    <p>No New Orders from collage coffee...</p>
  </div>


  <div class="title3">
    <p>Find food and palce an order!</p>
  </div>
  </div>';
			}
 


/*************************************************/
$sql="select * from alwasam_orders";
            $statement=$connection->prepare($sql);
            $statement -> execute();
			if($statement->rowcount()>0)
			{
      foreach($statement->fetchall() as $row)           
                   {
	             echo'
				   <div class="current_order">
					<div class="past_imgg">
					<img src="images/add-to-cart.png">
					</div>

					<div class="past_time">
					<p>order name: '.$row['name'].'</p>
					<p>Pickup Time: '.$row['pickup_time'].'</p>
					</div>

					<div class="past_price">
					<p>'.$row['price'].'$ - '.$row['cafeteria_name'].'</p>
					</div>
					</div>
				 
				 ';
				   }
			}
			else
			{
				echo'<div class="current_orders">

  <div class="title1">
    <p>No List Items from alwasam</p>
  </div>

  <div class="imgg">
  <img src="images/logo.png">
  </div>

  <div class="title2">
    <p>No New Orders from alwasam...</p>
  </div>


  <div class="title3">
    <p>Find food and palce an order!</p>
  </div>
  </div>';
			}
  ?>

<!--past_orders-->
<p>Past Orders</p>








  <?php
  $sql="select * from alsalam_orders where pickup_time < CURDATE() ";
  $statement=$connection->prepare($sql);
   $statement -> execute();
         foreach($statement->fetchall() as $date)           
                   {
		  echo'
		  <div class="past_orders">
		  <div class="order">
<div class="past_imgg">
<img src="images/logo.png">
</div>
<div class="past_time">
<p>Pickup Time: '.$date['pickup_time'].'</p>
</div>';
				 
	  
echo'
<div class="past_price">
<p>'.$date['cafeteria_name'].'</p>
</div>

</div>
</div>';  }

/******************************************************************/

  $sql="select * from alwasam_orders where pickup_time < CURDATE() ";
  $statement=$connection->prepare($sql);
   $statement -> execute();
         foreach($statement->fetchall() as $date)           
                   {
		  echo'
		  <div class="past_orders">
		  <div class="order">
<div class="past_imgg">
<img src="images/logo.png">
</div>
<div class="past_time">
<p>Pickup Time: '.$date['pickup_time'].'</p>
</div>';
				 
	  
echo'
<div class="past_price">
<p>'.$date['cafeteria_name'].'</p>
</div>

</div>
</div>';  }



/******************************************************************/

  $sql="select * from collage_coffee where pickup_time < CURDATE() ";
  $statement=$connection->prepare($sql);
   $statement -> execute();
         foreach($statement->fetchall() as $date)           
                   {
		  echo'
		  <div class="past_orders">
		  <div class="order">
<div class="past_imgg">
<img src="images/logo.png">
</div>
<div class="past_time">
<p>Pickup Time: '.$date['pickup_time'].'</p>
</div>';
				 
	  
echo'
<div class="past_price">
<p>'.$date['cafeteria_name'].'</p>
</div>

</div>
</div>';  }
	  ?>
  </section>
</body>
</html>
