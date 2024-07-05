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

    <link rel="stylesheet" href="css/yourOrder.css">
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

<section class="your_order_section">
<div class="scroll">
<button class="btn1">1</button>
<button class="btn2">2</button>
<button class="btn3">3</button>
</div>

<div class="box">
<div class="title">
 <p>Your Order</p>
</div>



	 
<?php
$sql="select * from alsalam_orders";
            $statement=$connection->prepare($sql);
            $statement -> execute();
      foreach($statement->fetchall() as $row)           
                   {
echo"
<div class='order_item'>
<div class='item'>
     <p class='p1'>".$row['name']."</p>
      <p class='p2'>".$row['price']. ".00 $"."</p>
      <p class='p3'>".$row['description']."</p>
</div>



<div class='delete_btn'>
	 <a href='‏‏yourAlsalamOrder.php?id=".$row['id']."'>cancel</a>
      </div> </div>
";
				   
				   }
				   if(isset($_GET['id']))
				   {
					   $id = $_GET['id'];
					$sql = "DELETE FROM `alsalam_orders` WHERE `alsalam_orders`.`id` = '$id'";
					$statement = $connection->prepare($sql);
								  $statement->execute();
								  if($statement->rowcount()>0)
										{
											header("location:‏‏yourAlsalamOrder.php?action=2");
										}	
										else
										{
										}
				   }
				   
				   
?>

 
 <div class="title2">
 <p>Add Notes</p></div>
 <form method="post" class="form">
<div class="D_T_form">
					 
    <input type="text" name="D&T"  placeholder="Enter Note" autocomplete="on" >
</div>
</form>
</div>






<div class="box2">
<div class="title">
 <p>Add Tip</p>
</div>

<div class="items">
	 <div class="item1">
	 <div class="pragragh">
      <p class="p1">Totale Before Tax & Tip</p>
      <p class="p2">Tax Amount</p>
	  </div>
	   
	   <?php
	   $sum = 0;
	   $sql="select * from alsalam_orders";
            $statement=$connection->prepare($sql);
            $statement -> execute();
      foreach($statement->fetchall() as $row)           
                   {
	             $sum = $sum + $row['price'];
				   }
				   
				   echo"
	   <div class='sum'>
	  <p class='p2'>$$sum</p>
	  <p class='p2'>0</p>
      </div>";
				   ?>
	  </div>
	 
	  
	  
	  
	   <div class="item2">
	  <p class="p2">Tip Amount</p>
	   <form method="post" class="form">
<div class="D_T_form">
					 
    <input type="number" name="D&T"  placeholder="Enter Tip" autocomplete="on" >
</div>
</form>
      </div>
	  
	  
	   <div class="item3">
	 <div class="pragragh">
      <p class="p1">Totale with Tax & Tip</p>
	  </div>
	  
	   <div class="sum">
	  <p class="p2">0</p>
      </div>
      </div>
      </div>
	  
 </div>
 
 
 
 
 
 
 <div class="box3">
<div class="title">
 <p>Pay For Your Order</p>
</div>
<p>Patment**</p>

<div class="items">
	    <div class="item1">
	  <p class="p2">Card Details</p>
	   <form method="post" class="form">
<div class="D_T_form">
					 
    <input type="number" name="CardNumber"  placeholder="Card Number" autocomplete="on" >
	<input type="number" name="CVV"  placeholder="CVV" autocomplete="on" >
</div>
</form>
      </div>
 </div>
 
 <button class="D&T" name="D&T"><a href='orders.php'>Pay & Place Order</a></button>
 
</div>
</div>
  </section>
</body>
</html>
