<?php

    require './../config/db.php';

    $msg = "";

    if(isset($_POST['submit'])) {
        $name = $_POST['name'];
        $price = $_POST['price'];
        $image = $_FILES['image']['name'];
        $tempImage = $_FILES['image']['tmp_name'];

        $randomFilename = time().'-'.md5(rand()).'-'.$image;

        $uploadPath = __DIR__ . "/../upload/" . $randomFilename;

        $upload = move_uploaded_file($tempImage,$uploadPath);

        if($upload) {
            $conn->query("INSERT INTO products (name,price,image)
                        VALUES ('$name','$price','/upload/$randomFilename')");
            $msg = "berhasil upload";
        } else {
            $msg = "gagal upload";
        }

    }

    header("Location:../dashboard.php?msg=$msg")

?>