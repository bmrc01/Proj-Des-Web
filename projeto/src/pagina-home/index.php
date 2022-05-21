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
        <h1>Produtos</h1>
        <section class="flex">

            <?php
            if(isset($_SESSION)){
                session_start();
            }
            
            require_once('../conexao.php');
            $sql = "SELECT * FROM produto";
            $resultado = $connection->query($sql);
            
            foreach($resultado as $linha){
                $id = $linha['id'];
                $nome = $linha['nome'];
                $preco = $linha['preco'];

                ?>
                <div class="img-container">
                    <a href='../adicionaProduto.php?id=<?php echo $id ?>'><img src="../media/<?php echo $nome; ?>.png"></a>
                    <p><?php echo $nome; ?></p>
                    <p><?php echo $preco; ?></p>
                </div>
                <div class="img-container">
                    <a href='../adicionaProduto.php?id=<?php echo $id ?>'><img src="../media/<?php echo $nome; ?>.png"></a>
                    <p><?php echo $nome; ?></p>
                    <p><?php echo $preco; ?></p>
                </div>
                <div class="img-container">
                    <a href='../adicionaProduto.php?id=<?php echo $id ?>'><img src="../media/<?php echo $nome; ?>.png"></a>
                    <p><?php echo $nome; ?></p>
                    <p><?php echo $preco; ?></p>
                </div>
                <div class="img-container">
                    <a href='../adicionaProduto.php?id=<?php echo $id ?>'><img src="../media/<?php echo $nome; ?>.png"></a>
                    <p><?php echo $nome; ?></p>
                    <p><?php echo $preco; ?></p>
                </div>
                <div class="img-container">
                    <a href='../adicionaProduto.php?id=<?php echo $id ?>'><img src="../media/<?php echo $nome; ?>.png"></a>
                    <p><?php echo $nome; ?></p>
                    <p><?php echo $preco; ?></p>
                </div>
                <div class="img-container">
                    <a href='../adicionaProduto.php?id=<?php echo $id ?>'><img src="../media/<?php echo $nome; ?>.png"></a>
                    <p><?php echo $nome; ?></p>
                    <p><?php echo $preco; ?></p>
                </div>

            <?php
            }
            ?>
                  
        </section>
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

    <?php
    if(isset($_SESSION)){
session_start();
}

    ?>


</body>

</html>