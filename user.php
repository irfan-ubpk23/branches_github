<?php
    session_start();

    if (isset($_SESSION['role']) and $_SESSION['role'] == 'admin'){
        header("Location:dashboard.php");
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
        <?php if (isset($_SESSION['name'])) { ?>
            <h1 class="text-center">Halo user bernama <?= $_SESSION['name'] ?></h1>
            <a href="backend/logout.php">logout</a>
        <?php } else { ?>
            <h1 class="text-center">Belum Login</h1>
            <a href="index.php">login</a>
        <?php }?>
    </div>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>