<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Projeto</title>
</head>
<body>
    <main class="container">
        <section class="logo">
            <h1>Realize o seu cadastro</h1>
            <img src="imagens/logo.jpg" width= "200px">
        </section>
        <form action="index.php" method="post">
            <label for="nome-completo">Digite o seu nome completo:</label>
            <input type="text" name="nome" id="nome-completo">
            <label for="email">Digite o seu e-mail:</label>
            <input type="email" name="email" id="email">
            <label for="senha">Digite a sua senha:</label>
            <input type="password" name="senha" id="senha">
            <label for="confirmar-senha">Confirme a sua senha:</label>
            <input type="password" name="senha" id="confirmar-senha">
            <input type="submit" value="Cadastrar">        
        </form>
    </main>

    <?php       
        session_start();
        if(isset($_SESSION['email'])){
            header('Location: ../pagina-home/index.php');
        }      

        if($_SERVER['REQUEST_METHOD']=='POST'){
            require_once '../conexao.php';

            if (!$connection) {
                die('Erro de conexão: ' . mysqli_connect_error());
            }
            
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];
    
            $sql = "SELECT * FROM usuario WHERE email = '$email';";
    
            $result = $connection->query($sql);
    
            if($result->num_rows > 0){
                echo '<script>alert("E-mail já cadastrado")</script>';   
            }else{
                $sql = "INSERT INTO `usuario` (`nome`, `email`, `senha`) VALUES ('$nome', '$email', '$senha');";
                $result = $connection->query($sql);
    
                if($result){
                    header('Location: ../pagina-login/index.php');
                }else{
                    header('index.php');
                }
            }
        }
    ?>


</body>
</html>