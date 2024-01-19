<?php
//Controla a diretiva de erros do PHP
//
//E_ALL - exibe todos os erros
//E_ERROR - exibe apenas erros/ não exibe fatal  warning
//E_PARSE - exibe apenas parse
//E_NOTICE - exibe apenas notificação de alerta (não é um erro de fato)
//E_WARNING - exibe apenas notificação de alerta (não é um erro de fato)
//& ~EXCETO
error_reporting(E_ALL);

// $teste;
// echo $teste;


///Usando try para tratar erros
// try {
//     //Código que pode gerar um erro
//     $resultado = 10 / 0;
// } catch (Error $e) {
//     //Mostra o erro gerado
//     echo "Erro: ".$e->getMessage();
// }finally{
//     //executa o código mesmo com erro
// }



try {
    $pdo = new PDO('mysql:host=localhost;dbname=entra21', 'root', 'root');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erro de conexão ao banco.";
}



//Criar classe de tratamento de erros

class MinhaExcessao extends Exception{
    public function errorMessage(){
        return "Erro tratado pela classe".$this->errorMessage();
    }
}

//Usando a classe de erro

function dividir($v1, $v2){
    if($v2 == 0){
        throw new MinhaExcessao("Divisão por zero não permitida.");
    }
}

//Usando o tratamento
try{
    echo dividir(100, 0);
}catch(MinhaExcessao $e){
    
    // $file = str_replace('C:/laragon/www/phpAvancado/', '', $e->getFile());

    $file = explode('\\', $e->getFile());
    print_r($file);
    
    echo "Erro: ".$e->getMessage()."<br>";
    echo "
    Arquivo: {$file[count($file)-1]}<br>
    Linha: {$e->getLine()}<br>
    ";
}