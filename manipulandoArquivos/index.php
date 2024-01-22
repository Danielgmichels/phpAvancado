<?php
/**
 * Mas por que manipular arquivos bia PHP?
 * A princípio, Vc pode usar a manipulação de arquivos para várias coisas tais como:
 * 
 * Fazer um gerenciador de arquivos remoto;
 * Editar um arquivo .css remotamente em um sistema gerenciador de conteúdo qualquer;
 * Salvar informaç~es de acesso em uum arquibo de log;
 * Criar um contador para seu site.
 * 
 * Sintaxe: fopen(nomeArquivo, modo);
 * * nome: O nome do arquivo pode conter o caminho absoluto onde você deseja criar o seu arquivo. Por exemplo, 'www/entra21/phpAvancado/manipulandoArquivos/arquivo.txt'.
 * 
 * Modo: O modo indica as permissões de acesso para o arquivo que foi criado. Por exemplo, ele pode ser criado apenas para leitura (consulta de dados) ou para escrita e leitura.
 * 
 * As permissões estão listadas no arquivo permissoes.html
 */

$arquivo = 'hello.txt';
//Abrir ou criar o arquivo
/*$handle = fopen($arquivo, 'a');*/

/*if($handle){
    //Escrever algo no arquivo
    fwrite($handle, 'Olá mundo 3'.PHP_EOL);

    //Fechar o arquivo
    fclose($handle);
}*/

//Ler o arquivo
/*$conteudo = file_get_contents($arquivo);
echo $conteudo;*/



//Gerar um arquivo nom lista de pessoas
$dados = [
    "Maria",
    "João",
    "Lorena",
    "Davi",
    "Cristiane"
];

$arquivo = 'pessoas.txt';
$path = __DIR__.'/../arquivos/';

$handle = fopen($path.$arquivo, 'w');

if($handle){
    foreach($dados as $ln){
        fwrite($handle, $ln.PHP_EOL);
    }

    fclose($handle);
}

//Ler os dados
$handle = fopen($path.$arquivo, 'r');
while(!feof($handle)){
    echo fgets($handle)."<br>";
}




