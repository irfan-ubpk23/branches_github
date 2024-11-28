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

        <h1 class="text-center">Selamat datang admin</h1>
        <br>
        <div class="mx-2 my-2 row row-cols-2 align-items-center">
            <div class="col">
                <h5 class="">Data produk</h1>
            </div>    
            <div class="col">
                <a href="create.php" class="btn btn-primary">tambah</a>
            </div>
        </div>
        <table class="table border">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama produk</th>
                    <th>harga</th>
                    <th>gambar produk</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody class="bg-secondary">
                <?php
                    require './config/db.php';

                    $products = $conn->query("SELECT * FROM products");
                    $no = 1;

                    while($row = $products->fetch_assoc()) {
                ?>
                    <tr>
                        <td><?=$no++;?></td>
                        <td><?=$row['name'];?></td>
                        <td><?=$row['price'];?></td>
                        <!-- <td><img src="<?=$row['image'];?>" width="100"></td> -->
                        <td><a href="./<?=$row['image'];?>" target="_blank">unduh</a></td>
                        <td>
                            <a href="edit.php?id=<?=$row['id'];?>">Edit</a>
                            <a href="backend/delete.php?id=<?=$row['id'];?>">Hapus</a>

                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>
<?php if (isset($_GET['msg'])) { ?>
<script>
    alert('<?=$_GET["msg"]?>');
</script>
<?php } ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>