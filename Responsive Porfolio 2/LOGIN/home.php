<?php
session_start();

if (isset($_SESSION['id']) && isset ($_SESSION['user_name'])) {
    
    


?>

<!DOCTYPE html>

<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width", intial-scale="1.0">
        <title>Contact us</title>
<!---------------# ICON - LINK #----------------->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
        
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>        
<!---------------# CSS - LINK #----------------->
<link rel="stylesheet" href="css/style.css">
</head>
    
    
    <body>
        <h1>Hello, <? php echo $_SESSION['name']; ?></h1>
        <a href="logout.php">Logout</a>
    </body>
</html>

<?php

}else{
   header("Location: index.php");
              exit();
    
}
?>












