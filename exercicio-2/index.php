<?php

//1) Crie um array
$numero = [];

//2) Popule este array com 7 números
for ($x = 0; $x <= 6; $x++) {
    array_push($numero, random_int(1, 100));
}
var_dump($numero);
echo "<br>";

//3) Imprima o número da posição 3 do array
echo $numero[3] . "<br>";

//4) Crie uma variável com todas as posições do array no formato de string separado por vírgula
$numeroSeparadoPorVirgula = implode(', ', $numero);
echo $numeroSeparadoPorVirgula;

//5) Crie um novo array a partir da variável no formato de string que foi criada e destrua o array anterior
$novoArray = explode(",", $numeroSeparadoPorVirgula);
echo "<br>";
var_dump($novoArray);
echo "<br>";
unset($numero);

//6) Crie uma condição para verificar se existe o valor 14 no array
if (isset($novoArray[14])) {
    echo "existe a posição 14 no array";
} else {
    echo "não existe a posição 14 no array";
}
echo "<br>";

/* 7) Faça uma busca em cada posição. Se o número da posição atual for menor que o
da posição anterior (valor anterior que não foi excluído do array ainda), exclua esta posição */
for ($i = 0; $i < sizeof($novoArray); $i++) {
    $valorAnterior = current($novoArray);
    $valorAtual = next($novoArray);

    if ($valorAtual < $valorAnterior && !is_null($valorAtual)){
        unset($novoArray[key($novoArray)]);
    }
}

echo "<br>";
var_dump($novoArray);

//8) Remova a última posição deste array
array_pop($novoArray);
echo "<br>";

//9) Conte quantos elementos tem neste array
var_dump(sizeof($novoArray));
echo "<br>";

//10) Inverta as posições deste array
var_dump(array_reverse($novoArray));
