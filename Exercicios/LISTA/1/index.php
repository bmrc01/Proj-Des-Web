<html>

<head>
  <title>Apostila PHP Progressivo</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <form action="" method="get">
    Nome do Aluno: <input type="text" name="nome" /><br>
    Nota 1: <input type="text" name="nota1" /><br />
    Nota 2: <input type="text" name="nota2" /><br />
    Nota 3: <input type="text" name="nota3" /><br />
    <input type="submit" name="submit" value="Calcular Media" id="botao" />
  </form>
  <?php
  $nota1 = $_GET['nota1'];
  $nota2 = $_GET['nota2'];
  $nota3 = $_GET['nota3'];
  $nome = $_GET['nome'];
  $media = ($nota1 + $nota2 + $nota3) / 3;

  echo "Média: $media <br />";
  if ($media < 7)
    echo "$nome, você foi Reprovado";
  else
    echo "$nome, você foi Aprovado";
  ?>
</body>

</html>