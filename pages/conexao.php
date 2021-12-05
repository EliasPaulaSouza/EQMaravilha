<?php
const DB_HOST = 'mysql:host=localhost:3306;dbname=eqmaravilha_db';
const DB_USUARIO = 'root';
const DB_SENHA = '';

try {
    $pdo = new PDO(DB_HOST, DB_USUARIO, DB_SENHA);
    //a linha abaixo é necessaria PHP<8.0 para retornar erros de conexão 
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    echo $e->getMessage();
}
