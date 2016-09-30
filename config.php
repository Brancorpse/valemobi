<?php 
/**definição de nome, usuário e senha do banco de dados*/

define('DB_NAME', 'store');
define('DB_USER', 'root');
define('DB_PASSWORD', '');

/**definição do host do mysql*/

define('DB_HOST', 'localhost');

/** caminho absoluto para a pasta do sistema **/

if (!defined ('ABSPATH'))
	define('ABSPATH', dirname(__FILE__) . '/');


/** definição do caminho do server para o sistema **/

if (!defined('BASEURL'))
	define('BASEURL', '/app-teste/');

/** caminho para o arquivo do banco de dados */

 if (!defined ('DBAPI'))
	 define('DBAPI', ABSPATH . 'inc/database.php');
 
 define('HEADER_TEMPLATE', ABSPATH . 'inc/header.php');
 define('FOOTER_TEMPLATE', ABSPATH . 'inc/footer.php');
 

?>


