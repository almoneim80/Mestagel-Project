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

    <link rel="stylesheet" href="css/profile.css">
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

  <section class="profile_section">

<?php
if(isset($_SESSION['email']))
{

$email = $_SESSION['email'];
  $sql="select * from users where email='$email'";
  $statement=$connection->prepare($sql);
   $statement -> execute();
         foreach($statement->fetchall() as $data)           
                   {
echo'
  <div class="box">

    <div class="profileImgg">
    <img src="images/temp.png">
    </div>

    <div class="p_email">
    <p>Email</p>
    <p>'.$data['email'].'</p>
    </div>
    
<div class="p_Phone">
    <p>Phone Number</p>
    <p>'.$data['phone'].'</p>
    </div>
    
  <div class="EditBTN">
    <button name="login"><a href="#">Edit profile</a></button>
    </div>

    <div class="LogoutBTN">
    <button name="login"><a href="Logout.php">Log Out</a></button>
    </div>

    </div>
';

}
}else
{
echo'
  <div class="box">
  <div class="LogoutBTN">
    <button name="login"><a href="newAccount.php">create Account</a></button>
    </div>

    </div>';
}

?>

  </section>
</body>
</html>
