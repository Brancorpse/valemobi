<?php
/** importação do arquivo deconfiguração e da camada de acesso ao banco */
require_once('../config.php');
require_once(DBAPI);

/** A primeira variável guardará todos os registros, a segunda, uma em específico */

$merchandises = null;
$merchandise = null;

/** Abaixo, faremos a listagem de clientes */

function index(){
	
	global $merchandises;
	$merchandises = find_all('merchandises');
	
}

function add(){
	if (!empty($_POST['merchandise'])) {
		
		$today = 
		date_create('now', new DateTimeZone('America/Sao_Paulo'));
		$merchandise = $_POST['merchandise'];
		$merchandise['modified'] = $merchandise['created'] = $today->format("Y-m-d H:i:s");
		
		save('merchandises', $merchandise);
		header('location: index.php');
		
	}
}

?>


