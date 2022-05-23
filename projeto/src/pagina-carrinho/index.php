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
        <a href="../pagina-home/">DionisioTech</a>
        <label for="pesquisa"><img src="media/lupa.png"></label>
        <input type="text" name="pesquisa" id="pesquisa" placeholder="Ex: Placa de Vídeo">
        <nav>
            <ul class="menu">
            <?php
                    session_start();
                    if(isset($_SESSION['nome'])){
                        echo 'Bem vindo, '.$_SESSION['nome'];
                    }
                    else{
                        echo '<a href="../pagina-login/">Login</a>';
                    }
                ?>
                <li><a href="/"><img src="media/user.png"></a></li>
            </ul>
            <form action="../sair.php" method="post">
                <input id="sair" type="submit" value="Sair">
            </form>
        </nav>
    </header>
    <main class="container">
        
        <ul style="margin: auto">
            <li class="finalizarLi">
                <a href="../pagina-home/"><button class="btnFinalizar">Continuar Comprando</button></a>
            </li>
            <li class="finalizarLi">
                <a href="../pagina-finaliza/"><button class="btnFinalizar">Finalizar Compra</button></a>
            </li>
        </ul>
       
        <div class="title">
            <p>       </p>
            <p>Produtos</p>
            <p>Preço Unitário</p>
            <p>Quantidade</p>
            <p>Preço total</p>
        </div>

        <?php      
        if(!isset($_SESSION)){
            session_start();
        }

        if(!isset($_SESSION['nome'])){
            header('Location: ../pagina-login/index.php');
        }
            $carrinho = $_SESSION['carrinho'];
            require_once('../conexao.php');
            $counter = 0;
            foreach($carrinho as $item){        
                $sql = "SELECT * FROM produto WHERE id = '$item'";
                $resultado = $connection->query($sql);
              
            foreach($resultado as $linha){
                $id = $linha['id'];
                $nome = $linha['nome'];
                $preco = $linha['preco'];
                
                ?>
                 <div class="test">
                    <a href="../removeProduto.php?id=<?php echo $id ?>">
                        <button style="margin-left: -30px; margin-right: -100px">Remover</button>
                    </a>
                    <label for="rogerébom">
                    <img src="../media/<?php echo $nome ?>.png" width="100px" height="100px"></label>
                    <p id="preco<?php echo $counter ?>">R$<?php echo $preco ?></p>          
                    <input id="quantidade<?php echo $counter ?>" type="number" value="1">                                                
                    <p id="precoFinal<?php echo $counter ?>">R$<?php echo $preco ?></p>
                </div>
                 
            <?php
            }  
            $counter++;      
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