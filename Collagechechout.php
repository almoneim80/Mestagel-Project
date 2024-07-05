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
      <p class="p1">ايس تي</p>
      <p class="p2">8.00$</p>
      <p class="p3"></p>
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
		$sql = 'INSERT INTO collage_coffee(name, price, description, pickup_time, cafeteria_name)  
                                  VALUES("ايس تي"
								  ,"8.00"
								  ,""
								  ,:_date
								  ,"كافتريا الكلية")';
							      $statement = $connection->prepare($sql);
								  $statement->execute(array(
									':_date' => $_date));
								  if($statement->rowcount())
                                  {
									
									echo "<script>alert('تم اضافة ايس تي الى طلبك');</script>";
									echo "<script>window.location.replace('Collagechechout.php')</script>";
							      }
	  }
	  ?>
 </div>
 
 
     <div class="food">
	 <div class="item">
      <p class="p1">سيزر</p>
      <p class="p2">4.00$</p>
      <p class="p3"></p>
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
		$sql = 'INSERT INTO collage_coffee(name, price, description, pickup_time, cafeteria_name)  
                                  VALUES("سيزر"
								  ,"4.00"
								  ,""
								  ,:_date
								  ,"كافتريا الكلية")';
							      $statement = $connection->prepare($sql);
								  $statement->execute(array(
									':_date' => $_date));
								  if($statement->rowcount())
                                  {
									
									echo "<script>alert('تم اضافة سيزرالى طلبك');</script>";
									echo "<script>window.location.replace('Collagechechout.php')</script>";
							      }
	  }
	  ?>
 </div>
 
 
     <div class="food">
	 <div class="item">
      <p class="p1">سبانش لاتيه</p>
      <p class="p2">7.00$</p>
      <p class="p3"></p>
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
		$sql = 'INSERT INTO collage_coffee(name, price, description, pickup_time, cafeteria_name)  
                                  VALUES("سبانش لاتيه"
								  ,"7.00"
								  ,""
								  ,:_date
								  ,"كافتريا الكلية")';
							      $statement = $connection->prepare($sql);
								  $statement->execute(array(
									':_date' => $_date));
								  if($statement->rowcount())
                                  {
									
									echo "<script>alert('تم اضافة سبانش لاتيه الى طلبك');</script>";
									echo "<script>window.location.replace('Collagechechout.php')</script>";
							      }
	  }
	  ?>
 </div>
 
 
     <div class="food">
	 <div class="item">
      <p class="p1">قهوة عربية</p>
      <p class="p2">2.00$</p>
      <p class="p3"></p>
	  </div>
	  
	  
	<?php  
	  echo"<div class='item_class'>
	  <form method='post'>
	  <input type='submit' name='food_item4' value='+'> </div>";
	  if(isset($_POST['food_item4']))
	  {
		  if(isset($_SESSION['date_time']))
		{
			$_date = $_SESSION['date_time'];
		}
		$sql = 'INSERT INTO collage_coffee(name, price, description, pickup_time, cafeteria_name)  
                                  VALUES("قهوة عربية"
								  ,"2.00"
								  ,""
								  ,:_date
								  ,"كافتريا الكلية")';
							      $statement = $connection->prepare($sql);
								  $statement->execute(array(
									':_date' => $_date));
								  if($statement->rowcount())
                                  {
									
									echo "<script>alert('تم اضافة قهوة عربية الى طلبك');</script>";
									echo "<script>window.location.replace('Collagechechout.php')</script>";
							      }
	  }
	  ?>
 </div>
 
     <div class="food">
	 <div class="item">
      <p class="p1">كورتادو</p>
      <p class="p2">5.00$</p>
      <p class="p3"></p>
	  </div>
	  
	  
	<?php  
	  echo"<div class='item_class'>
	  <form method='post'>
	  <input type='submit' name='food_item5' value='+'> </div>";
	  if(isset($_POST['food_item5']))
	  {
		  if(isset($_SESSION['date_time']))
		{
			$_date = $_SESSION['date_time'];
		}
		$sql = 'INSERT INTO collage_coffee(name, price, description, pickup_time, cafeteria_name)  
                                  VALUES("كورتادو"
								  ,"5.00"
								  ,""
								  ,:_date
								  ,"كافتريا الكلية")';
							      $statement = $connection->prepare($sql);
								  $statement->execute(array(
									':_date' => $_date));
								  if($statement->rowcount())
                                  {
									
									echo "<script>alert('تم اضافة كورتادو الى طلبك');</script>";
									echo "<script>window.location.replace('Collagechechout.php')</script>";
							      }
	  }
	  ?>
 </div>
 
 
 
 
 
 
 
 
 
    <div class="Drink">
	<div class="item">
      <p class="p1">لاتيه</p>
      <p class="p2">6.00$</p>
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
		$sql = 'INSERT INTO collage_coffee(name, price, description, pickup_time, cafeteria_name)  
                                  VALUES("لاتيه"
								  ,"6.00"
								  ,""
								  ,:_date
								  ,"كافتريا الكلية")';
							      $statement = $connection->prepare($sql);
								  $statement->execute(array(
									':_date' => $_date));
								  if($statement->rowcount())
                                  {
									
									echo "<script>alert('تم اضافة لاتيه الى طلبك');</script>";
									echo "<script>window.location.replace('Collagechechout.php')</script>";
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
		$sql = 'INSERT INTO collage_coffee(name, price, description, pickup_time, cafeteria_name)  
                                  VALUES("ماء"
								  ,"1.00"
								  ,""
								  ,:_date
								  ,"كافتريا الكلية")';
							      $statement = $connection->prepare($sql);
								  $statement->execute(array(
									':_date' => $_date));
								  if($statement->rowcount())
                                  {
									
									echo "<script>alert('تم اضافة ماء الى طلبك');</script>";
									echo "<script>window.location.replace('Collagechechout.php')</script>";
							      }
	  }
	  ?>
 </div>

</div>  <!--content-->
<button><a href="‏‏yourCollageOrder.php">Checkout</a></button>
</div> <!--box-->

  </section>
  
</body>
</html>
