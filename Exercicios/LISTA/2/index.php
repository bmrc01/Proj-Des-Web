<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <form action="" method="get">
        <input type="text" name="login" placeholder="login">
        <input type="password" name="senha" placeholder="senha">
        <button type="submit">Login</button>
    </form>

    <?php
    if (!session_id()) {
        session_start();
        session_regenerate_id(true);
    }

    if (isset($_SESSION["usuario"])) {
        echo 'Seja bem vindo ' . $_SESSION["usuario"];
    }

    $login = isset($_GET['login']) ?  $_GET['login'] : null;
    $senha = isset($_GET['senha']) ? $_GET['senha'] : null;

    if ($login != null && $senha != null) {
        $loginFeito = false;
        switch ([$login, $senha]) {
            case ['admin', '1234']:
                $_SESSION["usuario"] = 'Administrador';
                echo "Bem vindo, $login";
                $loginFeito = true;
                break;
            case ['visit', '12345']:
                $_SESSION["usuario"] = 'Visitante';
                echo "Bem vindo, $login";
                $loginFeito = true;
                break;
            case ['colab', '123456']:
                $_SESSION["usuario"] = 'Colaborador';
                echo "Bem vindo, $login";
                $loginFeito = true;
                break;
        }


        if ($loginFeito) {
            header('location: hello.php');
        } else {
            echo "Login ou senha incorretos";
        }
    }

    ?>
</body>

</html>