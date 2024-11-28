<?php
    session_start();

    if (! isset($_SESSION['role']) or $_SESSION['role'] == 'user'){
        header('Location:index.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="bg-secondary-subtle">
    <div class="container shadow pb-5 pt-5 bg-white">

        <h1 class="text-center">Selamat datang <?= $_SESSION['name'] ?></h1>
        <a href="backend/logout.php">logout</a>
        <br>
        <a href="dashboard.php" class="btn btn-primary">Kembali <</a>
        <h5 class="mt-2">Tambah Produk</h5>
        <div class="h-50 mx-5">
            <form action="./backend/create.php" method="post" enctype="multipart/form-data">
                <input class="form-control my-2 mt-3" type="text" name="name" placeholder="input nama produk">
                <input class="form-control my-2" type="number" name="price" placeholder="input harga produk">
                <input class="form-control my-2" type="file" name="image" >
                <div class="w-100">
                    <button class="btn btn-primary mx-auto px-5 d-block" type="submit" name="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>