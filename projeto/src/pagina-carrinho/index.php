<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="./style.css" />
    <title>Projeto</title>
  </head>
  <body>
    <header class="header">
        <img src="media/icon.png" id="imagem-logo">
        <a href="/">DionisioTech</a>
        <label for="pesquisa"><img src="media/lupa.png"></label>
        <input type="text" name="pesquisa" id="pesquisa" placeholder="Ex: Placa de Vídeo">
        <nav>
            <ul class="menu">
                <li>Bem vindo, cliente!</li>
                <li><a href="/"><img src="media/user.png"></a></li>
            </ul>
            <form action="../sair.php" method="post">
                <input type="submit" value="Sair">
            </form>
        </nav>
    </header>
    <main class="container">
        <div class="title">
            <p>       </p>
            <p>Produtos</p>
            <p>Preço Unitário</p>
            <p>Quantidade</p>
            <p>Preço total</p>
        </div>

        <?php      
        session_start();

        if(!isset($_SESSION['nome'])){
            header('Location: ../pagina-login/index.php');
        }
            $carrinho = $_SESSION['carrinho'];
            require_once('../conexao.php');
            foreach($carrinho as $item){        
                $sql = "SELECT * FROM produto WHERE id = '$item'";
                $resultado = $connection->query($sql);

                $counter = 0;
            foreach($resultado as $linha){
                $id = $linha['id'];
                $nome = $linha['nome'];
                $preco = $linha['preco'];
                
                ?>
                 <div class="test">
                    <input type="checkbox" name="rogerébom" id="rogerébom">
                    <label for="rogerébom">
                    <img src="../media/<?php echo $nome ?>.png" width="100px" height="100px"></label>
                    <p id="preco">R$<?php echo $preco ?></p>          
                    <input id="quantidade" type="number" value="1">                                                
                    <p id="precoFinal">R$<?php echo $preco ?></p>
                </div>
                 
            <?php
            }           
        }
    ?>      
    </main>
    <footer>
        <ul id="footer-icones">
            <li><a href="#"><img src="media/twitter.png"></a></li>
            <li><a href="#"><img src="media/instagram.png"></a></li>
            <li><a href="#"><img src="media/facebook.png"></a></li>
        </ul>
        <ul id="creditos">
            <li>DionisioTech@gmail.com</li>
            <li>Telefone: 11 99999-9999</li>
            <li>© 2022</li>
        </ul>
    </footer>
  </body>

  <script src="script.js"></script>
</html>