<?php
date_default_timezone_set('America/Sao_Paulo');
echo date_default_timezone_get()."<br>";

$hoje = date('d/m/Y/n');
echo $hoje;

//Calculando datas
$dataAtual = date('d/m/Y');
$dataFutura = date('d/m/Y', strtotime('+ 200 hour'));
// second  hour  day  month  year

// echo "Hoje: {$dataAtual} | Daqui um ano: {$dataFutura}";

// $parcela = "";
// $diaAtual = date('d/m/Y');
// for($parc = 0; $parc < 36; $parc ++){
//     $dias = 30 * $parc;
//     $parcela .= "Parcela {$parc} Venc: ".date('d/m/Y', strtotime('+$dias day'))."<br>";
// };

// echo $parcela;

//Quantos dias faltam para determinada data
// $dataInicial = strtotime(date('Y/m/d'));
// $dataFinal = strtotime(date('2024-01-28'));
// $quantosDias = ($dataFinal - $dataAtual) / (60 * 60 * 24);

// echo "Faltam {$quantosDias} dias para o aniversário do professor";

$parcela = date('Y-m-d');

for($parc = 1; $parc <= 36; $parc++){
    $parcela = date('Y-m-d', strtotime($parcela."+30 days"));
    echo "Parcela:{$parc} Vencimento:".date('d/m/Y', strtotime($parcela))."<br>";
};