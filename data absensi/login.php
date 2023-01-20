<?php

include("connection.php");

if(isset($_POST['login'])) {
    $user_id =$_POST['user_id'];
    $password =$_POST['password'];

    $sql = "SELECT * FROM users WHERE user_id=$user_id AND password='$password'";
    $result = $db->query($sql);
    
    if($result->num_rows > 0) {
        while($data = $result->fetch_assoc()) {
           header("location:dashboard/index.php?message=selamat datang di
           sistem absensi sederhana");
        }

    }else {
        echo "Login gagal";
    }
    
}

?>