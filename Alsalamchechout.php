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

    <link rel="stylesheet" href="css/checkout.css">
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

<section class="checkout_section">

<div class="scroll">
<button class="btn1">1</button>
<button class="btn2">2</button>
<button class="btn3">3</button>
</div>

<div class="box">
<div class="title">
 <p>Add Items To Your Order</p>
</div>

<div class="content">
    <div class="food">
	<div class="item">
      <p class="p1">كلوب ساندوتش</p>
      <p class="p2">7.00$</p>
      <p class="p3">ساندوتش بالدجاج</p>
	  </div>
	  
	    <?php  
	  echo"<div class='item_class'>
	  <form method='post'>
	  <input type='submit' name='food_item1' value='+'> </div>";
	  if(isset($_POST['food_item1']))
	  {
		  if(isset($_SESSION['date_time']))
		{
			$_date = $_SESSION['date_time'];
		}
		$sql = 'INSERT INTO alsalam_orders(name, price, description, pickup_time, cafeteria_name)  
                                  VALUES("كلوب ساندوتش"
								  ,"7.00"
								  ,"ساندوتش بالدجاج"
								  ,:_date
								  ,"كافتريا السلام")';
							      $statement = $connection->prepare($sql);
								  $statement->execute(array(
									':_date' => $_date));
								  if($statement->rowcount())
                                  {
									
									echo "<script>alert('تم اضافة كلوب ساندوتش الى طلبك');</script>";
									echo "<script>window.location.replace('Alsalamchechout.php')</script>";
							      }
	  }
	  ?>
 </div>
 
 
     <div class="food">
	 <div class="item">
      <p class="p1">بطاطس</p>
      <p class="p2">7.00$</p>
      <p class="p3">صحن بطاطس مقلية مع الصوص المفضل</p>
	  </div>
	  
	  <?php  
	  echo"<div class='item_class'>
	  <form method='post'>
	  <input type='submit' name='food_item2' value='+'> </div>";
	  if(isset($_POST['food_item2']))
	  {
		  if(isset($_SESSION['date_time']))
		{
			$_date = $_SESSION['date_time'];
		}
		$sql = 'INSERT INTO alsalam_orders(name, price, description, pickup_time, cafeteria_name)  
                                  VALUES("بطاطس"
								  ,"7.00"
								  ,"صحن بطاطس مقلية مع الصوص المفضل"
								  ,:_date
								  ,"كافتريا السلام")';
							      $statement = $connection->prepare($sql);
								  $statement->execute(array(
									':_date' => $_date));
								  if($statement->rowcount())
                                  {
									
									echo "<script>alert('تم اضافة بطاطس الى طلبك');</script>";
									echo "<script>window.location.replace('Alsalamchechout.php')</script>";
							      }
	  }
	  ?>
 </div>
 
 
     <div class="food">
	 <div class="item">
      <p class="p1">برجر دجاج</p>
      <p class="p2">10.00$</p>
      <p class="p3">خبز البرقر الطري مع قطعة البرجر وشرائح الطماطموالبصل والخس والصوص الخاص</p>
	  </div>
	  
	<?php  
	  echo"<div class='item_class'>
	  <form method='post'>
	  <input type='submit' name='food_item3' value='+'> </div>";
	  if(isset($_POST['food_item3']))
	  {
		  if(isset($_SESSION['date_time']))
		{
			$_date = $_SESSION['date_time'];
		}
		$sql = 'INSERT INTO alsalam_orders(name, price, description, pickup_time, cafeteria_name)  
                                  VALUES("برجر دجاج"
								  ,"10.00"
								  ,"خبز البرقر الطري مع قطعة البرجر وشرائح الطماطموالبصل والخس والصوص الخاص"
								  ,:_date
								  ,"كافتريا السلام")';
							      $statement = $connection->prepare($sql);
								  $statement->execute(array(
									':_date' => $_date));
								  if($statement->rowcount())
                                  {
									
									echo "<script>alert('تم اضافة برجر دجاج الى طلبك');</script>";
									echo "<script>window.location.replace('Alsalamchechout.php')</script>";
							      }
	  }
	  ?>
 </div>
 
 
 
    <div class="Drink">
	<div class="item">
      <p class="p1">ببسي</p>
      <p class="p2">2.00$</p>
 </div>
 
 
  <?php  
	  echo"<div class='item_class'>
	  <form method='post'>
	  <input type='submit' name='drink_item1' value='+'> </div>";
	  if(isset($_POST['drink_item1']))
	  {
		  if(isset($_SESSION['date_time']))
		{
			$_date = $_SESSION['date_time'];
		}
		$sql = 'INSERT INTO alsalam_orders(name, price, description, pickup_time, cafeteria_name)  
                                  VALUES("ببسي"
								  ,"2.00"
								  ,"ببسي"
								  ,:_date
								  ,"كافتريا السلام")';
							      $statement = $connection->prepare($sql);
								  $statement->execute(array(
									':_date' => $_date));
								  if($statement->rowcount())
                                  {
									
									echo "<script>alert('تم اضافة ببسي الى طلبك');</script>";
									echo "<script>window.location.replace('Alsalamchechout.php')</script>";
							      }
	  }
	  ?>
 </div>
 
 
     <div class="Drink">
	 <div class="item">
      <p class="p1">ماء</p>
      <p class="p2">1.00$</p>
 </div>
 
<?php  
	  echo"<div class='item_class'>
	  <form method='post'>
	  <input type='submit' name='drink_item2' value='+'> </div>";
	  if(isset($_POST['drink_item2']))
	  {
		  if(isset($_SESSION['date_time']))
		{
			$_date = $_SESSION['date_time'];
		}
		$sql = 'INSERT INTO alsalam_orders(name, price, description, pickup_time, cafeteria_name)  
                                  VALUES("ماء"
								  ,"2.00"
								  ,""
								  ,:_date
								  ,"كافتريا السلام")';
							      $statement = $connection->prepare($sql);
								  $statement->execute(array(
									':_date' => $_date));
								  if($statement->rowcount())
                                  {
									
									echo "<script>alert('تم اضافة ماء الى طلبك');</script>";
									echo "<script>window.location.replace('Alsalamchechout.php')</script>";
							      }
	  }
	  ?>
 </div>
 
 
   <div class="Drink">
   <div class="item">
      <p class="p1">حمضيات</p>
      <p class="p2">2.00$</p>
 </div>
 
 
<?php  
	  echo"<div class='item_class'>
	  <form method='post'>
	  <input type='submit' name='drink_item3' value='+'> </div>";
	  if(isset($_POST['drink_item3']))
	  {
		  if(isset($_SESSION['date_time']))
		{
			$_date = $_SESSION['date_time'];
		}
		$sql = 'INSERT INTO alsalam_orders(name, price, description, pickup_time, cafeteria_name)  
                                  VALUES("حمضيات"
								  ,"2.00"
								  ,"حمضيات"
								  ,:_date
								  ,"كافتريا السلام")';
							      $statement = $connection->prepare($sql);
								  $statement->execute(array(
									':_date' => $_date));
								  if($statement->rowcount())
                                  {
									
									echo "<script>alert('تم اضافة حمضيات الى طلبك');</script>";
									echo "<script>window.location.replace('Alsalamchechout.php')</script>";
							      }
	  }
	  ?>
 </div>
</div>  <!--content-->
<button><a href="‏‏yourAlsalamOrder.php">Checkout</a></button>
</div> <!--box-->

  </section>
  
</body>
</html>
