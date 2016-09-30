<?php
/** Função que usa try catch pra abrir e fechar conexão com o banco */

mysqli_report(MYSQLI_REPORT_STRICT);

function open_database() {
	try {
		$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		return $conn;
	} catch (Exception $e) {
		echo $e->getMessage();
		return null;
	}
}
function close_database($conn) {
	try {
		mysqli_close($conn);
	} catch (Exception $e) {
		echo $e->getMessage();
	}
}


/*código abaixo para pesquisar um item de pesquisa, se não achar pelo id, puxa todos os dados associativos pelos arrays fetch_assoc e fetch_all*/

function find($table = null, $id = null){
	$database = open_database();
	$found = null;
	
	try {
		if ($id){
			 $sql = "SELECT * FROM " . $table . "WHERE id = ". $id;
			 $result = $database->query($sql);
			 if ($result->num_rows > 0){
				 $found = $result->fetch_assoc();
				 
			 }
		} 
	} catch (Exception $e){
		/** o catch exibirá o que aconteceu, caso houver erro */
		$_SESSION['message'] = $e->GetMessage();
		$_SESSION['type'] = 'danger';
	}
	
	close_database($database);
	return $found;
}

//* função abaixo chama função find sem precisar de parâmetros */

function find_all($table){
	return find($table);
	
}


/**
*  Insere um registro no BD
*/
function save($table = null, $data = null) {
  $database = open_database();
  $columns = null;
  $values = null;
  //print_r($data);
  foreach ($data as $key => $value) {
    $columns .= trim($key, "'") . ",";
    $values .= "'$value',";
  }
  // remove a ultima virgula
  $columns = rtrim($columns, ',');
  $values = rtrim($values, ',');
  
  $sql = "INSERT INTO " . $table . "($columns)" . " VALUES " . "($values);";
  try {
    $database->query($sql);
    $_SESSION['message'] = 'Registro cadastrado com sucesso.';
    $_SESSION['type'] = 'success';
  
  } catch (Exception $e) { 
  
    $_SESSION['message'] = 'Nao foi possivel realizar a operacao.';
    $_SESSION['type'] = 'danger';
  } 
  close_database($database);
}

?>