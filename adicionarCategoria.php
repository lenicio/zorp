<?php
require "config.php";

$categoria = $_POST['categoria'];

$sql = "INSERT INTO categoria_despesa (Descrição, Ativo) VALUES (:categoria, 0)";
$sql = $pdo->prepare($sql);
$sql->bindValue(":categoria", $categoria);
$sql->execute();


header("Location: index.php");
exit;
