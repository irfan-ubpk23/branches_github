<?php
    if(isset($_POST["username"]) && isset($_POST["password"])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        if ($username == "admin" && $password == "admin123"){
            header("Location:../dashboard.php");
        }
        else{
            echo "email atau password salah";
        }
    }
?>