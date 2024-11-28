<?php
    session_start();

    require '../config/db.php';
    $msg = "";

    if (isset($_POST["submit"])){

        $email = $_POST['email'];
        $password = $_POST["password"];

        $result = $conn->query("SELECT * FROM users WHERE email='$email'");

        if ($result->num_rows > 0){
            $data = $result->fetch_assoc();

            if (password_verify($password, $data['password'])){
                $_SESSION['name'] = $data['name'];
                $_SESSION['role'] = $data['role'];

                if ($data['role'] == 'admin'){
                    header("Location:../dashboard.php");
                } else{
                    header("Location:../user.php");
                }
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