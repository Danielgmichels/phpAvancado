<?php
//Cookies são utilizados para armazenar informações entre as requisições do usuário, o servidor envia e o navegador armazena

//sintaxe criação setcookie(nome, valor, duração, caminho)


//Criando um cookie com uma hora de validade
setcookie('usuario', 'Daniel', time() + 3600, '/');


//Ler um cookie
echo $_COOKIE['usuario'];


//Remover um cookie
setcookie('usuario', '', time() - 3600, '/');