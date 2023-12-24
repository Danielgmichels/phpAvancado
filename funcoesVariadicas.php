<?php
/**
 * * Funções variádicas permitem que você defina funções queaceitam um número variável de argumentos. No PHP, vocêpode usar O operador ... (ponto de reticências) paraindicar que uma função aceita um número variável deargumentos. Isso é útil quando você não sabe quantosargumentos a função receberá antecipadamente.
 */

/**
 * EXEMPLO 1
 * 
 */

function soma(...$numeros){
    $resultado = 0;
    foreach($numeros as $numero){
        $resultado += $numero;
    }

    return $resultado;
}

//Usando
echo soma(10, 20, 30, 40);

/**
 * EXEMPLO 2
 */

function exemplo2($arg1, $arg2, ...$resto){
    echo $arg1."<br>";
    echo $arg2."<br>";
    foreach($resto as $r){
        echo $r."<br>";
    }
}

//Usando
exemplo2("Diego", "João", "Carne", "Cerveja", "Torresmo");


/**
 * EXEMPLO 3 - Parametros nomeados
 */

function nomeados(...$p){
    foreach($p as $chave => $valor){
        echo "{$chave}: {$valor}<br>";
    }
}

//Usando
nomeados(Diego: 38, Maria: 45, Daniel: 17, Davi: 17);


/**
 * EXEMPLO 4 - Calcular média de alunos
 */

function calculaMedia($aluno, ...$notas){
    echo "Aluno: {$aluno}<br>";
    echo "Média: ".array_sum($notas) / count($notas)."<br>";
}

calculaMedia("Daniel", 10, 5, 9, 9);


/**
 * EXERCÍCIO - CRIE UMA FUNÇÃO QUE MOSTRE O MENOR E MAIOR NUMERO CONTIDO NO PARAMETRO VARIADICO
 */

function maxMin(...$array){
    echo "Maior número do array é: ".max($array)."<br>";
    echo "Menor número do array é: ".min($array)."<br>";
}

MaxMin(10, 1, 40, 70, 22, 111);