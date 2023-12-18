<?php

$host = "5ps.site";
$dbNome = "hg5pss68_vermelho";
$usuario = "hg5pss68_equipe_vermelha";
$senha = "9@J),KC^H}aP";

try {

  $pdo = new PDO("mysql:host=$host;dbname=$dbNome", $usuario, $senha);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo "Erro de conexão: " . $e->getMessage();
}
