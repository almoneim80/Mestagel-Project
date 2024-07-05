<?php
require 'connection.php';                 
session_start();
if (isset ($_POST['sign']))
{   
      $A_phone =valid_input($_POST['phone']);
      $A_email =valid_input($_POST['email']);
    
     if (empty($A_phone))
               echo "<script>alert('الرجاء ادخال رقم الهاتف');</script>";
    
             elseif(empty($A_email))
        echo "<script>alert('الرجاء ادخال عنوان البريدالالكتروني');</script>";

 else
    {
     $sql = 'INSERT INTO users(email, phone) 
                           VALUES(:A_email, :A_phone)';
			   
      $statement = $connection->prepare($sql);
        
      $statement->execute(array(
	  ':A_phone' => $_POST['phone'],
	  ':A_email' => $_POST['email']));
      
          if($statement->rowcount())
          {
				$_SESSION['email']=$_POST['email'];
                echo "<script>alert('تم انشاء الحساب');</script>";
                echo "<script>window.location.replace('index.php')</script>";
          }
      
        else
            echo "<script>alert('هناك خطأ');</script>";
 }
      
     
  }


function valid_input($data){                     // validation function
  $data=trim($data);
  $data=stripcslashes($data);
  $data=htmlspecialchars($data);
  return $data;
}
 ?>




<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>مستعجل</title>

    <link rel="stylesheet" href="css/newAccount.css">
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
  
  
<section class="newAccount_section">
  <form method="post" class="form">
<div class="sign_form">
					  
					  <label >البريد الالكتروني</label>
                      <input type="email" name="email"  placeholder="ادخل عنوان بريدك الالكتروني" autocomplete="on" >
					  
					  <label>رقم الهاتف</label>
                      <input type="number" name="phone"  placeholder="رقم الهاتف" autocomplete="on" >
                      </select>
					  
					  <button class="main-button-sign" name="sign">تسجيل</button>
</div>
</form>
	</section>	

  </body>

</html>
