<?php

/**
 * Sql injection são formas de inserir comandos sql por entradas no software
 * 
 * Formas de entrada:
 * $_GET
 * $_POST
*/

/**
 * COMANDOS SQL INJECTION
 * 
 * ' OR '1=1 --
 * " OR "1=1 --
 */

if(isset($_POST['usuario'])){

    $pdo = new PDO('mysql:host=localhost;dbname=entra21', 'root', '');

    //Proteção sql Injection pitoresca--Não usar--
    // $usuario = preg_replace('/[^a-zA-Z0-9]/', '', $_POST['usuario']);
    // $senha = preg_replace('/[^a-zA-Z0-9]/', '', $_POST['senha']);

    $login = $pdo->prepare("SELECT * FROM seg_usuarios WHERE user= :usuario AND password= :senha");
    $login->bindValue(':usuario', $_POST['usuario']);
    $login->bindValue(':senha', $_POST['senha']);
    $login->execute();
    $resultado = $login->fetchAll(PDO::FETCH_ASSOC);

    var_dump($resultado);
}
