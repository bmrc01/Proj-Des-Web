<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pagina-de-login.css">
    <title>Tela Inicial</title>
</head>
<body>
    <img src="imagens/logo.jpg" width="150px" height="150px" alt="logo do projeto">
    <main class="container">
        <header>
            <h1>SEJA BEM VINDO</h1>
        </header>
        <form action="index.php" method="post">
            <label for="email">Digite seu e-mail:</label>
            <input type="email" name="email" id="email-input">
            <label for="senha">Digite sua senha:</label>
            <input type="password" name="senha" id="senha-input">
            <button type="submit" id="botao-input">Acessar</button>
        </form>
        <footer>
            <p>Caso não possua login <a href="#">clique aqui</a></p>
        </footer>
    </main>

    <?php
        session_start();

        if(isset($_SESSION['nome'])) {
            header('Location: ../pagina-home/index.php');
        }
            
        if($_SERVER['REQUEST_METHOD']=='POST'){
            if(isset($_POST['email']) && isset($_POST['senha'])){ 
                $email=$_POST['email'];
                $senha=$_POST['senha'];
                
                require_once '../conexao.php';

                if (!$connection) {
                    die('Erro de conexão: ' . mysqli_connect_error());
                }
                else{              
                    $sql = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha';";
                    $result = $connection->query($sql);
                    if($result->num_rows > 0){
                        $row = $result->fetch_assoc();
                        $_SESSION['nome'] = $row['nome'];
                        $_SESSION['email'] = $row['email'];
                        header('Location: ../pagina-home/index.php');  
                    }else{
                        echo '<script>alert("E-mail ou senha incorretos")</script>';
                    }
                }    
            }
        }
?>

</body>
</html>