<?php
//Semelhante aos cookies as sessões são utilizadas para armazenar informações, porém ficam salvas no servidor

//Sempre ativar o gerenciador de sessões
session_start();

//Definindo uma sessão
$_SESSION['usuario'] = 'Diego';

//Ler uma sessão
echo $_SESSION['usuario'];

//Destruindo uma sessão
unset($_SESSION['usuario']);

//Destruindo todas as sessões
session_destroy();

/**Em PHP, a validade de uma sessão é ontrolada por meio da configuração do tempo de expiração da sessão; O tempo de expiração da sessão pode ser ajustado por meio da config do parâmetro session.gc_maxlifetime no arquivo de config do PHP (php.ini) ou por meio de códifo no script PHP.
 * 
 * A função session_set_cookie_params() também pode ser usada para config o tempo de expiração da sessão. Aqui está um exemplo de como você pode ajustar a validade de uma sessão:
 * 
 * o tempo padrão geralmente é 15min
 */

session_set_cookie_params(3600);