<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['theater_owner_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>theater owner page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
<div class="container">

<div class="content">
   <h3>Hi, <span>Theater Owner</span></h3>
   <h1>Welcome <span><?php echo $_SESSION['theater_owner_name'] ?></span></h1>
   <p>This is an theater owner page</p>
   <a href="admin/login1.php" class="btn">Login</a>
   <a href="logout.php" class="btn">Logout</a>
</div>

</div>

</body>
</html>