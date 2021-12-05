<?php 
require_once __DIR__.'/conexao.php'; 
//session_start();

$nome = filter_input(INPUT_POST,'nome',FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_STRING);
$avaliacao = filter_input(INPUT_POST,'avaliacao',FILTER_SANITIZE_NUMBER_INT);
$comentario = filter_input(INPUT_POST,'comentario',FILTER_SANITIZE_STRING);

try {	
    //prepara a query	
    $query = $pdo->prepare(
                'INSERT INTO comentarios(nome, email, comentario, avaliacao) VALUES (:nome, :email, :comentario, :avaliacao); ' );    

    $query->bindParam(':nome', $nome);   
    $query->bindParam(':email', $email);
    $query->bindParam(':avaliacao', $avaliacao);
    $query->bindParam(':comentario',$comentario);
    $query->execute();// executa a query
    $last_id = $pdo->lastInsertId();// pega id do ultimo inserido
    

  
} catch(PDOException $e) {
    echo "<p>{$e->getMessage()}</p>";
}

header("Location: /pages/avalie-nos.php");
die();