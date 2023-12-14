<?php

if (!empty($_GET['nome']) && !empty($_GET['idade'])) {
  $nome = $_GET['nome'];
  $idade = intval($_GET['idade']);

  if ($idade >= 18) {
    echo $nome . " Eh maior de idade!";
  } else {
    echo $nome . " Eh menor de idade!";
    echo "Qualquer Alteração!";
  }
}


?>

<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <title>Página Inicial</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <h1>Página Inicial</h1>
  <form method="get" action="">
    <label for="nome">Informe o seu nome: </label>
    <input type="text" name="nome" id="nome" required>
    <br>
    <label for="idade">Informe sua idade: </label>
    <input type="number" name="idade" id="idade" required>
    <br>
    <button type="submit">Enviar</button>
  </form>

</body>

</html>