<?php
require_once __DIR__.'/../../configuracoes.php'; 

try {
    $pdo = new PDO(DB_HOST, DB_USUARIO, DB_SENHA);
    //a linha abaixo é necessaria PHP<8.0 para retornar erros de conexão 
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    echo $e->getMessage();
}
