<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="bg-primary">
    <div class="card w-50 mx-auto mt-5">
        <div class="card-header">
            <h1 class="card-text text-center">Register</h1>
        </div>
        <div class="card-body">
            <form action="backend/register.php" method="POST">
                <label for="username">Username : </label>
                <input class="form-control" type="text" id="username" name="username">
                <br>
                <label for="email">Email : </label>
                <input class="form-control" type="email" id="email" name="email">
                <br>
                <label for="password">Password : </label>
                <input class="form-control" type="password" id="password" name="password">
                <br>
                <label for="confirmpass">Confirm Password : </label>
                <input class="form-control" type="password" id="confirmpass" name="confirmpass">
                <br>
                <div class="w-100">
                    <Button class="btn btn-primary w-50 mx-auto d-block" type="submit" name="submit">Register</Button>
                    <a href="index.php" class="text-center d-block w-100">Login</a>
                </div>
            </form>
        </div>
    </div>    
</body>
</html>
<?php if (isset($_GET['msg'])) { ?>
<script>
    alert('<?=$_GET["msg"]?>');
</script>
<?php } ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>