<?php
    
    require '../config/db.php';
    $msg = "";
    if (isset($_POST["submit"])){

        $email = $_POST['email'];
        $password = $_POST["password"];

        $result = $conn->query("SELECT * FROM users WHERE email='$email'");

        if ($result->num_rows > 0){
            $data = $result->fetch_assoc();

            if (password_verify($password, $data['password'])){
                header("Location:../dashboard.php");
                die;
            }
            else{
                $msg = "password salah";
            }
        }
        else{
            $msg = "email atau password salah";
        }
    }

    header("Location:../index.php?msg=$msg");
?>