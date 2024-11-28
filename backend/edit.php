<?php
    require '../config/db.php';

    $id = $_GET['id'];

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $price = $_POST['price'];
        $image = $_POST['image']; // Jika ingin mengubah gambar juga

        // Update data produk
        $conn->query("UPDATE products SET name='$name', price='$price', image='$image' WHERE id=$id");

        // Redirect ke halaman data produk
        header("Location:../dashboard.php");
        exit();
    }

    header("Location: ../edit.php?id=$id");
?>