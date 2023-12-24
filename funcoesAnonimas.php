<?php
/**
* Em PHP, funções anônimas são conhecidads como "funções anônimas" ou "closures". Uma função anônima é uma função sem um nome associado.
*/

/**
 * EXEMPLO 1
 */
$mensagem = "Olá, ";

$funcaoAnonima = function($nome) use ($mensagem){
    echo $mensagem.$nome;
};

//Usando a função
$funcaoAnonima("Diego");


/**
 * EXEMPLO 2
 * Este exemlo, a função criarContador retorna uma closure que mantém o estado interno da cariável $contador. Cada vez que
 */
function criarContador(){
    $contador = 0;
    //Closure
    $funcaoContadora = function() use (&$contador){
        $contador++;
        echo "Contagem: ".$contador."<br>";
    };

    return $funcaoContadora;
}

//Usando

$contadora = criarContador();

$contadora();
$contadora();
$contadora();
$contadora();


/**
 * EXEMPLO 3
 * 
 */
$numeros = [1,2,3,4,5,6,7,8,9,10];

$numerosPares = array_filter($numeros, function($numero){
    return $numero %2 == 0;
});

$numerosDobrados = array_map(function($numero){
    return $numero * 2;
}, $numerosPares);

echo "<pre>";
print_r($numerosPares);
print_r($numerosDobrados);
echo "</pre>";


/**
 * EXEMPLO 4
 */
$soma = function($a, $b){
    return $a + $b;
};

echo $soma(44, 1284)."<br>";


/**
 * EXERCÍCIO : FAÇA UM ALGORITIMO PARA CALCULAR MÉDIA DE NOTAS DE ALUNOS CADASTRADOS EM UM ARRAY. USE CLOSURE PARA CALCULAR AS MEDIAS
 */
$notas = [6, 7, 4, 10, 8];
$notas2 = [6, 6, 7, 10, 10];

$calculaMedia = function($arrayNotas){
    $media = array_sum($arrayNotas) / count($arrayNotas);
    return "Sua média é: ".$media."<br>";
};

echo $calculaMedia($notas);
echo $calculaMedia($notas2);




