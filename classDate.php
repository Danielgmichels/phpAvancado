<?php
$agora = new DateTime('now', new DateTimeZone('America/Sao_Paulo'));
// echo $agora->format('d/m/Y H:i:s')."<br>";

//Exibir o dia de ontem
$ontem = new DateTime('+30 days');
// echo $ontem->format('d/m/Y')."<br>";

// echo "<pre>";
// var_dump($agora);
// echo "</pre>";


//Adicionando um intervalo
//Periodo 1 Day
$agora->add(new DateInterval('P1D'));
// echo $agora->format('d/m/Y');


//Diferença entre duas datas
$dataInicio = new DateTime();
$dataFinal = new DateTime('2024-01-25');

$resultado = $dataInicio->diff($dataFinal);
// % indica um placeholder - da pra usar todos os comuns
/**
 * ou modificadores específicos.
 * %a: Número total de dias, independentemente de outros componentes no intervalo.
 * %R: Exibe o sinal do intervalo (+ ou -).
 * %y: Número de anos (ignorando meses e dias).
 * %M: Número de meses (ignorando anos e dias).
 * %D: Número de dias (ignorando anos e meses).
*/

// echo $resultado->format('%R %a dias %m meses %y anos');
// var_dump($resultado);


//Exibir data por extenso
$hoje = new DateTime();
//FULL serve para exibir a data por extenso
//NONE para não exibir a hora
$formato = new IntlDateFormatter('pt_BR', IntlDateFormatter::FULL, IntlDateFormatter::FULL, new DateTimeZone('America/Sao_Paulo'));
// echo $formato->format($hoje);



//Gerador de parcelas
$parcela = new DateTime();

for($parc=1; $parc <= 36; $parc++){
    $parcela->add(new DateInterval('P30D'));
    echo "Parcela: {$parc} Vencimento: {$parcela->format('d/m/Y')} <br>";
}

