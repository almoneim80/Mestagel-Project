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
      <p class="p1">كروسان</p>
      <p class="p2">5.00$</p>
      <p class="p3">كروسان بالجبنة الصفراء</p>
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
		$sql = 'INSERT INTO alwasam_orders(name, price, description, pickup_time, cafeteria_name)  
                                  VALUES("كروسان"
								  ,"5.00"
								  ,"كروسان بالجبنة الصفراء"
								  ,:_date
								  ,"كافتريا الوسام")';
							      $statement = $connection->prepare($sql);
								  $statement->execute(array(
									':_date' => $_date));
								  if($statement->rowcount())
                                  {
									
									echo "<script>alert('تم اضافة كروسان بالجبنة الصفراء الى طلبك');</script>";
									echo "<script>window.location.replace('Alwasamchechout.php')</script>";
							      }
	  }
	  ?>
 </div>
 
 
     <div class="food">
	 <div class="item">
      <p class="p1">كروسان</p>
      <p class="p2">5.00$</p>
      <p class="p3">كروسان بالجبنة البيضاء</p>
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
		$sql = 'INSERT INTO alwasam_orders(name, price, description, pickup_time, cafeteria_name)  
                                  VALUES("كروسان"
								  ,"5.00"
								  ,"كروسان بالجبنة البيضاء"
								  ,:_date
								  ,"كافتريا الوسام")';
							      $statement = $connection->prepare($sql);
								  $statement->execute(array(
									':_date' => $_date));
								  if($statement->rowcount())
                                  {
									
									echo "<script>alert('تم اضافة كروسان بالجبنة البيضاء الى طلبك');</script>";
									echo "<script>window.location.replace('Alwasamchechout.php')</script>";
							      }
	  }
	  ?>
 </div>
 
 
     <div class="food">
	 <div class="item">
      <p class="p1">بيتزا معجنات</p>
      <p class="p2">5.00$</p>
      <p class="p3">description</p>
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
		$sql = 'INSERT INTO alwasam_orders(name, price, description, pickup_time, cafeteria_name)  
                                  VALUES("بيتزا معجنات"
								  ,"5.00"
								  ,"بيتزا معجنات"
								  ,:_date
								  ,"كافتريا الوسام")';
							      $statement = $connection->prepare($sql);
								  $statement->execute(array(
									':_date' => $_date));
								  if($statement->rowcount())
                                  {
									
									echo "<script>alert('تم اضافة بيتزا معجنات الى طلبك');</script>";
									echo "<script>window.location.replace('Alwasamchechout.php')</script>";
							      }
	  }
	  ?>
 </div>
 
 
     <div class="food">
	 <div class="item">
      <p class="p1">ساندوتش كودو</p>
      <p class="p2">7.00$</p>
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
		$sql = 'INSERT INTO alwasam_orders(name, price, description, pickup_time, cafeteria_name)  
                                  VALUES("ساندوتش كودو"
								  ,"7.00"
								  ,"ساندوتش كودو"
								  ,:_date
								  ,"كافتريا الوسام")';
							      $statement = $connection->prepare($sql);
								  $statement->execute(array(
									':_date' => $_date));
								  if($statement->rowcount())
                                  {
									
									echo "<script>alert('تم اضافة ساندوتش كودو الى طلبك');</script>";
									echo "<script>window.location.replace('Alwasamchechout.php')</script>";
							      }
	  }
	  ?>
 </div>
 
     <div class="food">
	 <div class="item">
      <p class="p1">كلوب ساندوتش</p>
      <p class="p2">7.00$</p>
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
		$sql = 'INSERT INTO alwasam_orders(name, price, description, pickup_time, cafeteria_name)  
                                  VALUES("كلوب ساندوتش"
								  ,"7.00"
								  ,"كلوب ساندوتش"
								  ,:_date
								  ,"كافتريا الوسام")';
							      $statement = $connection->prepare($sql);
								  $statement->execute(array(
									':_date' => $_date));
								  if($statement->rowcount())
                                  {
									
									echo "<script>alert('تم اضافة كلوب ساندوتش الى طلبك');</script>";
									echo "<script>window.location.replace('Alwasamchechout.php')</script>";
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
		$sql = 'INSERT INTO alwasam_orders(name, price, description, pickup_time, cafeteria_name)  
                                  VALUES("ببسي"
								  ,"2.00"
								  ,"ببسي"
								  ,:_date
								  ,"كافتريا الوسام")';
							      $statement = $connection->prepare($sql);
								  $statement->execute(array(
									':_date' => $_date));
								  if($statement->rowcount())
                                  {
									
									echo "<script>alert('تم اضافة ببسي الى طلبك');</script>";
									echo "<script>window.location.replace('Alwasamchechout.php')</script>";
							      }
	  }
	  ?>
 </div>
 
 
     <div class="Drink">
	 <div class="item">
      <p class="p1">شاي</p>
      <p class="p2">2.00$</p>
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
		$sql = 'INSERT INTO alwasam_orders(name, price, description, pickup_time, cafeteria_name)  
                                  VALUES("شاي"
								  ,"2.00"
								  ,"شاي"
								  ,:_date
								  ,"كافتريا الوسام")';
							      $statement = $connection->prepare($sql);
								  $statement->execute(array(
									':_date' => $_date));
								  if($statement->rowcount())
                                  {
									
									echo "<script>alert('تم اضافة شاي الى طلبك');</script>";
									echo "<script>window.location.replace('Alwasamchechout.php')</script>";
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
		$sql = 'INSERT INTO alwasam_orders(name, price, description, pickup_time, cafeteria_name)  
                                  VALUES("حمضيات"
								  ,"2.00"
								  ,"حمضيات"
								  ,:_date
								  ,"كافتريا الوسام")';
							      $statement = $connection->prepare($sql);
								  $statement->execute(array(
									':_date' => $_date));
								  if($statement->rowcount())
                                  {
									
									echo "<script>alert('تم اضافة حمضيات الى طلبك');</script>";
									echo "<script>window.location.replace('Alwasamchechout.php')</script>";
							      }
	  }
	  ?>
 </div>
 
    <div class="Drink">
	<div class="item">
      <p class="p1">عصير ربيع برتقال</p>
      <p class="p2">2.00$</p>
 </div>
 
<?php  
	  echo"<div class='item_class'>
	  <form method='post'>
	  <input type='submit' name='drink_item4' value='+'> </div>";
	  if(isset($_POST['drink_item4']))
	  {
		  if(isset($_SESSION['date_time']))
		{
			$_date = $_SESSION['date_time'];
		}
		$sql = 'INSERT INTO alwasam_orders(name, price, description, pickup_time, cafeteria_name)  
                                  VALUES("عصير ربيع برتقال"
								  ,"2.00"
								  ,"عصير ربيع برتقال"
								  ,:_date
								  ,"كافتريا الوسام")';
							      $statement = $connection->prepare($sql);
								  $statement->execute(array(
									':_date' => $_date));
								  if($statement->rowcount())
                                  {
									
									echo "<script>alert('تم اضافة عصير ربيع برتقال الى طلبك');</script>";
									echo "<script>window.location.replace('Alwasamchechout.php')</script>";
							      }
	  }
	  ?>
 </div>
 
     <div class="Drink">
	 <div class="item">
      <p class="p1">عصير ربيع تفاح</p>
      <p class="p2">2.00$</p>
 </div>
 
 
<?php  
	  echo"<div class='item_class'>
	  <form method='post'>
	  <input type='submit' name='drink_item5' value='+'> </div>";
	  if(isset($_POST['drink_item5']))
	  {
		  if(isset($_SESSION['date_time']))
		{
			$_date = $_SESSION['date_time'];
		}
		$sql = 'INSERT INTO alwasam_orders(name, price, description, pickup_time, cafeteria_name)  
                                  VALUES("عصير ربيع تفاح"
								  ,"2.00"
								  ,"عصير ربيع تفاح"
								  ,:_date
								  ,"كافتريا الوسام")';
							      $statement = $connection->prepare($sql);
								  $statement->execute(array(
									':_date' => $_date));
								  if($statement->rowcount())
                                  {
									
									echo "<script>alert('تم اضافة عصير ربيع تفاح الى طلبك');</script>";
									echo "<script>window.location.replace('Alwasamchechout.php')</script>";
							      }
	  }
	  ?>
 </div>
 
 
     <div class="Drink">
	 <div class="item">
      <p class="p1">ماء</p>
      <p class="p2">1.50$</p>
 </div>
 
<?php  
	  echo"<div class='item_class'>
	  <form method='post'>
	  <input type='submit' name='drink_item6' value='+'></form></div>";
	  if(isset($_POST['drink_item6']))
	  {
		  if(isset($_SESSION['date_time']))
		{
			$_date = $_SESSION['date_time'];
		}
		$sql = 'INSERT INTO alwasam_orders(name, price, description, pickup_time, cafeteria_name)  
                                  VALUES("ماء"
								  ,"1.00"
								  ,"ماء"
								  ,:_date
								  ,"كافتريا الوسام")';
							      $statement = $connection->prepare($sql);
								  $statement->execute(array(
									':_date' => $_date));
								  if($statement->rowcount())
                                  {
									
									echo "<script>alert('تم اضافة ماء الى طلبك');</script>";
									echo "<script>window.location.replace('Alwasamchechout.php')</script>";
							      }
	  }
	  ?>
 </div>
 
</div>  <!--content-->
<button><a href="yourAlwasamOrder.php">Checkout</a></button>
</div> <!--box-->

  </section>
  
</body>
</html>
