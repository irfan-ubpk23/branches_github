<?php

    require '../config/db.php';
    
    $msg = "";

    if (isset($_POST["submit"])){

        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm = $_POST['confirmpass'];

        if ($confirm != $password){
            $msg = "password tidak sesuai";
            header("Location:../register.php?msg=$msg");
            die;
        }

        $usedemail = $conn->query("select email from users where email='$email'");
        if ($usedemail->num_rows > 0){
            $msg = "email sudah digunakan";
            header("Location:../register.php?msg=$msg");
            die;
        }

        $password = password_hash($password, PASSWORD_DEFAULT);
        $created_at = date('Y-m-d H:i:s', time());

        $users = $conn->query("insert into users (name, email, password, created_at) values ('$name', '$email', '$password', '$created_at')");

        header("Location:../dashboard.php");

    }

?>