<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="get">
        <a href="sair.php">sair</a>
    </form>
    <?php

    session_start();
    if (isset($_SESSION["usuario"])) {
        echo 'Seja bem vindo ' . $_SESSION["usuario"];
    } else {
        header('location: index.php');
    }

    ?>
</body>

</html>