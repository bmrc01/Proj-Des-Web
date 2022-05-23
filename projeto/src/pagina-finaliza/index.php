<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DionisioTech</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <p>Seu pedido foi finalizado com sucesso!</p>
    <p>Em breve você receberá um e-mail com os detalhes da compra.</p>
    <p>Agradecemos a preferência.</p>
    <a href="../pagina-home/">
        <button>Voltar à pagina principal</button>
    </a>


<?php
if(!isset($_SESSION)){
    session_start();
}

$_SESSION['carrinho'] = [];

?>

</body>
</html>