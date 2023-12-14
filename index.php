<?php

$cadastros = [
  [
    "nome" => "Lenício",
    "idade" => 27,
    "cidade" => "Uberlândia"
  ],
  [
    "nome" => "João",
    "idade" => 20,
    "cidade" => "Uberlândia"
  ],
  [
    "nome" => "Ana",
    "idade" => 32,
    "cidade" => "São Paulo"
  ],
  [
    "nome" => "Beatriz",
    "idade" => 24,
    "cidade" => "Rio de Janeiro"
  ],
  [
    "nome" => "Carlos",
    "idade" => 35,
    "cidade" => "Belo Horizonte"
  ],
  [
    "nome" => "Juliana",
    "idade" => 28,
    "cidade" => "Curitiba"
  ],
  [
    "nome" => "Eduardo",
    "idade" => 22,
    "cidade" => "Porto Alegre"
  ]
];


foreach ($cadastros as $cadastro) {
  echo $cadastro["cidade"] . "<br>";
}
