<?php 
session_start();
if (!isset($_SESSION['logado'])) {
  header("Location: /"); 
  die();
}


require_once __DIR__.'/conexao.php'; 
//session_start();

$id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_STRING);
$situacao = filter_input(INPUT_GET,'situacao',FILTER_SANITIZE_STRING);
//var_dump($situacao);
//die();
if($situacao=='Publicar'){
    $situacao = 1;
}else{
    $situacao = 0;
}

try {	
    //prepara a query	
    $query = $pdo->prepare(
                'UPDATE comentarios SET situacao = :situacao WHERE id = :id' );    

    $query->bindParam(':id', $id);   
    $query->bindParam(':situacao', $situacao);   
 
    $query->execute();// executa a query
    $last_id = $pdo->lastInsertId();// pega id do ultimo inserido
    

  
} catch(PDOException $e) {
    echo "<p>{$e->getMessage()}</p>";
}

header("Location: /pages/area_restrita.php");
die();