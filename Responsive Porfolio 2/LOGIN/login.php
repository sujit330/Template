<?php
sesion_start();
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['uname'])) {
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);
    
    if (empty($username)){
        header("Location: index.php?error=User Nmae is required");
        exit();
    }else if(empty($pass)){
        header("Location: index.php?error=password is required");
        exit();
    }else{
        $sql = "SELECT * FROM users WHERE user_name= '$uname' AND password='$ pass'";
        
        $result = mysqli_quey($conn, $sql);
        
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['user_name'] === $name && $row['password'] === $pass) {
                $_SESSION['user_name'] = $row['user_name'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];
                header("Location: home.php");
                exit();
            }else{
                header("Location: index.php?error=Incorrect User name or password");
                exit();
            }else {
                header("Location : index.php?.error=Incorrect User name or password");
            }
            else{
            header("Location: index.php?error=Password is required");
            exit();
        }
    }
    
}else{
    header("Location: index.php");
    exit();
}