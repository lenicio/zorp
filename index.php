<?php
require "config.php";

$sql = "SELECT * FROM categoria_despesa";
$sql = $pdo->prepare($sql);
$sql->execute();
$dados = $sql->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <form action="adicionarCategoria.php" method="POST">
    <label for="categoria">Insira uma nova categoria: </label>
    <input type="text" id="categoria" name="categoria" required>
    <button type="submit">Adicionar</button>
  </form>

  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Descrição</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($dados as $dado) : ?>
        <tr>
          <td><?= $dado['id'] ?></td>
          <td><?= $dado['descrição']; ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</body>

</html>